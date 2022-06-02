<?php function getConnection(){
    
    $db = "escueladb";

    $host = "localhost";
    $user = "root";
    $password = "";    

    $connection = mysqli_connect($host,$user,$password);
    
    mysqli_select_db($connection, $db);

    return $connection;
} ?>