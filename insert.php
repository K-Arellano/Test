<?php
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        
		include 'config.inc.php';
       
        $conn = new mysqli($server, $user, $pass, $dbname);
        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
    
	   $sq1 = "INSERT into Borrowe(username, password, emailadd)
	            VALUES('$username','$password','$email')";
				if($conn->query($sq1) === TRUE)
					echo "new record created successfully";
				
			else
               echo "Error: " . $sq1 . "<br>" . $conn->error;
         $conn->close();		
         		 



?>
<html>
<head>
<title></title>
</head>
<body>
<br>
<a href="sqlinjection.php">
	<button> Log-in </button>
	</a>
</body>
</html>