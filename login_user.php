<?php

include_once 'dbconnect.php';

if(isset($_POST['login'])){

$uname = $_POST['username'];
$upass = $_POST['password'];

$sql = "select * from users where username= '$uname' AND password='$upass'";

$res = mysqli_query($db, $sql);

$check = mysqli_num_rows($res);

if($check > 0){

$_POSTS['username']=$uname;

echo "<script>window.open('home.php','_self')</script>";

}

else {

echo "<script>alert('Email or password is not correct, try again!')</script>";
		}
	}

?>
