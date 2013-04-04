Centro de solicitudes
==================

Sitio web encargado de interactuar con la REST api del administrador de proyectos Redmine.
El propósito de este desarrollo fue la digitalización de las solicitudes de los servicios prestados por el Centro de Recursos Informáticos y Educativos, las cuales al ser enviado el formulario, quedan registradas en el administrador de proyectos Redmine a través de peticiones REST con su api.

La maquetación de las páginas es el código entregado por  el framework Kohana sin funciones propias de éste.

Los datos son capturados por el form de cada página y enviados a la clase Redmine que se encuentra en el archivo crear-issue.php, junto con otros datos que la api de Redmine solicita, tales como user_id y project_id

Referencias: 
Se utilizó parte del código de la clase creada por kbsali.

