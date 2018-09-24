<?php
  include 'db.php';

  $first_name = $_POST['fname'];
  $last_name = $_POST['lname'];
  $email = $_POST['email'];
  $reg_no = $_POST['regno'];
  $password = $_POST['pword'];
  $dept = $_POST['branch'];
  $sem = $_POST['sem'];
  $grp = $_POST['grp'];
  $subgrp = $_POST['subgrp'];

  $query1 = "INSERT INTO login VALUES($reg_no,'$password',1,'$email');";
  $query2 = "INSERT INTO student VALUES($reg_no,'$first_name','$last_name','$dept','$grp','$subgrp','$sem');";

  if(mysqli_query($conn,$query1)) {
    if(mysqli_query($conn,$query2)) {
      header('Location: loginpage.html');
      exit;
    }
    else {
      echo "Error: " . $query . "<br>" . mysqli_error($conn);
      echo "Error connecting to database";
    }
  }
  else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
    echo "Error connecting to database";
  }
  mysqli_close($conn);
?>
