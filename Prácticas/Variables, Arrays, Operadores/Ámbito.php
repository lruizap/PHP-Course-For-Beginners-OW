<!DOCTYPE html>
<html lang="en-es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ámbito</title>
</head>
<body>

<?php

    // Ámbito de una función

    $number = 22;

    function HelloWorld(){

        global $number;
        echo $number;
    }

    HelloWorld();

    echo "</br>";

    function TellNumber(){
        $number = 44;
        echo $number;
    }

    TellNumber();

    echo "</br>";


?>

</body>
</html>