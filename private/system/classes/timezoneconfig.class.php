<?php
// +--------------------------------------------------------------------------+
// | glFusion CMS                                                             |
// +--------------------------------------------------------------------------+
// | timezoneconfig.class.php                                                 |
// |                                                                          |
// | Helper class for time zone handling                                      |
// +--------------------------------------------------------------------------+
// | $Id::                                                                   $|
// +--------------------------------------------------------------------------+
// | Based on the Geeklog CMS                                                 |
// | Copyright (C) 2009 by the following authors:                             |
// |                                                                          |
// | Authors: Dirk Haun             - dirk AT haun-online DOT de              |
// | based on earlier work by Oliver Spiesshofer, Yew Loong, and others       |
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

/**
* glFusion Time Zone Config class
*
* A collection of static methods dealing with time zone handling.
*
*
* @author Dirk Haun, dirk AT haun-online DOT de
*
*/
class TimeZoneConfig {

    /**
    * Set the system's timezone
    *
    * @param    string  $tz     timezone to set; use $_CONF['timezone'] if empty
    * @return   void
    * @static
    *
    */
    function setSystemTimeZone($tz = '')
    {
        global $_CONF;

        static $system_timezone = '';

        if (empty($tz) && !empty($_CONF['timezone'])) {
            $tz = $_CONF['timezone'];
        }

        if (! empty($tz)) {
            if ($tz != $system_timezone) {
                if (function_exists('date_default_timezone_set')) {
                    if (! @date_default_timezone_set($tz)) {
                        date_default_timezone_set('UTC');
                        COM_errorLog("Timezone '$tz' not valid - using 'UTC' instead", 1);
                        $system_timezone = 'UTC';
                    } else {
                        $system_timezone = $tz;
                    }
                } elseif (!ini_get('safe_mode') && function_exists('putenv')) {
                    // aka "Timezone Hack"
                    putenv('TZ=' . $tz);
                    $system_timezone = $tz;
                }
            }
        } elseif (function_exists('date_default_timezone_get')) {
            // this is not ideal but will stop PHP 5.3.0ff from complaining ...
            $system_timezone = @date_default_timezone_get();
            date_default_timezone_set($system_timezone);
        }
    }

    /**
    * Set the user's preferred timezone
    *
    * Note that it does nothing if $_CONF['timezone'] is empty, i.e. if no
    * system timezone is defined, we don't set a user timezone either.
    *
    * @return void
    * @static
    *
    */
    function setUserTimeZone()
    {
        global $_CONF;

        if (! empty($_CONF['timezone'])) {
            $tz = TimeZoneConfig::getUserTimeZone();
            if (! empty($tz)) {
                TimeZoneConfig::setSystemTimeZone($tz);
            }
        }
    }

    /**
    * Get the user's preferred timezone
    *
    * @return   string  name of the timezone
    * @static
    *
    */
    function getUserTimeZone()
    {
        global $_CONF, $_USER;

        // handle like the theme cookie, i.e. use if user is not logged in
        if (isset($_COOKIE[$_CONF['cookie_tzid']]) && empty($_USER['tzid'])) {
            $_USER['tzid'] = $_COOKIE[$_CONF['cookie_tzid']];
        }

        if (! empty($_USER['tzid'])) {
            $timezone = $_USER['tzid'];
        } elseif (! empty($_CONF['timezone'])) {
            $timezone = $_CONF['timezone'];
        } elseif (function_exists('date_default_timezone_get')) {
            $timezone = @date_default_timezone_get();
        } else {
            require_once 'Date/TimeZone.php';

            $tz_obj = Date_TimeZone::getDefault();
            $timezone = $tz_obj->id;
        }

        return $timezone;
    }

    /**
    * Provide a dropdown menu of the available timezones
    *
    * @param    string  $selected   (optional) currently selected timezone
    * @param    array   $attributes (optional) extra attributes for select tag
    * @return   string              HTML for the dropdown
    * @static
    *
    */
    function getTimeZoneDropDown($selected = '', $attributes = array())
    {
        $timezones = TimeZoneConfig::listAvailableTimeZones();

        $selection = '<select';
        foreach ($attributes as $name => $value) {
            $selection .= sprintf(' %s="%s"', $name, $value);
        }
        $selection .= '>' . LB;

        foreach ($timezones as $tzid => $tzdisplay) {
            $selection .= '<option value="' . $tzid . '"';
            if (!empty($selected) && ($selected == $tzid)) {
                $selection .= ' selected="selected"';
            }
            $selection .= ">$tzdisplay</option>" . LB;
        }
        $selection .= '</select>';

        return $selection;
    }

    /**
    * Provide a list of available timezones
    *
    * @return   array   array of (timezone-short-name, timezone-long-name) pairs
    * @static
    *
    */
    function listAvailableTimeZones()
    {
        $timezones = array();

        // use only timezones that contain one of these
        $useonly = array('Africa', 'America', 'Antarctica', 'Arctic', 'Asia',
                         'Atlantic', 'Australia', 'Europe', 'Indian', 'Pacific',
                         'UTC');

        require_once 'Date/TimeZone.php';

        $T = $GLOBALS['_DATE_TIMEZONE_DATA'];

        foreach ($T as $tzid => $tDetails) {
            $tzcheck = explode('/', $tzid);
            if (! in_array($tzcheck[0], $useonly)) {
                continue;
            }
            if (!empty($tzcheck[1]) &&
                    (strpos($tzcheck[1], 'Riyadh') === 0)) {
                continue;
            }

            $tzcode = str_replace('_', ' ', $tzid);
            $tzcode = htmlspecialchars($tzcode);
            $hours = $tDetails['offset'] / (3600 * 1000);
            $hours = ((int) ($hours * 100) / 100);
            if ($hours > 0) {
                $hours = "+$hours";
            }

            $formattedTimezone = "$hours, {$tDetails['shortname']} ($tzcode)";
            $timezones[$tzid] = $formattedTimezone;
        }

        uasort($timezones, array('TimeZoneConfig', '_sort_by_timezone'));

        return $timezones;
    }

    /**
    * Helper method: Sort timezone entries
    *
    * @param    string  $tz1    first timezone
    * @param    string  $tz2    second timezone
    * @return   int             0: equal, <0: first<second, >0: first>second
    * @static
    * @access   private
    *
    */
    function _sort_by_timezone($tz1, $tz2)
    {
        $p1 = explode(',', $tz1);
        $p2 = explode(',', $tz2);

        // compare offsets
        $o1 = $p1[0];
        $o2 = $p2[0];
        if ($o1 != $o2) {
            return ($o1 < $o2 ? -1 : 1);
        }

        // drop offset, pop timezone name, then add it to the end again
        array_shift($p1);
        $tz1 = trim(implode(',', $p1));
        $p1 = explode(' ', $tz1);
        $x1 = array_shift($p1);
        $p1[] = $x1;
        $tz1 = implode(' ', $p1);

        array_shift($p2);
        $tz2 = trim(implode(',', $p2));
        $p2 = explode(' ', $tz2);
        $x2 = array_shift($p2);
        $p2[] = $x2;
        $tz2 = implode(' ', $p2);

        return strcmp($tz1, $tz2);
    }

}

?>