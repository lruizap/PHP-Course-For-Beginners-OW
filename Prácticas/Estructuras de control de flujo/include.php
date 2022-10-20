<!DOCTYPE html>
<html lang="en-es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Include.phpt</title>
</head>
<body>

    <h1>Include</h1>

<?php

    // Include

    include "./estructuras.php";
    // Esto me incluye dentro de este fichero el contenido del fichero 2

    include "./ficheroNoExiste.php";
    // Si no encuentra el fichero simplemente manda un aviso

    include_once "./estructuras.php";
    // Esto lo que hace es incluirlo solo una vez, es como un seguro.

?>

</body>
</html>