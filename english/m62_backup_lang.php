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
'm62_backup_module_description'	=> 'Interface to create database and file backups of your site. ',

//----------------------------------------

// Additional Key => Value pairs go here

// END

'index' => 'View Backups',
'no_backups' => 'No Backups',
'backups' => 'Backups',
'database_backups' => 'Database Backups',
'backup_db' => 'Backup Database',
'db_backup_created' => 'Database Backup Created',
'file_backup_created' => 'File Backup Created',
'database_backups' => 'Database Backups',
'file_name' => 'File Name',
'backup_files' => 'Backup Files',
'file_backups' => 'File Backups',
'delete_selected' => 'Delete Selected',
'delete_backup' => 'Delete Backups',
'action' => 'Action',
'download' => 'Download',
'restore' => 'Restore',
'date_taken' => 'Date Taken',
'db_backup_not_found' => 'Database Download Not Found',
'file_size' => 'File Size',
'file_backup_failure' => 'Couldn\'t Create File Backup',
'db_backup_failure' => 'Couldn\'t Create Database Backup',
'backups_not_found' => 'Backup Not Found',
'delete_backup_confirm' => 'Are you sure you want to remove the below backups?',
'restore_db_question' => 'Are you sure you want to restore the below database?',
'database_restored' => 'Database Restored!',
'files' => 'Files',

'settings' => 'Settings',
'backup_file_location' => 'File Backup Location',
'backup_file_locations' => 'File Backup Locations',
'backup_file_location_instructions' => 'Put simply; what do you want to include for the file backup? Put the full path, one per line that you want to backup.',
'backup_store_location' => 'Backup Store Location',
'backup_store_location_instructions' => 'Where do you want to store your backups? Ideally, this wouldn\'t be in your site\'s document root (for security) but if it is it won\'t be included within the file backup. Remember to make this directory writable by your webserver so chmod it to either 0666 or 0777.',
'license_number' => 'License Number',
'configure_backups' => 'Backup Settings',
'configure_cron' => 'Configure Cron',
'enable_cron' => 'Enable Cron',
'cron_control' => 'Cron Control',
'cron_notify_emails' => 'Notification Emails',
'cron_notify_emails_instructions' => 'Put a single email address on each line that you want to be notified on completion of the backup(s). If no email addresses are entered no notification will be sent. Invalid email addresses will be stripped.',
'cron_attach_backups' => 'Attach Backups To Email',
'cron_attach_backups_instructions' => 'By default Backup Pro will send a link to download the email but if you\'d like to have the backup files sent as an attachment with the notification email we can do that too. ',
'cron_attach_threshold' => 'Attachment Max Size',
'cron_attach_threshold_instructions' => 'Depending on the size of your site the backups can get pretty large. Sometimes, too large for your email provider. If the attachment size is in bytes larger than the value here links the backups aren\'t attached and links to download are included instead. ',
'auto_threshold_instructions' => 'Over time the amount of space used by Backup Pro can be quite considerable. To keep things sane Backup Pro can watch the space used and respond accoringly by removing older backups to make space for newer backups. Be sure to enter the maximum amount in bytes. If set to 0 than no threshold is enforced.',
'auto_threshold' => 'Auto Prune Threshold',
'allowed_access_levels' => 'Allowed Access Levels',
'allowed_access_levels_instructions' => 'Backup Pro will initially only allow Super Admins access the settings, regardless of who can access the module, but if you need to allow other groups select them from the list.',
'settings_updated' => 'Settings Updated',
'settings_update_fail' => 'Couldn\'t Update Settings',

'cron_command_instructions' => 'Use the below commands for your Cron based on the type of backup you\'d like to automate. ',
'cron_notification' => 'Backup Pro Cron Notification',
'cron_control_instructions' => 'To make sure requests to the Cron functionality is secured you have to include a random query paramater to each request. Initially, Backup Pro creates this for you but if you\'d like to change it do so here',
'exclude_paths' => 'Exclude Paths',
'exclude_paths_instructions' => 'By default Backup Pro will backup everything within your site\'s document root but for some sites that just won\'t work. If you want to exclude anything from the backup put the full path to the document or file here, one per line. ',

