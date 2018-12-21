<?php
	session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="style1.css">


</head>

<body>

<?php
$nameErr = $lnameErr = $emailErr = $pnumberErr = $passErr = $cpassErr = "";
$name = $lname = $email = $pnumber = $pass = $cpass = "";
$isValidated = false;

if($_SERVER["REQUEST_METHOD"]=="POST")
{

	if (empty($_POST["name"])) {
    $nameErr = "Name required";
  	} 
  	else{
    		$name = test_input($_POST["name"]);
		    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      		$nameErr = "Only letters and white space allowed"; 
    		}
  		}


  	if (empty($_POST["lname"])) {
    $lnameErr = "Name required";
  	} 
  	else{
    		$lname = test_input($_POST["lname"]);
		    if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
      		$lnameErr = "Only letters and white space allowed"; 
    		}
  		}


	if(empty($_POST["email"]))
	{
		$emailErr="EmailId required!";
	}
	else{
			$email=test_input($_POST["email"]);
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      			$emailErr = "Invalid email format";
      		}
      	}


    if (empty($_POST["pnumber"]))
    {
    	$pnumberErr = "Number required";
  	} 
  	else{
    		$pnumber = test_input($_POST["pnumber"]);
		    if (preg_match("/^[0-9]{10}+$/", $pnumber))
		    {
      			$pnumberErr = "Invalid Number"; 
    		}
  		}


    if(empty($_POST["pass"]))
	{
		$passErr="Password required!";
	}
	else{
			$pass=test_input($_POST["pass"]);
			if(!preg_match("/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/", $pass)) {
      			$passErr = "Password too weak";
      		}
      	}


    if(empty($_POST["cpass"]))
	{
		$cpassErr="Password required!";
	}
	else{
			$cpass=test_input($_POST["cpass"]);
			if($cpass != $pass) {
      			$cpassErr = "Passwords don't match!";
      		}
      	}


      	$_SESSION["fn"]=$name;
      	$_SESSION["ln"]=$lname;
      	$_SESSION["eid"]=$email;
      	$_SESSION["no"]=$pnumber;

      	if($nameErr == "" && $lnameErr == "" && $emailErr =="" && $pnumberErr =="" && $passErr =="" && $cpassErr == ""){
      		header('Location: /Hari/work/dashboard.php');
      	}


}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<!-- id
name basically idenfication of the form.
Element of the form
textbox
passsowrd
email
number
dropdown select
hidden
radio
checkbox
file
textarea

submit:
button:
reset: -->





<div class="loginBox">
		<h2>Sign Up Form</h2>
		<form method="POST" id="form1" name="form1" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

			<p>First Name <span class="error">* <?php echo $nameErr;?></span></p>
			<input type="text" name="name" placeholder="Enter First Name">

			<p>Last Name <span class="error">* <?php echo $lnameErr;?></span></p>
			<input type="text" name="lname" placeholder="Enter Last Name">
			
			<p>Email <span class="emailerror">* <?php echo $emailErr;?></span></p>
			<input type="text" name="email" placeholder="Enter Email">
		
			<p>Phone Number <span class="pnumerror">* <?php echo $pnumberErr;?></span></p>
			<input type="text" name="pnumber" placeholder="Enter Phone Number">
			
			<p>Password <span class="errorPass">* <?php echo $passErr;?></span></p>
			<input type="password" name="pass" placeholder="*****">

			<p>Confirm Password <span class="conEmailerrorPass">* <?php echo $cpassErr;?></span></p>
			<input type="password" name="cpass" placeholder="*****">

			<input type="submit" name="SignUp" value="Sign Up" />
			
		</form>
	</div>


</body>
</html>








