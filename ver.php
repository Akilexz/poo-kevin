<?php
require_once "modulo/conexion.php";
require_once "modulo/base.php";
require_once "controlador/cargar.php";


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
    <h1>KEVIN MALDONADO</h1>
    <div>
        <form method="get">
        <input type ="text" name="buscar"></td>
        <input type ="submit" value ="Buscar"></td>
        </form>

    </div>
     <?php
     
     if(isset($_GET['buscar'])){
         buscar($_GET['buscar']);
     }else{
        cargar();
     }
     ?>
    <div><br><a href = "insertar.html">Regresar</a></div> 

</body>
</html>