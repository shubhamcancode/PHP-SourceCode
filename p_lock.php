<?php
session_start();
if(!isset($_SESSION['login_user']))
{
    header("Location:p_form.php");
}
include('config.php');
$user_check = $_SESSION['login_user'];
           
$ses_sql = mysql_query("SELECT * from projectx.patient where u_email='$user_check'");
 
$row = mysql_fetch_array($ses_sql);


echo "Welcome  ".$login_session=$row['u_name'];


?>