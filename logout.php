<?php
session_start();
unset($_SESSION["una"]);

session_destroy();

header("location:login.php");

?>


