====================
Carpetas compartidas
====================

Una carpeta compartida es un recurso en el sistema que puede ser 
acceder de acuerdo a los servicios instalados en el sistema y establecer permisos por este módulo.

Crear/editar
------------

Dependiendo de los servicios instalados en el sistema, verá 
varias pestañas.

General
^^^^^^^

Nombre
    El nombre de la carpeta compartida. Sólo puede contener letras minúsculas, números, puntos, guiones y guiones bajos. La longitud máxima del nombre es de 12 caracteres.

Descripción
    Campo opcional para una breve descripción de la carpeta compartida.

Propietario del grupo
     El grupo propietario de la carpeta compartida, sólo los miembros del 
     grupo puede acceder a la carpeta.

Permitir escribir al propietario del grupo
    Permitir el acceso de escritura a los miembros del grupo propietario.

Permitir el acceso de lectura a todos
    Acceso de lectura a cualquier que se conecte al sistema, así como redes públicas.

.. raw:: html

   {{{INCLUDE NethServer_Module_SharedFolder_Plugin_*.html}}}

ACL
^^^

La lista de control de acceso permite a los permisos de acceso a la specifing 
carpeta compartida para cada uno de los usuarios o grupos, además de los de la 
propietario del grupo.

Leer
    Permitir o denegar el acceso de lectrura al usuario o grupo seleccionado.

Escribir 
    Permitir o denegar el acceso de escritura para el usuario o grupo seleccionado.


Borrar
------

Elimina la carpeta y todo su contenido. *La acción no es reversible!* La única manera de recuperar el contenido de una carpeta compartida que a medida que se han eliminado para restaurar una copia de seguridad.

Restablecer los permisos
------------------------

Establezca el propietario del grupo y las ACL configuradas usando este módulo en todos los archivos de la carpeta. La operación se lleva a cabo de forma recursiva en todos los archivos y subcarpetas de la carpeta compartida.

