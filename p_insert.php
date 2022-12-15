<?php
include('config.php');

if($_SERVER['REQUEST_METHOD'] == "POST") 
{  
    $a = $_POST['name'];
    $b = $_POST['email'];
    $c = $_POST['cont'];
    $d = md5($_POST['pass']);

    $qry = mysql_query("INSERT INTO patient(u_name,u_email,u_cont, u_pass) VALUES('$a','$b','$c','$d')");
    
    if($qry == true)
    {
        echo "inserted";
        header("location:p_login.php");
       
    }else
    {
        echo "not".mysql_error();
    }
}
    else
    {
        echo "Request method is not POST";
    }

?>