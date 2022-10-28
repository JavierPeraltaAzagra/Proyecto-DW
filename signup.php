<?php
/**
 * @title: Proyecto integrador Ev01 - Registro en el sistema.
 * @description:  Script PHP para almacenar un nuevo usuario en la base de datos
 *
 * @version    0.1
 *
 * @author ander_frago@cuatrovientos.org
 */

require_once 'header.php';

$error = $user = $pass = "";

if (isset($_POST['email'])) {

  // TODO Realiza la lectura de los campos del formulario en $user y $pass
  $user= $_POST["email"];
  $pass= $_POST["password"];

  if ($user == "" || $pass == "") {
    $error = "Debes completar todos los campos";
  }
  else {
    $result = queryMysql("SELECT * FROM members WHERE user='$user'");

    if ($result->num_rows) {
      $error = "El usuario ya existe";
    }
    else {
      queryMysql("INSERT INTO members(user,pass) VALUES('$user', '$pass')");

      // TODO
      // Establecer el almacenamiento de usuario en una variable "user" almacenada en sesión
      // para que al pulsar sobre el menú de Acceder no se le vuelva a preguntar por usuario/contraseña
      session_start();
      $_SESSION["user"] = $_POST[$user];
      $_SESSION["pass"] = $_POST[$pass];



      header('Location: login.php?');

    }
  }
}
?>

<div class="container">
    <form class="form-horizontal" role="form" method="POST" action="signup.php">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h2>Por favor registrate</h2>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="form-group has-danger">
                    <label class="sr-only" for="email">Email:</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i
                                    class="fa fa-at"></i></div>
                        <input type="text" name="email" class="form-control"
                               id="email"
                               placeholder="vivayo@correo.com" required
                               autofocus>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                    <span class="text-danger align-middle">
                        <i class="fa fa-close"></i> 
                        <?php // TODO: Muestra mensaje de error
                                echo $error;
                        ?>
                    </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="sr-only" for="password">Contraseña:</label>
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i
                                    class="fa fa-key"></i></div>
                        <input type="password" name="password"
                               class="form-control" id="password"
                               placeholder="Password" required>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                    <span class="text-danger align-middle">
                        <?php // TODO: Muestra mensaje de error
                            echo $error;
                        ?>
                    </span>
                </div>
            </div>
        </div>

        <div class="row" style="padding-top: 1rem">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <button type="submit" class="btn btn-success"><i
                            class="fa fa-sign-in"></i> Acceder
                </button>
            </div>
        </div>
    </form>
</div>
