  <?php 
    include "dbConnection.php";
   ?>

  <!DOCTYPE html>
  <html>

  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Student Registration Form</title>
        <link rel="stylesheet" href="style_week1.css">
  </head>
    <body>

      <form action="insertData.php" method="POST" enctype="multipart/form-data">
      
        <h1>Regitser Student</h1>
        
        <fieldset>
          <label>Roll#:</label>
          <input type="text" id="rollNumber" name="roll_num" required>          
          <br/>

          <label>Name:</label>
          <input type="text" id="s_name" name="student_name" required>
          
          <label>Father Name:</label>
          <input type="text" id="f_name" name="father_name" required>
                    
          <label>Gender:</label>
            <input type="radio" id="male" value="male" name="gender"><label class="light" >Male</label><br>
            <input type="radio" id="female" value="female" name="gender"><label class="light">Female</label><br> 
        </fieldset>

        <fieldset>
        <label>Class:</label>
          <select id="class_id" name="class">
            <optgroup label="Classes">
              <option value="I">I</option>
              <option value="II">II</option>
              <option value="III">III</option>
              <option value="IV">IV</option>
              <option value="V">V</option>
              <option value="VI">VI</option>
              <option value="VII">VII</option>
              <option value="VIII">VIII</option>
              <option value="IX">IX</option>
              <option value="X">X</option>
              <option value="XI">XI</option>
              <option value="XII">XII</option>
            </optgroup>
          </select>
        </fieldset>
        <!-- <br/> -->

        <fieldset>
          <label>Select image to upload:</label>
          <input type="file" name="fileToUpload" id="fileToUpload">
          <label>Upload Text File:</label>
          <input type="file" name="pic" accept=".doc,.docx,application/msword"> 

        </fieldset>

        <input type="submit" name="submitBtn" value="Submit Data">      
      </form>
 
  </body>
</html>