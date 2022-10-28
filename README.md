# EV01 Proyecto Integrador
## 1 Proceso de registro
En esta primera versión se van a trabajar aspectos relacionados con la comunicación entre PHP y MySQL, además de la gestión de sesiones.

### Lista de tareas a completar
Comienza obteniendo el proyecto desde el repositorio inicial.
¡Importante! Para realizar las tareas a lo largo de todo el proyecto debes de disponer
de un repositorio en Bitbucket e ir completando las tareas en Trello de una manera
correcta.
#### 1 Registro
__signup.php__
* Realiza la lectura de los campos del formulario en $user y $pass
* Establecer el almacenamiento de usuario en la sesión para que al pulsar sobre el menú de Acceder no se le vuelva a preguntar por usuario/contraseña.
* Muestra mensaje de error x2
#### 2 Acceso
__login.php__
* Establecer la consulta de base de datos correspondiente para verificar si el usuario existe.
    $result = queryMySQL("")
*  Realiza la gestión de la sesión de usuario.  Almacena en la variables de sesión user el valor de $user
* Corrige el BUG.
* Muestra el mensaje de error x2