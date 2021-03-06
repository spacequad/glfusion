<?php
// +--------------------------------------------------------------------------+
// | Forum Plugin for glFusion CMS                                            |
// +--------------------------------------------------------------------------+
// | ajaxbookmark.php                                                         |
// |                                                                          |
// | AJAX Server update functions for bookmark feature                        |
// +--------------------------------------------------------------------------+
// | Copyright (C) 2008-2013 by the following authors:                        |
// |                                                                          |
// | Mark R. Evans          mark AT glfusion DOT org                          |
// |                                                                          |
// | Copyright (C) 2000-2008 by the following authors:                        |
// |                                                                          |
// | Authors: Blaine Lang       - blaine AT portalparts DOT com               |
// |                              www.portalparts.com                         |
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

require_once '../lib-common.php';

if (!in_array('forum', $_PLUGINS)) {
    exit;
}

USES_forum_functions();
USES_forum_format();

$id = isset($_GET['id']) ? COM_applyFilter($_GET['id'],true) : 0;

if (!COM_isAnonUser() && $id != 0) {
    if (DB_count($_TABLES['ff_bookmarks'],array('uid','topic_id'),array((int)$_USER['uid'],(int)$id))) {
        $bookmarkimg = '<img src="'._ff_getImage('star_off_sm').'" title="'.$LANG_GF02['msg203'].'" alt="' . $LANG_GF02['msg203'] .'" />';
        DB_query("DELETE FROM {$_TABLES['ff_bookmarks']} WHERE uid=".(int) $_USER['uid']." AND topic_id=".(int)$id);
    } elseif (DB_count($_TABLES['ff_bookmarks'],array('uid','pid'),array($_USER['uid'],$id))) {
        $bookmarkimg = '<img src="'._ff_getImage('star_off_sm').'" title="'.$LANG_GF02['msg203'].'" alt="'.$LANG_GF02['msg203'].'"/>';
        DB_query("DELETE FROM {$_TABLES['ff_bookmarks']} WHERE uid=".(int) $_USER['uid']." AND pid=".(int)$id);
    } else {
        $bookmarkimg = '<img src="'._ff_getImage('star_on_sm').'" title="'.$LANG_GF02['msg204'].'">';
        $pid = DB_getItem($_TABLES['ff_topic'],'pid',"id=".(int) $id);
        DB_query("INSERT INTO {$_TABLES['ff_bookmarks']} (uid,topic_id,pid) VALUES (".(int) $_USER['uid'].",".(int)$id.",".(int)$pid.")");
    }
    $html = '<a href="#" onclick="ajax_toggleForumBookmark('.$id.');return false;">'.$bookmarkimg.'</a>';
    $html = htmlentities ($html);

    $retval = "<result>";
    $retval .= "<topic>$id</topic>";
    $retval .= "<html>$html</html>";
    $retval .= "</result>";

    header("Cache-Control: no-store, no-cache, must-revalidate");
    header("content-type: text/xml");

    print $retval;
}
?>