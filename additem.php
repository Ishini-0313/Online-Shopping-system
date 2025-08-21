<?php
    session_start();

    $uname = $_SESSION['Uname'];

    echo "You login as ".$uname;
    echo "<br> <a href='logout.php'>Sign Out</a>";
?>

<h1>Add Products</h1>
<form action="viewitem.php" method ="post">
    Product Name: <input name="Pname" type="text"/>
    <br/>
    Price (Rs.) &nbsp;&nbsp; :<input name="Uprice" type="text" /> 
    <input name="btnadditem" type="submit" />
    <input value="Reset" type="reset"/>
    
</form>