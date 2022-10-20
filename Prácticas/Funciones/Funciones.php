<!DOCTYPE html>
<html lang="en-es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Funciones</title>
</head>
<body>

    <h1>Funciones</h1>

<?php

    // Funciones

    // function nombre_funcion($parámetros){
    //     instrucciones;
    //     return valor;
    // }

    // nombre_funcion($parámetros);
    // $resultado = nombre_funcion($parámetros);

    $a = 4;
    $b = 10;

    function suma ($a, $b) {
        return $a+$b;
    }

    echo suma($a,$b)."</br></br>";

    // Valor y referencia

    function miFuncion($a) {
        $a = $a + 2;
    }

    function miFuncion2(&$a) {
        $a = $a + 2;
    }

    miFuncion($a);
    echo $a."</br>";
    miFuncion2($a);
    echo $a."</br></br>";

    // Recursividad

    function Factorial($number) {
        if($number == 1){
            return 1;
        }
        else {
            echo $number."x";
            return $number*Factorial($number-1);
        }
    }

    echo Factorial($b)."<br><br>";

    // Comparar y unir

    $numeros1 = array(11,22,33);
    $numeros2 = array(11,55,5);
    $colores1 = array("color1" => "rojo","color2" => "verde","color3" => "verde","color4" => "naranja",);
    $colores2 = array("color1" => "verde","color2" => "azul","color3" => "amarillo","color4" => "naranja",);
    
        // array_diff()

        $diferencias1 = array_diff($numeros1, $numeros2);
        var_dump($diferencias1);
        echo "</br>";

        // array_merge()

        $diferencias2 = array_merge($numeros1, $numeros2);
        var_dump($diferencias2);
        echo "</br></br>";

        // Ordenar

        var_dump($numeros2);
        echo "</br>";

        sort($numeros2);
        var_dump($numeros2);
        echo "</br>";

        rsort($numeros2);
        var_dump($numeros2);
        echo "</br></br>";

        // asort()

        var_dump($colores1);
        echo "<br>";
        asort($colores1);
        var_dump($colores1);
        echo "<br></br>";

        // ksort()

        var_dump($colores1);
        echo "<br>";
        ksort($colores1);
        var_dump($colores1);
        echo "<br></br>";

        // shuffle

        var_dump($colores2);
        echo "<br>";
        shuffle($colores2);
        var_dump($colores2);
        echo "<br></br>";

    // Modificar array

        // array_shift()

        $frutas = array("naranja", "plátano","manzana","frambuesa");
        
        var_dump($frutas);
        echo "<br>";
        array_shift($frutas);
        var_dump($frutas);
        echo "<br></br>";

        // array_unshift()

        var_dump($frutas);
        echo "<br>";
        array_unshift($frutas, "meloconotes");
        var_dump($frutas);
        echo "<br></br>";

        // array_pop()

        var_dump($frutas);
        echo "<br>";
        $eliminado = array_pop($frutas);
        var_dump($eliminado);
        echo "<br>";
        var_dump($frutas);
        echo "<br></br>";

        // array_push()

        var_dump($frutas);
        echo "<br>";
        array_push($frutas, "pera");
        var_dump($frutas);
        echo "<br></br>";

    // Funciones interesantes

        // count()

        echo count($frutas)."</br>";

        // reset()

        $actual = reset($frutas);
        echo $actual."</br>";

        end($frutas);

        // current()

        $actual = current($frutas);
        echo $actual."</br>";

        reset($frutas);

        // search()

        $meses = array(0 => "Enero", 1 => "Febrero", 2 => "Marzo", 3=>"Abril");

        $clave = array_search("Febrero", $meses);
        if($clave) {
            echo $clave." ".$meses[$clave]."</br>";
        }
        else {
            echo "Elemento no encontrado"."</br>";
        }

        // end()

        $final = end($frutas);
        echo $final."</br>";
?>

</body>
</html>