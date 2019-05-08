  <?php 
    include "dbConnection.php";
   ?>

  <!DOCTYPE html>
  <html>

  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Upload Survey Form</title>
        <link rel="stylesheet" href="style_week1.css">
  </head>
    <body>

      <form action="insertData.php" method="POST" enctype="multipart/form-data">
      
        <h1>Upload Survey</h1>
        
        <!-- <br/> -->

        <fieldset>
          <label>Select image to upload:</label>
          <input type="file" name="fileToUpload" id="fileToUpload">

        </fieldset>

        <input type="submit" name="submitBtn" value="Submit Data">      
      </form>
 
  </body>
</html>