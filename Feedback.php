<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' || isset($_POST['submit'])) {
    $conn = mysqli_connect('localhost', 'root', '', 'assignment') or die('Connection Failed' . mysqli_connect_error());


    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['department'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $department = $_POST['department'];

        $sql = "INSERT INTO `employee` (`id`, `name`, `email`, `mobile`, `department`) VALUES (NULL, '$name', '$email', '$mobile', '$department');";


        $query = mysqli_query($conn, $sql);
        if ($query) {
            echo "<center><h2>Entry Successful</h2></center>";
            // echo '<center><a href="http://localhost/organisation/home.php">Go Back</a></center>';
        } else {
            echo "<center><h2>Error Occurred</h2></center>";
            // echo '<center><a href="http://localhost/organisation/home.php">Go Back</a></center>';
        }

    }
}

// if($conn){
//     echo "connection succesful";
// }
// else{
//     echo "no connection";
// }










?>