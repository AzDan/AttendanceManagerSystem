    <?php
      include 'db.php';

      $regno = $_POST["regno"];
      $pass = $_POST["psword"];
      $res;
      $data=array();

      $query = "SELECT username,password FROM login WHERE username=$regno AND password='$pass';";
      if ($res=mysqli_query($conn, $query)) {
        foreach ($res as $row) {
          $data[]=$row;
        }
      }
      else {
          echo "Error: " . $query . "<br>" . mysqli_error($conn);
      }

      if(empty($data)){
        header('Location: interstitial.html');
        exit;
      }
      else{
        if ($data[0]['username']==$regno && $data[0]['password']==$pass) {
          header('Location: studenthome.html');
          exit;
        }
      }
      mysqli_close($conn);
     ?>
