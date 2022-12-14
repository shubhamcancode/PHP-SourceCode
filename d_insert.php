<?php
include('config.php');

if($_SERVER['REQUEST_METHOD'] == "POST") 
{  
    $a = $_POST['name'];
    $b = $_POST['email'];
    $c = $_POST['cont'];
    $d = md5($_POST['pass']);
    $e = $_POST['dept'];
    // $f = $_POST['flag'];

    $qry = mysql_query("INSERT INTO doctor(d_name,d_email,d_cont,d_pass, d_dept) VALUES('$a','$b','$c','$d','$e')");
    
    if($qry == true)
    {
        echo "inserted";
        // header("location:d_login.php");
       
    }else
    {
        echo "not".mysql_error();
    }
}
    else
    {
        echo "Request method is not POST";
    }
