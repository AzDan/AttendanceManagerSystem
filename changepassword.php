<?php
  include 'db.php';

  $newpassword = $_POST['newpassword'];
  $username = $_POST['username'];
  $query = "UPDATE login SET password='$newpassword' WHERE username='$username';";

  if(mysqli_query($conn,$query)){
    header('Location: facultyhome.html');
    exit;
  }
  else {
    echo "ERROR";
  }
?>
