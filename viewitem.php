<?php
    //start session
    session_start();
    include("conn.php");

    $uname = $_SESSION['Uname'];

    echo "<div style='border:2px solid #000 ; padding:5px ; width:400px ;'>You login as ".$uname;

    echo "<br> <a href='logout.php'>Sign Out</a>";

    mysqli_select_db($conn , "ESHOP");

    $sql = "SELECT * FROM product";

    $result = mysqli_query($conn , $sql);

    if(!$result){
        die("Invalid query ".mysqli_error($conn));
    }
    else{
        echo "
            <h1>Available Products</h1>

            <table border='1'>
                <tr>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>&nbsp;</th>
                </tr>";
            
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>".$row['Pname']."</td>";
                echo "<td>".$row['Uprice']."</td>";
                echo "<td><input name='btnaddcart' type='submit' value='Order'/></td>";
                echo "</tr>";
            }

        echo"</table></div>";
    }

    mysqli_close($conn);
?>