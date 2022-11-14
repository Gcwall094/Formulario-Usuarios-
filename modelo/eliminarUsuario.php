<?php 
    // Enlazamos a la conexion
    require("conexion.php");
    //Creamos una variable para capturar la llave primaria del usuario enviada desde la tabla

    $id_user = $_GET['id_user'];
    // Creamos una variable que capture la instruccion delete
    $eliminar = "DELETE FROM users WHERE identificacion ='$id_user' ";
    $conexion->query($eliminar);

    echo '<script>alert("Usuario eliminado con exito")</script>';
    echo "<script>location.href='../verUsuarios.php'</script>";
?>