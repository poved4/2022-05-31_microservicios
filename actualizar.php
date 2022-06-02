<?php
include("connection.php");
$connection = getConnection();

$id = $_GET['id'];
$query = "SELECT * FROM alumnos WHERE cod_alumno = $id";

$consult = mysqli_query($connection, $query);
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

        <div class="col-md-m3 p-4 mb-2 bg-info text-dark">

            <h1>Formulario</h1>
            <form action="updated.php" method="POST">
                <input type="text" name="txtCode"      value="<?php echo $row['cod_alumno']?>">
                <input type="text" name="txtCC"        value="<?php echo $row['cc_alumno']?>">
                <input type="text" name="txtNombre"    value="<?php echo $row['nombre_alumno']?>">
                <input type="text" name="txtApellido"  value="<?php echo $row['apellido_alumno']?>">
                
                <input type="submit" class="btn btn-primary btn-block" value="Update">
            </form>

        </div>

    </div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>