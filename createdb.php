<?php
    include("conn.php");

    $sql = "create database if not exists ESHOP";

    $result = mysqli_query($conn , $sql);

    if(!$result){
        die("Invalid query ".mysqli_error());
    }
    else{
        echo "Database Created";
    }

    mysqli_close($conn);
?>