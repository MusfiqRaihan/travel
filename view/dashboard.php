<?php
session_start();
include('../models/dbconnection.php');
if ($_SESSION['logedin']==0) {
  header('location:logout.php');
  } else{

echo $_SESSION['logedin'];

  ?>

<h1>this is dashboard</h1>

<a href="../controller/logout.php">logout</a>

<?php } ?>
