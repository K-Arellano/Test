<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	<input type="text" name="uname" placeholder="Enter your username" required/> <br>
	<input type="password" name="pword" placeholder="Enter your password" required/> <br>
	<input type="submit" value="Login" name="btn">
</form>
<?php
if($_POST && isset($_POST['uname']) && isset($_POST['pword']))
{
	

	//set db config
	include 'config.inc.php';

	//connect to mysql 
	$conn = new mysqli($server, $user, $pass, $dbname);

	$uname = $conn->real_escape_string($_POST['uname']);
	$pword = $conn->real_escape_string($_POST['pword']);

	//evaluate connection
	if($conn->connect_error)
	{
		die("Connection Failed: " . $conn->connect_error);
	}

	//define the sql
	$sql = "Select * FROM users WHERE username='$uname' AND password='$pword'";

	//execute sql statement
	$result = $conn->query($sql) or die("Query error: " . $conn->error);
	
	//check if $result contains a record
	if($result->num_rows > 0)
	{
		while($row=$result->fetch_assoc())
		{
			header("Location: forms.php");
			die();
			
		}
	}
	else
	{
		echo "User does not exist";
	}

	//close the connection
	$conn->close();

}
?>

    <p> don't have an account? </p>
	<a href="Register.php">
	<button> Register </button>
	</a>
</body>
</html>