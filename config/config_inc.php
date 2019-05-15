<?php
$g_hostname               = 'localhost';
$g_db_type                = 'mysqli';
$g_database_name          = 'bugtracker';
$g_db_username            = 'root';
$g_db_password            = '';

$g_default_timezone       = 'America/Bogota';

$g_crypto_master_salt     = 'Jf0UJ6RObIC8dU8J1Ltdg9e0WORscN5mF1jO4yzOMiY=';

$g_allow_signup = ON;
$g_enable_email_notificacion = ON;
$g_phpMailer_method = PHPMAILER_METHOD_SMTP;
$g_smtp_host = 'smtp.gmail.com';
$g_smtp_connection_mode = 'tls';
$g_smtp_port = 587;
$g_smtp_username = 'amantisbt2019@gmail.com';
$g_smtp_password = 'juandavidenfasis2019';
$g_administrator_email = 'amantisbt2019@gmail.com';
$g_log_level = LOG_EMAIL | LOG_EMAIL_RECIPIENT | LOG_FILTERING | LOG_AJAX;
$g_log_destination = "C:\xampp\mailoutput";
$g_default_language = "spanish";
$g_logo_image = 'images/eci.png';
$g_favicon_image = 'images/iconeci.ico';

$g_path = 'http://10.2.78.93/mantis/';


$g_severity_multipliers = array(
	MINOR     => 3,
	MAJOR     => 8,
	CRITICAL  => 10
);

$g_severity_enum_string = '10:minor,20:major,30:critical';