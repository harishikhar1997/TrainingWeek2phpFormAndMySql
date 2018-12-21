<!-- this file contains how to make a connection and a database. -->

<?php
$servername = "localhost";
$username = "root";
$password = "toor";

try {
    	$conn = new PDO("mysql:host=$servername", $username, $password);
    	// set the PDO error mode to exception
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	$sql="CREATE DATABASE myDBHari";
    	$conn->exec($sql);
    	echo "Connected successfully"; 
    }
	catch(PDOException $e)
    {
    	echo $sql."<br> " . $e->getMessage();
    }

    $conn=null;
?>