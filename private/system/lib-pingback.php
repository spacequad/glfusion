<?php
// +--------------------------------------------------------------------------+
// | glFusion CMS                                                             |
// +--------------------------------------------------------------------------+
// | lib-pingback.php                                                         |
// |                                                                          |
// | Functions needed to handle pingbacks.                                    |
// +--------------------------------------------------------------------------+
// |                                                                          |
// | Copyright (C) 2005-2008 by the following authors:                        |
// |                                                                          |
// | Author: Dirk Haun - dirk AT haun-online DOT de                           |
// +--------------------------------------------------------------------------+
// |                                                                          |
// | This program is free software; you can redistribute it and/or            |
// | modify it under the terms of the GNU General Public License              |
// | as published by the Free Software Foundation; either version 2           |
// | of the License, or (at your option) any later version.                   |
// |                                                                          |
// | This program is distributed in the hope that it will be useful,          |
// | but WITHOUT ANY WARRANTY; without even the implied warranty of           |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            |
// | GNU General Public License for more details.                             |
// |                                                                          |
// | You should have received a copy of the GNU General Public License        |
// | along with this program; if not, write to the Free Software Foundation,  |
// | Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.          |
// |                                                                          |
// +--------------------------------------------------------------------------+

if (!defined ('GVERSION')) {
    die ('This file can not be used on its own!');
}

require_once $_CONF['path'] . 'lib/http/http.php';

// PEAR class to handle XML-RPC
require_once 'XML/RPC.php';

/**
 * Get the Pingback URL for a given URL
 *
 * @param    string $url URL to get the Pingback URL for
 * @return   string          Pingback URL or empty string
 */
function PNB_getPingbackUrl($url)
{
    $retval = '';

    $http = new http_class;
    $http->timeout=0;
    $http->data_timeout=0;
    $http->debug=0;
    $http->html_debug=0;
    $http->user_agent = 'glFusion/' . GVERSION;

    $error = $http->GetRequestArguments($url,$arguments);
    $error = $http->Open($arguments);
    $error = $http->SendRequest($arguments);
    if ( $error == "" ) {
        $http->ReadReplyHeaders($headers);
        if ( isset($headers['x-pingback'])) {
            $retval = $headers['x-pingback'];
        } else {
            COM_errorLog("Pingback (HEAD): unable to locate x-pingback header");
        }
    } else {
        COM_errorLog('Pingback (HEAD): ' . $error);
        return false;
    }

    if (empty($retval)) {
        // search for <link rel="pingback">
        $http = new http_class;
        $http->timeout=0;
        $http->data_timeout=0;
        $http->debug=0;
        $http->html_debug=0;
        $http->user_agent = 'glFusion/' . GVERSION;

        $error = $http->GetRequestArguments($url,$arguments);
        $error = $http->Open($arguments);
        $error = $http->SendRequest($arguments);
        if ( $error == "" ) {
            $http->ReadReplyHeaders($headers);
            if ( $http->response_status == 200 ) {
                $error = $http->ReadWholeReplyBody($body);
                if ( $error != "" && strlen($body) ===0 ) {
                    COM_errorLog("Pingback (GET): unable to retrieve response body");
                    return false;
                }
            } else {
                COM_errorLog("Pingback (GET): Got HTTP response code ".$http->response_status." when requesting ".$url);
                return false;
            }
        } else {
            COM_errorLog("Pingback (GET): " . $error . " when requesting ".$url);
            return false;
        }

        // only search for the first match - it doesn't make sense to have
        // more than one pingback URL
        $found = preg_match("/<link rel=\"pingback\"[^>]*href=[\"']([^\"']*)[\"'][^>]*>/i", $body, $matches);
        if (($found === 1) && !empty($matches[1])) {
            $url = str_replace('&amp;', '&', $matches[1]);
            $retval = urldecode($url);
        }
    }

    return $retval;
}

/**
 * Send a Pingback
 *
 * @param    string $sourceURI URL of an entry on our site
 * @param    string $targetURI an entry on someone else's site
 * @return   string              empty string on success or error message
 */
