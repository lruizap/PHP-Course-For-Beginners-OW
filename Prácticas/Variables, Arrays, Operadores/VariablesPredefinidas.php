<!DOCTYPE html>
<html lang="en-es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>VariablesPredefinidas</title>
</head>
<body>

<h1>VariablesPredefinidas.php</h1>

<?php

    // Variables predefinidas

    $number = 33;

    echo "El nombre del Servidor : ".$_SERVER['SERVER_NAME']."</br>";
    echo "El Software del Servidor : ".$_SERVER['SERVER_SOFTWARE']."</br>";
    echo "El Puerto del Servidor : ".$_SERVER['SERVER_PORT']."</br>";

    echo "La variable número vale : ".$GLOBALS['number']."</br></br></br>";

    // Constantes

    // Las constantes no vienen iniciadas por un $

    // PHP contiene variables predefinidas 

    echo "La verión de PHP es: ".PHP_VERSION."</br>";

    // Para crear una constante se usa la palabra const o la función define

    const PI = 3.141592;
    define('AUREO',1.1618033);

    echo PI."</br>";
    echo AUREO."</br>";

    // Las constantes no se pueden modificar durante el programa

    // PI = PI + 1; --> Esto da error

?>

<h2>PasoVariables.php</h2>

<!-- Paso de variables a otra web -->

<a href="./PasoVariables.php?nombre=Luis&cargo=Profesor">Vamos a PasoVariables.php</a>
</body>
</html>