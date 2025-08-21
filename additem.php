<?php
    session_start();
    include("conn.php");
    mysqli_select_db($conn,"eshop");
    extract($_POST);

    $sql = "INSERT INTO product (Pname,Uprice) VALUES ('$Pname','$Uprice')";
    $result = mysqli_query($conn,$sql);
    if(!$result){
        die("invalid query ".mysqli_error());
    }
    header("location:viewitem.php");
    mysqli_close($conn);
?>