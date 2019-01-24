<?php

    class Conexion {
        public function get_conexion(){
            $user = "postgres";
            $pass = "11041996kevin";
            $host = "localhost";
            $bd = "Pedido";
            $conexion = new PDO("pgsql:host=$host;dbname=$bd;", $user, $pass);
            return $conexion;
        }
    }
        
    $pruebacon = new Conexion();
        
    $con = $pruebacon->get_conexion();
    if($con){
        echo "Se conectó exitosamente";
    }else{
        echo "Error";
    }
        


?>