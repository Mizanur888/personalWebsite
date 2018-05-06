<?php
    include_once 'dbconnection.php';

    $Firstname = mysqli_real_escape_string($conn, $_POST['name']);
    $surname = mysqli_real_escape_string($conn, $_POST['surname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    if(isset($_POST['submit'])){
      $sql = "INSERT INTO `contactInfo`(`Firstname`, `Lastname`, `Email`, `Phone`, `Message`) VALUES ('$Firstname','$surname','$email','$phone','$message')";
      mysqli_query($conn,$sql);
      header("Location:contact.php?contact=successful");
    }else{
        //echo $Firstname." | " .$surname;
       header("Location:contact.php?contact=Error Message");
    }

  ?>
