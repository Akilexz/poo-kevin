<?php
require_once('../modulo/conexion.php');
require_once('../modulo/base.php');

function buscar($nombre){
    $consulta = new base ();
    $filas = $consulta->buscarProducto();
    echo "<table border = 1 bordercolor=blue>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>DESCRIPCION</th>
        <th>CATEGORIA</th>
        <th>PRECIO</th>";
        if (isset($filas)){
            foreach($filas as $fila){
                echo "<tr>";
                echo "<td>".$fila['id']. "</td>";
                echo "<td>".$fila['nombre']. "</td>";
                echo "<td>".$fila['descripcion']. "</td>";
                echo "<td>".$fila['categoria']. "</td>";
                echo "<td>".$fila['precio']. "</td>";
                echo "<td><a href = 'controlador/eliminar.php?id=".$fila['nombre']."'>Buscar</td>";
                echo "</tr>" ;
            }
        }
        echo "</table>";

    }
?>