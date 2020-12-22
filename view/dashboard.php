<?php
session_start();
include('../models/dbconnection.php');
if (strlen($_SESSION['detsuid']==0)) {
  header('location:logout.php');
  } else{



  ?>

<h1>this is dashboard</h1>

<a href="../controller/logout.php">logout</a>

<?php } ?>
