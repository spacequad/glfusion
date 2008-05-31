<?php
// +--------------------------------------------------------------------------+
// | Site Tailor Plugin                                                       |
// +--------------------------------------------------------------------------+
// | $Id:                                                                    $|
// +--------------------------------------------------------------------------+
// | Copyright (C) 2008 by the following authors:                             |
// |                                                                          |
// | Mark R. Evans              - mark at gllabs.org                          |
// +--------------------------------------------------------------------------+
// |                                                                          |
// | If you translate this file, please consider uploading a copy at          |
// |    http://www.gllabs.org so others can benefit from your                 |
// |    translation.  Thank you!                                              |
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

$LANG_ST00 = array (
    'menulabel'         => 'Site Tailor',
    'plugin'            => 'sitetailor',
    'access_denied'     => 'Access Denied',
    'access_denied_msg' => 'You do not have the proper security privilege to access to this page.  Your user name and IP have been recorded.',
    'admin'             => 'Site Tailor Administration',
    'install_header'    => 'Site Tailor Install/Uninstall',
    'installed'         => 'Site Tailor is Installed',
    'uninstalled'       => 'Site Tailor is Not Installed',
    'install_success'   => 'Site Tailor Plugin has successfully been installed.<br' . XHTML . '><br' . XHTML . '>Please review the system documentation and also visit the  <a href="%s">administration section</a> to ensure your settings correctly match the hosting environment.',
    'install_failed'    => 'Installation Failed -- See your error log to find out why.',
    'uninstall_msg'     => 'Plugin Successfully Uninstalled',
    'install'           => 'Install',
    'uninstall'         => 'UnInstall',
    'warning'           => 'Warning! Plugin is still Enabled',
    'enabled'           => 'Disable plugin before uninstalling.',
    'readme'            => 'Site Tailor Plugin Installation',
    'installdoc'        => "<a href=\"{$_CONF['site_admin_url']}/plugins/sitetailor/install_doc.html\">Install Document</a>",
    'thank_you'         => 'Thank you for upgrading to the latest release of Site Tailor. Please double check your System Configuration Options, there are many new features in this release that you may need to configure.',
    'support'           => 'For support, questions or enhancement requests, please visit <a href="http://www.gllabs.org">gl Labs</a>.  For the latest documentation, please visist the <a href="http://www.gllabs.org/wiki/">gl Labs Wiki</a>.',
    'success_upgrade'   => 'Site Tailor Successfully Upgraded',
    'template_cache'    => 'Template Cache Library Installed',
    'env_check'         => 'Environment Check',
    'gl_version_error'  => 'Site Tailor version is not v1.5.0 or higher',
    'gl_version_ok'     => 'Site Tailor version is v1.5.0 or higher',
    'tc_error'          => 'Caching Template Library is not installed',
    'tc_ok'             => 'Caching Template Library is installed',
    'ml_error'          => 'php.ini <strong>memory_limit</strong> is less than 48M.',
    'ml_ok'             => 'php.ini <strong>memory_limit</strong> is 48M or greater.',
    'recheck_env'       => 'Recheck Environment',
    'fix_install'       => 'Please fix the issues above before installing.',
    'need_cache'        => 'Site Tailor requires that you have the <a href="http://www.gllabs.org/filemgmt/index.php?id=156">Caching Template Library Enhancement</a> installed.  Please download and install the library.',
    'need_memory'       => 'Site Tailor recommends that you have at least 48M of memory configured for the <strong>memory_limit</strong> setting in php.ini.',
    'thank_you'         => 'Thank you for upgrading to the latest release of Site Tailor. Please double check your System Configuration Options, there are many new features in this release that you may need to configure.',
    'support'           => 'For support, questions or enhancement requests, please visit <a href="http://www.gllabs.org">gl Labs</a>.  For the latest documentation, please visist the <a href="http://www.gllabs.org/wiki/">Site Tailor Wiki</a>.',
    'success_upgrade'   => 'Site Tailor Successfully Upgraded',
    'overview'          => 'Site Tailor is a required Site Tailor CMS plugin that provides site customization options.',
    'preinstall_check'  => 'Site Tailor has the following requirements:',
    'geeklog_check'     => 'Site Tailor v1.5.0 or greater, version reported is <b>%s</b>.',
    'php_check'         => 'PHP v4.3.0 or greater, version reported is <b>%s</b>.',
    'preinstall_confirm' => "For full details on installing Site Tailor, please refer to the <a href=\"{$_CONF['site_admin_url']}/plugins/sitetailor/install_doc.html\">Installation Manual</a>.",
);

