<?php
/**
 *
 * This file is part of the phpBB Forum Software package.
 *
 * @copyright (c) phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * For full copyright and license information, please see
 * the docs/CREDITS.txt file.
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// Common installer pages
$lang = array_merge($lang, array(
	'INSTALL_PANEL'	=> 'Panel de Instalación',
	'SELECT_LANG'	=> 'Seleccionar idioma',

	'STAGE_INSTALL'	=> 'Instalación de phpBB',

	// Introduction page
	'INTRODUCTION_TITLE'	=> 'Introducción',
	'INTRODUCTION_BODY'		=> '¡Bienvenido a phpBB3!<br /><br />phpBB® es la solución de foros de código abierto más utilizado en el mundo. phpBB3 es la última entrega de una línea de paquetes que comenzó en el año 2000. Al igual que sus predecesores, phpBB3 tiene varias características, fácil de usar y totalmente apoyado por el Equipo de phpBB. phpBB3 mejora en gran medida de lo que hizo phpBB2 popular, y añade las funciones más solicitadas que no estaban presentes en versiones anteriores. Esperamos que supere sus expectativas.<br /><br />Este sistema de instalación le guiará a instalar phpBB3, actualizar a la última versión de phpBB3 de pasados lanzamientos, así como la conversión a phpBB3 desde un sistema de foros diferentes (incluyendo phpBB2). Para obtener más información, le invitamos a leer <a href="../docs/INSTALL.html">la guía de instalación</a>.<br /><br />Para leer la licencia de phpBB3 o aprender acerca de cómo obtener soporte y nuestra postura sobre ello, por favor, seleccione una de las opciones correspondientes en el menú lateral. Para continuar, seleccione la pestaña correspondiente.',

	// Support page
	'SUPPORT_TITLE'		=> 'Soporte',
	'SUPPORT_BODY'		=> 'Se proporcionará soporte completo para la versión estable actual de phpBB3, de forma gratuita. Esto incluye:</p><ul><li>instalación</li><li>configuración</li><li>cuestiones técnicas</li><li>problemas relacionados con errores potenciales en el software</li><li>actualizaciones de las versiones Release Candidate (RC) a la última versión estable</li><li>conversiones desde phpBB 2.0.x a phpBB3</li><li>conversiones desde otros software de foros a phpBB3 (por favor, consulte el <a href="https://www.phpbb.com/community/viewforum.php?f=486">Foro de Conversiones</a>)</li></ul><p>Animamos a los usuarios que todavía trabajan con versiones Beta de phpBB3, el reemplazar su instalación con una nueva copia de la última versión.</p><h2>Extensiones / Estilos</h2><p>Para cuestiones relacionadas con extensiones, por favor, escriba en el <a href="https://www.phpbb.com/community/viewforum.php?f=451">Foro de Extensiones</a>.<br />Para cuestiones relacionadas con estilos, plantillas y temas, por favor, escriba en el <a href="https://www.phpbb.com/community/viewforum.php?f=471">Foro de Estilos</a>.<br /><br />Si su pregunta se refiere a un paquete específico, por favor, escriba directamente en el tema dedicado al paquete.</p><h2>Obtención de Soporte</h2><p><a href="https://www.phpbb.com/community/viewtopic.php?f=14&amp;t=571070">El Paquete de Bienvenida de phpBB</a><br /><a href="https://www.phpbb.com/support/">Sección de Soporte</a><br /><a href="https://www.phpbb.com/support/docs/en/3.1/ug/quickstart/">Guía de Inicio Rápido</a> (en inglés).<br /><br />Para asegurarse que está actualizado a la última versión, ¿porqué no <a href="https://www.phpbb.com/support/">se suscribe a nuestra lista de correo</a>?<br /><br />',

	// License
	'LICENSE_TITLE'		=> 'Licencia Pública General',

	// Install page
	'INSTALL_INTRO'	=> 'Bienvenido a la Instalación',
	'INSTALL_INTRO_BODY'		=> 'Con esta opción, es posible instalar phpBB en su servidor.</p><p>Para proceder, necesita los configuración de su base de datos. Si no conoce los configuración de su base de datos, por favor, contacte a su proveedor de hosting y pregúntele. No podrá continuar sin ellos. Necesita:</p>
	<ul>
		<li>El tipo de base de datos - la base de datos que va a usar.</li>
		<li>El nombre de servidor o DSN - la dirección del servidor.</li>
		<li>El puerto del servidor - (la mayoría de las veces no se necesita).</li>
		<li>El nombre - El nombre de la base de datos en el servidor.</li>
		<li>Usuario y clave - los datos para identificarse en la base de datos.</li>
	</ul>

	<p><strong>Nota:</strong> Si instala usando SQLite, debería ingresar la ruta completa al archivo de su base de datos en el campo DSN y dejar los campos usuario y clave en blanco. Por razones de seguridad, debería asegurarse de que el archivo de la base de datos no está alojado en una carpeta accesible desde la web.</p>

	<p>phpBB3 soporta las siguientes bases de datos:</p>
	<ul>
		<li>MySQL 3.23 ó superior (MySQLi también)</li>
		<li>PostgreSQL 8.3+</li>
		<li>SQLite 2.8.2+</li>
        <li>SQLite 3.6.15+</li>
		<li>MS SQL Server 2000 ó superior (directamente o vía ODBC)</li>
		<li>MS SQL Server 2005 ó superior (nativo)</li>
		<li>Oracle</li>
	</ul>

	<p>Se mostrarán solamente las bases de datos soportadas por su servidor.',
	'ACP_LINK'	=> 'Lléveme al <a href="%1$s">PCA</a>',
));

// Requirements translation
$lang = array_merge($lang, array(
	// Filesystem requirements
	'FILE_NOT_EXISTS'			=> 'El archivo no existe',
	'FILE_NOT_EXISTS_EXPLAIN'	=> 'Para poder instalar phpBB el archivo %1$s necesita existir.',
	'FILE_NOT_WRITABLE'			=> 'No se puede escribir en el archivo',
	'FILE_NOT_WRITABLE_EXPLAIN'	=> 'Para poder instalar phpBB se debe poder escribir en el archivo %1$s.',

	'DIRECTORY_NOT_EXISTS'				=> 'El directorio no existe',
	'DIRECTORY_NOT_EXISTS_EXPLAIN'		=> 'Para poder instalar phpBB el directorio %1$s necesita existir.',
	'DIRECTORY_NOT_WRITABLE'			=> 'No se puede escribir en el directorio',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN'	=> 'Para poder instalar phpBB se debe poder escribir en el directorio %1$s.',

	// Server requirements
	'PHP_VERSION_REQD'					=> 'Versión PHP',
	'PHP_VERSION_REQD_EXPLAIN'			=> 'phpBB requiere la versión 5.4.0 de PHP o superior.',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'La función PHP getimagesize() es requerida',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> 'Para que phpBB funcione correctamente, la función getimagesize debe estar disponible.',
	'PCRE_UTF_SUPPORT'					=> 'Soporte PCRE UTF-8',
	'PCRE_UTF_SUPPORT_EXPLAIN'			=> 'phpBB no se ejecutará si la instalación de PHP no está compilado con soporte UTF-8 en la extensión PCRE.',
	'PHP_JSON_SUPPORT'					=> 'Soporte PHP JSON',
	'PHP_JSON_SUPPORT_EXPLAIN'			=> 'Para que phpBB funcione correctamente, la extensión PHP JSON debe estar disponible.',
	'PHP_SUPPORTED_DB'					=> 'Bases de datos soportadas',
	'PHP_SUPPORTED_DB_EXPLAIN'			=> 'Debe tener soporte de al menos una base de datos compatible con PHP. Si se muestran los módulos de base de datos como no disponibles, deberá comunicarse con su proveedor de hosting, o revise la documentación de instalación de PHP relevante.',

	'RETEST_REQUIREMENTS'	=> 'Probar de nuevo los requerimientos',

	'STAGE_REQUIREMENTS'	=> 'Comprobar requerimientos'
));

// General error messages
$lang = array_merge($lang, array(
	'INST_ERR_MISSING_DATA'		=> 'You must fill out all fields in this block.',
	'PHPBB_ALREADY_INSTALLED'	=> 'phpBB is already installed.'
));

// Data obtaining translations
$lang = array_merge($lang, array(
	'STAGE_OBTAIN_DATA'	=> 'Set installation data',

	//
	// Admin data
	//
	'STAGE_ADMINISTRATOR'	=> 'Administrator details',

	// Form labels
	'ADMIN_CONFIG'				=> 'Administrator configuration',
	'ADMIN_PASSWORD'			=> 'Administrator password',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Confirm administrator password',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'Please enter a password between 6 and 30 characters in length.',
	'ADMIN_USERNAME'			=> 'Administrator username',
	'ADMIN_USERNAME_EXPLAIN'	=> 'Please enter a username between 3 and 20 characters in length.',

	// Errors
	'INST_ERR_EMAIL_INVALID'		=> 'The email address you entered is invalid.',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'The passwords you entered did not match.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'The password you entered is too long. The maximum length is 30 characters.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'The password you entered is too short. The minimum length is 6 characters.',
	'INST_ERR_USER_TOO_LONG'		=> 'The username you entered is too long. The maximum length is 20 characters.',
	'INST_ERR_USER_TOO_SHORT'		=> 'The username you entered is too short. The minimum length is 3 characters.',

	//
	// Board data
	//
	// Form labels
	'BOARD_CONFIG'		=> 'Bulletin board configuration',
	'DEFAULT_LANGUAGE'	=> 'Default language',
	'BOARD_NAME'		=> 'Title of the board',
	'BOARD_DESCRIPTION'	=> 'Short description of the board',

	//
	// Database data
	//
	'STAGE_DATABASE'	=> 'Database settings',

	// Form labels
	'DB_CONFIG'				=> 'Database configuration',
	'DBMS'					=> 'Database type',
	'DB_HOST'				=> 'Database server hostname or DSN',
	'DB_HOST_EXPLAIN'		=> 'DSN stands for Data Source Name and is relevant only for ODBC installs. On PostgreSQL, use localhost to connect to the local server via UNIX domain socket and 127.0.0.1 to connect via TCP. For SQLite, enter the full path to your database file.',
	'DB_PORT'				=> 'Database server port',
	'DB_PORT_EXPLAIN'		=> 'Leave this blank unless you know the server operates on a non-standard port.',
	'DB_PASSWORD'			=> 'Database password',
	'DB_NAME'				=> 'Database name',
	'DB_USERNAME'			=> 'Database username',
	'TABLE_PREFIX'			=> 'Prefix for tables in database',
	'TABLE_PREFIX_EXPLAIN'	=> 'The prefix must start with a letter and must only contain letters, numbers and underscores.',

	// Database options
	'DB_OPTION_MSSQL'		=> 'MSSQL Server 2000+',
	'DB_OPTION_MSSQL_ODBC'	=> 'MSSQL Server 2000+ via ODBC',
	'DB_OPTION_MSSQLNATIVE'	=> 'MSSQL Server 2005+ [ Native ]',
	'DB_OPTION_MYSQL'		=> 'MySQL',
	'DB_OPTION_MYSQLI'		=> 'MySQL with MySQLi Extension',
	'DB_OPTION_ORACLE'		=> 'Oracle',
	'DB_OPTION_POSTGRES'	=> 'PostgreSQL',
	'DB_OPTION_SQLITE'		=> 'SQLite 2',
	'DB_OPTION_SQLITE3'		=> 'SQLite 3',

	// Errors
	'INST_ERR_NO_DB'				=> 'Cannot load the PHP module for the selected database type.',
	'INST_ERR_DB_INVALID_PREFIX'	=> 'The prefix you entered is invalid. It must start with a letter and must only contain letters, numbers and underscores.',
	'INST_ERR_PREFIX_TOO_LONG'		=> 'The table prefix you have specified is too long. The maximum length is %d characters.',
	'INST_ERR_DB_NO_NAME'			=> 'No database name specified.',
	'INST_ERR_DB_FORUM_PATH'		=> 'The database file specified is within your board directory tree. You should put this file in a non web-accessible location.',
	'INST_ERR_DB_CONNECT'			=> 'Could not connect to the database, see error message below.',
	'INST_ERR_DB_NO_ERROR'			=> 'No error message given.',
	'INST_ERR_PREFIX'				=> 'Tables with the specified prefix already exist, please choose an alternative.',
	'INST_ERR_DB_NO_MYSQLI'			=> 'The version of MySQL installed on this machine is incompatible with the “MySQL with MySQLi Extension” option you have selected. Please try the “MySQL” option instead.',
	'INST_ERR_DB_NO_SQLITE'			=> 'The version of the SQLite extension you have installed is too old, it must be upgraded to at least 2.8.2.',
	'INST_ERR_DB_NO_SQLITE3'		=> 'The version of the SQLite extension you have installed is too old, it must be upgraded to at least 3.6.15.',
	'INST_ERR_DB_NO_ORACLE'			=> 'The version of Oracle installed on this machine requires you to set the <var>NLS_CHARACTERSET</var> parameter to <var>UTF8</var>. Either upgrade your installation to 9.2+ or change the parameter.',
	'INST_ERR_DB_NO_POSTGRES'		=> 'The database you have selected was not created in <var>UNICODE</var> or <var>UTF8</var> encoding. Try installing with a database in <var>UNICODE</var> or <var>UTF8</var> encoding.',

	//
	// Email data
	//
	'EMAIL_CONFIG'	=> 'E-mail configuration',

	//
	// Server data
	//
	// Form labels
	'SERVER_CONFIG'				=> 'Server configuration',
	'SCRIPT_PATH'				=> 'Script path',
	'SCRIPT_PATH_EXPLAIN'		=> 'The path where phpBB is located relative to the domain name, e.g. <samp>/phpBB3</samp>.',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Gracias, La Administración del Foro',
	'CONFIG_SITE_DESC'				=> 'Un breve texto para describir su Foro',
	'CONFIG_SITENAME'				=> 'sudominio.com',

	'DEFAULT_INSTALL_POST'			=> 'Este es un mensaje de ejemplo en su instalación phpBB3. Puede borrar este mensaje, este tema e incluso este foro si quiere, ¡ya que todo parece estar funcionando! Pero es buena idea usar la categoría y el foro creados por defecto para copiar los permisos en los futuros foros a crear. Le simplificará la tarea. ¡Gracias!',

	'FORUMS_FIRST_CATEGORY'			=> 'Mi primera categoría',
	'FORUMS_TEST_FORUM_DESC'		=> 'Es solo para probar el foro.',
	'FORUMS_TEST_FORUM_TITLE'		=> 'Foro de Prueba 1',

	'RANKS_SITE_ADMIN_TITLE'		=> 'Administrador del Sitio',
	'REPORT_WAREZ'					=> 'El mensaje contiene enlaces a software ilegal o pirateado (warez).',
	'REPORT_SPAM'					=> 'El mensaje reportado solo tiene la intención de informar de un sitio web u otro producto.',
	'REPORT_OFF_TOPIC'				=> 'El mensaje reportado es Off-Topic.',
	'REPORT_OTHER'					=> 'El mensaje reportado no se ajusta a ninguna categoría, por favor use el campo de descripción.',

	'SMILIES_ARROW'					=> 'Flecha',
	'SMILIES_CONFUSED'				=> 'Confundido',
	'SMILIES_COOL'					=> 'Tranquilo',
	'SMILIES_CRYING'				=> 'Llorando o muy triste',
	'SMILIES_EMARRASSED'			=> 'Ofuscado',
	'SMILIES_EVIL'					=> 'Malo o muy loco',
	'SMILIES_EXCLAMATION'			=> 'Exclamación',
	'SMILIES_GEEK'					=> 'Friki',
	'SMILIES_IDEA'					=> 'Idea',
	'SMILIES_LAUGHING'				=> 'Riendo',
	'SMILIES_MAD'					=> 'Loco',
	'SMILIES_MR_GREEN'				=> 'Sr. Verde',
	'SMILIES_NEUTRAL'				=> 'Neutral',
	'SMILIES_QUESTION'				=> 'Pregunta',
	'SMILIES_RAZZ'					=> 'Vacilar',
	'SMILIES_ROLLING_EYES'			=> 'Harto',
	'SMILIES_SAD'					=> 'Triste',
	'SMILIES_SHOCKED'				=> 'Sacudido',
	'SMILIES_SMILE'					=> 'Sonrisa',
	'SMILIES_SURPRISED'				=> 'Sorprendido',
	'SMILIES_TWISTED_EVIL'			=> 'Diablo',
	'SMILIES_UBER_GEEK'				=> 'Microsiervo',
	'SMILIES_VERY_HAPPY'			=> 'Muy Feliz',
	'SMILIES_WINK'					=> 'Guiño',

	'TOPICS_TOPIC_TITLE'			=> 'Bienvenido a phpBB3',
));

// Common navigation items' translation
$lang = array_merge($lang, array(
	'MENU_OVERVIEW'		=> 'Overview',
	'MENU_INTRO'		=> 'Introduction',
	'MENU_LICENSE'		=> 'License',
	'MENU_SUPPORT'		=> 'Support',
));

// Task names
$lang = array_merge($lang, array(
	// Install filesystem
	'TASK_CREATE_CONFIG_FILE'	=> 'Creating configuration file',

	// Install database
	'TASK_ADD_CONFIG_SETTINGS'		=> 'Adding configuration settings',
	'TASK_ADD_DEFAULT_DATA'			=> 'Adding default settings to the database',
	'TASK_CREATE_DATABASE_SCHEMA'	=> 'Creating database schema',

	// Install data
	'TASK_ADD_BOTS'			=> 'Registering bots',
	'TASK_ADD_LANGUAGES'	=> 'Installing available languages',
	'TASK_ADD_MODULES'		=> 'Installing modules',

	// Install finish tasks
	'TASK_NOTIFY_USER'			=> 'Sending notification e-mail',
	'TASK_POPULATE_MIGRATIONS'	=> 'Populating migrations',

	// Installer general progress messages
	'INSTALLER_FINISHED'	=> 'The installer has finished successfully',
));

// Installer's general messages
$lang = array_merge($lang, array(
	'MODULE_NOT_FOUND'				=> 'Module not found',
	'MODULE_NOT_FOUND_DESCRIPTION'	=> 'A module could not be found because the service, %s, is undefined.',

	'TASK_NOT_FOUND'				=> 'Task not found',
	'TASK_NOT_FOUND_DESCRIPTION'	=> 'A task could not be found because the service, %s, is undefined.',

	'SKIP_MODULE'	=> 'Skip “%s” module',
	'SKIP_TASK'		=> 'Skip “%s” task',

	'TASK_SERVICE_INSTALLER_MISSING'	=> 'All installer task services should start with “installer”',
	'TASK_CLASS_NOT_FOUND'				=> 'Installer task service definition is invalid. Service name “%1$s” given, the expected class namespace is “%2$s” for that. For more information please see the documentation of task_interface.',

	'INSTALLER_CONFIG_NOT_WRITABLE'	=> 'The installer config file is not writable.',
));

// CLI messages
$lang = array_merge($lang, array(
	'CLI_INSTALL_BOARD'				=> 'Install phpBB',
	'CLI_INSTALL_SHOW_CONFIG'		=> 'Show the configuration which will be used',
	'CLI_INSTALL_VALIDATE_CONFIG'	=> 'Validate a configuration file',
	'CLI_CONFIG_FILE'				=> 'Config file to use',
));

// Common updater messages
$lang = array_merge($lang, array(
	'UPDATE_INSTALLATION'			=> 'Update phpBB installation',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'With this option, it is possible to update your phpBB installation to the latest version.<br />During the process all of your files will be checked for their integrity. You are able to review all differences and files before the update.<br /><br />The file update itself can be done in two different ways.</p><h2>Manual Update</h2><p>With this update you only download your personal set of changed files to make sure you do not lose your file modifications you may have done. After you downloaded this package you need to manually upload the files to their correct position under your phpBB root directory. Once done, you are able to do the file check stage again to see if you moved the files to their correct location.</p><h2>Automatic Update with FTP</h2><p>This method is similar to the first one but without the need to download the changed files and uploading them on your own. This will be done for you. In order to use this method you need to know your FTP login details since you will be asked for them. Once finished you will be redirected to the file check again to make sure everything got updated correctly.<br /><br />',
));

// Updater forms
$lang = array_merge($lang, array(
	// Updater types
	'UPDATE_TYPE'			=> 'Type of update to run',

	'UPDATE_TYPE_ALL'		=> 'Update filesystem and database',
	'UPDATE_TYPE_DB_ONLY'	=> 'Update database only',

	// File updater methods
	'UPDATE_FILE_METHOD_TITLE'		=> 'File updater methods',

	'UPDATE_FILE_METHOD'			=> 'File updater method',
	'UPDATE_FILE_METHOD_DOWNLOAD'	=> 'Download modified files in an archive',
	'UPDATE_FILE_METHOD_FTP'		=> 'Update files via FTP (Automatic)',
	'UPDATE_FILE_METHOD_FILESYSTEM'	=> 'Update files via direct file access (Automatic)',

	// File updater archives
	'SELECT_DOWNLOAD_FORMAT'	=> 'Select download archive format',

	// FTP settings
	'FTP_SETTINGS'			=> 'FTP settings',
));

// Requirements messages
$lang = array_merge($lang, array(
	'UPDATE_FILES_NOT_FOUND'	=> 'No valid update directory was found, please make sure you uploaded the relevant files.',

	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'Your version is up to date. There is no need to run the update tool. If you want to make an integrity check on your files make sure you uploaded the correct update files.',
	'OLD_UPDATE_FILES'				=> 'Update files are out of date. The update files found are for updating from phpBB %1$s to phpBB %2$s but the latest version of phpBB is %3$s.',
	'INCOMPATIBLE_UPDATE_FILES'		=> 'The update files found are incompatible with your installed version. Your installed version is %1$s and the update file is for updating phpBB %2$s to %3$s.',
));

// Update files
$lang = array_merge($lang, array(
	'STAGE_UPDATE_FILES'		=> 'Update files',

	// Check files
	'UPDATE_CHECK_FILES'	=> 'Check files to update',

	// Update file differ
	'FILE_DIFFER_ERROR_FILE_CANNOT_BE_READ'	=> 'The file differ failed to open %s.',

	'UPDATE_FILE_DIFF'		=> 'Diffing changed files',
	'ALL_FILES_DIFFED'		=> 'All modified files has been diffed.',

	// File status
	'UPDATE_CONTINUE_FILE_UPDATE'	=> 'Update files',

	'DOWNLOAD'							=> 'Download',
	'DOWNLOAD_CONFLICTS'				=> 'Download merge conflicts archive',
	'DOWNLOAD_CONFLICTS_EXPLAIN'		=> 'Search for &lt;&lt;&lt; to spot conflicts',
	'DOWNLOAD_UPDATE_METHOD'			=> 'Download modified files archive',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Once downloaded you should unpack the archive. You will find the modified files you need to upload to your phpBB root directory within it. Please upload the files to their respective locations then. After you have uploaded all files, you may continue with the update process.',

	'FILE_ALREADY_UP_TO_DATE'		=> 'File is already up to date.',
	'FILE_DIFF_NOT_ALLOWED'			=> 'File not allowed to be diffed.',
	'FILE_USED'						=> 'Information used from',			// Single file
	'FILES_CONFLICT'				=> 'Conflict files',
	'FILES_CONFLICT_EXPLAIN'		=> 'The following files are modified and do not represent the original files from the old version. phpBB determined that these files create conflicts if they are tried to be merged. Please investigate the conflicts and try to manually resolve them or continue the update choosing the preferred merging method. If you resolve the conflicts manually check the files again after you modified them. You are also able to choose between the preferred merge method for every file. The first one will result in a file where the conflicting lines from your old file will be lost, the other one will result in losing the changes from the newer file.',
	'FILES_DELETED'					=> 'Deleted files',
	'FILES_DELETED_EXPLAIN'			=> 'The following files do not exist in the new version. These files have to be deleted from your installation.',
	'FILES_MODIFIED'				=> 'Modified files',
	'FILES_MODIFIED_EXPLAIN'		=> 'The following files are modified and do not represent the original files from the old version. The updated file will be a merge between your modifications and the new file.',
	'FILES_NEW'						=> 'New files',
	'FILES_NEW_EXPLAIN'				=> 'The following files currently do not exist within your installation. These files will be added to your installation.',
	'FILES_NEW_CONFLICT'			=> 'New conflicting files',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'The following files are new within the latest version but it has been determined that there is already a file with the same name within the same position. This file will be overwritten by the new file.',
	'FILES_NOT_MODIFIED'			=> 'Not modified files',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'The following files are not modified and represent the original phpBB files from the version you want to update from.',
	'FILES_UP_TO_DATE'				=> 'Already updated files',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'The following files are already up to date and do not need to be updated.',
	'TOGGLE_DISPLAY'				=> 'View/Hide file list',

	// File updater
	'UPDATE_UPDATING_FILES'	=> 'Updating files',

	'UPDATE_FILE_UPDATER_HAS_FAILED'	=> 'File updater “%1$s“ has failed. The installer will try to fallback to “%2$s“.',
	'UPDATE_FILE_UPDATERS_HAVE_FAILED'	=> 'The file updater failed. No further fallback methods are available.',

	'UPDATE_CONTINUE_UPDATE_PROCESS'	=> 'Continue update process',
	'UPDATE_RECHECK_UPDATE_FILES'		=> 'Check files again',
));

// Update database
$lang = array_merge($lang, array(
	'STAGE_UPDATE_DATABASE'		=> 'Update database',

	'INLINE_UPDATE_SUCCESSFUL'		=> 'The database update was successful.',
));
