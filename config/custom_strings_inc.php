<?php
# Translation for Custom Severity Code: critical
switch( $g_active_language ) {

	case 'spanish':
        $s_severity_enum_string = '10:menor,20:mayor,30:critico';

		break;

	default: # english
        $g_severity_enum_string = '10:minor,20:major,30:critical';

        break;
}