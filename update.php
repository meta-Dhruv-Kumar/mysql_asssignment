<?php

$conn = mysqli_connect('localhost', 'root', '', 'assignment') or die('Connection Failed' . mysqli_connect_error());

    $id =  $_GET['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $department = $_POST['department'];

    $department_id = mysqli_query($conn, "SELECT * from `department` where `department` = '$department';");

    $row = mysqli_fetch_row($department_id);
    $id_of_department =  $row[0] ;

$update = "UPDATE `employee` SET `name` = '$name', `email` = '$email', `mobile` = '$mobile', `department` = '$id_of_department' WHERE `employee`.`id` = '$id';";


mysqli_query($conn,$update);

header('location:employee_list.php');



?>