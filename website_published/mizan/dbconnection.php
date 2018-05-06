<?php

$dbServername = "localhost";
$dbUsername = "id5588089_mizanur";
$dbPassword = "!Mquincy105!";
$dbName = "id5588089_contact";

  $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

    if($conn->connect_error){
        echo "connection error";
    }


 ?>
