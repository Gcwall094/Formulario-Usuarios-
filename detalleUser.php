<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConsultarColaborador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <section id="TablaColaboradores">
        <div class="container-fluid">
            <h2 class="text-center">Usuarios registrados en el sistema</h2>
            <br>
        </div>
        <br>
        <form action="Buscador.php" class="d-flex" role="search">
            <input name="txtcolaborador" class="form-control me-2" type="search" placeholder="Identificacion a ser Consultada" aria-label="Search">
            <button class="btn btn-dark" type="submit">Buscar</button>
        </form>
        <br>
        <table class="table table-striped-columns">
            <thead class="table-dark">
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
                    require ("../../Conexion.php");
                    $MostrarColaboradores = "SELECT * FROM colaboradores";
                    $cadena = $link ->query($MostrarColaboradores);
                    while($f = mysqli_fetch_array($cadena))
                    {
                    ?>
                <tr>
                    <th scope="row"><?php echo $f['tipoidentificacion']?></th>
                    <td><?php echo $f['idColaborador']?></td>
                    <td><?php echo $f['nombrescolaborador']?></td>
                    <td><?php echo $f['apellidoscolaborador']?></td>
                    <th><?php echo $f['fechaingresocol']?></td>
                    <td><?php echo $f['direccioncolaborador']?></td>
                    <td><?php echo $f['arlcolaborador']?></td>
                    <td><?php echo $f['telefonocolaborador']?></td>
                    <td><?php echo $f['epscolaborador']?></td>
                    <td><?php echo $f['contactocolaborador']?></td>
                    <td><?php echo $f['telcontactocol']?></td>
                    <th scope="row"><?php echo $f['estadocolaborador']?></th>
                    <th scope="row"><?php echo $f['rolcolaborador']?></th>
                <?php
                }
                ?>
            </tbody>
        </table>
        <a href="Colaboradores.html" class="btn btn-dark">Volver</a>
    </section>   
</body>
</html>