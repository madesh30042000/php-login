<?php
include "config.php";
session_start();

//check user login or not
if(!isset($_SESSION['login_user'])){
	echo 1;
 }
 
?>