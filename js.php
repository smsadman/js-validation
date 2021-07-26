




<html>
<head>
	<title>Registration Form</title>
</head>
<body>
<h1> <center> Registration Form </h1>
	<fieldset>
	<legend><h1> Basic Information  : </h1></legend>
	<!-- form -->
	<form action="submit.php" method="POST" name= "registrationForm " onsubmit= "return invalidid()" >
		

		<label for="fname">First Name:</label>
		<input type="text" id="fname" name="fname">
		<span style ="color : red" id= "fname "> <?php echo $fname ; ?> </span>

		<br><br>

		<label for="lname">Last Name:</label>
		<input type="text" id="lname" name="lname">
		<span style ="color : red" id= "lname "> <?php echo $lname ; ?> </span>


		<br><br>
		
		
         <label for="gender">Gender:</label>  <br>
		<input type="radio" id="male" name="gender" value="male">
		<label for="male">Male</label>
		<br>
		<input type="radio" id="female" name="gender" value="female">
		<label for="female">Female</label>
		<br>
		<input type="radio" id="other" name="gender" value="other">
		<label for="other">Other</label>
		<br>

		<br><br>
         <label for="fname">DoB:</label>
		<input type="date" id="date" name="date">
		<span style ="color : red" id= "date "> <?php echo $date; ?> </span>

		<br>
		
		
		<label for="religion">Religion:</label>
		<select id="religion"><!-- multiple -->
			<option value="muslim">muslim</option>
			<option value="hindu">hindus</option>
			<option value="boddho">boddis</option>
		</select>
		<br><br>

		</fieldset>
       <br><br>
	   <fieldset>
	<legend><h1> Contact Information  : </h1></legend>

		<label for="paddress">Present Address:</label>
		<input type="textarea" id="paddress" name="texrarea">
		<span style ="color : red" id= "paddress "> <?php echo $paddress ; ?> </span>

  <br>
       <label for="peraddress">Permanent Address:</label>
		<input type="textarea" id="peraddress" name="texrarea">
		<span style ="color : red" id= "peraddress "> <?php echo $peraddress; ?> </span>

		<br><br>
		
		<label for="email">Email:</label>
		<input type="email" id="email" name="email">
		<span style ="color : red" id= "email "> <?php echo $email ; ?> </span>

 <br>
        <label for="phone">Phone:</label>
		<input type="phone" id="phone" name="phone">
		<span style ="color : red" id= "phone "> <?php echo $phone; ?> </span>

  <br> <br>
  <label for="link">Link:</label>
		<input type="link" id="link" name="link">
		<span style ="color : red" id= "link "> <?php echo $link ; ?> </span>

</fieldset>

<fieldset>
	<legend><h1> Account Information  : </h1></legend>
		
		
		<label for="username">Username:</label>
			<input type="text" name="username" id="username" value="">
					<span style ="color : red" id= "username "> <?php echo $username ; ?> </span>


			<br><br>

			<label for="password">Password:</label>
			<input type="password" name="password" id="password">
			<span style ="color : red" id= "password "> <?php echo $password; ?> </span>

			<span style="color:red"></span>

			<br><br>
		
		
		</fieldset>
		
<input type="submit" value="Submit">


		
		


	
</form>
<br> 
<p style =















</body>
</html>


