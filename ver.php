<?php
require_once "modulo/conexion.php";
require_once "modulo/base.php";
require_once "controlador/cargar.php";

?>

<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver Producto</title>
</head>
<body>
    <h1>LISTA DE PRODUCTOS</h1>
    <?php cargar(); ?>
    <div><br><a href ="insertar.html">Regresar</a></div>

</body>
</html>