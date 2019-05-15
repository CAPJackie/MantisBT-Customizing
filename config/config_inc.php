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



$g_priority_significant_threshold = IMMEDIATE;
$g_default_bug_priority = DEFERRED;
$g_priority_enum_string = '10:deferred,20:delayed,30:immediate';

$g_allow_no_category = ON;

$g_view_issues_page_columns = array(
	'selection', 'edit', 'priority', 'id', 'sponsorship_total',
	'bugnotes_count', 'attachment_count', 'severity', 'status',
	'last_updated', 'summary'
);

$g_print_issues_page_columns = array(
	'selection', 'priority', 'id', 'sponsorship_total', 'bugnotes_count',
	'attachment_count', 'severity', 'status', 'last_updated',
	'summary'
);

$g_csv_columns = array(
	'id', 'project_id', 'reporter_id', 'handler_id', 'priority',
	'severity', 'reproducibility', 'version', 'projection',
	'date_submitted', 'eta', 'os', 'os_build', 'platform', 'view_state',
	'last_updated', 'summary', 'status', 'resolution', 'fixed_in_version'
);

$g_excel_columns = array(
	'id', 'project_id', 'reporter_id', 'handler_id', 'priority', 'severity',
	'reproducibility', 'version', 'projection',
	'date_submitted', 'eta', 'os', 'os_build', 'platform', 'view_state',
	'last_updated', 'summary', 'status', 'resolution', 'fixed_in_version'
);

$g_bug_report_page_fields = array(
	'attachments',
	'due_date',
	'handler',
	'priority',
	'product_build',
	'product_version',
	'reproducibility',
	'severity',
	'steps_to_reproduce',
	'tags',
	'target_version',
	'view_state',
);

$g_bug_view_page_fields = array(
	'attachments',
	'date_submitted',
	'description',
	'due_date',
	'eta',
	'fixed_in_version',
	'handler',
	'id',
	'last_updated',
	'priority',
	'product_build',
	'product_version',
	'project',
	'projection',
	'reporter',
	'reproducibility',
	'resolution',
	'severity',
	'status',
	'steps_to_reproduce',
	'summary',
	'tags',
	'target_version',
	'view_state',
);

$g_bug_update_page_fields = array(
	'date_submitted',
	'description',
	'due_date',
	'eta',
	'fixed_in_version',
	'handler',
	'id',
	'last_updated',
	'priority',
	'product_build',
	'product_version',
	'project',
	'projection',
	'reporter',
	'reproducibility',
	'resolution',
	'severity',
	'status',
	'steps_to_reproduce',
	'summary',
	'target_version',
	'view_state',
);

$g_bug_change_status_page_fields = array(
	'attachments',
	'date_submitted',
	'description',
	'due_date',
	'eta',
	'fixed_in_version',
	'handler',
	'id',
	'last_updated',
	'priority',
	'product_build',
	'product_version',
	'project',
	'projection',
	'reporter',
	'reproducibility',
	'resolution',
	'severity',
	'status',
	'steps_to_reproduce',
	'summary',
	'tags',
	'target_version',
	'view_state',
);

$g_default_bug_reproducibility = REPRODUCIBILITY_NO;

$g_reproducibility_enum_string = '10:yes,20:no';
