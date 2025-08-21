<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Page</title>
    </head>
    <body style = "display:flex ; justify-content:center">
        <?php
            if(isset($_GET['error'])){
                echo "Enter valid user name / password";
            }
        ?>
        <div style="border : 2px solid black ; width: 50% ;text-align:center">
            <h1>Login Form</h1>
            <form action="authentication.php" method="post">
                Username :
                <input type="text" name="username"/>
                <br>
                <br>
                Password :
                <input type="password" name="password"/>
                <br>
                <br>
                <input type="submit" value="Login">
                <input type="reset" value="clear">
                <br>
                <br>
            </form>
        </div>
    </body>
</html>
