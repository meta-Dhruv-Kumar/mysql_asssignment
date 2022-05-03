<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" type="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
  

    <div class="w-50 m-auto">
        <form action="Feedback.php" method="POST">
            <div class="form-group">
                <label>Employee Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Mobile No.</label>
                <input type="text" name="mobile" class="form-control" required>
            </div>
            <div class="form-group">
            <label>Department</label>
            <select class="form-control" id="selectDepartment" name="department">
              <option >--Select--</option>
              <?php           // This section is to retrive department names from department table in company database
               $connection = mysqli_connect("localhost", "root", "");                      // connecting to the database management system
                mysqli_select_db($connection, "assignment");                                   // selecting the database
              $query = mysqli_query($connection, "SELECT department FROM department");        // Executing the querry

              while($dept = mysqli_fetch_assoc($query))
              {
              $department = $dept['department'];
              echo "<option value=\"$department\">{$department}</option>";
               }

              ?>
      
            </select>
                
            </div>
            <input type="submit" name="submit" id="submit" />   
             
          </form>
    </div>

    <div>
      <a href="employee_list.php">employee_list</a>
    </div>
  

 

    
</body>
</html>
