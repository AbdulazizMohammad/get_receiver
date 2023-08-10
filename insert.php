<?php
    $conn = mysqli_connect("localhost", "root", "", "robot");
         
    if($conn === false){
        die("Error: Could not connect. "
         . mysqli_connect_error());
     }
              
     $value = $_GET['value'];  
     $sql = "INSERT INTO data (data) VALUES ('$value')";

    if(mysqli_query($conn, $sql)){
        echo "Sucess!";
    } else{
        echo "Error: Sorry $sql. "
            . mysqli_error($conn);
    }
         
     mysqli_close($conn);
?>