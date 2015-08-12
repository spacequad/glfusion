<?php
/**
 * File: german_formal_utf-8.php
 * This is the German language file for the glFusion Spam-X plugin
 *  Modifiziert: August 09 Tony Kluever
 *
 * Copyright (C) 2004-2008 by the following authors:
 * Author        Tom Willett        tomw AT pigstye DOT net
 *
 * Licensed under GNU General Public License
 *
 * $Id: english.php 4035 2009-02-25 22:36:21Z mevans0263 $
 */

if (!defined ('GVERSION')) {
    die ('This file can not be used on its own.');
}

global $LANG32;

$LANG_SX00 = array(
    'inst1' => '<p>Wenn Sie dies tun, dann sind andere ',
    'inst2' => 'in der Lage, Ihre persönliche Blacklist anzusehen und zu importieren, und wir können eine effektivere ',
    'inst3' => 'verteilte Datenbank aufbauen.</p><p>Falls Du Deine Webseite übermittelt hast und sie nicht auf der Liste belassen willst, ',
    'inst4' => 'sende eine E-Mail an <a href="mailto:spamx@pigstye.net">spamx@pigstye.net</a> und teile mir das mit. ',
    'inst5' => 'Alle Anfragen werden beachtet.',
    'submit' => 'Sende',
    'subthis' => 'diese Info zur Spam-X Zentraldatenbank',
    'secbut' => 'Der zweite Burron erstellt einen rdf-Feed, so dass andere Deine Liste importieren können.',
    'sitename' => 'Seitenname: ',
    'URL' => 'URL zur Spam-X Liste: ',
    'RDF' => 'RDF url: ',
    'impinst1a' => 'Bevor Sie den Kommentar-Spam-Blocker von Spam-X zum ansehen und importieren persönlicher Blacklists anderer ',
    'impinst1b' => ' Seiten verwenden, drücken Sie bitte die folgenden zwei Buttons. (Sie müssen den letzten drücken.)',
    'impinst2' => 'Dieser erste Button sendet Ihre Webseite an die Gplugs/Spam-X Seite, so dass sie zur Masterlist der ',
    'impinst2a' => 'Seiten, die ihre Blacklists tauschen, hinzugefügt wird. (Hinweis: Wenn Sie mehrere Seiten haben, dann bestimme',
    'impinst2b' => 'eine als Master und übermitteln Sie nur den Namen. Dies erlaubt Ihnen, ihre Seiten einfach zu aktualisieren und die Liste kleiner zu halten.) ',
    'impinst2c' => 'Nachdem Sie den Sende-Button gedrück haben, drücken [zurück] in Ihrem Browser, um hierher zurückzukehren.',
    'impinst3' => 'Die folgenden Werte werden gesendet: (Sie Können sie bearbeiten, wenn sie falsch sind).',
    'availb' => 'Verfügbare Blacklists',
    'clickv' => 'Klicken, um Blacklist anzuschauen',
    'clicki' => 'Klicken, um Blacklist zu importieren',
    'ok' => 'OK',
    'rsscreated' => 'RSS-Feed erstellt',
    'add1' => 'Hinzugefügt ',
    'add2' => ' Einträge von ',
    'add3' => '\'s Blacklist.',
    'adminc' => 'Administrationskommandos:',
    'mblack' => 'Meine Blacklist:',
    'rlinks' => 'Ähnliche Links:',
    'e3' => 'Um die Worte von der glFusions-Zensurliste hinzuzufügen, drücken Sie den Button:',
    'addcen' => 'Zensurliste hinzufügen',
    'addentry' => 'Eintrag hinzufügen',
    'e1' => 'Klicken Sie auf einen Eintrag, um ihn zu löschen.',
    'e2' => 'Um einen Eintrag hinzuzufügen, geben Sie es in die Box ein und klicken auf Hinzufügen. Einträge können volle Perl Regular Expressions verwenden.',
    'pblack' => 'Spam-X Persönliche Blacklist',
    'conmod' => 'Verwendung von Spam-X-Modulen konfigurieren',
    'acmod' => 'Spam-X Aktionsmodule',
    'exmod' => 'Spam-X Untersuchen-Module',
    'actmod' => 'Aktive Module',
    'avmod' => 'Verfügbare Module',
    'coninst' => '<hr' . XHTML . '>Klicken Sie auf ein aktives Modul, um es zu entfernen, klicken Sie auf ein verfügbares Modul, um es hinzuzufügen.<br' . XHTML . '>Module werden in der angezeigten Reihenfolge ausgeführt.',
    'fsc' => 'Spam-Beitrag gefunden, übereinstimmend mit ',
    'fsc1' => ' geschrieben von Benutzer ',
    'fsc2' => ' von IP ',
    'uMTlist' => 'MT-Blacklist aktualisieren',
    'uMTlist2' => ': Hinzugefügt ',
    'uMTlist3' => ' Einträge und gelöscht ',
    'entries' => ' Einträge.',
    'uPlist' => 'Persönliche Blacklist aktualisieren',
    'entriesadded' => 'Einträge hinzugefügt',
    'entriesdeleted' => 'Einträge gelöscht',
    'viewlog' => 'Spam-X Log anzeigen',
    'clearlog' => 'Logdatei bereinigen',
    'logcleared' => '- Spam-X Logdatei bereinigt',
    'plugin' => 'Plugin',
    'access_denied' => 'Zugriff verweigert',
    'access_denied_msg' => 'Nur Root-Benutzer haben Zugang zu dieser Seite. Dein Benutzername und IP wurden aufgezeichnet.',
    'admin' => 'Plugin-Administration',
    'install_header' => 'Plugin-Installation/-Deinstallation',
    'installed' => 'Das Plugin ist installiert',
    'uninstalled' => 'Das Plugin ist nicht installiert',
    'install_success' => 'Installation erfolgreich',
    'install_failed' => 'Installation fehlgeschlagen -- Schauen Sie in die Datei error.log für weitere Infos.',
    'uninstall_msg' => 'Plugin erfolgreich deinstalliert',
    'install' => 'Installieren',
    'uninstall' => 'Deinstallieren',
    'warning' => 'Warnung! Plugin ist noch aktiviert',
    'enabled' => 'Deaktivieren Sie das Plugin, bevor Sie es deinstallierst.',
    'readme' => 'STOPP! Bevor Sie auf Installieren klicken, lesen Sie bitte das ',
    'installdoc' => 'Installationsdokument.',
    'spamdeleted' => 'Spam-Beitrag löschen',
    'foundspam' => 'Spam-Beitrag gefunden, übereinstimmend mit ',
    'foundspam2' => ' geschrieben von Benutzer ',
    'foundspam3' => ' von IP ',
    'deletespam' => 'Spam löschen',
    'numtocheck' => 'Anzahl der zu prüfenden Kommentare',
    'note1' => '<p>Note: Massenlöschung ist als Hilfe gedacht, wenn Sie belästigst werden durch',
    'note2' => ' Kommentar-Spam und Spam-X ihn nicht "einfängt".</p><ul><li>Zuerst finde die Links oder andere ',
    'note3' => 'Identifikatoren dieses Spam-Kommentars und fügen Sie es ihrer persönl. Blacklist hinzu.</li><li>Dann ',
    'note4' => 'kommen Sie hierher zurück und lassen Spam-X die letzten Kommentare nach Spam prüfen.</li></ul><p>Kommentare ',
    'note5' => 'werden von den neuesten zu den ältesten geprüft -- mehr Kommentare zu prüfen ',
    'note6' => 'benötigt mehr Zeit für die Prüfung.</p>',
    'masshead' => '<hr' . XHTML . '><h1 align="center">Massenlöschung der Spam-Kommentare</h1>',
    'masstb' => '<hr' . XHTML . '><h1 align="center">Masslöschung von Trackback-Spam</h1>',
    'comdel' => ' Kommentare gelöscht.',
    'initial_Pimport' => '<p>Persönliche Blacklist importieren"',
    'initial_import' => 'Initiale MT-Blacklist importieren',
    'import_success' => '<p>%d Blacklist-Einträge erfolgreich importiert.',
    'import_failure' => '<p><strong>Fehler:</strong> Keine Einträge gefunden.',
    'allow_url_fopen' => '<p>Sorry, Ihre Websever-Konfiguration erlaubt das lesen von Remote-Dateien nicht (<code>allow_url_fopen</code> ist aus). Bitte laden Sie die Blacklist von der folgenden URL herunter und laden sie in glFusion\'s "data" Ordner hoch, <tt>%s</tt>, bevor Sie es erneut versuchen:',
    'documentation' => 'Spam-X Plugin-Dokumentation',
    'emailmsg' => "Ein neue Spam-beitrag wurde eingesendet bei \"%s\"\nBenutzer-ID: \"%s\"\n\nInhalt:\"%s\"",
    'emailsubject' => 'Spam-Beitrag bei %s',
    'ipblack' => 'Spam-X IP-Blacklist',
    'ipofurlblack' => 'Spam-X IP oder URL-Blacklist',
    'headerblack' => 'Spam-X HTTP Header-Blacklist',
    'headers' => 'Request Headers:',
    'stats_headline' => 'Spam-X Statistiken',
    'stats_page_title' => 'Blacklist',
    'stats_entries' => 'Einträge',
    'stats_mtblacklist' => 'MT-Blacklist',
    'stats_pblacklist' => 'Persönliche Blacklist',
    'stats_ip' => 'Gesperrte IPs',
    'stats_ipofurl' => 'Gesperrt durch IP von URL',
    'stats_header' => 'HTTP-Headers',
    'stats_deleted' => 'Beiträge als Spam gelöscht',
    'plugin_name' => 'Spam-X',
    'slvwhitelist' => 'SLV-Whitelist',
    'instructions' => 'Spam-X allows you to define words, URLs, and other items that can be used to block spam posts on your site.',
    'invalid_email_or_ip' => 'Invalid e-mail address or IP address has been blocked'
);

