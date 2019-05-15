<?php
# Translation for Custom Severity Code: critical
switch( $g_active_language ) {
	case 'spanish':
                $s_severity_enum_string = '10:menor,20:mayor,30:critico';
                $s_priority_enum_string = '10:diferida,20:retrasada,30:inmediata';

                $s_email_reproducibility = 'Reproducible';
                $s_reproducibility = 'Reproducible';
                $s_reproducibility_enum_string = '10:si,20:no';


		break;
	default: # english
                $g_severity_enum_string = '10:minor,20:major,30:critical';
                $s_priority_enum_string = '10:deferred,20:delayed,30:immediate';

                $s_email_reproducibility = 'Reproducible';
                $s_reproducibility = 'Reproducible';
                $s_reproducibility_enum_string = '10:yes,20:no';

                break;
}