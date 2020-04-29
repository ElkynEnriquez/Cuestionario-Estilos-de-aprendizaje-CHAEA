<!doctype html>
<html lang="es">
    <head>
        <!-- Etiquetas <meta> obligatorias para Bootstrap -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- Enlazando el CSS de Bootstrap 
        <link rel="stylesheet" href="css/tema-tesis.min.css"> -->
        
        <title>Ruta aleatoria</title>
        <!--************** Inicio Scripts Bootstrap y Cambio de tema ******************** -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        <!-- Fin jQuery, Popper.js y Bootstrap JS -->
  </head>
  <body>
      <div id="p1"></div>
      
      <div class="container-fluid slider-n bg-primary align-items-center justify-content-center text-white" id="fin-actividad">
        <div class="container h-100 pb-5">
            <div class="row mr-md-n5 mr-3 pt-4 pt-md-3 pt-lg-2 justify-content-end">
                <div class="col-6 col-md-4 col-lg-3" style="text-align:right;"><img src="../img/fin-actividad.png" alt="marcar final de actividad" width="100%"></div>
            </div>
            <div class="row mt-md-n2 pb-md-5 pb-4 justify-content-center">
                <div class="col-xs-12 col-md-10">
                    <h3 class="display-4">Muy bien, terminaste</h3>
                    <h5>Recuerda, marcar la actividad como finalizada</h5>
                </div>
            </div>
        </div>
      </div>
<?php
    require_once('../config.php');
    global $USER;
    $userid=$USER->id;
    
    /* ****************************************** Inicio Datos de conexión a la Base de Datos de Moodle ********************************************* */

    $usuario="UserBD-moodle";
    $contrasena="PwBD-moodle";
    $servidor="localhost";
    $basededatos="BD-moodle";

    /* ****************************************** Fin Datos de conexión a la Base de Datos de Moodle ********************************************** */


    $conexion= mysqli_connect($servidor,$usuario,$contrasena) or die ("No se ha podido conectar servidor");
    $db = mysqli_select_db($conexion, $basededatos) or die("Error al seleccionar la BD");
    //$consulta= "SELECT * FROM moodle.mdl_user_info_data";
    $consultaEstilos="SELECT data FROM moodle.mdl_user_info_data where userid=".$userid;
    $estilosUser = mysqli_query($conexion, $consultaEstilos) or die("Error consulta estilos");
    $pos = strpos($estilosUser, "-");
    $arrayEstilosUser = [];

      //echo "<script>var consulta=".$estilosUser.";<script>";

     //echo "<script>alert('Mensaje".$estilosUser."');</script>";

    if ($pos === false) {
        $arrayEstilosUser[0] = $estiloUser;
    }
    else{
        $arrayEstilosUser = explode("-", $estilosUser);
        echo "<script>alert('Mensaje".$estilosUser."');</script>";
    }
?>


</body>
</html>