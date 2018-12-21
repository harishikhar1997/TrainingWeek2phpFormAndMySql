<?php
	session_start();
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body >
 

	<form action="upload.php" method="post" enctype="multipart/form-data">
    	Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
	</form>


	<div class="loginBox">
		<!-- <img src="user.png" class="user" > -->
		<h2>Dashboard</h2>



		<br><br>
		<details >
			<summary style="font-size: 30px; font-family: Times New Roman;">
				Click here for Details
			</summary>
			<div class="info" style="font-size: 20px; padding: 20px;">
		<?php
			echo "Welcome " . $_SESSION["fn"] ." ".$_SESSION["ln"] .".<br>";
			echo "Email id is " . $_SESSION["eid"] . ".<br>";	
			echo "Mobile number is " . $_SESSION["no"] . ".<br>";
				
		?>

		</details>
	</div>


</body>
</html>