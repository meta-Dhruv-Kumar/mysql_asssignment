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
                <input type="text" name="name" class="form-control" value=<?php$name?> required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="<?php$email?>" required>
            </div>
            <div class="form-group">
                <label>Mobile No.</label>
                <input type="text" name="mobile" class="form-control" value="{$n['mobile']}" required>
            </div>
            <div class="form-group">
                <label>Department</label>
                <input type="text"  name="department" class="form-control" value="{$n['departmnet']}" required>
                
            </div>
            <input type="submit" name="update" id="submit" />   
             
          </form>
    </div>

    
  

 

    
</body>
</html>



<?php 
       $conn = mysqli_connect('localhost', 'root', '', 'assignment') or die('Connection Failed' . mysqli_connect_error());

    
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($conn, "SELECT * FROM employee WHERE id=$id");

		
			$n = mysqli_fetch_array($record);
			$GLOBALS['name'] = $n['name'];
			$GLOBALS['email'] = $n['email'];
            $GLOBALS['mobile'] = $n['mobile'];
            $GLOBALS['department'] = $n['department'];
		
	}
?>