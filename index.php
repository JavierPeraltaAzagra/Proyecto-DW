<?php
/**
 * @title: Proyecto integrador Ev01 - Página principal
 * @description: La Home o página de inicio es una de las más importantes de tu web, es la entrada principal, 
 *     la recepción, la primera impresión que van a tener muchas de las visitas que lleguen a tu página.
 * @version    0.1
 * @author ander_frago@cuatrovientos.org
 */
  include 'header.php';
?>
    <div class="jumbotron jumbotron-fluid">
        <div id="bienvenida" class="container">       
            <?php 
                  echo "<h1 class='display-3'>Bienvenid@ a $appname</h1>";

                  if ($loggedin) echo "<span class='badge badge-default'> Has iniciado sesión: ".$user."</span>";
                  else           echo "<span class='badge badge-default'> por favor, regístrate o inicia sesión.</span>";
              ?>
        </div>
     </div>
    <div id="bienvenida" class="img-fluid" alt="Responsive image"> 
        <div class="row">
                <div class="offset-md-3 col-md-6">
                   <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/24/Instituto_Cuatrovientos_-_Cuatrovientos_Institutua.png/640px-Instituto_Cuatrovientos_-_Cuatrovientos_Institutua.png"  alt="" title=""/>
                   <p class="lead">Desde Cuatrovientos queremos dar la bienvenida a todo el alumnado que por primera vez se acercan al instituto y a aquellos que continúan con sus programas formativos. </p>   
              </div>
        </div>                
      </div>
    <footer class="footer">
      <div class="container">
        <span class="text-muted">Desarrollo Web - 2º DAM.</span>
      </div>
    </footer>
  </body> 
</html>