$LANG_ST01 = array (
    'logo_options'      => 'Site Tailor Logo Options',
    'use_graphic_logo'  => 'Use Graphic Logo',
    'use_text_logo'     => 'Use Text Logo',
    'display_site_slogan'   => 'Display Site Slogan',
    'upload_logo'       => 'Upload New Logo',
    'current_logo'      => 'Current Logo',
    'no_logo_graphic'   => 'No Logo Graphic available',
    'logo_help'         => 'Uploaded graphic logo images are not resized, the standard size for Site Tailor logo is 100 pixels tall by 580 pixels wide',
    'save'              => 'Save',
    'create_element'    => 'Create Menu Element',
    'add_new'           => 'Add New Menu Item',
    'menu_list'         => 'Menu Listing',
    'configuration'     => 'Configuration',
    'edit_element'      => 'Edit Menu Item',
    'menu_element'      => 'Menu Element',
    'enabled'           => 'Enabled',
    'edit'              => 'Edit',
    'delete'            => 'Delete',
    'move_up'           => 'Move Up',
    'move_down'         => 'Move Down',
    'order'             => 'Order',
    'id'                => 'ID',
    'parent'            => 'Parent',
    'label'             => 'Label',
    'display_after'     => 'Display After',
    'type'              => 'Type',
    'url'               => 'URL',
    'php'               => 'PHP Function',
    'coretype'          => 'Geeklog Menu',
    'group'             => 'Group',
    'permission'        => 'Visible To',
    'active'            => 'Active',
    'top_level'         => 'Top Level Menu',
    'confirm_delete'    => 'Are you sure you want to delete this menu item?',
    'type_submenu'      => 'Sub Menu',
    'type_url_same'     => 'Parent Window',
    'type_url_new'      => 'New Window with navigation',
    'type_url_new_nn'   => 'New Window without navigation',
    'type_core'         => 'Geeklog Menu',
    'type_php'          => 'PHP Function',
    'gl_user_menu'      => 'User Menu',
    'gl_admin_menu'     => 'Admin Menu',
    'gl_topics_menu'    => 'Topics Menu',
    'gl_sp_menu'        => 'Static Pages Menu',
    'gl_plugin_menu'    => 'Plugin Menu',
    'gl_header_menu'    => 'Header Menu',
    'plugins'           => 'Plugin',
    'static_pages'      => 'Static Pages',
    'geeklog_function'  => 'Geeklog Function',
    'save'              => 'Save',
    'cancel'            => 'Cancel',
    'action'            => 'Action',
    'first_position'    => 'First Position',
    'info'              => 'Info',
    'non-logged-in'     => 'Non Logged-In Users Only',
    'target'            => 'URL Window',
    'same_window'       => 'Same Window',
    'new_window'        => 'New Window',
    'menu_color_options'    => 'Menu Color Options',
    'top_menu_bg'       => 'Top Menu BG',
    'top_menu_hover'    => 'Top Menu Hover',
    'top_menu_text'     => 'Top Menu Text',
    'top_menu_text_hover'   => 'Top Menu Text Hover / Sub Menu Text',
    'sub_menu_text_hover'   => 'Sub Menu Text Hover',
    'sub_menu_bg'           => 'Sub Menu BG',
    'sub_menu_highlight'    => 'Sub Menu Highlight',
    'sub_menu_shadow'       => 'Sub Menu Shadow',
);



$LANG_ST_TYPES = array(
    1                   => 'Sub Menu',
    2                   => 'Geeklog Action',
    3                   => 'Geeklog Menu',
    4                   => 'Plugin',
    5                   => 'Static Page',
    6                   => 'External URL',
    7                   => 'PHP Function',
);


$LANG_ST_TARGET = array(
    1                   => 'Parent Window',
    2                   => 'New Window with navigation',
    3                   => 'New Window without navigation',
);

$LANG_ST_GLFUNCTION = array(
    0                   => 'Home',
    1                   => 'Contribute',
    2                   => 'Directory',
    3                   => 'Preferences',
    4                   => 'Search',
    5                   => 'Site Stats',
);

$LANG_ST_GLTYPES = array(
    1                   => 'User Menu',
    2                   => 'Admin Menu',
    3                   => 'Topics Menu',
    4                   => 'Static Pages Menu',
    5                   => 'Plugin Menu',
    6                   => 'Header Menu',
);

$PLG_sitetailor_MESSAGE1 = 'Site Tailor Logo Options Successfully Saved.';
$PLG_sitetailor_MESSAGE2 = 'Uploaded logo was not a JPG, GIF, or PNG image.';
$PLG_sitetailor_MESSAGE3 = 'Logo exceeds the maximum allowed height or width.';
?>