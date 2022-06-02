<?php
include("connection.php");  
$connection = getConnection();

$codeStudent = $_POST['txtCode'];
$ccStudent = $_POST['txtCC'];
$nameStudent = $_POST['txtNombre'];
$lastNameStudent = $_POST['txtApellido'];

$query = "INSERT INTO alumnos VALUES ('$codeStudent', '$ccStudent', '$nameStudent', '$lastNameStudent')";
$consult = mysqli_query($connection, $query);

if($consult) { Header("location: index.php"); }
?>