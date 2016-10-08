<?php
// +--------------------------------------------------------------------------+
// | glFusion CMS                                                             |
// +--------------------------------------------------------------------------+
// | bulgarian.php                                                            |
// |                                                                          |
// | Bulgarian language file for the glFusion installation script             |
// +--------------------------------------------------------------------------+
// | Copyright (C) 2008-2009 by the following authors:                        |
// |                                                                          |
// | Mark R. Evans          mark AT glfusion DOT org                          |
// |                                                                          |
// | Copyright (C) 2000-2008 by the following authors:                        |
// |                                                                          |
// | Authors: Tony Bibbs        - tony AT tonybibbs DOT com                   |
// |          Mark Limburg      - mlimburg AT users DOT sourceforge DOT net   |
// |          Jason Whittenburg - jwhitten AT securitygeeks DOT com           |
// |          Dirk Haun         - dirk AT haun-online DOT de                  |
// |          Randy Kolenko     - randy AT nextide DOT ca                     |
// |          Matt West         - matt AT mattdanger DOT net                  |
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
    die ('This file cannot be used on its own.');
}

// +---------------------------------------------------------------------------+

$LANG_CHARSET = 'windows-1251';

// +---------------------------------------------------------------------------+
// install.php

$LANG_INSTALL = array(
    'back_to_top' => '��� ������',
    'calendar' => '�������� Plugin?',
    'calendar_desc' => '����� ������������ �������� / ���� � �������� ��� ���������� �� �� ������� �������,��������� �� ����������.',
    'connection_settings' => '��������� �� ��������',
    'content_plugins' => '��������� �� ������������',
    'copyright' => '<a href="http://www.glfusion.org" target="_blank">glFusion</a> � ��������� ������� � � ������ ��� ������� �� <a href="http://www.gnu.org/licenses/gpl-2.0.txt" target="_blank">GNU/GPL v2.0 License.</a>',
    'core_upgrade_error' => '������ ��� ���� �� ����������.',
    'correct_perms' => '���� ��������� ���������� ���������� ������. ������ ����� ����������, ����������� <b>Recheck</b> ������ �� �� ����������.',
    'current' => '�������',
    'database_exists' => '���������� ���� ��� glfusion �������. ���� ���������� ��������� ����� ���� ����������.',
    'database_info' => 'Database ����������',
    'db_hostname' => 'Database ���� ���',
    'db_hostname_error' => 'Database ������ �� ����� �� ���� �� � ������.',
    'db_name' => 'Database ���',
    'db_name_error' => 'Database ������ �� ����� �� ���� �� � ������.',
    'db_pass' => 'Database ������',
    'db_table_prefix' => 'Database �������� �� ���������(������:glfusion_site)',
    'db_type' => 'Database ���',
    'db_type_error' => 'Database ������ �� ��� ������ ���',
    'db_user' => 'Database ����������',
    'db_user_error' => 'Database ������ �� ��������������� ��� �� ���� �� � ������.',
    'dbconfig_not_found' => '�� ���� �� ������ db-config.php ��� db-config.php.dist �����. ���� ������� �� �� ��� ������ �������� ����� ��� ������������.',
    'dbconfig_not_writable' => '�� ���� �� �� ���� ����� db-config.php. ���� ��������� ���� ������� ��� ����� �� ���� ����� ���� ����.',
    'directory_permissions' => '����� �� ������������',
    'enabled' => '��������',
    'env_check' => '�������� �� �������',
    'error' => '������',
    'file_permissions' => '����� �� ���������',
    'file_uploads' => '����� ����� �� glFusion �������� ����������� �� �� ������ �������, ���� �� �������� �� � ���������.',
    'filemgmt' => '������ FileMgmt Plugin?',
    'filemgmt_desc' => 'File Download Manager. ����� ����� �� �� �������� ��� ������� �� ������,��������� �� ���������.',
    'filesystem_check' => '�������� �� ��������� �������',
    'forum' => '������ Forum Plugin?',
    'forum_desc' => '������ ������� �������. �������� �� ��������� �������������� � ��������������.',
    'hosting_env' => '�������� �� ����� �� �������',
    'install' => '����������',
    'install_heading' => 'glFusion ����������',
    'install_steps' => '������ �� ����������',
    'language' => '����',
    'language_task' => '���� � ������',
    'libcustom_not_writable' => 'lib-custom.php ���� ����� �� ������.',
    'links' => '������ Links Plugin?',
    'links_desc' => '������� �� ���������� �� ����������. �������� ������� ��� ����� ��������� �������,��������� �� ���������.',
    'load_sample_content' => '������ Sample Site Content?',
    'mbstring_support' => 'It is recommended that you have the multi-byte string extension loaded (enabled). Without multi-byte string support, some features will be automatically disabled. Specifically, the File Browser in the story WYSIWYG editor will not work.',
    'mediagallery' => '������ Media Gallery Plugin?',
    'mediagallery_desc' => '�����-������� �������. ���� �� ���� ���������� ���� ������ ���� ������� ��� ������� ����� �������� �����,����� � �������.',
    'memory_limit' => 'It is recommended that you have at least 48M of memory enabled on your site.',
    'missing_db_fields' => '���� ��������� ������ ������ ����� �� ����������.',
    'new_install' => '���� ����������',
    'next' => '��������',
    'no_db' => '�������� �� ������ �������� ����.',
    'no_db_connect' => '�� ���� �� �� ������ ��� ����������',
    'no_innodb_support' => '������� ��� MySQL ��� InnoDB �� ������ �������� �� �������� InnoDB.',
    'no_migrate_glfusion' => '�� ������ �� ��������� glFusion ����. ���� �������� ����������� �����..',
    'none' => '����',
    'not_writable' => '���� ����� �� ������',
    'notes' => 'Notes',
    'off' => '��������',
    'ok' => '�����',
    'on' => '�������',
    'online_help_text' => '������ ������������� �����<br /> �� glFusion.org',
    'online_install_help' => '������ ������������� �����',
    'open_basedir' => '��� <strong>open_basedir</strong> ������������� �� ��������� �� ����� ����, �� ������ ���� �� ������� �������� �� ����� �� ������������.���������� �� ���������� ���� ������ �� ������ ���� ��� ������.',
    'path_info' => '���������� �� ����',
    'path_prompt' => '��� ��� private/ ����������',
    'path_settings' => '��������� �� ��������',
    'perform_upgrade' => '������� ����������',
    'php_req_version' => 'glFusion ������� PHP ������ 5.3.0 ��� �� ����.',
    'php_settings' => 'PHP ���������',
    'php_version' => 'PHP ������',
    'php_warning' => '��� ����� �� ������ �� ���������� ��� <span class="no">�������</span>, �� ������ ���� �� �������� �������� ��� glFusion site.  ��������� ����� ���� ������������ ���� ��� ������� ��� ����� �� ���� PHP ���������.',
    'plugin_install' => '���������� �� �������',
    'plugin_upgrade_error' => '����� ������� ��� ������������ ��  %s ���������, ���� ��������� error.log �� ������ �����������.<br />',
    'plugin_upgrade_error_desc' => '�������� ������� �� ���� ��������. ���� ����� error.log �� ������ ����������.<br />',
    'polls' => '������ Polls Plugin?',
    'polls_desc' => '������ ������� �������. �������� ������ �� ����� ����,���������� ����� ����.',
    'post_max_size' => 'glFusion ��� ���������� �� ������� �� �������, �������, � ����� �������. ������ �� ��������� ���� 8MB �� ���������� ������.',
    'previous' => '��������',
    'proceed' => '��������',
    'recommended' => '����������',
    'register_globals' => '��� PHP\'s <strong>register_globals</strong> � ��������, �� ������ ���� �� ������� �������� ��� ��������.',
    'safe_mode' => "��� PHP's <strong>safe_mode</strong> � ��������, ����translating\n ������� �� glFusion ���� �� �� ������� ��������. ��������� �� �����-���������.",
    'samplecontent_desc' => "��� � ���������, ���������translating\n�� ������ ����� ���� �������,�������,� �������� ��������.<strong>���� � ��������� �� ���� ����������� �� glFusion.</strong>",
    'select_task' => '������ ������',
    'session_error' => "Session-� ���� ��������.  ���� �����������\n�� ������������� ������.",
    'setting' => '���������',
    'site_admin_url' => '���������������� ���� (URL)',
    'site_admin_url_error' => '������ �� ����������������� ���� �� ���� �� � ������.',
    'site_email' => 'Email �� �����',
    'site_email_error' => '������ �� Email �� ����� �� ���� �� � ������.',
    'site_email_notvalid' => 'Email �� ����� �� � ������� email �����.',
    'site_info' => '���������� �� �����',
    'site_name' => '��� �� �����',
    'site_name_error' => '������ �� ����� �� ����� �� ���� �� ���� ������.',
    'site_noreply_email' => 'Site No Reply Email',
    'site_noreply_email_error' => '������ �� Site No Reply Email �� ���� �� ���� ������.',
    'site_noreply_notvalid' => 'No Reply Email �� � ������� email �����.',
    'site_slogan' => '���������� �� �����',
    'site_upgrade' => '������ ���� ����������� glFusion ����',
    'site_url' => '����� �� �����',
    'site_url_error' => '������ �� ������ �� ����� �� ���� �� ���� ������.',
    'siteconfig_exists' => '���� ������� ����������� siteconfig.php ����. ���� ���������� ����� �� ������� ���� ����������.',
    'siteconfig_not_found' => '�� ���� �� �� ������ siteconfig.php, ������������ �� ���� � upgrade?',
    'siteconfig_not_writable' => '����� ���� siteconfig.php �� ���� �� �� ���� , ��� ������������ ������ � siteconfig.php ���� ����� �� ������. ���� ��������� �������� ����� �� ����������.',
    'sitedata_help' => '�������� ���-� �� ���������� �� �����. ��� � ������� <strong>MySQL</strong>. ����� � �������� ���� �� ���� ��������� <strong>UTF-8</strong> character set (���� �� � ������ ����� �� ������� ��� �����-�����.)<br /><br /><br />�������� ����� �� ����� ������� ��� ����������. ���� ���� �� �� � ����� ��� ������, ������ ��������� ����� ��������� �� ������� ��� ����� �������.<br /><br />�������� ����� �� ������ ��������. <strong>��� �������� ��� ������ ���.</strong> ��� �� ������ ����� �� ���������� , �������� �� ��� ����� ������� ���������.<br /><br />�������� ����������� �� �� �� �������� ��� ����������. ��� �� ������ ��������������� ��� �� ����������, �������� �� ��� ����� ������� ���������.<br /><br /><br />�������� �������� ��� ������ ��������. ��� �� ������ �������� ��� ����������, �������� �� ��� ����� ������� ���������.<br /><br />�������� ���������� �� ��������� ��� ����������. ���� � ������� ������ ����� �����-������� ��� ����� ������ �� ���� ������� ��� ���� ��������.<br /><br />�������� ����� �� ����� ��. �� �� ���� �������� ���� ���������� �� �����. ������, glFusion ��� Mark\'s Marbles. �� �� ���������� ��� ��������, �� ������ ���� �� �� ����� �� �����.<br /><br />�������� ������������ �� ����� ����. �� �� ���� �������� ��� ���������� �� �����. ������, synergy - stability - style. �� �� ���������� ��� ��������, �� ������ ���� �� �� ����� �� �����.<br /><br />�������� ������� email ����� �� ����� ��. ���� email ����� �� � ������� �� ����������������� ������. �� �� ���������� ��� ��������, �� ������ ���� �� �� ����� �� �����.<br /><br />������� ����� no reply email �����. ��� �� ���� ��������� ����������� �� ������� �� �����������, ����� �� ��������, � ����� ������������ ���������. �� �� ���������� ��� ��������, �� ������ ���� �� �� ����� �� �����.<br /><br />Please confirm that this is the web address or URL used to access the homepage of your site.<br /><br />���� ���������� �� ���� � �������� ������  ��� URL ��������� �� ����� �������� �� �����.',
    'sitedata_missing' => '�������� �������� ��������� ��� �� ���������� �� ��� ����������:',
    'system_path' => '��������� �� ����',
    'unable_mkdir' => '�� ���� �� ������ ����������',
    'unable_to_find_ver' => '�� ���� �� �������� �������� �� glFusion .',
    'upgrade_error' => '������ ��� ������������',
    'upgrade_error_text' => '������� ������ ������ �� ��������� �� ����������.',
    'upgrade_steps' => '������ �� ����������',
    'upload_max_filesize' => 'glFusion �� ��������� �� ������� �������,�������,� ����� �������. ������ �� ��� ��������� ���� 8MB ���� ��������� ����� �� �������.',
    'use_utf8' => '����������� UTF-8',
    'welcome_help' => '����� ����� ��� ������������� ��������� �� glFusion CMS. ��� ������ �� ����������� ��� glFusion ����,�� �������� ���� ����������� ����, ��� �� ��������� �� ����������� Geekblog 1.4.1 ����.<br /><br />���� �������� ���� �� ����������� � ��������� <strong>������</strong>.',
    'wizard_version' => 'v'.GVERSION.' ������������� ���������',
    'system_path_prompt' => '�������� ������ ��� ���  glFusion\ <strong>private/</strong> directory.<br /><br />���� ���������� ������� <strong>db-config.php.dist</strong> ��� <strong>db-config.php</strong> ����.<br /><br />�������: /home/www/glfusion/private ��� c:/www/glfusion/private.<br /><br /><strong>���������:</strong> ������ ��� ���  <strong>public_html/</strong> <i>(He <strong>private/</strong>)</i> ������������ �������� �� �:<br /><br />%s<br /><br /><strong>��� ���������</strong> �� ��������� �� ������� ����� �� ��������. �� � ����� �� �� ���������� ���� ������, ��������� �� �� �������� �����������.',
    'advanced_settings' => '��� ���������',
    'log_path' => '��� ��� logs',
    'lang_path' => '��� ��� �������',
    'backup_path' => '��� ��� ��������',
    'data_path' => '��� ��� ����',
    'language_support' => '����� �� �������',
    'language_pack' => 'glFusion � �� ���������, �� ���� ������������ ������ �� ������� � ����������� <a href="http://www.glfusion.org/filemgmt/viewcat.php?cid=1" target="_blank">������ �����</a> ����� ������� ������ ������� ������� ��������� �� ���.',
    'libcustom_not_found' => 'Unable to located lib-custom.php.dist.',
    'no_db_driver' => 'You must have the MySQL extension loaded in PHP to install glFusion',
    'version_check' => 'Check For Updates',
    'check_for_updates' => "Goto the <a href=\"{$_CONF['site_admin_url']}/vercheck.php\">Upgrade Checker</a> to see if there are any glFusion CMS or Plugin updates available.",
    'quick_start' => 'glFusion Quick Start Guide',
    'quick_start_help' => 'Please review  the <a href="https://www.glfusion.org/wiki/glfusion:quickstart">glFusion CMS Quick Start Guide</a> and the full <a href="https://www.glfusion.org/wiki/">glFusion CMS Documentation</a> site for details on configurating your new glFusion site.',
    'upgrade' => 'Upgrade',
    'support_resources' => 'Support Resources',
    'plugins' => 'glFusion Plugins',
    'support_forums' => 'glFusion Support Forums',
    'instruction_step' => 'Instructions',
    'install_stepheading' => 'New Install Tasks',
    'install_doc_alert' => 'To ensure a smooth installation, please read the <a href="https://www.glfusion.org/wiki/glfusion:installation" target="_blank">Insallation Documentation</a> before proceeding.',
    'install_header' => 'Before installing glFusion, you will need to know a few key pieces of information. Write down the following information. If you are unsure what to put for each of the items below, please contact your system administrator or you hosting provider.',
    'install_bullet1' => 'Site&nbsp;<abbr title="Uniform Resource Locator">URL</abbr>',
    'install_bullet2' => 'Database Server',
    'install_bullet3' => 'Database Name',
    'install_bullet4' => 'Database Login ID',
    'install_bullet5' => 'Database Password',
    'install_bullet6' => 'Path to glFusion Private Files. This is where the db-config.php.dist file is stored. <strong>these files should not be available via the Internet, so they go outside of your web root directory.</strong> If you must install them in the webroot, please refer to the <a href="https://www.glfusion.org/wiki/glfusion:installation:webroot" target="_blank">Installing Private Files in Webroot</a> instructions to learn how to properly secure these files.',
    'install_doc_alert2' => 'For more detailed upgrade instructions, please refer to the <a href="https://www.glfusion.org/wiki/glfusion:installation" target="_blank">glFusion Installation Documentation</a>.',
    'upgrade_heading' => 'Important Upgrade Information',
    'doc_alert' => 'To ensure a smooth upgrade process, please read the <a href="https://www.glfusion.org/wiki/glfusion:upgrade" target="_blank">Upgrade Documentation</a> before proceeding.',
    'doc_alert2' => 'For more detailed upgrade instructions, please refer to the <a href="https://www.glfusion.org/wiki/glfusion:upgrade" target="_blank">glFusion Documentation on Upgrading</a>.',
    'backup' => 'Backup, Backup, Backup!',
    'backup_instructions' => 'Take extreme care to back up any files from your current installation that have any custom code in them. Be sure to back up any modified themes and images from your current installation.',
    'upgrade_bullet1' => 'Back Up your current glFusion Database (Database Administration option under Command and Control).',
    'upgrade_bullet2' => 'If you are using a theme other than the default CMS, make sure your theme has been updated to support glFusion. There are several theme changes that must be made to custom themes to allow glFusion to work properly. Verify you have all the necessary template changes made by visiting the&nbsp;<a  target="_blank" href="https://www.glfusion.org/wiki/glfusion:template_changes" title="glfusion:template_changes">Template Changes</a>&nbsp;page.',
    'upgrade_bullet3' => 'If you have customized any of the theme templates, check the&nbsp;<a target="_blank" href="https://www.glfusion.org/wiki/glfusion:template_changes" title="glfusion:template_changes">Template Changes</a>&nbsp;for the current release to see if you need to make any updates to your customizations.',
    'upgrade_bullet4' => 'Check any third party plugins to ensure they are compatible or if they will need to be updated.',
    'upgrade_bullet_title' => 'It is recommended that yo do the following:',
    'cleanup' => 'Obsolete File Removal',
    'obsolete_confirm' => 'File Cleanup Confirmation',
    'remove_skip_warning' => 'Are you sure you want to skip removing the obsolete files? These files are no longer needed and should be removed for security reasons. If you choose to skip the automatic removal, please consider removing them manually.',
    'removal_failure' => 'Removal Failures',
    'removal_fail_msg' => 'You will need to manually delete the files below. See the <a href="https://www.glfusion.org/wiki/doku.php?id=glfusion:upgrade:obsolete" target="_blank">glFusion Wiki - Obsolete Files</a> for a detailed list of files to remove.',
    'removal_success' => 'Obsolete Files Deleted',
    'removal_success_msg' => 'All obsolete files have been successfully removed. Select <b>Complete</b> to finish the upgrade.',
    'remove_obsolete' => 'Remove Obsolete Files',
    'remove_instructions' => '<p>With each release of glFusion, there are files that are updated and in some cases removed from the glFusion system. From a security perspective, it is important to remove old, unused files. The Upgrade Wizard can remove the old files, if you wish, otherwise you will need to manually delete them.</p><p>If you wish to manually delete the files - please check the <a href="https://www.glfusion.org/wiki/doku.php?id=glfusion:upgrade:obsolete" target="_blank">glFusion Wiki - Obsolete Files</a> to get a list of obsolete files to remove. Select <span class="uk-text-bold">Skip</span> below to complete the upgrade process.</p><p>To have the Upgrade Wizard automatically delete the files, please select <b>Delete Files</b> below to complete the upgrade.',
    'complete' => 'Complete',
    'delete_files' => 'Delete Files',
    'cancel' => 'Cancel',
    'show_files_to_delete' => 'Show Files to Delete',
    'skip' => 'Skip'
);

// +---------------------------------------------------------------------------+
// success.php

$LANG_SUCCESS = array(
    0 => '������������ ���������',
    1 => '���������� �� glFusion ',
    2 => ' ���������!',
    3 => '������������,��� ������� ',
    4 => ' glFusion. ���� �������� ������� � ��������� ������������ ����.',
    5 => '�� �� ������� ��� ����� ��� glFusion ����,���� ����������� ����:',
    6 => '����������:',
    7 => 'Admin',
    8 => '������:',
    9 => 'password',
    10 => '�������������� ��� ��������',
    11 => '�� ���������� �� ���������',
    12 => '����',
    13 => '�������� ��� ���������� �������������� ����������,',
    14 => '�����',
    15 => '������������� ������.',
    16 => '����� ����� ��',
    17 => '�',
    18 => '����� �� ���',
    19 => '<strong>���������:</strong> ������ ��������� �� ���������� ����� � ������, ��� ���������� ��� ������ ��� ����� �� �� ������ �� ������������� ����� ����.  ������ ��� �� ���� ������ � <b>NewAdmin</b> � �������� � <b>password</b>',
    20 => '����������',
    21 => '�������'
);

?>