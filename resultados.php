<!doctype html>
<html lang="es">
    <head>
        <!-- Etiquetas <meta> obligatorias para Bootstrap -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- Enlazando el CSS de Bootstrap -->
        <link rel="stylesheet" href="css/tema-tesis.min.css">
        
        <title>Resultados Cuestionario HONEY-ALONSO de estilos de aprendizaje</title>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

  </head>
  <body class="text-white" >
      <?php
            require_once('../config.php');
            global $USER;
            $userid=$USER->id;
        $usuario="root";
        $contrasena="Equa2019";
        //$servidor="192.68.185.121:3306";
        $servidor="localhost";
        $basededatos="moodle";
        $conexion= mysqli_connect($servidor,$usuario,$contrasena) or die ("No se ha podido conectar servidor");
        $db = mysqli_select_db($conexion, $basededatos) or die("Error al seleccionar la BD");
        $consulta= "SELECT * FROM moodle.mdl_user_info_data";
        ?>
      
    <!-- MENÚ style="overflow:hidden;"
    <div class="container-fluid navbar-fixed-top">
      <div class="row flex-items-xs-between menu-1 flex-items-xs-middle">
      </div>
    </div>
     FIN MENU -->
    <!-- SECCIÓN 1 -->
    <div class="container-fluid slider-1 align-items-center justify-content-center" id="sec-1">
        <div class="row justify-content-center pt-5">
            <div class="col-auto"></div>
            <div class="col-12 col-md-6"><h4 id="tituloResultado">Tu preferencia de aprendizaje es </h4></div>
            <div class="col-auto"></div>
        </div>
        <div class="row justify-content-center py-3">
            <div class="col-auto"></div>
            <div class="col-10 col-md-5 col-lg-4">
                <canvas id="chartResultados" width="400" height="400"></canvas>

                <div id="analisisResultados" class="table-responsive-md"></div>
            </div>
            <div class="col-auto"></div>
            <div class="col-10 col-md-5 col-lg-5 text-left" id="analisisEstilos">
                <div class='w-100 py-2'></div>
            </div>
            <div class="col-auto"></div>
        </div>
        <!-- Modal Estilo Activo-->
                <div class="modal fade" id="modal-estilo-activo" tabindex="-1" role="dialog" aria-labelledby="estilo-activo" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header text-primary">
                        <h4 class="modal-title text-primarioP1" id="estilo-activo-Title">Activo, puedes aprender mejor al:</h4>
                      </div>
                      <div class="modal-body text-dark" style="text-align: left;">
                          <ul>
                            <li>Competir en equipo</li>
                            <li>Cambiar y variar las cosas.</li>
                            <li>Abordar quehaceres múltiples.</li>
                            <li>Dramatizar.</li>
                            <li>Representar roles.</li>
                            <li>Vivir situaciones de interés, de crisis.</li>
                            <li>Acaparar la atención.</li>
                            <li>Dirigir debates, reuniones.</li>
                            <li>Hacer presentaciones.</li>
                            <li>Intervenir activamente.</li>
                            <li>Arriesgarse.</li>
                            <li>Sentirse ante un reto con recursos inadecuados y situaciones adversas.</li>
                            <li>Realizar ejercicios actuales.</li>
                            <li>Resolver problemas como parte de un equipo.</li>
                            <li>Aprender algo nuevo, algo que no sabía o no podía hacer antes.</li>
                            <li>Encontrar problemas y dificultades exigentes.</li>
                            <li>Intentar algo diferente, dejarse ir.</li>
                            <li>Encontrar personas de mentalidad semejante con las que pueda dialogar.</li>
                            <li>No tener que escuchar sentado una hora seguida.</li>
                            <li>Poder realizar variedad de actividades diversas.</li>
                        </ul>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primarioP1" data-dismiss="modal">Lo intentaré gracias</button>
                      </div>
                    </div>
                  </div>
                </div>
            <!-- Fin Modal -->
        <!-- Modal Estilo Reflexivo-->
                <div class="modal fade" id="modal-estilo-reflexivo" tabindex="-1" role="dialog" aria-labelledby="estilo-reflexivo" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header text-primary">
                        <h4 class="modal-title text-primarioP1" id="estilo-reflexivo-Title">Reflexivo, puedes aprender mejor al:</h4>
                      </div>
                      <div class="modal-body text-dark" style="text-align: left;">
                          <ul>
                            <li>Observar.</li>
                            <li>Reflexionar sobre actividades. </li>
                            <li>Intercambiar opiniones con otras personas con previo acuerdo.</li>
                            <li>Llegar a las decisiones a su propio ritmo.</li>
                            <li>Trabajar sin presiones ni plazos obligatorios.</li>
                            <li>Reunir información.</li>
                            <li>Investigar detenidamente.</li>
                            <li>Sondear para llegar al fondo de la cuestión.</li>
                            <li>Asimilar antes de comentar.</li>
                            <li>Escuchar</li>
                            <li>Distanciarse de los acontecimientos y observar. </li>
                            <li>Hacer análisis detallados.</li>
                            <li>Realizar informes cuidadosamente ponderados. </li>
                            <li>Trabajar concienzudamente.</li>
                            <li>Pensar sobre actividades </li>
                            <li>Ver con atención una película o vídeo sobre un tema.</li>
                            <li>Observar a un grupo mientras trabaja.</li>
                            <li>Tener posibilidad de leer o prepararse de antemano algo que le proporcione datos. </li>
                            <li>Tener tiempo suficiente para preparar, asimilar, considerar.</li>
                            <li>Tener posibilidades de oír los puntos de vista de otras personas, aún mejor, variedad de personas con diversidad de opiniones.</li>
                        </ul>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primarioP1" data-dismiss="modal">Lo intentaré gracias</button>
                      </div>
                    </div>
                  </div>
                </div>
            <!-- Fin Modal -->
        <!-- Modal Estilo Teórico-->
                <div class="modal fade" id="modal-estilo-teorico" tabindex="-1" role="dialog" aria-labelledby="estilo-teorico" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header text-primary">
                        <h4 class="modal-title text-primarioP1" id="estilo-teorico-Title">Teórico, puedes aprender mejor al:</h4>
                      </div>
                      <div class="modal-body text-dark" style="text-align: left;">
                          <ul>
                            <li>Inscribir todos los datos en un sistema, modelo, concepto o teoría.</li>
                            <li>Tener la posibilidad de cuestionar.</li>
                            <li>Participar en una sesión de preguntas y respuestas.</li>
                            <li>Poner a prueba métodos y lógica que sean la base de algo.</li>
                            <li>Sentirse intelectualmente presionado.</li>
                            <li>Participar en situaciones complejas.</li>
                            <li>Analizar y luego generalizar las razones de algo bipo1ar, dual.</li>
                            <li>Llegar a entender acontecimientos complicados. </li>
                            <li>Recibir, captar ideas y conceptos interesantes, aunque no sean inmediatamente pertinentes.</li>
                            <li>Leer u oír hablar sobre ideas, conceptos que insisten en la racionalidad o la lógica.</li>
                            <li>Leer u oír hablar sobre ideas y conceptos bien presentados y precisos.</li>
                            <li>Tener que analizar una situación completa.</li>
                            <li>Enseñar a personas exigentes que hacen preguntas interesantes.</li>
                            <li>Estar con personas de igual nivel conceptual.</li>
                        </ul>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primarioP1" data-dismiss="modal">Lo intentaré gracias</button>
                      </div>
                    </div>
                  </div>
                </div>
            <!-- Fin Modal -->
        <!-- Modal Estilo Pragmático-->
                <div class="modal fade" id="modal-estilo-pragmatico" tabindex="-1" role="dialog" aria-labelledby="estilo-pragmatico" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header text-primary">
                        <h4 class="modal-title text-primarioP1" id="estilo-pragmatico-Title">Pragmático, puedes aprender mejor al:</h4>
                      </div>
                      <div class="modal-body text-dark" style="text-align: left;">
                          <ul>
                            <li>Adquirir técnicas inmediatamente aplicables en su trabajo.</li>
                            <li>Elaborar planes de acción con un resultado evidente. </li>
                            <li>Dar indicaciones, sugerir atajos.</li>
                            <li>Tener la posibilidad de experimentar y practicar técnicas con asesoramiento o información de retorno de alguien experto.</li>
                            <li>Ver que hay un nexo evidente entre el tema tratado y un problema u oportunidad que se presenta para aplicado. </li>
                            <li>Ver la demostración de un tema de alguien que tiene un historial reconocido.</li>
                            <li>Percibir muchos ejemplos o anécdotas.</li>
                            <li>Visionar películas o vídeos que muestran cómo se hacen las cosas.</li>
                            <li>Concentrarse en cuestiones prácticas.</li>
                            <li>Comprobar que la actividad de aprendizaje parece tener una validez inmediata.</li>
                            <li>Vivir una buena simulación, problemas reales.</li>
                            <li>Recibir muchas indicaciones prácticas y técnicas.</li>
                            <li>Tratar con expertos que saben o son capaces de hacer las cosas ellos mismos.</li>
                        </ul>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primarioP1" data-dismiss="modal">Lo intentaré gracias</button>
                      </div>
                    </div>
                  </div>
                </div>
            <!-- Fin Modal -->
    </div>
    <?php
        $respuestasActivo=0;
        $respuestasReflexivo=0;
        $respuestasTeorico=0;
        $respuestasPragmatico=0;
        $eActivo = array(3,5,7,9,13,20,26,27,35,37,41,43,46,48,51,61,67,74,75,77);
        $eReflexivo = array(10,16,18,19,28,31,32,34,36,39,42,44,49,55,58,63,65,69,70,79);
        $eTeorico = array(2,4,6,11,15,17,21,23,25,29,33,45,50,54,60,64,66,71,78,80);
        $ePragmatico = array(1,8,12,14,22,24,30,38,40,47,52,53,56,57,59,62,68,72,73,76);
        
        foreach($_POST as $campo => $valor) {
            for ($i=0;$i< sizeof($eActivo);$i++){
                if (('p'.$eActivo[$i])==$campo && $valor==1){
                    $respuestasActivo++; }
            }
            for ($i=0;$i< sizeof($eReflexivo);$i++){
                if (('p'.$eReflexivo[$i])==$campo && $valor==1){
                    $respuestasReflexivo++; }
            }
            for ($i=0;$i< sizeof($eTeorico);$i++){
                if (('p'.$eTeorico[$i])==$campo && $valor==1){
                    $respuestasTeorico++; }
            }
            for ($i=0;$i< sizeof($ePragmatico);$i++){
                if (('p'.$ePragmatico[$i])==$campo && $valor==1){
                    $respuestasPragmatico++; }
            }
        }
      
