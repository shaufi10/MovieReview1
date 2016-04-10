<?php
  
  include('dbconnect.php');

  if(isset($_POST['submit']))
  {
    $name  = $_POST['nama'];
    $uname = $_POST['username'];
    $email = $_POST['email'];
    $upass = $_POST['password'];
    $repass =$_POST['repassword'];

    $query = mysqli_query($db, "SELECT * FROM users WHERE email='".$email."'");

    if(mysqli_num_rows($query) > 0){

            echo "<script>alert('Sorry...This email already exist...'</script>";
     }else{

      $query = mysqli_query($db, "INSERT INTO users (nama, username, email, password, repassword)VALUES ('$name','$uname','$email', '$upass','$repass')");
      if($query)
      {
        echo "<script>alert('Registration Success')</script>";

        echo "<script>window.open('login.php','_self')</script>";
          }     
        }
      }
?>

  	