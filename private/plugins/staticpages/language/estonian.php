<?php
###############################################################################
# estonian.php
# This is the estonian language page for the glFusion Static Page Plug-in
#
# Copyright (C) 2001 Tony Bibbs
# tony@tonybibbs.com
#
# Estonian translation by Artur R�pp <rtr AT planet DOT ee>
#
# This program is free software; you can redistribute it and/or
# modify it under the terms of the GNU General Public License
# as published by the Free Software Foundation; either version 2
# of the License, or (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
#
###############################################################################

if (!defined ('GVERSION')) {
    die ('This file cannot be used on its own.');
}

global $LANG32;

###############################################################################
# Array Format:
# $LANGXX[YY]:  $LANG - variable name
#               XX    - file id number
#               YY    - phrase id number
###############################################################################

$LANG_STATIC = array(
    'newpage' => 'Uus leht',
    'adminhome' => 'Admin avaleht',
    'staticpages' => 'Staatilised lehed',
    'staticpageeditor' => 'Staatiliste lehtede toimetaja',
    'writtenby' => 'Kirjutas',
    'date' => 'Uuendatud',
    'title' => 'Tiitel',
    'content' => 'Sisu',
    'hits' => 'Klikke',
    'staticpagelist' => 'Staatiliste lehtede nimekiri',
    'url' => 'URL',
    'edit' => 'Toimeta',
    'lastupdated' => 'Uuendatud',
    'pageformat' => 'Lehe kujundus',
    'leftrightblocks' => 'vasak- ja paremblokid',
    'blankpage' => 't�hi leht',
    'noblocks' => 'blokkideta',
    'leftblocks' => 'Vasakblokid',
    'rightblocks' => 'Right Blocks',
    'addtomenu' => 'Lisa men��sse',
    'label' => 'Silt',
    'nopages' => 'S�steemis pole veel staatilisi lehti',
    'save' => 'salvesta',
    'preview' => 'eelvaade',
    'delete' => 'kustuta',
    'cancel' => 't�hista',
    'access_denied' => 'Ligip��s t�kestatud',
    'access_denied_msg' => 'Sa proovisid ilma vastavate �igusteta ligi p��seda �hele staatiliste lehtede administreerimislehtedest. Pane t�hele, et k�ik sellised katsed logitakse.',
    'all_html_allowed' => 'Kogu HTML on lubatud',
    'results' => 'Staatiliste lehtede tulemus',
    'author' => 'Autor',
    'no_title_or_content' => 'Sa pead t�itma v�hemalt <b>tiitli</b> ja <b>sisu</b> v�ljad.',
    'no_such_page_anon' => 'Palun logi sisse...',
    'no_page_access_msg' => "P�hjuseks v�ib olla, et sa pole veel sisse loginud v�i pole veel {$_CONF['site_name']} lehe registreerunud kasutaja. Palun <a href=\"{$_CONF['site_url']}/users.php?mode=new\"> registreeru {$_CONF['site_name']} lehe kasutajaks.</a> Registreerumine annab sulle k�ik lehe liikme ligip��su�igused.",
    'php_msg' => 'PHP: ',
    'php_warn' => 'Hoiatus! Selle valiku sissel�litamisel k�ivitatakse lehel olevad PHP k�sud. Kasuta ettevaatusega!',
    'exit_msg' => 'Tagastuse t��p',
    'exit_info' => 'Kasuta logimism�rkuste jaoks. Tavalise lehe kasutus- ja turvateadete jaoks j�ta m�rge tegemata.',
    'deny_msg' => 'Ligip��s sellele lehele on t�kestatud. V�imalik, et  see leht on kas kustutatud v�i �mbernimetatud v�i pole sul piisavalt �igusi.',
    'stats_headline' => 'Staatiliste lehtede top 10',
    'stats_page_title' => 'Lehe tiitel',
    'stats_hits' => 'Klikke',
    'stats_no_hits' => 'N�ib, et saidil pole �htegi staatilist lehte v�i mitte keegi pole neid vaadanud.',
    'id' => 'ID',
    'duplicate_id' => 'Sisestatud staatilise lehe ID on juba kasutuses. Vali teine ID.',
    'instructions' => 'Staatilise lehe toimetamiseks v�i kustutamiseks kl�psa allpool staatilise lehe juures olevat toimetamisikooni. Staatilise lehe vaatamiseks kl�psa selle tiitlil. Uue loomiseks kl�psa "Tee uus" �lal. Olemasolevast staatilisest lehest koopia tegemiseks kl�psa kopeerimisikooni.',
    'centerblock' => 'Keskblokk: ',
    'centerblock_msg' => 'Kui m�rgitud, n�idatakse seda staatilist lehte indeks lehel keskblokina.',
    'topic' => 'Rubriik: ',
    'position' => 'Asukoht: ',
    'all_topics' => 'K�ik',
    'no_topic' => 'Ainult avaleht',
    'position_top' => 'Lehe �laservas',
    'position_feat' => 'Peale pealugu',
    'position_bottom' => 'Lehe allservas',
    'position_entire' => 'Kogu leht',
    'position_nonews' => 'Only if No Other News',
    'head_centerblock' => 'Keskblokk',
    'centerblock_no' => 'Ei',
    'centerblock_top' => '�lal',
    'centerblock_feat' => 'Pealugu',
    'centerblock_bottom' => 'All',
    'centerblock_entire' => 'Kogu',
    'centerblock_nonews' => 'If No News',
    'inblock_msg' => 'Blokina:',
    'inblock_info' => 'Paiguta staatiline leht blokki.',
    'title_edit' => 'Toimeta lehte',
    'title_copy' => 'Tee lehest koopia',
    'title_display' => 'N�ita leht',
    'select_php_none' => '�ra k�ivita PHP',
    'select_php_return' => 'k�ivita PHP (return)',
    'select_php_free' => 'k�ivita PHP',
    'php_not_activated' => "Staatilistel lehtedel pole PHP kasutamine sisse l�litatud. T�psemat infot palun vaata <a href=\"{$_CONF['site_url']}/docs/staticpages.html#php\">dokumentatsioonist.</a>",
    'printable_format' => 'Prinditaval kujul',
    'copy' => 'Koopia',
    'limit_results' => 'Piira tulemused',
    'search' => 'Otsi',
    'submit' => 'Sisesta',
    'delete_confirm' => 'Are you sure you want to delete this page?',
    'allnhp_topics' => 'All Topics (No Homepage)',
    'page_list' => 'Page List',
    'instructions_edit' => 'This screen allows you to create / edit a new static page. Pages can contain PHP code and HTML code.',
    'attributes' => 'Attributes',
    'preview_help' => 'Select the <b>Preview</b> button to refresh the preview display',
    'page_saved' => 'Page has been successfully saved.'
);
###############################################################################
# autotag descriptions

