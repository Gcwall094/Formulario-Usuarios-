<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Usuarios Registrados</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <section id="tabla-usuarios">
            <div class="container-fluid">
                <h1 class="text-center">USUARIOS REGISTRADOS EN EL SISTEMA</h1>
                <p class="text-center">Seleccione el usuario que desea Modificar o eliminar</p>
                <a href="index.html" class="btn btn-white">Registrar Usuario</a><br><br>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Tipo de Documento</th>
                            <th scope="col">Identificacion</th>
                            <th scope="col">Nombres</th>
                            <th scope="col">Apellidos</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Rol</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Ver/Editar</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                            // Para mostrar informacion debemos conectarnos a la base de datos
                            // Realizamos una consulta a la tabla usuarios para traer todos los usuarios
     
                            require("modelo/conexion.php");

                            $mostrarUsers = "SELECT * FROM users";
                            $result = $conexion->array($mostrarUsers);
                            //Realizaremos un arreglo para desglozar todos los datos almacenados en la variable result
                            
                            
                            //Realizamos un while para que se repita las filas de la tabla tantas veces como hayan registros en tabla de la base de datos

                            while($f = mysqli_fetch_array($result)){

                             
                        ?>

                        <tr>
                            <th id="white" scope="row"><?php echo $f['tipoDoc'] ?></th>
                            <td><?php echo $f['identificacion'] ?></td>
                            <td><?php echo $f['nombres'] ?></td>
                            <td><?php echo $f['apellidos'] ?></td>
                            <td><?php echo $f['email'] ?></td>
                            <td><?php echo $f['telefono'] ?></td>
                            <td><?php echo $f['rol'] ?></td>
                            <td><?php echo $f['estado'] ?></td>
                            <td><a href="detalleUser.php?id_user=<?php echo $f['identificacion'] ?>" class="btn btn-success">Ver/Editar</a></td>
                            <td><a href="modelo/eliminarUsuario.php?id_user=<?php echo $f['identificacion'] ?>" class="btn btn-danger">Eliminar</a></td>
                        </tr>
                        <?php 
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <script src="js/functions.js"></script>    
    </body>
</html>