//$respuestasActivo=rand(7, 12);
//$respuestasReflexivo=rand(18, 19);
//$respuestasTeorico=rand(10, 13);
//$respuestasPragmatico=rand(11, 13);
      
      $banderaActivo=0;
      $banderaReflexivo=0;
      $banderaTeorico=0;
      $banderaPragmatico=0;
        if ($respuestasActivo<=6) { $banderaActivo=1;}
          else if ($respuestasActivo<=8) {$banderaActivo=2;}
          else if ($respuestasActivo<=12) {$banderaActivo=3;}
          else if ($respuestasActivo<=14) {$banderaActivo=4;}
          else if ($respuestasActivo<=20) {$banderaActivo=5;}
          
          if ($respuestasReflexivo<=10) {$banderaReflexivo=1;}
          else if ($respuestasReflexivo<=13) {$banderaReflexivo=2;}
          else if ($respuestasReflexivo<=17) {$banderaReflexivo=3;}
          else if ($respuestasReflexivo<=19) {$banderaReflexivo=4;}
          else if ($respuestasReflexivo==20) {$banderaReflexivo=5;}
          
          if ($respuestasTeorico<=6) {$banderaTeorico=1;}
          else if ($respuestasTeorico<=9) {$banderaTeorico=2;}
          else if ($respuestasTeorico<=13) {$banderaTeorico=3;}
          else if ($respuestasTeorico<=15) {$banderaTeorico=4;}
          else if ($respuestasTeorico<=20) {$banderaTeorico=5;}
          
          if ($respuestasPragmatico<=8) {$banderaPragmatico=1;}
          else if ($respuestasPragmatico<=10) {$banderaPragmatico=2;}
          else if ($respuestasPragmatico<=13) {$banderaPragmatico=3;}
          else if ($respuestasPragmatico<=15) {$banderaPragmatico=4;}
          else if ($respuestasPragmatico<=20) {$banderaPragmatico=5;}
      
          $buscandoPreferencia=true;
          $indicativoPreferencia=5;

          while ($buscandoPreferencia==true){
              $cadenaE=[];
              if ($banderaActivo==$indicativoPreferencia){
                  $cadenaE[]="Activo";
                  $buscandoPreferencia=false;
              }
              if ($banderaReflexivo==$indicativoPreferencia){
                  $cadenaE[]="Reflexivo";
                  $buscandoPreferencia=false;
              }
              if ($banderaTeorico==$indicativoPreferencia){
                  $cadenaE[]="Teorico";
                  $buscandoPreferencia=false;
              }
              if ($banderaPragmatico==$indicativoPreferencia){
                  $cadenaE[]="Pragmatico";
                  $buscandoPreferencia=false;
              }
              $indicativoPreferencia--;
          }
          $estilosPreferidos=implode("-",$cadenaE);
        //echo "<p> activos= ". $respuestasActivo ." <br>reflexivo= ". $respuestasReflexivo." <br> Teorico =".$respuestasTeorico."<br> pragmatico= ". $respuestasPragmatico."</p>";
        
    echo "<script>
    var respuestasActivo =".$respuestasActivo.";
    var respuestasReflexivo =".$respuestasReflexivo.";
    var respuestasTeorico =".$respuestasTeorico.";
    var respuestasPragmatico =".$respuestasPragmatico.";
    </script>";
