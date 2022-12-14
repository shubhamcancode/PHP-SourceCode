<?php
include('config.php');
session_start();
if ($_SERVER['REQUEST_METHOD'] == "POST") 
{
    $myemail = $_POST['email'];
    $mypass = $_POST['pass'];
    $password = md5($mypass);

    //replaced id with * 
    $sql = ("SELECT * FROM projectx.doctor WHERE d_email='$myemail' AND d_pass='$password' ");

    $result = mysql_query($sql);
    $row = mysql_fetch_array($result);
    $count = mysql_num_rows($result);

    if ($count == 1) {
        $_SESSION['login_user'] = $myemail;
        header("location:d_home.php");
        
    } else {
        echo '<script>alert("Enter Valid Credentials!")</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Login</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <center>
            <h2>Patient Login</h2>
            Login :
            <input type="text" name="email" id="email" value="" placeholder="Enter your Login Id"> <br><br>
            Password :
            <input type="password" name="pass" id="pass" value="" placeholder="Enter your Password"> <br><br>
            <button type="submit" name="submit">Submit</button>
            <br><br>
            Not Registered ? <br> <br>
            <button><a href="d_form.php">Doctor Patient</a></button>
        </center>
    </form>
</body>
</html>