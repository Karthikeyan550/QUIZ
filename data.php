<?php
  $servername="localhost";
    $username="root";
    $password="kali@123";
    $conn=new mysqli($servername,$username,$password);
    if($conn->connect_error){
        die("connection failed".$conn->connect_error);
        }
        echo "connected successfully";
    ?>