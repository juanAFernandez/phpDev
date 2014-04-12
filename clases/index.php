<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');


include "gato.php";

$vera=new Gato("vera",5);

echo "Hola me llamo ".$vera->getNombre()." y tengo ".$vera->getEdad()." anios.";


?>
