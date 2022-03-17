<?php

$frutas=['Banano','Uva','Mango','Aguacate','Mora'];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for y foreach</title>
</head>
<body>

<?php

for ($i=0; $i <=4 ; $i++) { 
    echo '<h1>La fruta es: '.$frutas[$i].'</h1>';
}
?>

<!--Construcción de un foreach-->
<br>
<br>
<?php

foreach($frutas as $actualiza){
 echo '<h2> La fruta es: '.$actualiza.'</h2>';
}

?>



</body>
</html>