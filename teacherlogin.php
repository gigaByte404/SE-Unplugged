<?php
session_start();
if(isset($_SESSION["teacher"]))
{
  header("location:checkstudent.php");
}
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>HRMS</title>
  <link rel="stylesheet" href="css/style.css"/>
  <link rel="stylesheet" href="css/font-awesome.min.css"/>
  <link rel="stylesheet" href="css/owl.carousel.css"/>
  <link rel="stylesheet" href="./css/style_login.css">
<link rel="stylesheet" href="css/bootstrap.min.css"/>

</head>

<body>

  <!-- Header section -->
  <header class="header-section" style="margin-top: 4em;">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3">
          <div class="site-logo">
            <img src="img/logo.png" alt="">
          </div>
          <div class="nav-switch">
            <i class="fa fa-bars"></i>
          </div>
        </div>
        <div class="col-lg-9 col-md-9">
          <a href="./adminlogin.php" class="site-btn header-btn" style="float: right;">Admin Login</a>
         
          <nav class="main-menu">
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="blog.php">About us</a></li>
              <li><a href="courses.php">Courses</a></li>
              <li><a href="contact.php">Contact</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- Header section end -->
<div class="hero-section set-bg" style="height: 740px;">
  <img src="img/bg.jpg">
</div>
  <!-- Hero section end -->


  <div class="container d-flex justify-content-center" style="margin-top: 8em;">


    <div id="login">

      <form method="post">

        <fieldset class="clearfix">

          <p><span class="fontawesome-user"></span><input type="email"  name="user" value="Email" onBlur="if(this.value == '') this.value = 'Email'" onFocus="if(this.value == 'Email') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
          <p><span class="fontawesome-lock"></span><input type="password" name="pass"  value="Password" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Password') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
          <table> <tr><td><input type="submit" name="sub"  value="Login"></td></tr>

            <tr><td style="background-color: #ea4c88;"><div align="right"> <a href="./index.php" >Home Page</a></div></td></tr></table>

          </fieldset>

        </form>



      </div> <!-- end login -->

    </div>



  </body>
  </html>

  <?php
  include('db.php');


  if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form

    $myusername = mysqli_real_escape_string($con,$_POST['user']);
    $mypassword = mysqli_real_escape_string($con,$_POST['pass']);

    $sql = "SELECT email FROM teacher_info WHERE email = '$myusername' and password = '$mypassword'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    // $active = $row['active'];

    $count = mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row

    if($count == 1) {

      $_SESSION['teacher'] = $myusername;

      header("location: checkstudent.php");
    }else {
      echo '<script>alert("Your Login Name or Password is invalid") </script>' ;
    }
  }
  ?>