$LANG_SP_AUTOTAG = array(
    'desc_staticpage' => 'Link: to a staticpage on this site; link_text defaults to staticpage title. usage: [staticpage:<i>page_id</i> {link_text}]',
    'desc_staticpage_content' => 'HTML: renders the content of a staticpage.  usage: [staticpage_content:<i>page_id</i>]'
);


$PLG_staticpages_MESSAGE19 = '';
$PLG_staticpages_MESSAGE20 = '';

// Messages for the plugin upgrade
$PLG_staticpages_MESSAGE3001 = 'Plugina uuendamine pole toetatud.';
$PLG_staticpages_MESSAGE3002 = $LANG32[9];

// Localization of the Admin Configuration UI
$LANG_configsections['staticpages'] = array(
    'label' => 'Staatilised lehed',
    'title' => 'Staatiliste lehtede h��lestamine'
);

$LANG_confignames['staticpages'] = array(
    'allow_php' => 'Luba PHP?',
    'sort_by' => 'Keskblokkide sorteerimisalus',
    'sort_menu_by' => 'Men��elementide sorteerimisalus',
    'delete_pages' => 'Kustuta lehed, omanikuks?',
    'in_block' => 'Paiguta lehed blokki?',
    'show_hits' => 'N�ita klike?',
    'show_date' => 'N�ita aega?',
    'filter_html' => 'Filtreeri HTML-i?',
    'censor' => 'Tsenseeri sisu?',
    'default_permissions' => 'Lehe vaikimisi �igused',
    'aftersave' => 'P�rast lehe salvestamist',
    'atom_max_items' => 'Maks. lehti veebiteenuste l�imes',
    'comment_code' => 'Comment Default',
    'include_search' => 'Site Search Default',
    'status_flag' => 'Default Page Mode'
);

$LANG_configsubgroups['staticpages'] = array(
    'sg_main' => 'Peaseaded'
);

$LANG_fs['staticpages'] = array(
    'fs_main' => 'Staatiliste  lehtede peaseadistused',
    'fs_permissions' => 'Vaikimisi �igused'
);

// Note: entries 0, 1, 9, and 12 are the same as in $LANG_configselects['Core']
$LANG_configselects['staticpages'] = array(
    0 => array('True' => 1, 'False' => 0),
    1 => array('True' => true, 'False' => false),
    2 => array('Date' => 'date', 'Page ID' => 'id', 'Title' => 'title'),
    3 => array('Date' => 'date', 'Page ID' => 'id', 'Title' => 'title', 'Label' => 'label'),
    9 => array('Forward to page' => 'item', 'Display List' => 'list', 'Display Home' => 'home', 'Display Admin' => 'admin'),
    12 => array('No access' => 0, 'Read-Only' => 2, 'Read-Write' => 3),
    13 => array('Enabled' => 1, 'Disabled' => 0),
    17 => array('Comments Enabled' => 0, 'Comments Disabled' => -1)
);

?>