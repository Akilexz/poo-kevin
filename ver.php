<?php
require_once "modulo/conexion.php";
require_once "modulo/base.php";
require_once "controlador/cargar.php";
require_once "controlador/buscar.php";

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ver Productos</title>
</head>
<body>
    <h1>LISTA DE PRODUCTOS</h1>
    <?php cargar(); ?>
    <div><br><a href = "insertar.html">Regresar</a></div> 

</body>
</html>