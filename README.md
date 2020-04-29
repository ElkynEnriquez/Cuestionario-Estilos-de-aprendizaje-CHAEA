# Cuestionario-Estilos-de-aprendizaje-CHAEA 📋

El estilo de aprendizaje es el conjunto de características psicológicas, afectivas y fisiológicas que se expresan cuando una persona se enfrenta a una situación de aprendizaje. No todas las personas aprenden de la misma forma, sino que hay estilos diferentes (ninguno es mejor que otro).

El Cuestionario Honey Alonso de Estilos de Aprendizaje (CHAEA) es un instrumento para diagnosticar los estilos de aprendizaje. Inscrito dentro de los enfoques cognitivos del aprendizaje, se basa en la visión del aprendizaje en línea con Kolb, Juch, Honey y Mumford. Estos autores proponen un esquema del proceso de aprendizaje por la experiencia dividido en cuatro etapas:

    Vivir la experiencia: Estilo Activo.
    Reflexión: Estilo Reflexivo.
    Generalización, elaboración de hipótesis: Estilo Teórico.
    Aplicación: Estilo Pragmático.

CHAEA, consta de ochenta preguntas (veinte ítems referentes a cada uno de los cuatro estilos de aprendizaje) a las que hay que responder manifestando acuerdo o desacuerdo. Además se le ha añadido una serie de cuestiones socioacadémicas, que facilitan un total de dieciocho variables para analizar las relaciones de estas variables y las respuestas a los ítems.
```
Tomado de https://eduportfolio.org/vues/view/82409/page:1197529
```

## Demo Cuestionario y Funcionamiento   🚀


Demostración de este proyecto en https://www.muta.com.co/equa/chaea/



## Este Cuestionario de estilos de aprendzaje puede sincronizarse con Moodle 🔧

¿Para qué?, Los resultados de un usuario se pueden almacenar en campos de usuarios de Moodle, esto crea infinitas posibilidades de uso, por ejemplo, para el trabajo de grado denominado EQUA(http://equa.udenar.edu.co/) del cual es parte este proyecto se utilizó para diseñar rutas de aprendizaje personalizadas dependiendo de los estilos de aprendizaje preferidos de cada usuario, segmento de usuarios o sus posiles combinaciones.

### Configuración para almacenar los resultados en Moodle

Con esta configuración, se muestra los resultados, descripción y gráfica en la página resultados.php y simultáneamente, almacena los resultados y crea una ruta de aprendizaje según los estilos preferidos de aprender que se diagnostiquen para cada usuario.

Para realizar esta configuración debes:

_Editar los archivos "estilos-guardados.php" , "resultados.php.ParaConexionconBDMoodle" y "ruta-ale.php" para fijar las credenciales de acceso a la Base de Datos, como Usuario, Contraseña, Servidor y nombre de la Base de Datos de tu Moodle._

Vamos a reemplazar el archivo "resultados.php", actual, por el archivo "resultados.php.ParaConexionconBDMoodle", así:
_Elimina el archivo denominado "resultados.php"
_Cambia el nombre del archivo "resultados.php.ParaConexionconBDMoodle" por "resultados.php"



____________________________________________________________________________________________

```
Este proyecto es parte del Trabajo de grado:
Ambiente Virtual de Aprendizaje adaptativo orientado a operaciones básicas con expresiones algebraicas, dirigido a estudiantes de la asignatura Matemáticas generales C de la Universidad de Nariño
http://sired.udenar.edu.co/6280/

Autores:
Elkyn Enriquez
Elizabeth Lara
Sandra Delgado

2019 Universidad de Nariño
```
