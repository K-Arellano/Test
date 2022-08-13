<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<p> Your Information </p>
<form action="display.php" method="post" target="_blank">
	Complete Name : <input type="text" name="cname"> <br>
	Age : <input type="number" name="age"> <br>
	Email Address : <input type="email" name="email"> <br>
	Password : <input type="Password" name="password"> <br>
	Course : <select name="course">
				<option value="BSIT"> BSIT </option>
				<option value="BLIS"> BLIS </option>
				<option value="BSCS"> BSCS </option>
			 </select><br>
	Sex : <input type="radio" name="sex" value="Male"> Male
		  <input type="radio" name="sex" value="Female"> Female <br>

	<input type="submit" value="Submit" name="reviewbtn">
</form>
</body>
</html>