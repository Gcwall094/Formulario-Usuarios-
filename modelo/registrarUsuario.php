<?php 
    // Creamos las variables necesarias en las que capturaremos los datos enviados desde el formulario atraves del metodo POST
    $indentificacion = $_POST['identificacion'];
    $tipoDoc = $_POST['tipoDoc'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $clave = $_POST['clave'];
    $claveB = $_POST['claveB'];
    $rol = "Cliente";
    $estado = "Pendiente";

    //Nos conectamos a la base de datos para poder acceder y registrar en la tabla usuarios
    require("conexion.php");
    
    //Validamos que las contraseñas concuerden
    if($clave == $claveB){
        //encriptamos la contraseña con la instruccion md5
        $clavemd = md5($clave);
        //Creamos una variable sql que contendra la operacion que quiero realizar (Registrar)
        $sql = "INSERT INTO users VALUES ('$indentificacion', '$tipoDoc', '$nombres', '$apellidos', '$email', '$telefono', '$clavemd', '$rol', '$estado')";
        //quiero que se ejecute la consulta query que se encuentra en la variable sql
        $conexion->query($sql);

        echo '<script>alert("Usuario registrado con exito")</script>';
        echo "<script>location.href='../index.html'</script>";
    }
    else{
        echo '<script>alert("Las claves registradas no coinciden")</script>';
        echo "<script>location.href='../index.html'</script>";
    }
    
?>