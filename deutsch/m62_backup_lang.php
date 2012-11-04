<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 /**
 * mithra62 - Backup Pro
 *
 * @package		mithra62:m62_backup
 * @author		Eric Lamb
 * @copyright	Copyright (c) 2011, mithra62, Eric Lamb.
 * @link		http://mithra62.com/projects/view/backup-pro/
 * @version		1.8.2
 * @filesource 	./system/expressionengine/third_party/m62_backup/
 */

/**
 * Language Array
 * ExpressionEngine language translation array
 * @var array
 */
$lang = array(

// Required for MODULES page

'm62_backup_module_name'		=> 'Backup Pro',
'm62_backup_module_description'	=> 'Datenbank- und File-Backup für diese Website erstellen.',

//----------------------------------------

// Additional Key => Value pairs go here

// END

'index' => 'Backups zeigen',
'no_backups' => 'Keine Backups',
'backups' => 'Backups',
'database_backups' => 'Datenbank-Backups',
'backup_db' => 'Backup Datenbank',
'db_backup_created' => 'Datenbank Backup erstellt',
'file_backup_created' => 'File-Backup erstellt',
'database_backups' => 'Datenbank Backups',
'file_name' => 'Filename',
'backup_files' => 'Backup Files',
'file_backups' => 'File-Backups',
'delete_selected' => 'Gewählte löschen',
'delete_backup' => 'Backups löschen',
'action' => 'Aktion',
'download' => 'Download',
'restore' => 'Wiederherstellen',
'date_taken' => 'Erstellungsdatum',
'db_backup_not_found' => 'Datenbank-Download nicht gefunden',
'file_size' => 'File-Grösse',
'file_backup_failure' => 'File-Backup konnte nicht erstellt werden',
'db_backup_failure' => 'Datenbank-Backup konnte nicht erstellt werden',
'backups_not_found' => 'Backup nicht gefunden',
'delete_backup_confirm' => 'Wollen Sie wirklich untenstehende Backups löschen?',
'restore_db_question' => 'Wollen Sie wirklich diese Datenbank wiederherstellen?',
'database_restored' => 'Datenbank wiederhergestellt!',
'files' => 'Files',

'settings' => 'Einstellungen',
'backup_file_location' => 'File Backup Ort',
'backup_file_locations' => 'File Backup Orte',
'backup_file_location_instructions' => 'Ganz einfach: was soll in das Backup eingeschlossen werden? Geben Sie den ganzen Pfad an, der gesichert werden soll, jeden auf einer Zeile getrennt.',
'backup_store_location' => 'Backup Speicherort',
'backup_store_location_instructions' => 'Wo sollen die Backups gespeichert werden? Idealerweise nicht im Dokument-Root Ihrer Site - aus Sicherheitsgründen. Sollt es dennoch der Fall sein, dann würde ein Backup nicht im Backup mit eingeschlossen sein. Denken Sie daran, das Verzeichnis beschreibbar zu machen. Setzen Sie die Berechtigungen auf 0666 oder 0777.',
'license_number' => 'Lizenznummer',
'configure_backups' => 'Backup Einstellungen',
'configure_cron' => 'Cron Konfiguration',
'enable_cron' => 'Cron aktivieren',
'cron_control' => 'Cron Kontrolle',
'cron_notify_emails' => 'E-Mail-Benachrichtigungen',
'cron_notify_emails_instructions' => 'Setzen Sie eine E-Mail-Adresse pro Zeile, an welche eine Benachrichtigung bei erfolgtem Backup gesendet werden soll. Wird keine E-Mail-Adresse angegeben, wird keine Benachrichtigung versendet. Ungültige E-Mail-Adressen werden ausgefiltert.',
'cron_attach_backups' => 'Backups an E-Mail hängen',
'cron_attach_backups_instructions' => 'Backup Pro sendet in der E-Mail einen Link, um das Backup zu downloaden. Wenn Sie möchten, kann das Backup der E-Mail als Anhang mitgegeben werden. ',
'cron_attach_threshold' => 'Maximale Grösse des Attachments',
'cron_attach_threshold_instructions' => 'Abhängig der Grösse Ihrer Website, kann auch das Backup recht gross werden. Manchmal auch zu gross für den E-Mail-Provider. Ist das Backup grösser als diese Angabe in Bytes hier, wird kein Attachment, sondern stattdessen ein Link zum Download mitgegeben. ',
'auto_threshold_instructions' => 'Mit der Zeit wird der benötigte Platz für Backups beträchtlich. Backup Pro kann den Platz überwachen und bei Bedarf alte Backups wieder löschen, damit es für kommende Backups wieder Platz gibt. Geben Sie die maximale Platzgrösse in Bytes an. Bei Angabe von 0 wird kein Grenzwert beachtet.',
'auto_threshold' => 'Grenzwert fürs Löschen',
'allowed_access_levels' => 'Erlaubte Zugriff-Levels',
'allowed_access_levels_instructions' => 'Backup Pro erlaubt normalerweise den Zugriff auf sein Control Panel nur für Superadmins. Wenn es nötig ist, anderen Mitgliedergruppen Zugriff zu geben, wählen Sie aus der Liste aus.',
'settings_updated' => 'Einstellungen aktualisiert',
'settings_update_fail' => 'Einstellungen konnten nicht aktualisiert werden',

'cron_command_instructions' => 'Verwenden Sie untenstehenden Befehl für das mit Cron Job auszuführende Backup, entsprechend der Art des Backups. ',
'cron_notification' => 'Backup Pro Cron Benachrichtigung',
'cron_control_instructions' => 'Damit Ihre Aufträge an den Cron Job sicher sind, muss ein zufälliger Abfrage-Parameter jeder Abfrage mitgegeben werden. Backup Pro macht das ursprünglich für Sie. Wenn Sie den Parameter selber bestimmen wollen, machen Sie das hier',
'exclude_paths' => 'Pfade ausschliessen',
'exclude_paths_instructions' => 'Standardmässig schliesst Backup Pro alle Dateien Ihres Dokument-Root-Verzeichnisses ein. Bei einigen Websites ist das vielleicht nicht korrekt so. Wenn Sie  etwas vom Backup ausschliessen wollen, geben Sie hier den kompletten Pfad zum Dokument oder zur Datei an, immer durch eine Zeile getrennt. ',

'files_dir_not_writable' => 'Backup-Verzeichnis für Dateien ist nicht beschreibbar. Setzen Sie die Berechtigungen für  "#files_dir#" auf 0666 oder 0777.',
'files_dir_missing' => 'Backup-Verzeichnis für Dateien nicht gefunden. Stellen Sie sicher, dass "#files_dir#" existiert und beschreibbar ist.',
'db_dir_not_writable' => 'Datenbank Backup-Verzeichnis ist beschreibbar. Stellen Sie sicher, dass die Berechtigungen für "#db_dir#" auf 0666 oder 0777 gesetzt sind.',
'db_dir_missing' => 'Datenbank Backup-Verzeichnis nicht gefunden. Stellen Sie sicher, dass "#db_dir#" existiert und beschreibbar ist.',
'database' => 'Datenbank',
'type' => 'Typ',
'restore_db' => 'Datenbank Restore',
'backups_deleted' => 'Gelöschte Backups',
'back_dir_not_writable' => 'Das Backup-Verzeichnis ist nicht beschreibbar!',
'module_instructions' => 'Backup Pro ist ein vielseitiges Backup Management Modul für EE 2.0 das den Administratoren folgende Möglichkeiten bietet: 
						  Backup und Restore der Website-Datenbank sowie des gesamten Dateisystems. Beides, Files und Datenbank, werden komprimiert, um Platz zu sparen und um den einfachen Download zu ermöglichen. <br /><br />
						  Für ein Backup klickt man nur einen Button für den Typ Backup den man erstellen möchte. 
						  Ist das Backup erstellt, kann man es in der Liste auswählen und downloaden. 
						  Wollen Sie das Backup zurückspielen, klicken Sie einfach Restore. 
						  Beachten Sie, dass das Backup von Dateien eine gewissen Zeit in Anspruch nimmt und gut ein paar Minuten dauern kann. ',


'cron_message' => '
Guten Tag,

Ein Backup wurde mit erfolgreich erstellt.

Backup Pro',
'cron_txt_message' => '',

'file_backup' => 'File Backup',
'db_backup' => 'Datenbank Backup',
'combined' => 'Kombiniertes Backup (beides, Files und Datenbank in einem Durchgang)',

'missing_license_number' => 'Bitte die Lizenznummer eingeben. <a href="#config_url#">Lizenz eingeben</a> oder <a href="http://devot-ee.com/add-ons/backup-pro/">Lizenz kaufen</a>!',

'configure_ftp' => 'FTP Sync konfigurieren',
'ftp_hostname' => 'FTP Hostname',
'ftp_hostname_instructions' => 'Adresse oder Domainname zum entfernten Server. Keinen Prefix wie http:// oder ftp:// angeben',
'ftp_username' => 'FTP Username',
'ftp_username_instructions' => 'Wenn Sie nicht wissen, von was hier die Rede ist, müssen Sie wohl mit Ihrem Provider Rücksprache nehmen um FTP Sync einrichten zu können. ',
'ftp_password' => 'FTP Passwort',
'ftp_password_instructions' => 'Zur Sicherheit wird das Passwort vor dem Speichern verschlüsselt.',
'ftp_port' => 'FTP Port',
'ftp_port_instructions' => 'Voreinstellung ist 21. Sollte Ihr Host einen anderen Port verwenden, ändern Sie hier.',
'ftp_passive' => 'Passive Mode',
'ftp_passive_instructions' => 'Wenn ausgewählt, wird jeder Transfer mit der PASV Methode erfolgen. ',
'ftp_store_location' => 'FTP Speicherort',
'ftp_store_location_instructions' => 'Wo auf dem entfernten Server sollen die Backups gespeichert werden. Das Verzeichnis muss existieren, bevor diese Einstellungen gespeichert werden. ',
'ftp_directory_missing' => 'Das Verzeichnis auf dem angegebenen Server existiert nicht.',

'configure_s3' => 'Amazon S3 Sync konfigurieren',
's3_access_key' => 'Access Key ID',
's3_access_key_instructions' => 'Die Access Key ID identifiziert Sie als Verantwortlichen für die S3 Service-Anfrage. Sie finden diese beim Einloggen in Ihr <a href="http://aws.amazon.com" target="_blank">Amazon Web Services Konto</a>',
's3_secret_key' => 'Secret Access Key',
's3_secret_key_instructions' => 'Dieser Schlüssel ist keine Datei sondern eine lange Kette von Zeichen, die Sie benutzen um die digitale Signatur in Ihrer Anfrage zu erstellen. Aus Sicherheitsgründen werden beide, Access Key und Secret Key vor dem Abspeichern verschlüsselt. ',
's3_bucket' => 'Bucket Name',
's3_bucket_instructions' => 'Der Master-Verzeichnis-Name wo Ihr Backup hin abgespeichert wird. Existiert er nicht, wird er erstellt. Benennen Sie keinen Bucket Name, wird einer zugeteilt.',


'configure_cf' => 'Rackspace Cloud Files Konfiguration',
'cf_username' => 'Rackspace Username',
'cf_username_instructions' => 'Benutzen Sie Ihren Rackspace Cloud Username als den Uusername für die API. Aus Sicherheitsgründen werden die beiden Access Key und Secret Key vor dem Speichern verschlüsselt.',
'cf_api' => 'API Access key',
'cf_api_instructions' => 'Den API access key holen Sie vom Rackspace Cloud Control Panel bei <a href="https://manage.rackspacecloud.com/APIAccess.do" target="_blank">Ihrem Konto</a>. Zur Sicherheit werden bei Schlüssel verschlüsselt abgespeichert.',
'cf_bucket' => 'Bucket Name',
'cf_bucket_instructions' => 'Der Master-Verzeichnis-Name wo Ihr Backup hin abgespeichert wird. Existiert er nicht, wird er erstellt. Benennen Sie keinen Bucket Name, wird einer zugeteilt.',
'cf_connect_fail' => 'Die Rackspace Cloud Files Überprüfungen sind nicht korrekt.',
'cf_location' => 'Account Location',
'cf_location_instructions' => 'Den bestimmen Sie basierend auf der Rackspace Verkaufssite wo Sie Ihr Konto erstellt haben. <a href="http://www.rackspacecloud.com">US</a> oder <a href="http://www.rackspace.co.uk">UK</a>.',

'cf_location_types' => array('us' => 'US', 'uk' => 'UK'),
'log_database_backup' => 'Datenbank Backup erstellt.',
'log_file_backup' => 'File Backup erstellt.',
'log_backup_downloaded' => 'Backup downloaded.',
'log_backup_deleted' => 'Backups gelöscht.',
'log_settings_updated' => 'Backup Pro Einstellungen aktualisiert',

'backup_in_progress_instructions' => '<strong>WÄHREND DES BACKUPS SOLLTEN SIE NICHTS VON DIESEN DINGEN TUN:</strong><br />
    1. Ihren Browser schliessen<br />
    2. Diese Seite neu laden<br />
    3. Von dieser Seite weg navigieren<br />
',
'backup_in_progress' => 'Backup läuft...',
'backup_progress_bar_start' => 'Backup startet...',
'backup_progress_bar_table_start' => 'Starte Backup für Tabelle: ',
'backup_progress_bar_table_stop' => 'Backup abgeschlossen für Tabelle ',
'backup_progress_bar_database_stop' => 'Backup der Datenbank abgeschlossen.',
'backup_progress_bar_start_file_exclude' => 'Starte Datei-Auschlussliste...',
'backup_progress_bar_stop_file_exclude' => 'Abgeschlossen Datei-Ausschlussliste...',
'backup_progress_bar_start_file_list' => 'Starte Datei-Generierungsliste...',
'backup_progress_bar_stop_file_list' => 'Abgeschlossen Datei-Generierungsliste...',
'backup_progress_bar_create_archive' => 'Erstelle das Archiv...',
'backup_progress_bar_start_s3' => 'Starte Transfer nach S3 (kann eine Weile dauern)...',
'backup_progress_bar_stop_s3' => 'Transfer abgeschlossen nach S3...',
'backup_progress_bar_start_ftp' => 'Starte FTP.Transfer auf entfernten Server (das kann eine Weile dauern)...',
'backup_progress_bar_stop_ftp' => 'FTP Transfer auf entfernten Server abgeschlossen...',
'backup_progress_bar_start_cf' => 'Starte Transfer nach Rackspace Cloud (kann eine Weile dauern)...',
'backup_progress_bar_stop_cf' => 'Transfer nach Rackspace Cloud abgeschlossen...',


'backup_progress_bar_stop' => 'Backup erstellt!',

'max_db_backups' => 'Maximum Datenbank Backups',
'max_db_backups_instructions' => 'Geben Sie die maximale Anzahl Datenbank-Backups an, die Sie gespeichert haben möchten. Nur lokale Backups (remote und lokal) werden entfernt. 0 eingeben zum Deaktivieren.',
'max_file_backups' => 'Maximum File Backups',
'max_file_backups_instructions' => 'Geben Sie die maximale Anzahl File-Backups an, die Sie gespeichert haben möchten. Nur lokale Backups (remote und lokal) werden entfernt. 0 eingeben zum Deaktivieren.',

'date_format' => 'Datumsformat',
'date_format_instructions' => 'Das Datumsformat in dem Backup Pro die Backups hier in der Liste anzeigen soll. Das Format muss dem <a href="http://expressionengine.com/user_guide/templates/date_variable_formatting.html#date-formatting-codes" target="_blank">ExpressionEngine Datum Format</a> entsprechen.',

'taken_on' => 'Erstellt am',
'size' => 'Grösse',
''=>''
);