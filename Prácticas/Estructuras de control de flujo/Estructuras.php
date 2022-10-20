<!DOCTYPE html>
<html lang="en-es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Estructuras.php</title>
</head>
<body>

    <h1>Estructuras de control de flujo</h1>

<?php

    // IF

    $num1 = 5;
    $num2 = 10;
    $nota1 = 9;
    $nota2 = 4;
    $valor1 = 2;
    $valor2 = 6;
    $dia = 4;

    if($num1 != $num2)
    {
        echo "Son distintos";
        echo "</br>";
    }

    if($nota1 >= 5){
        echo "Aprobado";
        echo "</br>";
        if($nota1 >= 9)
        {
            echo "Sobresaliente";
            echo "</br>";
        }
    }

    echo "</br>";

    // ELSE y ELSEIF

    if($num1 != $num2){
        echo "Son distintos";
        echo "</br>";
    }
    else {
        echo "Son iguales";
        echo "</br>";
    }

    // Ternario

    echo $nota1 >= 5? 'Aprobado' : 'Suspenso';
    echo "</br></br>";

    // Elseif

    if($valor1 > $valor2){
        echo "valor 1 > valor 2";
        echo "</br>";
    } elseif ($valor2 == $valor1) {
            echo "valor 1 = valor 2";
            echo "</br>";
    } else {
            echo "valor 1 < valor 2";
            echo "</br>";
    }

    echo "</br></br>";

    // Switch

    switch($dia){
        case 1 :
            echo "Lunes";
            echo "</br></br>";
            break;
        case 2 :
            echo "Martes";
            echo "</br></br>";
            break;
        case 3 :
            echo "Miércoles";
            echo "</br></br>";
            break;
        case 4 :
            echo "Jueves";
            echo "</br></br>";
            break;
        default:
            echo "Día no válido";
            echo "</br></br>";
            break;
    };

    // For

    for($i = 0; $i<=10; $i++)
    {
        echo $i;
        echo "</br>";
    }

    echo "</br>";

    // Foreach

    $letras = array("Primera" => "A", "Segunda" => "B", "Tercera" => "C");
    $exploradores = array("explorador1"=>"Chrome", "explorador2" => "Opera", "explorador3" => "Fireforx");

    foreach($letras as $k => $v)
    {
        echo "Valores[$k] => $v";
        echo "</br>";
    }

    // también se pueden recorrer los array y objetos con un for normal

    echo "</br>";

    var_dump($letras)."</br>";
    var_dump($exploradores)."</br>";

    echo "</br></br>";

    // WHILE y DOWHILE

    $num3 = 10;
    $respuesta = "Oporto";
    $intentos = 1;

    while($num3 >= 10 && $num3 <= 20)
    {
        echo $num3;
        echo "</br>";
        $num3++;
    }

    echo "</br>";

    while($respuesta != "Lisboa")
    {
        echo "Intentos: $intentos";
        echo "</br>";
        if($intentos == 3){
            $respuesta = "Lisboa";
        }
        $intentos++;
    }

    echo "</br>";

    // DO WHILE

    $valor3 = 10;

    while($valor3 != 10){
        echo "Dentro del while";
        echo "</br>";
    }

    do {
        echo "Dentro del do while";
        echo "</br>";
    }while($valor3 != 10);

    echo "</br>";

    // Break
    
    for($i = 0; $i<=10; $i++){
        echo "Valor de i = $i </br>";
        if($i == 3)
        {
            break;
        }
    }
    
    for($j = 0; $j<10; $j++){
        echo "Valor de j = $j </br>";
        for($k = 0; $k < 10; $k++){
            echo "Valor de k = $k </br>";
            if($k == 3){
                break 2;
            }
        }
    }

    echo "</br></br>";

    // Continue

    for($i = 0; $i<=10; $i++){
        if($i == 3)
        {
            continue;
        }
        echo "Valor de i = $i </br>";
    }

    // Esto lo que hace es saltarse la ejecución cuando la i == 3

    echo "</br>";

?>

</body>
</html>