<?php
	$cn = $_POST['cname'];
	$age = $_POST['age'];
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$course = $_POST['course'];
	$sex = $_POST['sex'];

	echo 	"Complete Name : " . $cn . "<br>" .
			"Age : " . $age . "<br>" .
			"Email Address : " . $email . "<br>" .
			"Password : " . $pass . "<br>" .
			"Course : " . $course . "<br>" .
			"Sex : " . $sex ;

?>
<html>
<head>
	<title></title>
</head>
<body>
<br>
      
	<a href="logout.php">
	<button> Logout </button>
	</a>
	<p> Want to see a surprise? </p>
	<a href="surprise.html">
	<button> Surprise </button>
	
</form>
</body>
</html>