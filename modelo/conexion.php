<?php 
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'adso';

    $conexion = new mysqli($host, $user, $pass, $dbname);

     if($conexion->connect_errno){
         echo '<script>alert("Error de conexion")</script>';
     }
     else{
         echo '<script>alert("Conexion Exitosa")</script>';
    }
?>