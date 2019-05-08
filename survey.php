<?php
include('db.php');
session_start();
if(!isset($_SESSION["user"]))
{
  header("location:index.php");
}

ob_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Student Survey</title>
  <!-- Bootstrap Styles-->
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <!-- FontAwesome Styles-->
  <link href="assets/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom Styles-->
  <link href="assets/css/custom-styles.css" rel="stylesheet" />
  <!-- Google Fonts-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
  <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
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
        <a class="navbar-brand" href="adminpanel.php">MAIN MENU </a>
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
            <a class="active-menu" href="adminpanel.php"><i class="fa fa-dashboard"></i>Admin Dashboard</a>
          </li>




        </div>

      </nav>
      <!-- /. NAV SIDE  -->

      <div id="page-wrapper" >
        <div id="page-inner">
          <div class="row">
            <div class="col-md-12">
              <h1 class="page-header">
                Survey Results<small> Upload Surveys </small>
              </h1>
            </div>
          </div>



          <div class="row">
            <div class="col-md-12">
              <!-- Advanced Tables -->
              <div class="panel panel-default">
                <div class="panel-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Survey Image</th>

                        </tr>
                      </thead>
                      <tbody>
                      <?php
                        $sql = "SELECT * FROM `surveydata`";
                        $re = mysqli_query($con,$sql);
                        while($row = mysqli_fetch_array($re))
                        {

                          $id = $row['id'];
                          $img_url = $row['img_url'];
                          if($id % 2 ==0 )
                          {
                            echo"<tr class='gradeC'>
                            <td>".$id."</td>
                            <td><img src='$img_url'></td>
                            </tr>";
                          }
                          else
                          {
                            echo"<tr class='gradeU'>
                            <td>".$id."</td>
                            <td><img src='$img_url'></td>
                            </tr>";

                          }

                        }

                        ?>



                      </tbody>
                    </table>
                  </div>

                </div>
              </div>
              <!--End Advanced Tables -->
              <div class="panel-body">
                <button class="btn btn-primary btn" data-toggle="modal" data-target="#myModal1">
                  Upload Survey Img
                </button>
                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Uplaod Survey Image </h4>
                      </div>
                      <form method="post" action="insertData.php">
                        <div class="modal-body">
                          <div class="form-group">
                            <label>Upload Image</label>
                            <input name="fileToUpload" class="form-control" type="file" id="fileToUp">

                          </div>
                        </div>
                        

                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                          <input type="submit" name="submitBtn" value="Submit Suver Form" class="btn btn-primary">      

                        </form>

                      </div>
                    </div>
                  </div>
                </div>
              </div>


              </div>
            </div>
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
      <!-- Custom Js -->
      <script src="assets/js/custom-scripts.js"></script>


    </body>
    </html>
