<?php
include("connection.php");
$connection = getConnection();

$id = $_GET['id'];

$query = "DELETE FROM alumnos WHERE cod_alumno = $id";
$consult = mysqli_query($connection, $query);

if($consult) { Header("location: index.php"); }
?>