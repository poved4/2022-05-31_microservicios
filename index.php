<?php include("connection.php");

$conection = getConnection();
$query = "SELECT * FROM alumnos";

$consult = mysqli_query($conection, $query);
$row = mysqli_fetch_array($consult);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>

    <div class="container mt-5">
        <div class="row">

            <div class="col-md-m3 p-4 mb-2 bg-info text-dark">
                <!-- seccion de insercion de datos -->
                <h1>Formulario</h1>
                <form action="insert.php" method="POST">
                    <input type="text" class="form-control mb-4" name="txtCode" placeholder="Codigo estudiante">
                    <input type="text" class="form-control mb-4" name="txtCC" placeholder="Cedula Ciudadania">
                    <input type="text" class="form-control mb-4" name="txtNombre" placeholder="Nombre">
                    <input type="text" class="form-control mb-4" name="txtApellido" placeholder="Apellido">
                    
                    <input type="submit" class="btn btn-primary">
                </form>
            </div>


            <div class="col-md-8">
                <table class="table border border-primary border-4">

                    <thead class="table-sucess table-striped border">
                        <tr>
                            <td>Codigo</td>
                            <td>CC</td>
                            <td>Nombre</td>
                            <td>Apellido</td>
                        </tr>
                    </thead>

                    <tbody class="table-info">
                        
                        <?php while ($row = mysqli_fetch_array($consult)) { ?>
                        
                        <tr class="border border-primary border-bottom border-2">
                            <th><?php echo $row['cod_alumno']?></th>
                            <th><?php echo $row['cc_alumno']?></th>
                            <th><?php echo $row['nombre_alumno']?></th>
                            <th><?php echo $row['apellido_alumno']?></th>
                            <th><a href="actualizar.php?id=<?php echo $row['cod_alumno']?>" class="btn btn-info">Editar</a></th>
                            <th><a href="delete.php?id=<?php echo $row['cod_alumno']?>" class="btn btn-danger">Delete</a></th>
                        </tr>

                        <?php } ?>

                    </tbody>

                </table>
            </div>

        </div>
    </div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>