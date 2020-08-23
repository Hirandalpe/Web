<?php
$FirstName = $_REQUEST["fname"];
$LastName = $_REQUEST["lname"];
$Email = $_REQUEST["email"];
$Password = $_REQUEST["password"];
$Confirm = $_REQUEST["cpassword"];
$servername = "localhost";
$username = "root";
$password = "" ;
$dbname = "ph_hotel";
$emailretrieved;
$valid = false;
//Sql connection
$con = new mysqli($servername, $username, $password, $dbname);
//checking for connection error
    if($con->connect_error){
        die("Connection Failed: ".$con->connect_error);
    }


    $qry = "SELECT Email FROM customer_info WHERE Email='".$Email."'";
    $result = $con->query($qry);

    if($result->num_rows>0){
        $valid = false;
    }
    else{
        $valid = true;
    }

    if($valid){
       
    
        $qury2 = "INSERT INTO customer_info (FirstName, LastName, Email, Pass) VALUES('".$FirstName."', '".$LastName."', '".$Email."', '".$Password."')";
        $result2 = $con->query($qury2);

        if ($con->query($qury2) === TRUE) {
            echo "New record created successfully";
            header("location:Logincl.html");
         } else {
            echo "Error: " . $qury2 . "<br>" . $con->error;
        }
            if ($result2 === TRUE){
                $_SESSION['user'] = $Email;
                header("location:Logincl.php");}
    

        
    }
    else{
        header("location:Signupfm.php?st=erroremailexists");
    }
    /*location cannot have spaces*/
?>