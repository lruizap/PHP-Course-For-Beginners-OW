<!DOCTYPE html>
<html lang="en-es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Operadores en PHP</title>
</head>
<body>

<h1>Operadores en PHP</h1>

<h2>Operadores 1</h2>

<?php

    // Operadores en php

    // Operadores Aritméticos

    $num1 = 5;
    $num2 = 10;

    $total = $num1 + $num2;
    
    echo $total;
    echo "</br>";
    echo $num1 + $num2;

    echo "</br>";
    echo $num1."x".$num2."=".($num1*$num2);
    echo "</br>";
    echo $num1."/".$num2."=".($num1/$num2);
    echo "</br>";
    echo $num1."%".$num2."=".($num1%$num2); // Muestra el resto de la división
    echo "</br>";
    echo $num1."^".$num2."=".($num1**$num2); // Muestra el Exponencial
    echo "</br>";
    echo $num1."^".$num2."=".pow($num1,$num2); // Muestra el Exponencial

    // Operadores de asignación

    echo "</br></br>";
    echo $num1."+=".$num2."=".($num1+=$num2)."</br>"; // a = a + b
    echo $num1."  ".$num2;

    $num1 = 5;
    $num2 = 10;

    echo "</br></br>";
    echo $num1."-=".$num2."=".($num1-=$num2)."</br>"; // a = a - b
    echo $num1."  ".$num2;

    // ...

    // Operadores de Comparación

    $num1 = 5;
    $num2 = 10;
    $num3 = 5;
    $valor1 = "5";

    echo "</br></br>";
    if($num1 == $num2){
        echo "Num1 y Num2 son iguales";
        echo "</br>";
    }else {
        echo "Num1 y Num2 son distintos";
        echo "</br>";
    };

    // Es un operador ternario, es lo mismo que un if y un else.
    // Primero la condición
    // seguido del ? viene el if
    // después de los : viene el else

    echo $num1==$num2?"Num1 y Num2 son iguales":"Num1 y Num2 son distintos";

    echo "</br></br>";

    echo $num1<>$valor1?"Num1 y Num2 son iguales":"Num1 y Num2 son distintos";
    echo "</br>";
    // Usar <> y == es lo mismo
    echo $num1==$valor1?"Num1 y Num2 son iguales":"Num1 y Num2 son distintos";
    echo "</br>";
    
    echo "</br></br>";
    
    // esto es debido a que estamos comparadno el contenido y no si son el mismo tipo de valor
    echo $num1===$num2?"Num1 y Num2 son iguales":"Num1 y Num2 son distintos";
    echo "</br>";
    // Al comparar el tipo de valor si nos da que  distinto
    echo $num1>$num2?"Num1 > Num2":"Num1 < Num2";
    echo "</br>";

?>

<h2>Operadores 2</h2>

<?php 

    // Operadores de Incremeto / Decemento

    $num1 = 5;
    $num2 = 10;

    echo $num1++;
    echo "</br>";
    echo $num1;
    echo "</br>";

    // Esto lo que hace es incrementar la variable después de mostrarla.
    // Esto quiere decir que trabaja con la variable después de ejecutar su finción

    echo ++$num2;
    echo "</br>";
    echo $num2;

    // Primero lo incrementa y después lo muestra
    // Trabaja con la variable antes de ejecutar su finción

    echo "</br></br>";

    // Operadores Lógicos

    $num1 = 5;
    $num2 = 10;
    $num3 = 5;
    $valor1 = "5";
    $num4 = 20;
    $num5 = 5;
    $activo1 = true;
    $activo2 = false;

    // AND

    if($num1 == $num3 && $num3 == $num5) // en vez de && puedes usar and
    {
        echo "iguales";
        echo "</br>";
    }else {
        echo "diferentes";
        echo "</br>";
    }

    // OR

    if($num1 == $num3 || $num3 == $num5) // en vez de || puedes usar or
    {
        echo "iguales";
        echo "</br>";
    }else {
        echo "diferentes";
        echo "</br>";
    }

    // XOR

    if($num1 == $num3 xor $num3 == $num5)
    {
        echo "iguales";
        echo "</br>";
    }else {
        echo "diferentes";
        echo "</br>";
    }

    // Negación

        if(!$activo1)
    {
        echo "false";
        echo "</br>";
    }else {
        echo "true";
        echo "</br>";
    }

?>

</body>
</html>