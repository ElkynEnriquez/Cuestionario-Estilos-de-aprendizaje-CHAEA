<!doctype html>
<html lang="es">
    <head>
        <!-- Etiquetas <meta> obligatorias para Bootstrap -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- Enlazando el CSS de Bootstrap -->
        <link rel="stylesheet" href="css/tema-tesis.min.css">
        
        <title>Resultados Cuestionario HONEY-ALONSO de estilos de aprendizaje</title>
  </head>
  <body class="text-white" >
      <?php
            require_once('../config.php');
            global $USER;
            $userid=$USER->id;
      ?>
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
        <?php
            echo ('<script>
        alert("alert reflex "+'.$userid.');
        </script>');
      ?>
        <!-- Modal Estilo Teorico-->
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
        <?php
            echo ('<script>
        alert("alert teorico "+'.$userid.');
        </script>');
      ?>
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
                <?php
            echo ('<script>
        alert("alert pragma "+'.$userid.');
        </script>');
      ?>
    </div>
      <?php
      
        /* ****************************************** Inicio Datos de conexión a la Base de Datos de Moodle ********************************************* */
        $usuario="UserBD-moodle";
        $contrasena="PwBD-moodle";
        $servidor="localhost";
        $basededatos="BD-moodle";
        /* ****************************************** Fin Datos de conexión a la Base de Datos de Moodle ********************************************* */    

        //Realizo mi consulta 
        $objetoMysqli=new mysqli($servidor,$usuario,$contrasena,$basededatos);
    
        if($objetoMysqli->connect_errno) {
            die("Error de conexión: " . $objetoMysqli->mysqli_connect_errno() . ", " . $objetoMysqli->connect_error());
        }
        else{
            echo "La conexión tuvo éxito";
        }
        $consultaEstilos="SELECT data FROM mdl_user_info_data WHERE userid=".$userid;
        $resultado=$conexion->query($consulta);
        $fila = $resultado->fetch_assoc();
        $estilosPreferidosStr=$fila['data'];
        echo ('<script> alert("'+$estilosPreferidosStr+'"); </script>');
        //Cerramos la conexión
        $objetoMysqli->mysqli_close();
      //mysqli_close($conexion);
      $campos=array();
      while($row = $consultarEstilo->fetch_row()){
          $campos[]=$row;
      }
       if ((array)$consultarEstilo) {
           $estilosPreferidosStr=implode("-",$consultarEstilo);
           echo ('<script> alert("'+$estilosPreferidosStr+'"); </script>');
           echo ('<script> alert("'+$campos[0]+'"); </script>');
       }
       else {
           echo ('<script> alert("No es arreglo"); </script>');
           //$estilosPreferidosStr=$consultarEstilo;
           //$consultarEstilo[0]=$consultarEstilo;
       }
      $consultarEstilo=["Activo","Reflexivo"];
      $estilosPreferidosStr="Activo-Reflexivo";
      echo ('<script>
        alert('.$consultarEstilo.');
        alert("43"+'.$estilosPreferidosStr.');
        var estilosPreferidos='.$consultarEstilo.';
        var estilosPreferidosStr='.$estilosPreferidosStr.';
       </script>');
      ?>
    <!-- Opcional: enlazando el JavaScript de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      
      
      <script>
      $(document).ready(function() { 
          
          //crear información estilos preferidos
          var cadenaInfoEstilo="";

          for (var i=0; i<=estilosPreferidos.length; i++){
              var cadenaE=[];
              if (estilosPreferidos[i]=="Activo"){
                  cadenaE.push("Activo");
                    cadenaInfoEstilo+="<h5>Características por tu estilo de aprendizaje <b>activo</b></h5>Posees muchas de estas características o manifestaciones: animador, improvisador, descubridor, arriesgado y espontáneo. <h5>¿Cómo se te facilita el aprendizaje?</h5>Cuando puedes:<ul><li>Intentar cosas nuevas, nuevas experiencias, nuevas oportunidades. </li><li>Generar ideas sin limitaciones formales o de estructura.</li><li>Resolver problemas.</li></ul><h5>¿Cómo se te dificulta el aprendizaje?</h5><ul><li>Cuando tienen que adoptar un papel pasivo.</li><li>Cuando tienen que asimilar, analizar e interpretar muchos datos sin coherencia o que no están claros</li><li>Al tener que seguir instrucciones precisas con escaso margen de maniobra.</li></ul><button type='button' class='btn btn-primarioP1' data-toggle='modal' data-target='#modal-estilo-activo'>Más recomendaciones</button>                <div class='w-100 py-2'></div>";
                  
              }
              if (estilosPreferidos[i]=="Reflexivo"){
                  cadenaE.push("Reflexivo");
                    cadenaInfoEstilo+="<h5>Características por tu estilo de aprendizaje <b>reflexivo</b></h5>Posees muchas de estas características o manifestaciones: ponderado, concienzudo, receptivo, analítico y exhaustivo.<h5>¿Cómo se te facilita el aprendizaje?</h5><ul><li>Cuando puedes adoptar la postura de observador.</li><li>Al revisar lo aprendido, lo sucedido.</li><li>Cuando puedes pensar antes de actuar.</li></ul><h5>¿Cómo se te dificulta el aprendizaje?</h5><ul><li>Al tener que ocupar el centro de la atención.</li><li>Cuando tienes que participar en situaciones que requieran acción sin planificación.</li><li>No tener datos suficientes para sacar una conclusión.</li></ul><button type='button' class='btn btn-primarioP1' data-toggle='modal' data-target='#modal-estilo-reflexivo'>Más recomendaciones</button>                <div class='w-100 py-2'></div>";

              }
              if (estilosPreferidos[i]=="Teorico"){
                  cadenaE.push("Teórico");
                    cadenaInfoEstilo+="<h5>Características por tu estilo de aprendizaje <b>teórico</b></h5>Posees muchas de estas características o manifestaciones: metódico, lógico, objetivo, crítico y estructurado<h5>¿Cómo se te facilita el aprendizaje?</h5><ul><li>Al sentirse en situaciones estructuradas que tengan una finalidad clara.</li><li>Tener tiempo para explorar metódicamente las asociaciones y las relaciones entre ideas, acontecimientos y situaciones.</li><li>Encontrar ideas y conceptos complejos capaces de enriquecede.</li></ul><h5>¿Cómo se te dificulta el aprendizaje?</h5><ul><li>Con  actividades no estructuradas, de finalidad incierta o ambiguas.</li><li>Al tener que actuar o decidir sin una base de principios, conceptos, políticas o estructura.</li><li>Al verse obligado a hacer algo sin un contexto o finalidad clara.</li></ul><button type='button' class='btn btn-primarioP1' data-toggle='modal' data-target='#modal-estilo-teorico'>Más recomendaciones</button><div class='w-100 py-2'></div>";

              }
              if (estilosPreferidos[i]=="Pragmatico"){
                  cadenaE.push("Pragmático");
                    cadenaInfoEstilo+="<h5>Características por tu estilo de aprendizaje <b>pragmático</b></h5>Posees muchas de estas características o manifestaciones: experimentador, práctico, directo, eficaz y realista.<h5>¿Cómo se te facilita el aprendizaje?</h5><ul><li>Al aprender técnicas para hacer las cosas con ventajas prácticas evidentes.</li><li>Cuando estas expuesto ante un modelo al que puedes emular.</li><li>Al tener posibilidad inmediata de aplicar l0 aprendido, de experimentar.</li></ul><h5>¿Cómo se te dificulta el aprendizaje?</h5><ul><li>Si percibes que ese aprendizaje no tiene una importancia inmediata o un beneficio práctico.</li><li>Al trabajar sin instrucciones claras sobre cómo hacerlo.</li></ul><button type='button' class='btn btn-primarioP1' data-toggle='modal' data-target='#modal-estilo-pragmatico'>Más recomendaciones</button>";

              }
          }
         $('#tituloResultado').append(cadenaE.toString().replace(/,/g," - "));
         $('#analisisEstilos').append(cadenaInfoEstilo);
      });
      </script>
</body>
</html>