'files_dir_not_writable' => 'Files backup directory is not writable. Make sure the permissions for "#files_dir#" are set to 0666 or 0777.',
'files_dir_missing' => 'Files backup directory is missing. Make sure "#files_dir#" exists and is writable.',
'db_dir_not_writable' => 'Database backup directory is not writable. Make sure the permissions for "#db_dir#" are set to 0666 or 0777.',
'db_dir_missing' => 'Database backup directory is missing. Make sure "#db_dir#" exists and is writable.',
'database' => 'Database',
'type' => 'Type',
'restore_db' => 'Restore Database',
'backups_deleted' => 'Backups Deleted',
'back_dir_not_writable' => 'The backup directory isn\'t writable!',
'module_instructions' => 'Backup Pro is an advanced backup management module for EE 2.0 that allows administrators the ability to 
						  backup and restore their site\'s database as well as backing up the entire file system. Both the 
						  files and database backups are compressed to save space and available for download. <br /><br />
						  To take a backup simply click the button for the type you\'d like. Once it\'s complete you can 
						  download it from the list(s) below. If you\'d like to restore your database just click "restore" 
						  from the database backup list. Note that backing up your files may take a couple minutes to finish. ',


'cron_message' => '
Hello,

Your backup has ran successfully.

Backup Pro',
'cron_txt_message' => '',

'file_backup' => 'File Backup',
'db_backup' => 'Database Backup',
'combined' => 'Combined Backup (both file and database in one run)',

'missing_license_number' => 'Please enter your license number. <a href="#config_url#">Enter License</a> or <a href="http://devot-ee.com/add-ons/backup-pro/">Buy A License</a>',

'configure_ftp' => 'Configure FTP Sync',
'ftp_hostname' => 'FTP Hostname',
'ftp_hostname_instructions' => 'The address or domain to the remote server. Don\'t include any prefix like http:// or ftp://',
'ftp_username' => 'FTP Username',
'ftp_username_instructions' => 'If you don\'t know what this is there\'s a good chance you\'ll have to talk to your host to get FTP sync up and running. ',
'ftp_password' => 'FTP Password',
'ftp_password_instructions' => 'The password is encrypted for security before storage.',
'ftp_port' => 'FTP Port',
'ftp_port_instructions' => 'The default is 21 but if your host uses a differnt port for FTP update it here.',
'ftp_passive' => 'Passive Mode',
'ftp_passive_instructions' => 'If checked then all transfers will be done using the PASV method. ',
'ftp_store_location' => 'FTP Store Location',
'ftp_store_location_instructions' => 'Where on the remote server do you want to store the backups. This directory has to exist in before the settings can be saved.',
'ftp_directory_missing' => 'The FTP remote directory doesn\'t exist.',

'configure_s3' => 'Configure Amazon S3 Sync',
's3_access_key' => 'Access Key ID',
's3_access_key_instructions' => 'Your Access Key ID identifies you as the party responsible for your S3 service requests. You can find this by signing into your <a href="http://aws.amazon.com" target="_blank">Amazon Web Services account</a>',
's3_secret_key' => 'Secret Access Key',
's3_secret_key_instructions' => 'This key is just a long string of characters (and not a file) that you use to calculate the digital signature that you include in the request. For security, both your Access key and Secret key are encrypted before storage.',
's3_bucket' => 'Bucket Name',
's3_bucket_instructions' => 'This is basically the master folder name your backups will be stored in. If it doesn\'t exist it\'ll  be created. If you don\'t enter a bucket name one will be created for you.',


