<?php
include('db.php');
session_start();
if(!isset($_SESSION["user"]))
{
  header("location:index.php");
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SE-Unplugged Admin</title>
  <!-- Bootstrap Styles-->
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <!-- FontAwesome Styles-->
  <link href="assets/css/font-awesome.css" rel="stylesheet" />
  <!-- Morris Chart Styles-->
  <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
  <!-- Custom Styles-->
  <link href="assets/css/custom-styles.css" rel="stylesheet" />
  <!-- Google Fonts-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
<link rel="stylesheet" type="text/css" href="./css/style.css">
  <style type="text/css">
    .col-md-6 img {
        width: 25vw;
        height: 25vw;
    }  
  </style>
</head>

<body>
  <div id="wrapper">
    <nav class="navbar navbar-default top-navbar" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="adminpanel.php"> <?php echo $_SESSION["user"]; ?> </a>
      </div>

      <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
            <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
          </a>
          <ul class="dropdown-menu dropdown-user">
            <li><a href="usersetting.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
            </li>
            <li class="divider"></li>
            <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
            </li>
          </ul>
          <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
      </ul>
    </nav>
    <!--/. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
      <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
          <li>
            <a  href="usersetting.php"><i class="fa fa-qrcode"></i> Add Teacher</a>
          </li>          
          <li> 
            <a  href="student.php"><i class="fa fa-qrcode"></i> Add Student</a>
          </li>
          <li> 
            <a  href="surveydata.php"><i class="fa fa-qrcode"></i> Add Survey Results</a>
          </li>
          <li> 
            <a  href="survey.php"><i class="fa fa-qrcode"></i> Uploaded Surveys</a>
          </li>

          <li>
            <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
          </li>




        </ul>

      </div>

    </nav>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
      <div id="page-inner">


        <div class="row">
          <div class="col-md-12">
            <h1 class="page-header">
              Subjects <small> Added Subjects </small>
            </h1>
          </div>
        </div>
        <!-- /. ROW  -->
        <?php
        include ('db.php');

        ?>

  <!-- categories section -->
    <!-- categories section -->
  <section class="categories-section spad">
    <div class="container">
      <div class="row">
        
        <!-- categorie -->
        <div class="col-lg-4 col-md-6">
          <div class="categorie-item">
            <div class="ci-thumb set-bg" data-setbg="img/categories/science.jpg" style='background-image: url("img/categories/science.jpg");'></div>
            <div class="ci-text">
              <h5><a href="courses.php">English</a></h5>
              <p>Knowledge of a language is a doorway to wisdom</p>
            </div>
          </div>
        </div>
        <!-- categorie -->
        <div class="col-lg-4 col-md-6">
          <div class="categorie-item">
            <div class="ci-thumb set-bg" data-setbg="img/categories/programming.jpg" style='background-image: url("img/categories/Programming.jpg");'></div>
            <div class="ci-text">
              <h5><a href="courses.php">Programming</a></h5>
              <p>Programming is a skill best acquired by practice</p> 
            </div>
          </div>
        </div>
        <!-- categorie -->
        <div class="col-lg-4 col-md-6">
          <div class="categorie-item">
            <div class="ci-thumb set-bg" data-setbg="img/categories/maths.jpg" style='background-image: url("img/categories/maths.jpg");'></div>
            <div class="ci-text">
              <h5><a href="courses.php">Mathematics</a></h5>
              <p>Maths teach us to always be careful with the signs </p>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </section>
  <!-- categories section end -->

  <!-- categories section end -->




      <!-- /. ROW  -->

    </div>
    <!-- /. PAGE INNER  -->
  </div>
  <!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->
<!-- JS Scripts-->
<!-- jQuery Js -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!-- Bootstrap Js -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Metis Menu Js -->
<script src="assets/js/jquery.metisMenu.js"></script>
<!-- Morris Chart Js -->
<script src="assets/js/morris/raphael-2.1.0.min.js"></script>
<script src="assets/js/morris/morris.js"></script>
<!-- Custom Js -->
<script src="assets/js/custom-scripts.js"></script>


</body>

</html>