function PNB_sendPingback($sourceURI, $targetURI)
{
    global $LANG_TRB;

    $retval = '';

    $pingback = PNB_getPingbackUrl($targetURI);
    if (empty ($pingback)) {
        return $LANG_TRB['no_pingback_url'];
    }

    $parts = parse_url($pingback);
    if (empty ($parts['port'])) {
        if (strcasecmp($parts['scheme'], 'https') == 0) {
            $parts['port'] = 443;
        } else {
            $parts['port'] = 80;
        }
    }
    if (!empty ($parts['query'])) {
        $parts['path'] .= '?' . $parts['query'];
    }

    $client = new XML_RPC_Client ($parts['path'], $parts['host'], $parts['port']);
    //$client->setDebug (1);

    $msg = new XML_RPC_Message ('pingback.ping',
        array(new XML_RPC_Value ($sourceURI, 'string'),
            new XML_RPC_Value ($targetURI, 'string')));

    $response = $client->send($msg, 0, $parts['scheme']);
    if (!is_object($response) && ($response == 0)) {
        $retval = $client->errstring;
    } else if ($response->faultCode() != 0) {
        $retval = $response->faultString();
    }

    return $retval;
}

/**
 * Send a standard ping to a weblog directory service
 * The "classic" ping, originally invented for weblogs.com
 *
 * @param    string $url        URL to ping
 * @param    string $blogname   name of our site
 * @param    string $blogurl    URL of our site
 * @param    string $changedurl URL of the changed / new entry
 * @return   string                  empty string on success of error message
 */
function PNB_sendPing($url, $blogname, $blogurl, $changedurl)
{
    $retval = '';

    $parts = parse_url($url);
    if (empty ($parts['port'])) {
        if (strcasecmp($parts['scheme'], 'https') == 0) {
            $parts['port'] = 443;
        } else {
            $parts['port'] = 80;
        }
    }
    $client = new XML_RPC_Client ($parts['path'], $parts['host'], $parts['port']);
    //$client->setDebug (1);

    $msg = new XML_RPC_Message ('weblogUpdates.ping',
        array(new XML_RPC_Value ($blogname, 'string'),
            new XML_RPC_Value ($blogurl, 'string'),
            new XML_RPC_Value ($changedurl, 'string')));

    $response = $client->send($msg, 0, $parts['scheme']);

    if (!is_object($response) && ($response == 0)) {
        $retval = $client->errstring;
    } else if ($response->faultCode() != 0) {
        $retval = $response->faultString();
    }

    return $retval;
}

/**
 * Send an extended ping to a weblog directory service
 * Supported e.g. by blo.gs
 *
 * @param    string $url        URL to ping
 * @param    string $blogname   name of our site
 * @param    string $blogurl    URL of our site
 * @param    string $changedurl URL of the changed / new entry
 * @param    string $feedurl    URL of a feed for our site
 * @return   string                  empty string on success of error message
 */
function PNB_sendExtendedPing($url, $blogname, $blogurl, $changedurl, $feedurl)
{
    $parts = parse_url($url);
    if (empty ($parts['port'])) {
        if (strcasecmp($parts['scheme'], 'https') == 0) {
            $parts['port'] = 443;
        } else {
            $parts['port'] = 80;
        }
    }
    $client = new XML_RPC_Client ($parts['path'], $parts['host'], $parts['port']);
    //$client->setDebug (1);

    $msg = new XML_RPC_Message ('weblogUpdates.extendedPing',
        array(new XML_RPC_Value ($blogname, 'string'),
            new XML_RPC_Value ($blogurl, 'string'),
            new XML_RPC_Value ($changedurl, 'string'),
            new XML_RPC_Value ($feedurl, 'string')));

    $response = $client->send($msg, 0, $parts['scheme']);
    if (!is_object($response) && ($response == 0)) {
        $retval = $client->errstring;
    } else if ($response->faultCode() != 0) {
        $retval = $response->faultString();
    }

    return $retval;
}

