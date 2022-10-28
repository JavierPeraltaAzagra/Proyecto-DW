<?php
/**
 * @title: Proyecto integrador Ev01 - Cabecera y barrra de navegación.
 * @description:  Script PHP para la gestión de la sesión de usuario.
 *   Dependiendo si el usuario esta registrado o no, aparecen unas
 *   opciones u otras en la barra de navegación.
 *
 * @version    0.1
 * @author ander_frago@cuatrovientos.org
 */
session_start([
    'cookie_lifetime' => 86400,
]);

// Realizando la llamada al script functions establezco la conexión con base de datos
require_once 'utils/functions.php';
$userstr = ' (Invitado)';
// Gestión de la sesión de usuario
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    // last request was more than 30 minutes ago
    session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();   // destroy session data in storage
}
$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp

if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    $loggedin = TRUE;
    $userstr = " ($user)";
} else{
    $loggedin = FALSE;
   
}
?>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title><?php echo "$appname $userstr" ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href=https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css >
    </head>
    <body>   
        <?php    
        if ($loggedin)
        {
            // En caso de tener una sesión registrada con antelación mostramos las opciones avanzadas de la aplicación
        ?>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">4vSocial</a>

                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                      <ul class="navbar-nav mr-auto mt-2 mt-md-0">
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Salir</a>
                        </li>
                      </ul>
                    </div>
                </nav>
        <?php
        }
        else
        {
            // En caso de ser usuario no registrado, (Invitado)  
        ?>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">4vSocial</a>

                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                      <ul class="navbar-nav mr-auto mt-2 mt-md-0">
                         <li class="nav-item">
                              <a class="nav-link" href="signup.php">Registrarse</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="login.php">Entrar</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="logout.php">Salir</a>
                          </li>
                      </ul>
                      <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                      </form>
                    </div>
                  </nav>
        <?php
        }
        ?>
<!-- Bootstrap core JavaScript
================================================== -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>