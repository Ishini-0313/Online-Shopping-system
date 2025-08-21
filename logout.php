<?php
    session_start(); //start session

    session_destroy(); //unset the variable SESS_MEMBER_ID stored in session

    header("Location: login.php");

?>