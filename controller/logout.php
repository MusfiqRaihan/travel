<?php
session_start();
$_SESSION['logedin']= 0;
header('location:http://localhost/travel/index.php');
?>
