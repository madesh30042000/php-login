<?php
include"config.php";
 
 session_start();

if(isset($_POST['but_submit'])){

  $username = mysqli_real_escape_string($con,$_POST['txt_uname']);
  $password = mysqli_real_escape_string($con,$_POST['txt_pwd']);
  
  if($name !=""&& $password!=""){
  $sql = "SELECT id FROM users WHERE username = '$username' and password = '$password'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];

      $count = mysqli_num_rows($result);

      if(count == 1) {
        session_register("username");
        $_SESSION['login_user'] = $username;

        header("location: home.php");
      } else {
        $error = "Your Login Name or Password is invalid";
      }
    }
}
?>