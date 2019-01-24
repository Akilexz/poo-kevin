<?php
 require_once('../modulo/conexion.php');
 require_once('../modulo/base.php');

 if(isset($_GET['id'])){
     $id = $_GET['id'];
     $consultas = new base();
     $mensaje =$consultas->eliminarProductos($id);
     echo $mensaje;
     echo "<div><br><a href='../ver.php'>Regresar</a></div>";
 }