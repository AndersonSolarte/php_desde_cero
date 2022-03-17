<?php

$arreglo=[2,4,6];
$animales=['Perro','Gallo','Toro','Vaca','Elefante'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        La suma es:
        <?php 
        $resultado =$arreglo[0]+$arreglo[2];
        echo $resultado;
        ?>

    </h1>
    <br>
<h1>
<?php
$i=0;
while($i<=4){
echo '<h1> El animal es un: '.$animales[$i].'</h1>';
$i++;
}
echo 'El arreglo se recorrio correctamente';
?>
</h1>
</body>
</html>