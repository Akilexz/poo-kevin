<?php

    require_once('../modulo/conexion.php');
    require_once('../modulo/base.php');

    $mensaje=null;

    $nombre=$_POST['nombre'];
    $descripcion=$_POST['descripcion'];
    $categoria=$_POST['categoria'];
    $precio=$_POST['precio'];

    if(strlen($nombre)>0 && strlen($descripcion)>0 && strlen($categoria)>0 && strlen($precio)>0){
        $consulta = new base();
        $mensaje = $consulta->insertarProducto($nombre, $descripcion, $categoria, $precio);
        echo "<a href='../insertar.html'>Regresar</a>";
    }else{
        return "Porfavor ingrese los datos";
    }
    echo $mensaje;

?>