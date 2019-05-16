<?php
switch( $g_active_language ) {
	case 'spanish':
                $s_severity_enum_string = '10:menor,20:mayor,30:critico';
                $s_priority_enum_string = '10:diferida,20:retrasada,30:inmediata';

                $s_email_reproducibility = 'Reproducible';
                $s_reproducibility = 'Reproducible';
                $s_reproducibility_enum_string = '10:si,20:no';
				
                $s_access_levels_enum_string = '20:desarrollador, 30:consultor de tests,40:ingeniero de tests,50:lider del equipo de tests,60:administrador de tests,90:ingeniero de ambiente de tests';



		break;
	default: # english
                $s_severity_enum_string = '10:minor,20:major,30:critical';
                $s_priority_enum_string = '10:deferred,20:delayed,30:immediate';

                $s_email_reproducibility = 'Reproducible';
                $s_reproducibility = 'Reproducible';
                $s_reproducibility_enum_string = '10:yes,20:no';
				
                $s_access_levels_enum_string = '20:developer, 30:test consultant,40:test engineer,50:test team leader,60:test manager,90:test environment engineer';


                break;
}