/**
 * Create an excerpt from some piece of HTML containing a given URL
 * This somewhat convoluted piece of code will extract the text around a
 * given link located somewhere in the given piece of HTML. It returns
 * the actual link text plus some of the text before and after the link.
 * NOTE:     Returns an empty string when $url is not found in $html.
 *
 * @param    string $html The piece of HTML to search through
 * @param    string $url  URL that should be contained in $html somewhere
 * @param    int    $xlen Max. length of excerpt (default: 255 characters)
 * @return   string          Extract: The link text and some surrounding text
 */
function PNB_makeExcerpt($html, $url, $xlen = 255)
{
    $retval = '';

    // the excerpt will come out as
    // [...] before linktext after [...]
    $fill_start = '[...] ';
    $fill_end = ' [...]';

    $f1len = utf8_strlen($fill_start);
    $f2len = utf8_strlen($fill_end);

    // extract all links
    preg_match_all("/<a[^>]*href=[\"']([^\"']*)[\"'][^>]*>(.*?)<\/a>/i",
        $html, $matches);

    $before = '';
    $after = '';
    $linktext = '';
    $num_matches = count($matches[0]);
    for ($i = 0; $i < $num_matches; $i++) {
        if ($matches[1][$i] == $url) {
            $pos = utf8_strpos($html, $matches[0][$i]);
            $before = strip_tags(utf8_substr($html, 0, $pos));

            $pos += utf8_strlen($matches[0][$i]);
            $after = strip_tags(utf8_substr($html, $pos));

            $linktext = COM_getTextContent($matches[2][$i]);
            break;
        }
    }

    $tlen = utf8_strlen($linktext);
    if ($tlen >= $xlen) {
        // Special case: The actual link text is already longer (or as long) as
        // requested. We don't use the "fillers" here but only return the
        // (shortened) link text itself.
        if ($tlen > $xlen) {
            $retval = utf8_substr($linktext, 0, $xlen - 3) . '...';
        } else {
            $retval = $linktext;
        }
    } else {
        if (!empty($before)) {
            $tlen++;
        }
        if (!empty($after)) {
            $tlen++;
        }

        // make "before" and "after" text have equal length
        $rest = ($xlen - $tlen) / 2;

        // format "before" text
        $blen = utf8_strlen($before);
        if ($blen < $rest) {
            // if "before" text is too short, make "after" text longer
            $rest += ($rest - $blen);
            $retval .= $before;
        } else if ($blen > $rest) {
            $work = utf8_substr($before, -($rest * 2));
            $w = explode(' ', $work);
            array_shift($w); // drop first word, as it's probably truncated
            $w = array_reverse($w);

            $fill = $rest - $f1len;
            $b = '';
            foreach ($w as $word) {
                if (utf8_strlen($b) + utf8_strlen($word) + 1 > $fill) {
                    break;
                }
                $b = $word . ' ' . $b;
            }
            $b = trim($b);

            $retval .= $fill_start . $b;

            $blen = utf8_strlen($b);
            if ($blen < $fill) {
                $rest += ($fill - $blen);
            }
        }

        // actual link text
        if (!empty($before)) {
            $retval .= ' ';
        }
        $retval .= $linktext;
        if (!empty($after)) {
            $retval .= ' ';
        }

        // format "after" text
        if (!empty($after)) {
            $alen = utf8_strlen($after);
            if ($alen > $rest) {
                $work = utf8_substr($after, 0, ($rest * 2));
                $w = explode(' ', $work);
                array_pop($w); // drop last word, as it's probably truncated

                $fill = $rest - $f2len;
                $a = '';
                foreach ($w as $word) {
                    if (utf8_strlen($a) + utf8_strlen($word) + 1 > $fill) {
                        break;
                    }
                    $a .= $word . ' ';
                }
                $retval .= trim($a) . $fill_end;
            }
        }
    }

    return $retval;
}
?>