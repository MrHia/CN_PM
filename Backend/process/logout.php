<?php
    session_start();
    session_unset();
    header("location:/trotot/login.php");
?>