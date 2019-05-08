  <?php 
    session_start();
    include "db.php";
    if(!isset($_SESSION["user"]))
    {
      header("location:index.php");
    }
   ?>

  <!DOCTYPE html>
  <html>

  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Survey</title>
        <link rel="stylesheet" href="style_week1.css">
  </head>
    <body>

      <form action="insertData.php" method="POST" enctype="multipart/form-data">
      
        <!-- <br/> -->

        <fieldset>
          <label>Select image to upload:</label>
          <input type="file" name="fileToUpload" id="fileToUpload">

        </fieldset>

        <input type="submit" name="submitBtn" value="Submit Data">      
      </form>
 
  </body>
</html>