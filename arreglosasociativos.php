<?php

$nombre[0]=[
  'nombre'=>'Anderson',
  'edad'=>20

];

$nombre[1]=[
    'nombre'=>'Lucia',
    'edad'=>40
  
  ];

  $nombre[2]=[
    'nombre'=>'Lu',
    'edad'=>27
  
  ];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arreglos asociativos</title>
</head>
<body>
  <h1><hr>Datos</hr></h1>  
<?php
foreach($nombre as $actualizar){
echo '<hr>';
echo 'Nombre: '.$actualizar['nombre'].'<br>'.'Edad: '.$actualizar['edad'].' años'.'<br>';
echo '<hr>';
}
?>
<br>
<br>

<h2>
<?php

for($i=0;$i<=1;$i++){

    echo 'Su nombre es '.$nombre[$i]['nombre'].' y su edad es '.$nombre[$i]['edad'].' años'.'<br>';
    echo '<hr>';

}

?>
</h2>

</body>
</html>