<?php
include('db.php');
session_start();

if(!isset($_SESSION["teacher"]))
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
  <title>SE-Unplugged Student</title>
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
        <a class="navbar-brand" href="index.php">MAIN MENU </a>
      </div>

      <ul class="nav navbar-top-links navbar-right">

        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
            <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
          </a>
          <ul class="dropdown-menu dropdown-user">
            <li><a href="checkstudent.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
            </li>
            <li class="divider"></li>
            <li><a href="teacherlogout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
            <a class="active-menu" href="checkstudent.php"><i class="fa fa-dashboard"></i>Admin Dashboard</a>
          </li>




        </div>

      </nav>
      <!-- /. NAV SIDE  -->

      <div id="page-wrapper" >
        <div id="page-inner">
          <div class="row">
            <div class="col-md-12">
              <h1 class="page-header">
                STUDENTS<small> Info </small>
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
                          <th>Student Name</th>
                          <th>Age</th>
                          <th>Class</th>
                          <th>Grades</th>
                          <th>Update</th>
                          <th>Remove</th>

                        </tr>
                      </thead>
                      <tbody>
                      <?php
                        $sql = "SELECT * FROM `student_info`";
                        $re = mysqli_query($con,$sql);
                        while($row = mysqli_fetch_array($re))
                        {

                          $id = $row['id'];
                          $name = $row['name'];
                          $age = $row['age'];
                          $class = $row['class'];
                          $grades = $row['grades'];
                          if($id % 2 ==0 )  
                          {
                            echo"<tr class='gradeC'>
                            <td>".$id."</td>
                            <td>".$name."</td>
                            <td>".$age."</td>
                            <td>".$class."</td>
                            <td>".$grades."</td>

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
                            <td>".$name."</td>
                            <td>".$age."</td>
                            <td>".$class."</td>
                            <td>".$grades."</td>
                            <td><button class='btn btn-primary btn' data-toggle='modal' data-target='#myModal'>
                            Update
                            </button></td>
                            <td><a href=studentdel.php?id=".$id ." <button class='btn btn-danger'> <i class='fa fa-edit' ></i> Delete</button></td>
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
                  Add New Student
                </button>
                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Update Student Info</h4>
                      </div>
                      <form method="post">
                        <div class="modal-body">
                          <div class="form-group">
                            <label>Add Student Name</label>
                            <input name="s_name"  required class="form-control" placeholder="Enter Student Name" type='text'>
                          </div>
                        </div>
                        <div class="modal-body">
                          <div class="form-group">
                            <label>Add Student Age</label>
                            <input type="text" required name="s_age"  class="form-control" placeholder="Enter Student Age">
                          </div>
                        </div>
                        <div class="modal-body">
                          <div class="form-group">
                            <label>Add Class</label>
                            <input name="s_class"  required class="form-control" placeholder="Enter Student Class" type="text">
                          </div>
                        </div>
                        <div class="modal-body">
                          <div class="form-group">
                            <label>Add Grades</label>
                            <input name="s_grades"  class="form-control" placeholder="Enter Student Grades" type='text'>
                          </div>
                        </div>
                        

                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                          <input type="submit" name="enterstudent" value="Add" class="btn btn-primary">
                        </form>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php
              if(isset($_POST['enterstudent']))
              {
                $s_name = $_POST['s_name'];
                $s_age = $_POST['s_age'];
                $s_class = $_POST['s_class'];
                $s_grades = $_POST['s_grades'];

                $newsql ="INSERT INTO student_info (name, age, class, grades) VALUES ('$s_name','$s_age','$s_class','$s_grades')";
                if(mysqli_query($con,$newsql))
                {
                  
                  echo '<script language="javascript" type="text/javascript"> alert("Teacher Info Added!!!"); </script>';
                }
                else{

                }
                header("Location: checkstudent.php");
              }
              ?>

              <div class="panel-body">

                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Update Student Information</h4>
                      </div>
                      <form method="post">
                        <div class="modal-body">
                          <div class="form-group">
                            <label>Update Name</label>
                            <input name="u_name" value="<?php echo $name; ?>" class="form-control" placeholder="Enter Student Name">
                          </div>
                        </div>
                        <div class="modal-body">
                          <div class="form-group">
                            <label>Update Age</label>
                            <input name="u_age" value="<?php echo $age; ?>" class="form-control" placeholder="Enter Age">
                          </div>
                        </div>
                        <div class="modal-body">
                          <div class="form-group">
                            <label>Update Class</label>
                            <input name="u_class" value="<?php echo $class; ?>" class="form-control" placeholder="Enter Class">
                          </div>
                        </div>
                        <div class="modal-body">
                          <div class="form-group">
                            <label>Update Grades</label>
                            <input name="u_grades" value="<?php echo $grades; ?>" class="form-control" placeholder="Enter Grades">
                          </div>
                        </div>

                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                          <input type="submit" name="update_student_info" value="Update" class="btn btn-primary">
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
          if(isset($_POST['update_student_info']))
          {
            $u_name = $_POST['u_name'];
            $u_age = $_POST['u_age'];
            $u_class = $_POST['u_class'];
            $u_grades = $_POST['u_grades'];

            $upsql = "UPDATE `student_info` SET `name`='$u_name',`age`='$u_age',`class`='$u_class',`grades`='$u_grades' WHERE id = '$id'";
            if(mysqli_query($con,$upsql))
            {
              echo' <script language="javascript" type="text/javascript"> alert("User name and password update") </script>';


            }

            header("Location: checkstudent.php");

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
