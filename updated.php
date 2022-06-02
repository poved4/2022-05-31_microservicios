<?php
include("connection.php");
$connection = getConnection();

$id = $_POST{'txtCode'};
$CC = $_POST{'txtCC'};
$name = $_POST{'txtNombre'};
$lastName = $_POST{'txtApellido'};

$query = "UPDATE alumnos SET cod_alumno = '$id', cc_alumno = '$CC', nombre_alumno = '$name', apellido_alumno = '$lastName' WHERE cod_alumno = '$id'";
$consult = mysqli_query($connection, $query);

if($consult) { Header("location: index.php"); }
?>