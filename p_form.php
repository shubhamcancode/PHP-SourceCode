<html>
<head>
	<title>Customer Form</title>
</head>
<body>
<center>
 <form action="p_insert.php" method="POST" enctype="multipart/form-data">
 
        <h2>Patient Registration</h2>
        <p>Enter Details</p>
      Name : 
      <input type="text" name="name" id="name" value="" placeholder="Enter your Name"><br><br>
      Contact : 
      <input type="text" name="cont" id="cont" value="" placeholder="Enter your Contact"><br><br>
      Email : 
      <input type="text" name="email" id="email" value="" placeholder="Enter your Email"><br><br>
      Password :  
      <input type="password" name="pass" id="pass" value="" placeholder="Enter your Password"> <br><br>
      
      <!-- <input type="text" name="sympo" id="sympo" value="" placeholder="Enter your Symptoms"> <br><br> -->


	  <button type="submit" name="submit">Submit</button></br></br>
					  
					       
 </form>
 </center>
</body>

</html>