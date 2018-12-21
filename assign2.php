<html>
<head>
	<title>Login Form Design</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<?php
$nameErr = $emailErr = $passErr = $websiteErr = "";
$name = $email = $pass = $comment = $website = "";


if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(empty($_POST["email"]))
	{
		$emailErr="Email id is required!";
	}
	else{
			$email=test_input($_POST["email"]);
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      			$emailErr = "Invalid email format";
      		}
      	}


    if(empty($_POST["pass"]))
	{
		$passErr="Password required!";
	}
	else{
			$pass=test_input($_POST["pass"]);
			if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $pass)) {
      			$passErr = "Password is too weak";
      		}
      	}


}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>



<div class="loginBox">
		<img src="user.png" class="user" >
		<h2>Log In Form</h2>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			
			<p>Email <span class="error">* <?php echo $emailErr;?></span></p>
			<input type="text" name="email" placeholder="Enter Email">
		
			
			<p>Password <span class="errorPass">* <?php echo $passErr;?></span></p>
			<input type="text" name="pass" placeholder="*****">
			<input type="submit" name="" value="Log In">
			<a href="#">Forget Password<br><br> </a>
			<a href="signIn.php">Don't have an account?Sign up</a>
		</form>
	</div>



</body>
</html>



