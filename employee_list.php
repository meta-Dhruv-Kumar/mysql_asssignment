
<?php
    $conn = mysqli_connect('localhost', 'root', '', 'assignment') or die('Connection Failed' . mysqli_connect_error());
   
  
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($conn, "SELECT * FROM employee WHERE id=$id");

		
			$n = mysqli_fetch_array($record);
			$name = $n['name'];
			$email = $n['email'];
            $mobile = $n['mobile'];
			$department = $n['department'];
		
	}

  
  $results = mysqli_query($conn, "SELECT * FROM employee;" );
  
    
    $count = 1;

    
 
   while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) { 
  
       
        if($count%4==1){
            $style = "style=background-color:#EE82EE;"; 
        }
        else if($count%4==2){
            $style = "style=background-color:#4B0082;";
        }
        else if($count%4==3){
            $style = "style=background-color:green;";
        }
        else{
            $style = "style=background-color:red;";
        }
       

         
       
        echo "<div ".$style."><td> {$row['id']}</td>";
        echo "<td> {$row['name']}</td>";
        echo "<td> {$row['email']}</td>";
        echo "<td> {$row['mobile']}</td>";
        echo "<td> {$row['department']}</td>";
        echo "<a href=\"edit.php?edit= {$row['id']}\" class=\"edit_btn\" >Edit</a>";
        echo "<a href=\"delete.php?del= {$row['id']}\" class=\"dlt_btn\" >Delete</a></div>";
        echo "<br>";

        $count++; 
	 } 


?>
         
        

  
  


