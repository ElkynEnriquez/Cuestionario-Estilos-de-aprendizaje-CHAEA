<h1>form</h1>
<?php
    foreach($_POST as $campo => $valor){
    echo "<p> ". $campo ." = ". $valor."</p>";
    }
?>