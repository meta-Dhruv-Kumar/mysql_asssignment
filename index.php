<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" type="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
</head>
<body>
  

    <div class="w-50 m-auto">
        <form id="myform" action="Feedback.php" method="POST">
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
  

   
    <style>
  .error {
    color: red;
  }
</style>
<script>
  $(document).ready(function () {
    $('#myform').validate({
      rules: {
        name: {
          required: true
        },
        email: {
          required: true,
          email: true
        },
        mobile: {
          required: true,
          rangelength: [10, 12],
          number: true
        },
        department: {
          required: true,
          // min: 1,
          
        }
      },
      messages: {
        name: 'Please enter Name.',
        email: {
          required: 'Please enter Email Address.',
          email: 'Please enter a valid Email Address.',
        },
        mobile: {
          required: 'Please enter Contact.',
          rangelength: 'Contact should be 10 digit number.'
        },
        department: {
          required: 'Please select a department',
          // min: 'Please select department',
          
        }
      },
      submitHandler: function (form) {
        form.submit();
      }
    });
  });
</script>
    
</body>

</html>