?>
      <script>
    /*var respuestasActivo =Math.floor((Math.random() * 20) + 1);
    var respuestasReflexivo =Math.floor((Math.random() * 20) + 1);
    var respuestasTeorico =Math.floor((Math.random() * 20) + 1);
    var respuestasPragmatico =Math.floor((Math.random() * 20) + 1);
      */  
    //var porcentajePregunta=100/(respuestasActivo+respuestasReflexivo+respuestasTeorico+respuestasPragmatico);
    var ctx = document.getElementById('chartResultados').getContext('2d');
    Chart.defaults.global.defaultFontColor = 'white';
    Chart.defaults.global.defaultFontSize = 14;
    var grafica = new Chart(ctx, {
        type: 'radar',
        data: {
            labels: ['I Activo '+respuestasActivo,'II Reflexivo '+respuestasReflexivo,'III Teórico '+respuestasTeorico,'IV Pragmático '+respuestasPragmatico,],
            datasets: [{
                data: [respuestasActivo, respuestasReflexivo, respuestasTeorico, respuestasPragmatico],
                backgroundColor: 'rgba(255, 06, 86, 0.2)',
                borderColor:'rgba(255, 255, 255, 1)',
                borderWidth: 3,
                label:'Perfil de aprendizaje',
                pointBorderWidth:1,
                pointBackgroundColor:[
                    'rgba(56, 255, 86, 1)',
                    'rgba(54, 62, 235, 1)',
                    'rgba(255, 219, 62, 1)',
                    'rgba(250, 100, 64, 1)'
                ]
            }]
        },
        options: {
        legend: {
            labels: {
                // This more specific font property overrides the global property
                fontColor: 'rgba(255, 255, 255, 1)',
                fontSize: 14
            }
        },
            scale: {
            ticks: {
                backdropColor: 'rgba(255, 65, 54, 0.7)',
                suggestedMin: 0,
                suggestedMax: 20
            }
        }
        }
    });
    </script>  
    
    <!-- Opcional: enlazando el JavaScript de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      
      <script>
      $(document).ready(function() {
          // inicia conexion con LMS por SCORM
          //init();
          //var idUsuario=ObtenerIdUsuario();
          
          var banderaActivo=0;
          var banderaReflexivo=0;
          var banderaTeorico=0;
          var banderaPragmatico=0;
            
          //Crear tabla de preferencias en estilos 
          var cadenaTabla='<h5>Tus preferencias en estilos de aprendizaje</h5><table class="table text-white"><thead><tr><th scope="col">Activo</th><th scope="col">Reflexivo</th><th scope="col">Teórico</th><th scope="col">Pragmático</th></tr></thead><tbody><tr>';
          if (respuestasActivo<=6) { cadenaTabla += "<td>Muy Baja</td>"; banderaActivo=1;}
          else if (respuestasActivo<=8) {cadenaTabla += "<td>Baja</td>"; banderaActivo=2;}
          else if (respuestasActivo<=12) {cadenaTabla += "<td>Moderada</td>"; banderaActivo=3;}
          else if (respuestasActivo<=14) {cadenaTabla += "<td>Alta</td>"; banderaActivo=4;}
          else if (respuestasActivo<=20) {cadenaTabla += "<td>Muy Alta</td>"; banderaActivo=5;}
          
          if (respuestasReflexivo<=10) {cadenaTabla += "<td>Muy Baja</td>"; banderaReflexivo=1;}
          else if (respuestasReflexivo<=13) {cadenaTabla += "<td>Baja</td>"; banderaReflexivo=2;}
          else if (respuestasReflexivo<=17) {cadenaTabla += "<td>Moderada</td>"; banderaReflexivo=3;}
          else if (respuestasReflexivo<=19) {cadenaTabla += "<td>Alta</td>"; banderaReflexivo=4;}
          else if (respuestasReflexivo==20) {cadenaTabla += "<td>Muy Alta</td>"; banderaReflexivo=5;}
          
          if (respuestasTeorico<=6) {cadenaTabla += "<td>Muy Baja</td>"; banderaTeorico=1;}
          else if (respuestasTeorico<=9) {cadenaTabla += "<td>Baja</td>"; banderaTeorico=2;}
          else if (respuestasTeorico<=13) {cadenaTabla += "<td>Moderada</td>"; banderaTeorico=3;}
          else if (respuestasTeorico<=15) {cadenaTabla += "<td>Alta</td>"; banderaTeorico=4;}
          else if (respuestasTeorico<=20) {cadenaTabla += "<td>Muy Alta</td>"; banderaTeorico=5;}
          
          if (respuestasPragmatico<=8) {cadenaTabla += "<td>Muy Baja</td>"; banderaPragmatico=1;}
          else if (respuestasPragmatico<=10) {cadenaTabla += "<td>Baja</td>"; banderaPragmatico=2;}
          else if (respuestasPragmatico<=13) {cadenaTabla += "<td>Moderada</td>"; banderaPragmatico=3;}
          else if (respuestasPragmatico<=15) {cadenaTabla += "<td>Alta</td>"; banderaPragmatico=4;}
          else if (respuestasPragmatico<=20) {cadenaTabla += "<td>Muy Alta</td>"; banderaPragmatico=5;}
          cadenaTabla += "</tr></tbody></table>"
          $('#analisisResultados').append(cadenaTabla);
          var buscandoPreferencia=true;
          var indicativoPreferencia=5;
          
          //crear información estilos preferidos
          var cadenaInfoEstilo="";

          while (buscandoPreferencia){
              var cadenaE=[];
              if (banderaActivo==indicativoPreferencia){
                  cadenaE.push("Activo");
                  buscandoPreferencia=false;
                    cadenaInfoEstilo+="<h5>Características por tu estilo de aprendizaje <b>activo</b></h5>Posees muchas de estas características o manifestaciones: animador, improvisador, descubridor, arriesgado y espontáneo. <h5>¿Cómo se te facilita el aprendizaje?</h5>Cuando puedes:<ul><li>Intentar cosas nuevas, nuevas experiencias, nuevas oportunidades. </li><li>Generar ideas sin limitaciones formales o de estructura.</li><li>Resolver problemas.</li></ul><h5>¿Cómo se te dificulta el aprendizaje?</h5><ul><li>Cuando tienen que adoptar un papel pasivo.</li><li>Cuando tienen que asimilar, analizar e interpretar muchos datos sin coherencia o que no están claros</li><li>Al tener que seguir instrucciones precisas con escaso margen de maniobra.</li></ul><button type='button' class='btn btn-primarioP1' data-toggle='modal' data-target='#modal-estilo-activo'>Más recomendaciones</button>                <div class='w-100 py-2'></div>";
                  
              }
              if (banderaReflexivo==indicativoPreferencia){
                  cadenaE.push("Reflexivo");
                  buscandoPreferencia=false;
                    cadenaInfoEstilo+="<h5>Características por tu estilo de aprendizaje <b>reflexivo</b></h5>Posees muchas de estas características o manifestaciones: ponderado, concienzudo, receptivo, analítico y exhaustivo.<h5>¿Cómo se te facilita el aprendizaje?</h5><ul><li>Cuando puedes adoptar la postura de observador.</li><li>Al revisar lo aprendido, lo sucedido.</li><li>Cuando puedes pensar antes de actuar.</li></ul><h5>¿Cómo se te dificulta el aprendizaje?</h5><ul><li>Al tener que ocupar el centro de la atención.</li><li>Cuando tienes que participar en situaciones que requieran acción sin planificación.</li><li>No tener datos suficientes para sacar una conclusión.</li></ul><button type='button' class='btn btn-primarioP1' data-toggle='modal' data-target='#modal-estilo-reflexivo'>Más recomendaciones</button>                <div class='w-100 py-2'></div>";

              }
              if (banderaTeorico==indicativoPreferencia){
                  cadenaE.push("Teórico");
                  buscandoPreferencia=false;
                    cadenaInfoEstilo+="<h5>Características por tu estilo de aprendizaje <b>teórico</b></h5>Posees muchas de estas características o manifestaciones: metódico, lógico, objetivo, crítico y estructurado<h5>¿Cómo se te facilita el aprendizaje?</h5><ul><li>Al sentirse en situaciones estructuradas que tengan una finalidad clara.</li><li>Tener tiempo para explorar metódicamente las asociaciones y las relaciones entre ideas, acontecimientos y situaciones.</li><li>Encontrar ideas y conceptos complejos capaces de enriquecede.</li></ul><h5>¿Cómo se te dificulta el aprendizaje?</h5><ul><li>Con  actividades no estructuradas, de finalidad incierta o ambiguas.</li><li>Al tener que actuar o decidir sin una base de principios, conceptos, políticas o estructura.</li><li>Al verse obligado a hacer algo sin un contexto o finalidad clara.</li></ul><button type='button' class='btn btn-primarioP1' data-toggle='modal' data-target='#modal-estilo-teorico'>Más recomendaciones</button>                <div class='w-100 py-2'></div>";

              }
              if (banderaPragmatico==indicativoPreferencia){
                  cadenaE.push("Pragmático");
                  buscandoPreferencia=false;
                    cadenaInfoEstilo+="<h5>Características por tu estilo de aprendizaje <b>pragmático</b></h5>Posees muchas de estas características o manifestaciones: experimentador, práctico, directo, eficaz y realista.<h5>¿Cómo se te facilita el aprendizaje?</h5><ul><li>Al aprender técnicas para hacer las cosas con ventajas prácticas evidentes.</li><li>Cuando estas expuesto ante un modelo al que puedes emular.</li><li>Al tener posibilidad inmediata de aplicar l0 aprendido, de experimentar.</li></ul><h5>¿Cómo se te dificulta el aprendizaje?</h5><ul><li>Si percibes que ese aprendizaje no tiene una importancia inmediata o un beneficio práctico.</li><li>Al trabajar sin instrucciones claras sobre cómo hacerlo.</li></ul><button type='button' class='btn btn-primarioP1' data-toggle='modal' data-target='#modal-estilo-pragmatico'>Más recomendaciones</button>";

              }
              indicativoPreferencia--;
          }
          $('#tituloResultado').append(cadenaE.toString().replace(/,/g," - "));
          $('#analisisEstilos').append(cadenaInfoEstilo);
      });
      </script>
    <?php
      if ($respuestasActivo==0 && $respuestasReflexivo==0 && $respuestasTeorico==0 && $respuestasPragmatico==0) {
          //echo("Error ceros");
      }
      else {
          switch (sizeof($cadenaE)){
              case 1:
                  $EstiloUnidad1="INSERT INTO mdl_user_info_data (userid, fieldid, data, dataformat) VALUES ('".$userid."', '3', '".$cadenaE[0]."', '0')";
                  $EstiloUnidad2="INSERT INTO mdl_user_info_data (userid, fieldid, data, dataformat) VALUES ('".$userid."', '4', '".$cadenaE[0]."', '0')";
                  $EstiloUnidad3="INSERT INTO mdl_user_info_data (userid, fieldid, data, dataformat) VALUES ('".$userid."', '5', '".$cadenaE[0]."', '0')";
                  $EstiloUnidad4="INSERT INTO mdl_user_info_data (userid, fieldid, data, dataformat) VALUES ('".$userid."', '6', '".$cadenaE[0]."', '0')";
                  $EstiloUnidad5="INSERT INTO mdl_user_info_data (userid, fieldid, data, dataformat) VALUES ('".$userid."', '7', '".$cadenaE[0]."', '0')";
                  break;
              case 2:
                  $aleatorioU=rand(0,1);
                  $EstiloUnidad1="INSERT INTO mdl_user_info_data (userid, fieldid, data, dataformat) VALUES ('".$userid."', '3', '".$cadenaE[$aleatorioU]."', '0')";
                  $aleatorioU=rand(0,1);
                  $EstiloUnidad2="INSERT INTO mdl_user_info_data (userid, fieldid, data, dataformat) VALUES ('".$userid."', '4', '".$cadenaE[$aleatorioU]."', '0')";
                  $aleatorioU=rand(0,1);
                  $EstiloUnidad3="INSERT INTO mdl_user_info_data (userid, fieldid, data, dataformat) VALUES ('".$userid."', '5', '".$cadenaE[$aleatorioU]."', '0')";
                  $aleatorioU=rand(0,1);
                  $EstiloUnidad4="INSERT INTO mdl_user_info_data (userid, fieldid, data, dataformat) VALUES ('".$userid."', '6', '".$cadenaE[$aleatorioU]."', '0')";
                  $aleatorioU=rand(0,1);
                  $EstiloUnidad5="INSERT INTO mdl_user_info_data (userid, fieldid, data, dataformat) VALUES ('".$userid."', '7', '".$cadenaE[$aleatorioU]."', '0')";
                  break;
              case 3:
                  $aleatorioU=rand(0,2);
                  $EstiloUnidad1="INSERT INTO mdl_user_info_data (userid, fieldid, data, dataformat) VALUES ('".$userid."', '3', '".$cadenaE[$aleatorioU]."', '0')";
                  $aleatorioU=rand(0,2);
                  $EstiloUnidad2="INSERT INTO mdl_user_info_data (userid, fieldid, data, dataformat) VALUES ('".$userid."', '4', '".$cadenaE[$aleatorioU]."', '0')";
                  $aleatorioU=rand(0,2);
                  $EstiloUnidad3="INSERT INTO mdl_user_info_data (userid, fieldid, data, dataformat) VALUES ('".$userid."', '5', '".$cadenaE[$aleatorioU]."', '0')";
                  $aleatorioU=rand(0,2);
                  $EstiloUnidad4="INSERT INTO mdl_user_info_data (userid, fieldid, data, dataformat) VALUES ('".$userid."', '6', '".$cadenaE[$aleatorioU]."', '0')";
                  $aleatorioU=rand(0,2);
                  $EstiloUnidad5="INSERT INTO mdl_user_info_data (userid, fieldid, data, dataformat) VALUES ('".$userid."', '7', '".$cadenaE[$aleatorioU]."', '0')";
                  break;
              case 4:
                  $aleatorioU=rand(0,3);
                  $EstiloUnidad1="INSERT INTO mdl_user_info_data (userid, fieldid, data, dataformat) VALUES ('".$userid."', '3', '".$cadenaE[$aleatorioU]."', '0')";
                  $aleatorioU=rand(0,3);
                  $EstiloUnidad2="INSERT INTO mdl_user_info_data (userid, fieldid, data, dataformat) VALUES ('".$userid."', '4', '".$cadenaE[$aleatorioU]."', '0')";
                  $aleatorioU=rand(0,3);
                  $EstiloUnidad3="INSERT INTO mdl_user_info_data (userid, fieldid, data, dataformat) VALUES ('".$userid."', '5', '".$cadenaE[$aleatorioU]."', '0')";
                  $aleatorioU=rand(0,3);
                  $EstiloUnidad4="INSERT INTO mdl_user_info_data (userid, fieldid, data, dataformat) VALUES ('".$userid."', '6', '".$cadenaE[$aleatorioU]."', '0')";
                  $aleatorioU=rand(0,3);
                  $EstiloUnidad5="INSERT INTO mdl_user_info_data (userid, fieldid, data, dataformat) VALUES ('".$userid."', '7', '".$cadenaE[$aleatorioU]."', '0')";
                  break;
          }
              
          //$resultado = mysqli_query($conexion, $consulta) or die ("error en la consulta");
          $insertarEstilo= "INSERT INTO mdl_user_info_data (userid, fieldid, data, dataformat) VALUES ('".$userid."', '1', '".$estilosPreferidos."', '0')";
          $cerrarSesion= "DELETE FROM mdl_sessions WHERE (userid = '".$userid."')";
          //mysqli_query($conexion, $insertarEstilo) or die ("alert('Error en la asignación de estilo, el usuario ya tiene estilos registrados');");
          mysqli_query($conexion, $EstiloUnidad1);
          mysqli_query($conexion, $EstiloUnidad2);
          mysqli_query($conexion, $EstiloUnidad3);
          mysqli_query($conexion, $EstiloUnidad4);
          mysqli_query($conexion, $EstiloUnidad5);
          
          mysqli_query($conexion, $insertarEstilo);
          mysqli_query($conexion, $cerrarSesion);
      }
      mysqli_close( $conexion );
    ?>
      <script>
          //location.reload();
              //var idUsuario = <?= $userid ?>;
      //alert("usario iD: "+idUsuario);
        </script>
</body>
</html>