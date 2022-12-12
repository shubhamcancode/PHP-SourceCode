<!-- Changes not Done -->
<html>
<head>
	<title>Customer Form</title>
</head>
<body>
<center>
 <form action="d_insert.php" method="POST" enctype="multipart/form-data">
 
        <h2>Doctor Registration</h2>
        <p>Enter Details</p>
	  Name : 
      <input type="text" name="name" id="name" value="" placeholder="Enter your Name"><br><br>
    Email : 
      <input type="text" name="email" id="email" value="" placeholder="Enter your Email"><br><br>
    Contact :
      <input type="text" name="cont" id="cont" value="" placeholder="Enter your Contact"><br><br>
    Password : 
      <input type="password" name="pass" id="pass" value="" placeholder="Enter your password"> <br><br>
  
    <label for="drop-down">Department:</label>
      <select name="dept" id="dept">
        <option value="Diabetes">Diabetes</option>
        <option value="Heart Disease">Heart Disease</option>
        <option value="Parkinson Disease">Parkinson Disease</option>
        <option value="Breast Cancer">Breast Cancer</option>
      </select>
      <br> <br>
	  <button type="submit" name="submit">Submit</button></br></br>

    Already Registered
    <br><br>
    <button><a href="d_login.php">Login</a></button>
 </form>
 </center>
</body>

</html>