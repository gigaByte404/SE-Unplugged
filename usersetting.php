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
  <title>HRMS</title>
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
                ADMINISTRATOR<small> accounts </small>
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
                          <th>Email</th>
                          <th>User name</th>
                          <th>Password</th>
                          <th>Qualification</th>
                          <th>Update</th>
                          <th>Remove</th>

                        </tr>
                      </thead>
                      <tbody>
                      <?php
                        $sql = "SELECT * FROM `teacher_info`";
                        $re = mysqli_query($con,$sql);
                        while($row = mysqli_fetch_array($re))
                        {

                          $id = $row['id'];
                          $email = $row['email'];
                          $us = $row['name'];
                          $ps = $row['password'];
                          $qu = $row['qualification'];
                          if($id % 2 ==0 )
                          {
                            echo"<tr class='gradeC'>
                            <td>".$id."</td>
                            <td>".$email."</td>
                            <td>".$us."</td>
                            <td>".$ps."</td>
                            <td>".$qu."</td>

                            <td><button class='btn btn-primary btn' data-toggle='modal' data-target='#myModal'>
                            Update
                            </button></td>
                            <td><a href=usersettingdel.php?id=".$id ." <button class='btn btn-danger'> <i class='fa fa-edit' ></i> Delete</button></td>
                            </tr>";
                          }
                          else
                          {
                            echo"<tr class='gradeU'>
                            <td>".$id."</td>
                            <td>".$email."</td>
                            <td>".$us."</td>
                            <td>".$ps."</td>
                            <td>".$qu."</td>
                            <td><button class='btn btn-primary btn' data-toggle='modal' data-target='#myModal'>
                            Update
                            </button></td>
                            <td><a href=usersettingdel.php?id=".$id ." <button class='btn btn-danger'> <i class='fa fa-edit' ></i> Delete</button></td>
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
                  Add New Teacher
                </button>
                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Add the User name and Password</h4>
                      </div>
                      <form method="post">
                        <div class="modal-body">
                          <div class="form-group">
                            <label>Add new User name</label>
                            <input name="newus"  required class="form-control" placeholder="Enter User name" type='text'>
                          </div>
                        </div>
                        <div class="modal-body">
                          <div class="form-group">
                            <label>Add email</label>
                            <input type="email" required name="newem"  class="form-control" placeholder="Enter email">
                          </div>
                        </div>
                        <div class="modal-body">
                          <div class="form-group">
                            <label>Add Password</label>
                            <input name="newps"  required class="form-control" placeholder="Enter Password" type="password">
                          </div>
                        </div>
                        <div class="modal-body">
                          <div class="form-group">
                            <label>Add Qualification</label>
                            <input name="newqu"  class="form-control" placeholder="Enter Qualification" type='text'>
                          </div>
                        </div>
                        

                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                          <input type="submit" name="in" value="Add" class="btn btn-primary">
                        </form>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php
              if(isset($_POST['in']))
              {
                $newus = $_POST['newus'];
                $newps = $_POST['newps'];
                $newem = $_POST['newem'];
                $newqu = $_POST['newqu'];

                $newsql ="INSERT INTO teacher_info (email,name,password,qualification) VALUES ('$newem','$newus','$newps','$newqu')";
                if(mysqli_query($con,$newsql))
                {
                  
                  echo '<script language="javascript" type="text/javascript"> alert("Teacher Info Added!!!"); </script>';
                }
                else{

                }
                header("Location: usersetting.php");
              }
              ?>

              <div class="panel-body">

                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Change the User name and Password</h4>
                      </div>
                      <form method="post">
                        <div class="modal-body">
                          <div class="form-group">
                            <label>Change Email</label>
                            <input name="email" value="<?php echo $email; ?>" class="form-control" placeholder="Enter Email">
                          </div>
                        </div>
                        <div class="modal-body">
                          <div class="form-group">
                            <label>Change Password</label>
                            <input name="pasd" value="<?php echo $ps; ?>" class="form-control" placeholder="Enter Password">
                          </div>
                        </div>

                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                          <input type="submit" name="up" value="Update" class="btn btn-primary">
                        </form>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- /. ROW  -->
          <?php
          if(isset($_POST['up']))
          {
            $email = $_POST['email'];
            $passwr = $_POST['pasd'];

            $upsql = "UPDATE `teacher_info` SET `email`='$email',`password`='$passwr' WHERE id = '$id'";
            if(mysqli_query($con,$upsql))
            {
              echo' <script language="javascript" type="text/javascript"> alert("User name and password update") </script>';


            }

            header("Location: usersetting.php");

          }
          ob_end_flush();




          ?>



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
