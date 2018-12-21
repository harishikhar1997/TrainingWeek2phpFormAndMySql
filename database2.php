<?php

// echo "<table style='border: solid 1px black;'>";
// echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";

// class TableRows extends RecursiveIteratorIterator { 
//     function __construct($it) { 
//         parent::__construct($it, self::LEAVES_ONLY); 
//     }

//     function current() {
//         return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
//     }

//     function beginChildren() { 
//         echo "<tr>"; 
//     } 

//     function endChildren() { 
//         echo "</tr>" . "\n";
//     } 
// }





$servername = "localhost";
$username = "root";
$password = "toor";
$dbname="myDBHari";

try {
    	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    	// set the PDO error mode to exception
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//----------------------------------------------

    	// $sql="CREATE TABLE myGuests(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,fname VARCHAR(30) NOT NULL,lname VARCHAR(30) NOT NULL,email VARCHAR(50),reg_dtae TIMESTAMP)";


     //    $sql="INSERT INTO myGuests (fname,lname,email) VALUES('John','Doe','john@example.com'),('Hari','Sharma','harishikhar1997@gmail.com')";

    	// $conn->exec($sql);
         

       //   $last_id=$conn->lastInsertId();
    	  // echo "New record added successfully. last inserted id is ".$last_id; 


//----------------------------------------------
        //prepared statement eg.
        
        // $stmt=$conn->prepare("INSERT INTO myGuests(fname,lname,email) VALUES(:fname,:lname,:email)");
        // $stmt->bindParam(':fname',$fname);
        // $stmt->bindParam(':lname',$lname);
        // $stmt->bindParam(':email',$email);


        // // insert a row
        // $fname = "Shikhar";
        // $lname = "Sharma";
        // $email = "shikhar1911@gmal.com";
        // $stmt->execute(); 

        // // insert a another row
        // $fname = "Utkarsh";
        // $lname = "Palliwal";
        // $email = "utkarsh1996@gmal.com";
        // $stmt->execute(); 
    
        // // insert a another row
        // $fname = "Rahul";
        // $lname = "Singh";
        // $email = "r.st1996@gmal.com";
        // $stmt->execute();

//----------------------------------------------
    // Use of select statement and displaying data from a table in a table format that is created above..

        // $stmt=$conn->prepare("SELECT id,fname,lname FROM myGuests");
        // $stmt->execute();

        // // set the resulting array to associative
        // $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
        // foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        //     echo $v;
        // }

//---------------------------------------------

    // Delete data from MySQL


    //     $sql = "DELETE FROM myGuests WHERE id=1";

    // // use exec() because no results are returned
    //     $conn->exec($sql);
    //     echo "Record deleted successfully";


    //Updatein MySQL

         // $sql="UPDATE myGuests set lname='Tanwar' WHERE id=9";

         // $stmt=$conn->prepare($sql);
         // $stmt->execute();

         // echo $stmt->rowCount()." records UPDATED successfully";


    
    
    }
	catch(PDOException $e)
    {
    	echo "<br>Error-: " . $e->getMessage();
    }

    $conn=null;
?>