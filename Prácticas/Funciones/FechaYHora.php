<!DOCTYPE html>
<html lang="en-es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Fecha y hora</title>
</head>
<body>

    <h1>Fecha y hora</h1>

<?php

    //Fecha y hora

    echo date("Y");
    echo "<br>";
    echo date("j");
    echo "<br>";
    echo date("d/m/y");
    echo "<br>";
    echo date("d/m/y h:i:s");
    echo "<br>";
    echo date("l jS \of F Y h:i:s A");
    echo "<br>";
    echo "<br>";

    $hoy = getdate();
    var_dump($hoy);
    echo "<br>";
    echo "<br>";

    echo "Zona Horaria ". date_default_timezone_get();
    echo "<br>";
    
    date_default_timezone_set("America/Los_Angeles");
    echo "Zona Horaria ". date_default_timezone_get();
    echo "<br>";

    date_default_timezone_set("UTC");

?>

</body>
</html>