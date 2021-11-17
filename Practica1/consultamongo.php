<?php

require '../vendor/autoload.php';

try {

    $cliente = new MongoDB\Client("mongodb://localhost:27017");

    $bd = $cliente->libroservidor;

    // devuelve todos los usuarios

    echo "Todos los usuarios" . "<br>";

    $usuarios = $bd->usuarios->find();

    foreach($usuarios as $usuario){
        echo $usuario['nombre'] . " " . $usuario['saldo'] . '</br>';
         //var_dump($usuario);

    }

    echo '<p>En total hay '.$bd->usuarios->count().' usuarios'. '</br>';

    // usuarios con nombre Ana

    echo "Usuarias con nombre 'Ana'" . "<br>";

    $usuarios = $bd->usuarios->find(['nombre' => 'Ana']);

    foreach($usuarios as $usuario){

        echo $usuario['nombre'] . " " . $usuario['saldo'] . '</br>';

        // var_dump($usuario);

    }  

    // solo devuelve el primero que encuentre

    echo "Usuaria con nombre 'Ana'" . "<br>";

    $ana = $bd->usuarios->findOne(['nombre' => 'Ana']);
    echo $usuario['nombre'] . " " . $usuario['saldo'] . '</br>';

    //var_dump($ana);

   

}catch (Exception $e) {

    print ($e);

}