// Define Messages that are shown when Spam-X module action is taken
$PLG_spamx_MESSAGE128 = 'Spam entdeckt. Beitrag wurde gelöscht.';
$PLG_spamx_MESSAGE8 = 'Spam entdeckt. E-Mail an Admin gesendet.';

// Messages for the plugin upgrade
$PLG_spamx_MESSAGE3001 = 'Plugin-Upgrade nicht unterstützt.';
$PLG_spamx_MESSAGE3002 = $LANG32[9];

// Localization of the Admin Configuration UI
$LANG_configsections['spamx'] = array(
    'label' => 'Spam-X',
    'title' => 'Spam-X Konfiguration'
);

$LANG_confignames['spamx'] = array(
    'action' => 'Spam-X - Aktionen',
    'notification_email' => 'Benachrichtigungs-E-Mail',
    'admin_override' => 'Admin-Beiträge nicht filtern',
    'logging' => 'Logging aktivieren',
    'timeout' => 'Timeout',
    'sfs_username_check' => 'Enable User name validation',
    'sfs_email_check' => 'Enable email validation',
    'sfs_ip_check' => 'Enable IP address validation',
    'sfs_username_confidence' => 'Minimum confidence level on Username match to trigger spam block',
    'sfs_email_confidence' => 'Minimum confidence level on Email match to trigger spam block',
    'sfs_ip_confidence' => 'Minimum confidence level on IP address match to trigger spam block'
);

$LANG_configsubgroups['spamx'] = array(
    'sg_main' => 'Haupteinstellungen'
);

$LANG_fs['spamx'] = array(
    'fs_main' => 'Spam-X Haupteinstellungen',
    'fs_sfs' => 'Stop Forum Spam Settings'
);

// Note: entries 0, 1, 9, and 12 are the same as in $LANG_configselects['Core']
$LANG_configselects['spamx'] = array(
    0 => array('Ja' => 1, 'Falsch' => 0),
    1 => array('Ja' => true, 'Falsch' => false)
);

?>