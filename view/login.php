<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Travel & Tourism - LogIn</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" src="../assets/css/style.css">

<body>

<div class="container">

  <div class="row my-5">
      <div class="col-md-6 offset-3">
        <h2 class="text-center">Travel & Tourism</h2>
        <h6 class="text-center text-muted mt-2">Login Form</h6>
        <hr />
        <form action="" method="post" id="" name="login">
          <p style="font-size:16px; color:red" align="center">
            <?php
            session_start();
            include('../models/dbconnection.php');

            if(isset($_POST['login']))
              {
                $email=$_POST['email'];
                $password=md5($_POST['password']);
                $query=mysqli_query($con,"select id from user where  email='$email' && password='$password' ");
                $ret=mysqli_fetch_array($query);
                if($ret>0){
                  $_SESSION['detsuid']=$ret['id'];
                 header('location:dashboard.php');
                }
                else{
                $msg="Invalid Credentials";
                }
                echo $msg;
              }
              ?>
          </p>

          <div class="form-group">
            <input class="form-control" placeholder="E-mail" name="email" type="email" required="true">
          </div>
          <div class="form-group">
            <input class="form-control" placeholder="Password" name="password" type="password" value="" required="true">
          </div>
          <div class="text-center">
            <button type="submit" value="login" name="login" class="btn btn-outline-danger">Login</button>
            <a href="register.php" class="btn btn-outline-success ml-2">Register</a>
          </div>
        </form>

      </div>
  </div>

</div>


<?php include('../includes/footer.php');?>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="../assets/js/scripts.js"></script>
<script type="text/javascript">

</script>


</html>
