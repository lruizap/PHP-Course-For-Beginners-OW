<!DOCTYPE html>
<html lang="en-es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Hola Mundo</title>
</head>
<body>

<?php

    // Comentarios == HTML y CSS
    
    /*
        Comentarios +1 línea
    */

    # También se puede con #

    echo "Hola Mundo"."</br>"; // Es más rapido que print

    // en PHP se concatena con el .

    $name = "Lucas";
    echo "Hola ".$name."</br>";

    echo "Hola $name </br>";

    print "Hola Mundo </br>";

    $true = true;
    $false = false;

    echo "true = $true </br>";
    echo "false = $false </br>";

    // Con esto, true == 1 y false == null

    echo "true = ".json_encode($true)."</br>";
    echo "false = ".json_encode($false)."</br>";

?>

</body>
</html>