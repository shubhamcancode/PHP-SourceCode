<?php
session_start();
if(!isset($_SESSION['login_user']))
{
    header("Location:d_login.php");
}
include('config.php');
$user_check = $_SESSION['login_user'];
           
$ses_sql = mysql_query("SELECT * from projectx.doctor where d_email='$user_check'");

$row = mysql_fetch_array($ses_sql);


echo "Welcome  ".$login_session=$row['d_name'];


?>