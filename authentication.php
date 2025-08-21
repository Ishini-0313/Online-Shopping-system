<?php
    session_start();
    include("conn.php");
    mysqli_select_db($conn , "ESHOP");
    extract($_POST);

    $sql = "SELECT * FROM USER WHERE Uname='$username' and Pwd='$password'";
    $result = mysqli_query($conn , $sql);
    if(!$result){
        die("Invlid query ".mysqli_error($conn));
    }

    $row = mysqli_fetch_assoc($result);

    $_SESSION['Uname'] = $row['Uname'];
    $_SESSION['Role'] = $row['Role'];
    $_SESSION['Uid'] = $row['Uid'];

    if($row['Role'] == "buyer"){
        header("Location: viewitem.php");
    }
    elseif($row['Role'] == "admin"){
        header("Location: additem.php");
    }
    else{
        header("Location: login.php?error=1");
    }

    mysqli_close($conn);
?>