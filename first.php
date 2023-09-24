<?php
/*
session_start();
if (isset($_SESSION['Email_Session'])) {
  header("Location: welcome.php");
  die();
}


include('config.php');
$msg = "";
$Error_Pass = "";
if (isset($_GET['Verification'])) {
  $raquet = mysqli_query($conx, "SELECT * FROM register WHERE CodeV='{$_GET['Verification']}'");
  if (mysqli_num_rows($raquet) > 0) {
    $query = mysqli_query($conx, "UPDATE register SET verification='1' WHERE CodeV='{$_GET['Verification']}'");
    if ($query) {
      $rowv = mysqli_fetch_assoc($raquet);
      header("Location: welcome.php?id='{$rowv['id']}'");
    }else{
      header("Location: index.php");
    }
  } else {
    header("Location: index.php");
  }
}
if (isset($_POST['submit'])) {
  $email = mysqli_real_escape_string($conx, $_POST['email']);
  $Pass = mysqli_real_escape_string($conx, md5($_POST['Password']));
  $sql = "SELECT * FROM register WHERE email='{$email}' and Password='{$Pass}'";
  $resulte = mysqli_query($conx, $sql);
  if (mysqli_num_rows($resulte) === 1) {
    $row = mysqli_fetch_assoc($resulte);
    if ($row['verification'] === '1') {
      $_SESSION['Email_Session']=$email;
      header("Location: welcome.php");
    }else{$msg = "<div class='alert alert-info'>First Verify Your Account</div>";}
  }else{
    $msg = "<div class='alert alert-danger'>Email or Password is not match</div>";
  }
}
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css" />
  <title>Sign in & Sign up Form</title>
  <style>
    .alert {
      padding: 1rem;
      border-radius: 5px;
      color: white;
      margin: 1rem 0;
      font-weight: 500;
      width: 65%;
    }

    .alert-success {
      background-color: #42ba96;
    }

    .alert-danger {
      background-color: #fc5555;
    }

    .alert-info {
      background-color: #2E9AFE;
    }

    .alert-warning {
      background-color: #ff9966;
    }
    .Forget-Pass{
      display: flex;
      width: 65%;
    }
    .Forget{
      color: #2E9AFE;
      font-weight: 500;
      text-decoration: none;
      margin-left: auto;
      
    }
  </style>

 <link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>     
 <!--<link rel="stylesheet" href="css/main.css">-->
<!-- <link  rel="stylesheet" href="css/font.css"> -->
 <script src="js/jquery.js" type="text/javascript"></script>

 
  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
</head>

<body>
  <div class="container_new">
    <div class="form-container_new">
      <div class="signin-signup-new">
        <form action="" method="POST" class="sign-in-form-new">
          <!-- <h2 class="title">Sign in</h2>
          <?php echo $msg ?>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="email" placeholder="Email" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="Password" placeholder="Password" />
          </div>
          <div class="Forget-Pass">
          <a href="Forget.php" class="Forget">Forget Password ?</a></div> -->
          <div class="btn solid">
            <a href="#" data-toggle="modal" data-target="#login">Admin Login</a></div>
          <!-- <input type="submit" name="submit" data-target="#login" value="Login As Admin" class="btn solid" /> -->
          <input type="submit" name="submit" value="Login As Student" class="btn solid" />
          <!-- <p class="social-text">Or Sign in with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div> -->
        </form>
      </div>
    </div>

    <div class="panel-container-new">
      <div class="panel_new left-panel-new">
        <div class="content-new">
          <h3>Are You Ready?</h3>
          <p>
            Knowledge is a weapon for the future. It is your responsibility to use it properly.
          </p>
          <!-- <a href="SignUp.php" class="btn transparent" id="sign-in-btn" style="padding:10px 20px;text-decoration:none">
            Sign up
          </a> -->
        </div>
        <img src="image/27.png" class="images" alt="" />
      </div>
    </div>
  </div>

<!--Footer start-->
<!-- <div class="row footer">
<div class="col-md-4 box">
<a href="#" data-toggle="modal" data-target="#login">Admin Login</a></div>
<div class="col-md-4 box">
<a href="#" data-toggle="modal" data-target="#developers">Developers</a>
</div>
<div class="col-md-4 box">
<a href="feedback.php" target="_blank">Feedback</a></div></div> -->
<!-- Modal For Developers-->
<!-- <div class="modal fade title1" id="developers">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" style="font-family:'typo' "><span style="color:orange">Developer</span></h4>
      </div> -->
	  
      <!-- <div class="modal-body">
        <p>
		<div class="row">
		<div class="col-md-4">
		 <img src="image/1.jpg" width=100 height=100 alt="Sourabh Kumar" class="img-rounded">
		 </div>
		 <div class="col-md-5">
		<a href="" style="color:#202020; font-family:'typo' ; font-size:18px" title="Find on Facebook">Sourabh Kumar</a>
		<h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">+91 9110086006</h4>
		<h4 style="font-family:'typo' ">kumarsourabh556@gmail.com</h4>
		<h4 style="font-family:'typo' "></h4></div></div>
		</p>
      </div> -->
    
    <!-- </div>
  </div>
</div> -->

<!--Modal for admin login-->
	 <div class="modal fade" id="login">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><span style="color:orange;font-family:'typo' ">LOGIN</span></h4>
      </div>
      <div class="modal-body title1">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form role="form" method="post" action="admin.php?q=quiz.php">
<div class="form-group">
<input type="text" name="uname" maxlength="20"  placeholder="Admin user id" class="form-control"/> 
</div>
<div class="form-group">
<input type="password" name="password" maxlength="15" placeholder="Password" class="form-control"/>
</div>
<div class="form-group" align="center">
<input type="submit" name="login" value="Login" class="btn btn-primary" />
</div>
</form>
</div><div class="col-md-3"></div></div>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--footer end-->

  
 <script src="app.js"></script>
</body>

</html>