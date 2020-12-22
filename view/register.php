<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Travel & Tourism - Signup</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" src="../assets/css/style.css">

<body>

<div class="container">

  <div class="row my-5">
      <div class="col-md-6 offset-3">
        <h2 class="text-center">Travel & Tourism</h2>
        <h6 class="text-center text-muted mt-2">Register Form</h6>
        <hr />
        <form action="" method="post" id="" name="signup" onsubmit="return checkpass();">
          <p style="font-size:16px; color:red" align="center">

    <?php
    session_start();
    include('../models/dbconnection.php');
    if(isset($_POST['submit']))
      {
        $fname=$_POST['fullname'];
        $mobno=$_POST['mobilenumber'];
        $email=$_POST['email'];
        $password=md5($_POST['password']);

        $ret=mysqli_query($con, "select email from user where email='$email' ");
        $result=mysqli_fetch_array($ret);
        if($result>0){
          $msg="This email  associated with another account";
        }
        else{
        $query=mysqli_query($con, "insert into user(fullname, mobilenumber, email,  password)
         value('$fname', '$mobno', '$email', '$password')");
        if ($query) {
            $msg="You have successfully registered";
      }
      else
        {
          $msg="Something Went Wrong. Please try again!";
        }
      }
      echo $msg;
    }
 ?>
          </p>

          <div class="form-group">
              <input class="form-control" placeholder="Full Name" name="fullname" type="text" required="true">
          </div>
          <div class="form-group">
            <input class="form-control" placeholder="E-mail" name="email" type="email" required="true">
          </div>
          <div class="form-group">
            <input type="integer" class="form-control" id="mobilenumber" name="mobilenumber" placeholder="Mobile Number e.g. 1729458458" maxlength="10" pattern="[0-9]{10}" required="true">
          </div>
          <div class="form-group">
            <input class="form-control" placeholder="Password" name="password" type="password" value="" required="true">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" id="repeatpassword" name="repeatpassword" placeholder="Repeat Password" required="true">
          </div>
          <div class="text-center">
            <button type="submit" value="submit" name="submit" class="btn btn-outline-success">Register</button>
            <a href="login.php" class="btn btn-outline-danger ml-2">Login</a>
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