'configure_cf' => 'Configure Rackspace Cloud Files',
'cf_username' => 'Rackspace Username',
'cf_username_instructions' => 'Use your Rackspace Cloud username as the username for the API. For security, both your Access key and Secret key are encrypted before storage.',
'cf_api' => 'API Access key',
'cf_api_instructions' => 'Obtain your API access key from the Rackspace Cloud Control Panel in the <a href="https://manage.rackspacecloud.com/APIAccess.do" target="_blank">Your Account</a>. For security, both your Access key and Secret key are encrypted before storage.',
'cf_bucket' => 'Bucket Name',
'cf_bucket_instructions' => 'This is basically the master folder name your backups will be stored in. If it doesn\'t exist it\'ll  be created. If you don\'t enter a bucket name one will be created for you.',
'cf_connect_fail' => 'The Rackspace Cloud Files credentials aren\'t correct.',
'cf_location' => 'Account Location',
'cf_location_instructions' => 'You can determine the location to use based on the Rackspace retail site which was used to create your account. <a href="http://www.rackspacecloud.com">US</a> or <a href="http://www.rackspace.co.uk">UK</a>.',

'cf_location_types' => array('us' => 'US', 'uk' => 'UK'),
'log_database_backup' => 'Database backup taken.',
'log_file_backup' => 'File backup taken.',
'log_backup_downloaded' => 'Backup downloaded.',
'log_backup_deleted' => 'Backups deleted.',
'log_settings_updated' => 'Backup Pro settings updated',

'backup_in_progress_instructions' => '<strong>DO NOT DO THE FOLLOWING UNTIL THE BACKUP IS COMPLETE:</strong><br />
    1. Close your browser<br />
    2. Reload this page<br />
    3. Navigate away from this page<br />
',
'backup_in_progress' => 'Backup Running...',
'backup_progress_bar_start' => 'Backup Starting...',
'backup_progress_bar_table_start' => 'Starting backup of table: ',
'backup_progress_bar_table_stop' => 'Completed backup of table: ',
'backup_progress_bar_database_stop' => 'Completed database backup.',
'backup_progress_bar_start_file_exclude' => 'Starting file exclusion list...',
'backup_progress_bar_stop_file_exclude' => 'Completed file exclusion list...',
'backup_progress_bar_start_file_list' => 'Starting file generation list...',
'backup_progress_bar_stop_file_list' => 'Completed file generation list...',
'backup_progress_bar_create_archive' => 'Creating the archive...',
'backup_progress_bar_start_s3' => 'Starting transfer to S3 (this may take a minute)...',
'backup_progress_bar_stop_s3' => 'Completed transfer to S3...',
'backup_progress_bar_start_ftp' => 'Starting FTP transfer to remote server (this may take a minute)...',
'backup_progress_bar_stop_ftp' => 'Completed FTP transfer to remote server',
'backup_progress_bar_start_cf' => 'Starting transfer to Rackspace Cloud (this may take a minute)...',
'backup_progress_bar_stop_cf' => 'Completed transfer to Rackspace Cloud...',


'backup_progress_bar_stop' => 'Backup Completed!',

'max_db_backups' => 'Maximum Database Backups',
'max_db_backups_instructions' => 'Enter the maximum amount of database backups you want to store locally. Note that only local backups (remote and local) will be removed. Enter 0 to disable.',
'max_file_backups' => 'Maximum File Backups',
'max_file_backups_instructions' => 'Enter the maximum amount of file backups you want to store locally. Note that only local backups (remote and local) will be removed. Enter 0 to disable.',

'date_format' => 'Date Format',
'date_format_instructions' => 'The date format you want Backup Pro to use when displaying backups. Note that the format should conform to the <a href="http://expressionengine.com/user_guide/templates/date_variable_formatting.html#date-formatting-codes" target="_blank">ExpressionEngine date format</a>.',

'taken_on' => 'Taken On',
'size' => 'Size',
''=>''
);