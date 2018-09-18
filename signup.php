<?php
  include 'db.php';

  $first_name = $_POST['fname'];
  $last_name = $_POST['lname'];
  $email = $_POST['email'];
  $reg_no = $_POST['regno'];
  $password = $_POST['pword'];

  $query = "INSERT INTO login (regno,password,first_name,last_name,email) VALUES ($reg_no,'$password','$first_name','$last_name','$email');";
  if(mysqli_query($conn,$query)){
    echo "RECORDS UPDATED";
  }
  else{
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
  }
?>
