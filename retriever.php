<?php
    $conn = mysqli_connect("localhost", "root", "", "robot");
         
    if($conn === false){
        die("Error: Could not connect. "
         . mysqli_connect_error());
     }
     
     $sql = "SELECT data AS max FROM data WHERE data_id = (SELECT MAX( data_id ) FROM data);";
     $rowSQL = mysqli_query( $conn, $sql);
     $row = mysqli_fetch_array($rowSQL);
     $max = $row['max'];
     echo $max;
         
     mysqli_close($conn);
?>

