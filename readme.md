Escuela Colombiana de Ingeniería Julio Garavito Mantis Customization project
=============================

Vistas principales
-----------

![My view](doc/mi_vista.PNG)

![Bugs view](doc/ver_incidencias.PNG)

![Report Incident view](doc/reportar_incidencia.PNG)

![Summary view](doc/resumen.PNG)

Documentación
-------------

Para revisar la documentación de la personalización realizada junto con la definición de las políticas extraidas del modelo de tests utilizado revise el informe que se realizó al respecto.

Por otro lado, si necesita revisar la documentación detallada de cada una de las funcionalidades de Mantis Bug Tracker consulte el [manual](https://www.mantisbt.org/documentation.php) del mismo.


Requerimientos
------------

 * MySQL 5.5.35+, PostgreSQL 9.2+, o otra base de datos soportada
 * PHP 5.5.9+
 * un webserver (e.g. Apache or IIS)

Se recomienda instalar [Apache XAMPP](https://www.apachefriends.org/es/index.html) ya que viene integrado con un servidor web apache y una base de datos MySQL 

**Nota:** *Si quiere conocer el paso a paso detallado del proceso de instalación de Apache XAMPP revise el manual creado*


Instalación
------------

 * Descargue la última version estable de [MantisBT](https://www.mantisbt.org/download.php)
 * Copie la carpeta dentro del directorio htdocs de su servidor web.
 * Acceda en el browser a la carpeta mantis, a continuación se deberán correr los scripts php de instalación y configuración.
 * Una vez loggeado dentro de mantis con la cuenta de administrador (administrator - root) cambie la contraseña a su gusto en el panel de configuración de Mantis.
 * Elimine el directorio *admin* dentro de la carpeta de mantis.
 
**Nota:** *Para mas información sobre la instalación consulte el manual creado*


Configuración
-------------

# Diseño
- **Imagenes:** Para cambiar las imagenes principales de la aplicación se realizó lo siguiente:
   1. Se agrego logo de la universidad en dos distintos archivos: un [icono](images/iconeci.ico) y una [imagen](images/eci.png)
   2. Dentro del [archivo](config/config_inc.php) de configuración se agregaron las siguientes lineas:
   ![config inc code snippet](doc/carbon.png)
   
- **Titulo:** Para cambiar el titulo agregue la siguiente variable dentro del archivo de [configuración](config/config_inc.php):
![title configuration](doc/header.png)

- **Estilos:** Todas las tonalidades de los estilos fueron cambiadas de azul a rojo, los archivos modificados son: [default.css](css/default.css), [ace.min.css](css/ace.min.css) y [ace-skins.min.css](css/ace-skins.min.css).


# Funcionalidades

## Formulario para crear una incidencia
El formulario se personalizó con los siguientes campos:
- **Categoria**: asdasda
- **Resumen**: ad
- **Descripción**:
- **Severidad**:
- **Prioridad**:
- **Asignar a**:
- **Reproducible**:
- **Pasos para reproducir**:
- **Etiquetas**:
- **Resultados esperados**:
- **Subir Archivos**:
- **Visibilidad**:

## Niveles de acceso
Se configuraron los siguientes roles de acuerdo a la norma IEEE 829 (La cual recomienda el modelo TMMi):
- **Desarrollador**:
- **Consultor de tests**:
- **Ingeniero de tests**:
- **Lider del equipo de tests**:
- **Gerente de tests**:
- **Ingeniero de ambiente de tests**:

## Severidad
De acuerdo a la norma IEEE 829 se configuraron los siguientes niveles de severidad:
- **Menor**:
- **Mayor**:
- **Crítico**:

## Prioridad
Se configuraron los siguientes niveles de prioridad de acuerdo a la norma IEEE 829:
- **Diferida**:
- **Retrasada**:
- **Inmediata**:

## Reproducibilidad
Hay dos opciones para la reproducibilidad: Es reproducible, o no es reproducible (Se da a entender para que sirve cada uno).

## Categorias
En la pantalla de configuración se deben agregar las categorias que tiene cada proyecto o en general todos los proyectos. Estas categorias definen el modulo al que pertenece cada uno de los defectos.

## Etiquetas
Son labels que se le pueden asignar a cada defecto, se crean en la pantalla de configuración con su respectiva descripción. Por ejemplo, para el proyecto de prueba que se configuró se crearon las siguientes etiquetas:
- Ayuda requerida
- Bug
- Duplicado
- Mejora

## Version del producto
Pertenece a la versión del proyecto o el numero del Sprint. Para configurar el versionamiento se requiere ir a la pestaña de configuración/administrar proyectos

## Campos personalizados
Si se quieren agregar y asdignar a cada proyecto campos personalizados en el formulario para crear un defecto acceda a la pestaña de configuración de la herramienta

## Envío de correos
Para poder enviar correos entre los integrantes del equipo de QA es necesario realizar una configuración adicional en algunos archivos, para conocer a mayor detalle esta configuración revise el manual creado.
