<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 /**
 * mithra62 - Backup Pro
 *
 * @package		mithra62:m62_backup
 * @author		Eric Lamb
 * @copyright	Copyright (c) 2011, mithra62, Eric Lamb.
 * @link		http://mithra62.com/projects/view/backup-pro/
 * @version		1.8.2
 * @filesource 	./system/expressionengine/third_party/m62_backup/language/spanish/
 */

/**
 * Language Array
 * ExpressionEngine language translation array
 * @var array
 */
$lang = array(

// Required for MODULES page

'm62_backup_module_name'		=> 'Backup Pro',
'm62_backup_module_description'	=> 'Interfaz para crear copias de seguridad de la base de datos y los archivos de su sitio. ',

//----------------------------------------

// Additional Key => Value pairs go here

// END

'index' => 'Ver Copias de Seguridad',
'no_backups' => 'No Hay Copias de Seguridad',
'backups' => 'Copias de Seguridad',
'database_backups' => 'Copias de Seguridad de Base de Datos',
'backup_db' => 'Crear Copia de la Base de Datos',
'db_backup_created' => 'Copia de Base de Datos Creado',
'file_backup_created' => 'Copia de Archivos Creado',
'database_backups' => 'Copias de Seguridad de Base de Datos',
'file_name' => 'Nombre de Archivo',
'backup_files' => 'Crear Copias de Seguridad de Archivos',
'file_backups' => 'Copias de Seguridad de Archivos',
'delete_selected' => 'Borrar Seleccionados',
'delete_backup' => 'Borrar Copias de Seguridad',
'action' => 'Acción',
'download' => 'Descargar',
'restore' => 'Restorar',
'date_taken' => 'Fecha Tomada',
'db_backup_not_found' => 'Copia de Seguridad de Base De Datos No Encontrada',
'file_size' => 'Tamaño de Archivo',
'file_backup_failure' => 'No se ha podido crear Copias de Seguridad de los Archivos',
'db_backup_failure' => 'No se ha podido crear Copias de Seguridad de la Base de Datos',
'backups_not_found' => 'Copia de Seguridad No Encontrada',
'delete_backup_confirm' => '¿Está seguro que quiere eliminar las copias de seguridad de abajo?',
'restore_db_question' => '¿Está seguro que quiere restaurar la base de datos de abajo?',
'database_restored' => '¡Base de Datos Restaurado!',
'files' => 'Archivos',

'settings' => 'Ajustes',
'backup_file_location' => 'Ubicación para Copias de Seguridad',
'backup_file_locations' => 'Ubicaciones para Copias de Seguridad',
'backup_file_location_instructions' => 'Simplemente: ¿Que quiere incluir en la copia de seguridad? Incluye el directorio completo, uno por cada línea, por ubicación que quiere incluir en la copia de seguridad.',
'backup_store_location' => 'Ubicación para Almacenar Copias de Seguridad',
'backup_store_location_instructions' => '¿Donde quiere almacenar sus copias de seguridad? Lo ideal sería fuera de el directorio raíz de su sitio (por razones de seguridad) pero si está, no será incluido en la copia de seguridad. Asegure que el directorio elegido sea gravable por su servidor web, así que utiliza chmod para fijar los permisos 0666 ó 0777.',
'license_number' => 'Número de Licencia',
'configure_backups' => 'Ajustes de Copias de Seguridad',
'configure_cron' => 'Configurar Cron',
'enable_cron' => 'Habilitar Cron',
'cron_control' => 'Control de Cron',
'cron_notify_emails' => 'Emails de Notificación',
'cron_notify_emails_instructions' => 'Incluye una dirección de email en cada línea para que sean notificados cuando se termina la copia de seguridad. Si no se incluye direcciones de email, no se enviará notificaciones. Direcciones de email inválidos serán eliminados.',
'cron_attach_backups' => 'Adjuntar Copias de Seguridad al Email',
'cron_attach_backups_instructions' => 'Por defecto, Backup Pro enviará un enlace para descargar el email. También podemos adjunta los archivos de la copia de seguridad con al email de notificación. ',
'cron_attach_threshold' => 'Tamaño Máximo de Archivo Adjunta',
'cron_attach_threshold_instructions' => 'Dependiendo del tamaño de su sitio, las copias de seguridad pueden ser bastante grandes, a veces demasiado grande para su proveedor de email. Si el archivo es más grande que éste valor en bytes, se insertará un enlace para descargar el archivo antes de adjuntarlo al email. ',
'auto_threshold_instructions' => 'Con el tiempo, el espacio que utilice Backup Pro puede ser considerable. Backup Pro puede vigilar el espacio utilizado y responder eliminando copias de seguridad más antiguos para así liberar espacio para copias de seguridad más actuales. Asegura de incluir el espacio máximo en bytes para las copias de seguridad de Backup Pro. Si está fijado en 0, no se aplicará el umbral.',
'auto_threshold' => 'Umbral de Auto-Eliminación',
'allowed_access_levels' => 'Niveles de Acceso Permitidos',
'allowed_access_levels_instructions' => 'Por defecto, Backup Pro solo permite el acceso a los ajustes a Super Admins, independientemente a los grupos que pueden acceder al módulo, pero si necesita que otros grupos pueden acceder a los ajustes seleccionados de la lista.',
'settings_updated' => 'Ajustes Actualizados',
'settings_update_fail' => 'No se ha podido actualizar los ajuste',

'cron_command_instructions' => 'Utilice el comando abajo para Cron, basado en el tipo de copia de seguridad que quiere automatizar. ',
'cron_notification' => 'Notificación de Cron de Backup Pro',
'cron_control_instructions' => 'Para asegurar que las peticiones a las funcionalidades de Cron estén seguros, debe incluir un parámetro aleatorio para cada petición. Por defecto, Backup Pro lo crea automáticamente pero si desea, lo puede cambiar aquí',
'exclude_paths' => 'Excluir Directorios',
'exclude_paths_instructions' => 'Por defecto, Backup Pro hará una copia de todo en el directorio raiz de su sitio, pero por algunos sitios esto no puede funcionar. Si desea excluir cualquier directorio de la copia de seguridad, incluye los directorios o archivos aquí, una línea por cada. ',

'files_dir_not_writable' => 'El directorio de copia de seguridad no es gravable. Asegure que los permisos del directorio "#files_dir#" están fijados en 0666 ó 0777.',
'files_dir_missing' => 'No se ha encontrado el directorio para las copias de seguridad. Asegure que el directorio "#files_dir#" existe y que sea gravable.',
'db_dir_not_writable' => 'El directorio de copia de seguridad no es gravable. Asegure que los permisos de "#db_dir#" están fijados en 0666 ó 0777.',
'db_dir_missing' => 'No se ha encontrado el directorio para las copias de seguridad. Asegure que "#db_dir#" existe y que sea gravable.',
'database' => 'Base de Datos',
'type' => 'Tipo',
'restore_db' => 'Restaurar Base de Datos',
'backups_deleted' => 'Copias de Seguridad Borradas',
'back_dir_not_writable' => '!El directorio de las copias de seguridad no es gravable!',
'module_instructions' => 'Backup Pro es un módulo de gestión avanzado para EE 2.0 que permite a administradores hacer
						  copias de seguridad y restaurar los bases de datos de sus sitios además de hacer copias de seguridad
						  de todos los archivos del sistema. Las copias de seguridad de base de datos y archivos son comprimidos
						  para el almacenamiento y disponibles para la descarga. <br/><br/>
						  Para realizar una copia de seguridad, simplemente haga clic en el botón del tipo de copia que quiere realizar.
						  Una vez terminada, puede descargarlo de la lista de abajo. Si desea restaurar su base de datos, simplemente haga
						  clic en "restaurar" el la lista de copias de seguridad de bases de datos. Nota: Hacer copias de sus archivos
						  puede tardar algunos minutos. ',


'cron_message' => '
Hola,

Su copia de seguridad se ha realizado con éxito.

Backup Pro',
'cron_txt_message' => '',

'file_backup' => 'Copia de Archivos',
'db_backup' => 'Copia de Base de Datos',
'combined' => 'Copia Combinado (archivos y base de datos a la vez)',

'missing_license_number' => 'Por favor, incluye su número de licencia. <a href="#config_url#">Incluir Licencia</a> o <a href="http://devot-ee.com/add-ons/backup-pro/">Comprar Una Licencia</a>',

'configure_ftp' => 'Configurar Sincronización FTP',
'ftp_hostname' => 'Hostname FTP',
'ftp_hostname_instructions' => 'La dirección o el dominio del servidor remoto. No incluye prefijos como http:// o ftp://',
'ftp_username' => 'Nombre Usuario FTP',
'ftp_username_instructions' => 'Si no lo sabe, debe contactar con su host para poner en marcha la sincronización FTP. ',
'ftp_password' => 'Contraseña FTP',
'ftp_password_instructions' => 'La contraseña será cifrado antes de almacenarlo por razones de seguridad.',
'ftp_port' => 'Puerto FTP',
'ftp_port_instructions' => 'El puerto por defecto es el 21 pero si su host utiliza otro puerto, puede introducirlo aquí.',
'ftp_passive' => 'Modo Pasivo',
'ftp_passive_instructions' => 'Si es seleccionado, todas las transferencias serán realizadas utilizando el método PASV. ',
'ftp_store_location' => 'Ubicación FTP',
'ftp_store_location_instructions' => '¿Donde quiere guardar las copias de seguridad? El directorio debe existir antes de guardar éste ajuste.',
'ftp_directory_missing' => 'El directorio remota FTP no existe.',

'configure_s3' => 'Configurar Sincronización Amazon S3',
's3_access_key' => 'Clave ID de Acceso',
's3_access_key_instructions' => 'Su Clave ID de Acceso le identifique como responsable de sus peticiones de servicio S3. Puede encontrar éste clave iniciando una sesión en su <a href="http://aws.amazon.com" target="_blank">Cuenta de Servicios Web de Amazon</a>',
's3_secret_key' => 'Clave de Acceso Secreto',
's3_secret_key_instructions' => 'Ésta clave es solo una línea larga de caracteres (no es un archivo) que se utilice para calcular la firma digital que se incluye en la petición. Por razones de seguridad, su clave de acceso y clave de acceso secreto son cifrados antes de ser guardados.',
's3_bucket' => 'Nombre de Bidón',
's3_bucket_instructions' => 'Esto es básicamente el nombre del directorio primario donde se guardará sus copias de seguridad. Si no existe, será creada automáticamente. Si no incluye un nombre para el bidón, se creará un nombre automáticamente.',


'configure_cf' => 'Configurar Archivos para Rackspace Cloud',
'cf_username' => 'Nombre de usuario de Rackspace',
'cf_username_instructions' => 'Utilice su nombre de usuario de Rackspace Cloud como su nombre de usuario para el API. Por razones de seguridad, su clave de acceso y clave secreta serán cifradas antes de ser guardadas.',
'cf_api' => 'Clave de Acceso API',
'cf_api_instructions' => 'Obtenga su clave de acceso API del Panel de Control de Rackspace en <a href="https://manage.rackspacecloud.com/APIAccess.do" target="_blank">Su Cuenta</a>. Por razones de seguridad, su clave de acceso y clave secreta serán encriptadas antes de ser guardadas.',
'cf_bucket' => 'Nombre de Bidón',
'cf_bucket_instructions' => 'Esto es básicamente el nombre del directorio primario donde se guardará sus copias de seguridad. Si no existe, será creada automáticamente. Si no incluye un nombre para el bidón, se creará un nombre automáticamente.',
'cf_connect_fail' => 'Sus credenciales de Rackspace Cloud no son correctos.',
'cf_location' => 'Ubicación de Cuenta',
'cf_location_instructions' => 'Puede determinar la ubicación a utilizar basado en el sitio de venta de Rackspace que fue utilizado para crear su cuenta. <a href="http://www.rackspacecloud.com">EEUU</a> o <a href="http://www.rackspace.co.uk">GB</a>.',

'cf_location_types' => array('us' => 'EEUU', 'uk' => 'GB'),
'log_database_backup' => 'Copia de Seguridad de Bases de Datos hecho.',
'log_file_backup' => 'Copia de Seguridad de Archivos hecho.',
'log_backup_downloaded' => 'Copia de Seguridad descargada.',
'log_backup_deleted' => 'Copia de Seguridad borrada.',
'log_settings_updated' => 'Ajustes de Backup Pro actualizadas',

'backup_in_progress_instructions' => '<strong>NO HAGA LO SIGUIENTE HASTA QUE SE TERMINE LA COPIA DE SEGURIDAD:</strong><br />
    1. Cerrar su navegador<br />
    2. Recargar la página<br />
    3. Navegar a otra página<br />
',
'backup_in_progress' => 'Copia de Seguridad en Curso...',
'backup_progress_bar_start' => 'Empezando Copia de Seguridad...',
'backup_progress_bar_table_start' => 'Empezando copia de seguridad de la tabla: ',
'backup_progress_bar_table_stop' => 'Terminado copia de seguridad de la tabla: ',
'backup_progress_bar_database_stop' => 'Copia de seguridad de la base de datos terminado.',
'backup_progress_bar_start_file_exclude' => 'Empezando lista de exclusión de archivos...',
'backup_progress_bar_stop_file_exclude' => 'Terminado lista de exclusión de archivos...',
'backup_progress_bar_start_file_list' => 'Empezando lista de generación de archivos...',
'backup_progress_bar_stop_file_list' => 'Terminado lista de generación de archivos...',
'backup_progress_bar_create_archive' => 'Creando archivo...',
'backup_progress_bar_start_s3' => 'Empezando transferencia a S3 (esto puede tardar un minuto)...',
'backup_progress_bar_stop_s3' => 'Terminado transferencia a S3...',
'backup_progress_bar_start_ftp' => 'Empezando transferencia FTP a servidor remoto (esto puede tardar un minuto)...',
'backup_progress_bar_stop_ftp' => 'Terminado transferencia FTP a servidor remoto',
'backup_progress_bar_start_cf' => 'Empezando transferencia a Rackspace Cloud (esto puede tardar un minuto)...',
'backup_progress_bar_stop_cf' => 'Terminado transferencia a Rackspace Cloud...',


'backup_progress_bar_stop' => '¡Copia de Seguridad Realizada!',

'max_db_backups' => 'Número Máximo de Copias de Seguridad de Base de Datos',
'max_db_backups_instructions' => 'Incluye el número máximo de copias de seguridad de bases de datos que quiere guardar localmente. Nota: Solo se eliminará copias locales (remotas o locales). Introduzca 0 para inhabilitarlo.',
'max_file_backups' => 'Número Máximo de Copias de Seguridad de Archivos',
'max_file_backups_instructions' => 'Incluye el número máximo de copias de seguridad de archivos que quiere guardar localmente. Nota: Solo se eliminará copias locales (remotas o locales). Introduzca 0 para inhabilitarlo.',

'date_format' => 'Formato de Fechas',
'date_format_instructions' => 'El formato de fechas que Backup Pro debe utilizar cuando muestra copias de seguridad. Nota: El formato debe conformar a los <a href="http://expressionengine.com/user_guide/templates/date_variable_formatting.html#date-formatting-codes" target="_blank">formatos de fechas de ExpressionEngine</a>.',

'taken_on' => 'Asumido',
'size' => 'Tamaño',
''=>''
);