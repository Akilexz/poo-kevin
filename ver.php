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
    <h2>KEVIN MALDONADO</h2>
    <div>
        <form method="get">
            <input type='text' name='buscar'>
            <input type='submit' value='Buscar'>
        </form>
    </div>
    <?php 
    if(isset($_GET['buscar'])){
        buscar($_GET['buscar']);
    }else{
        cargar();
    }
    ?>
</body>
        <div>
            <a href="insertar.html">Regresar</a>
        </div>
</html>