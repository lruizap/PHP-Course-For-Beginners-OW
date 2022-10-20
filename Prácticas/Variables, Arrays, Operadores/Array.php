<!DOCTYPE html>
<html lang="en-es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>

<?php

    // Arrays

    $dias = ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sábado", "Domingo"];
    $temperatura = array(12,15,24,30);
    $vacio = array(15); // esto crea un array con 15 posiciones vacias
    $datos = array(); // este array no tiene nada, ni tamaño
    
    echo $dias[1]."</br></br>";

    var_dump($temperatura);

    echo "</br></br>";

    var_dump($dias);

    echo "</br></br>";

    // Arrays asociativos

    $exploradores = array("explorador1"=>"Chrome", "explorador2" => "Opera", "explorador3" => "Fireforx");

    echo $exploradores['explorador1']."</br>";

    $profesor = array("nombre"=>"Luisja", "edad" => 21, "profesor" => true, 3 => 100);

    echo $profesor['nombre']."</br>"; 

    var_dump($profesor);
    echo "</br>";
    var_dump($exploradores);

    echo "</br></br>";

    // No se si el for este está bien hecho ni si en PHP se pueden hacer como tal.

    for($i = 0; $i < 7; $i++)
    {
        echo $dias[$i]." </br>";
    }
?>

</body>
</html>