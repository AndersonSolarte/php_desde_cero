<?php
$seleccion ='fff';

switch($seleccion){
    case 'Cerveza':
        echo 'El costo de la cerveza es: 2500';
        break;
    case 'Pony':
        echo 'El costo de la pony es: 2000';
        break;
    case 'Agua':
        echo 'El costo del agua es: 3000';
        break;
    default:
        echo 'Opción invalida';
        break;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ingrese una opción</h1>
    <h2>1. Cerveza</h2>
    <h2>1. Pony</h2>
    <h2>1. Agua</h2>
</body>
</html>