<?php
    $conn = mysqli_connect('localhost', 'root', '', 'assignment') or die('Connection Failed' . mysqli_connect_error());


if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($conn, "DELETE FROM employee WHERE id=$id");
	$_SESSION['message'] = "Address deleted!"; 
	header('location: employee_list.php');
}
?>