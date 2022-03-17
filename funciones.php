<?php
echo date('Y');

function primera(){
   return '<p> Para otorgar a su documento un aspecto profesional, Word proporciona encabezados, pies 
    de página, páginas de portada y diseños de cuadro de texto que se complementan entre sí.
     Por ejemplo, puede agregar una portada coincidente, el encabezado y la barra lateral. 
    Haga clic en Insertar y elija los elementos que desee de las distintas galerías.</p>';
}
 function promedio($num1,$num2){
     return(($num1+$num2)/2);
 }

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
    <h1>Texto prueba</h1>
    <section>
        <?php
         echo primera();
         echo primera();
        ?>
    </section>
    <section>
        <?php
         echo 'El promedio de los numeros ingresados es: '.promedio(20,10);
        ?>
    </section>
</body>
</html>