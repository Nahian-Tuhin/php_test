<?php
$title="Login";
session_start();
require 'includs/db.php';
$user_email=$_POST['user_email'];
$user_password=md5($_POST['user_password']);


$check_Q = "SELECT * FROM users Where user_email = '$user_email' and  user_password = '$user_password'" ;
$data=mysqli_query($db_connect,$check_Q);



if (empty($user_email) ) {
 $_SESSION['Email_error']='Email error';
 header('location: login.php');
}
elseif (empty($_POST['user_password']) ) {
  $_SESSION['Password_error']='password error';
  header('location: login.php');
}
else {

  if ($data ->num_rows == 1 ) {

    $_SESSION['login'] ='success';
    $_SESSION['Email']=$user_email;
    header('location: dashboard.php');

  }
  else {
      $_SESSION['error'] ='Wrong Email or Password';
      header('location: login.php');

  }
}







 ?>
