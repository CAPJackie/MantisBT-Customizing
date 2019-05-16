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

$g_show_user_email_threshold = TEST_TEAM_LEADER;
$g_show_user_realname_threshold = TEST_TEAM_LEADER;
$g_show_version_dates_threshold = TEST_TEAM_LEADER;
$g_notify_new_user_created_threshold_min = TEST_ENVIRONMENT_ENGINEER;
$g_show_avatar_threshold = TEST_TEAM_LEADER;
$g_private_news_threshold = TEST_TEAM_LEADER;
$g_default_new_account_access_level = TEST_CONSULTANT;
$g_view_summary_threshold = TEST_TEAM_LEADER;
$g_reminder_receive_threshold = DEVELOPER;
$g_view_sponsorship_total_threshold = TEST_CONSULTANT;
$g_view_sponsorship_details_threshold = TEST_CONSULTANT;
$g_sponsor_threshold = TEST_CONSULTANT;
$g_handle_sponsored_bugs_threshold = TEST_CONSULTANT;
$g_assign_sponsored_bugs_threshold = TEST_ENGINEER;
$g_view_attachments_threshold = DEVELOPER;
$g_download_attachments_threshold = DEVELOPER;
$g_delete_attachments_threshold = TEST_CONSULTANT;
$g_allow_delete_own_attachments = ON;
$g_report_bug_threshold = TEST_CONSULTANT;
$g_update_bug_threshold = DEVELOPER;
$g_view_bug_threshold = DEVELOPER;
$g_monitor_bug_threshold = TEST_ENGINEER;
$g_monitor_add_others_bug_threshold = TEST_ENGINEER;
$g_monitor_delete_others_bug_threshold = TEST_TEAM_LEADER;
$g_private_bug_threshold = DEVELOPER;
$g_handle_bug_threshold = DEVELOPER;
$g_private_bugnote_threshold = TEST_TEAM_LEADER;
$g_view_handler_threshold = DEVELOPER;
$g_view_history_threshold = DEVELOPER;
$g_bug_reminder_threshold = TEST_ENGINEER;
$g_bug_revision_drop_threshold = TEST_TEAM_LEADER;
$g_upload_project_file_threshold = TEST_TEAM_LEADER;
$g_upload_bug_file_threshold = TEST_CONSULTANT;
$g_add_bugnote_threshold = TEST_CONSULTANT;
$g_update_bugnote_threshold = TEST_ENGINEER;
$g_view_proj_doc_threshold = DEVELOPER;
$g_manage_site_threshold = TEST_TEAM_LEADER;
$g_admin_site_threshold = TEST_ENVIRONMENT_ENGINEER;
$g_manage_project_threshold = TEST_TEAM_LEADER;
$g_manage_news_threshold = TEST_TEAM_LEADER;
$g_delete_project_threshold = TEST_ENVIRONMENT_ENGINEER;
$g_create_project_threshold = TEST_TEAM_LEADER;
$g_private_project_threshold = TEST_TEAM_LEADER;
$g_project_user_threshold = TEST_TEAM_LEADER;
$g_manage_user_threshold = TEST_ENVIRONMENT_ENGINEER;
$g_impersonate_user_threshold = TEST_ENVIRONMENT_ENGINEER;
$g_delete_bug_threshold = TEST_CONSULTANT;
$g_move_bug_threshold = TEST_ENGINEER;
$g_set_view_status_threshold = TEST_CONSULTANT;
$g_change_view_status_threshold = TEST_CONSULTANT;
$g_show_monitor_list_threshold = TEST_TEAM_LEADER;
$g_stored_query_use_threshold = TEST_ENGINEER;
$g_stored_query_create_threshold = TEST_ENGINEER;
$g_stored_query_create_shared_threshold = TEST_ENGINEER;
$g_update_readonly_bug_threshold = TEST_TEAM_LEADER;
$g_view_changelog_threshold = DEVELOPER;
$g_timeline_view_threshold = DEVELOPER;
$g_roadmap_view_threshold = DEVELOPER;
$g_roadmap_update_threshold = TEST_TEAM_LEADER;
$g_update_bug_status_threshold = DEVELOPER;
$g_reopen_bug_threshold = TEST_CONSULTANT;
$g_report_issues_for_unreleased_versions_threshold = TEST_ENGINEER;
$g_set_bug_sticky_threshold = TEST_ENGINEER;
$g_development_team_threshold = TEST_CONSULTANT;
$g_set_status_threshold = array( NEW_ => DEVELOPER );
$g_manage_configuration_threshold = TEST_TEAM_LEADER;
$g_view_configuration_threshold = TEST_TEAM_LEADER;
$g_set_configuration_threshold = TEST_ENVIRONMENT_ENGINEER;
$g_create_permalink_threshold = TEST_ENGINEER;

$g_access_levels_enum_string = '20:developer, 30:test consultant,40:test engineer,50:test team leader,60:test manager,90:test environment engineer';


$g_manage_custom_fields_threshold = TEST_ENVIRONMENT_ENGINEER;
$g_custom_field_link_threshold = TEST_TEAM_LEADER;

$g_tag_view_threshold = DEVELOPER;
$g_tag_attach_threshold = TEST_CONSULTANT;
$g_tag_detach_threshold = TEST_CONSULTANT;
$g_tag_detach_own_threshold = TEST_CONSULTANT;
$g_tag_create_threshold = TEST_TEAM_LEADER;
$g_tag_edit_threshold = TEST_TEAM_LEADER;
$g_tag_edit_own_threshold = TEST_TEAM_LEADER;
$g_time_tracking_view_threshold = TEST_ENGINEER;
$g_time_tracking_edit_threshold = TEST_ENGINEER;
$g_time_tracking_reporting_threshold = TEST_TEAM_LEADER;
$g_add_profile_threshold = TEST_CONSULTANT;
$g_manage_global_profile_threshold = TEST_TEAM_LEADER;
$g_manage_plugin_threshold = TEST_ENVIRONMENT_ENGINEER;
$g_due_date_update_threshold = TEST_ENGINEER;
$g_due_date_view_threshold = DEVELOPER;
$g_show_log_threshold = TEST_TEAM_LEADER;

$g_webservice_readonly_access_level_threshold = DEVELOPER;
$g_webservice_readwrite_access_level_threshold = DEVELOPER;
$g_webservice_admin_access_level_threshold = TEST_TEAM_LEADER;
$g_webservice_specify_reporter_on_add_access_level_threshold = TEST_CONSULTANT;
