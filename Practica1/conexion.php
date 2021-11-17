<?php

require '../vendor/autoload.php';

echo "Conectando...";

try{

//$conexion= new MongoDB\Client;

// Conexión especificando host y puerto

$conexion= new MongoDB\Client('mongodb://localhost:27017');

$basedatos= $conexion->libroservidor;

$coleccion = $basedatos->usuarios;

}catch(Exception $e){

    print ($e);

}

echo "Funciona la conexión";
?>


