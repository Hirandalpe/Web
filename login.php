<?php
    $servername = "localhost";
    $username = "root";
    $password = "" ;
    $dbname = "ph_hotel";
    $useremail;
    $userpassword;
    $retrievedpassord = $_REQUEST["password"];
    $retrievedemail = $_REQUEST["email"];


    $con = new mysqli($servername, $username, $password, $dbname);

    if($con->connect_error){
        die("Connection Failed: ".$con->connect_error);
    }


    $qry = "SELECT Email, Password FROM customer_info WHERE Email = '$retrievedemail'";
    $result = $con->query($qry);

    if($result->num_rows>0){
        while($row= $result->fetch_assoc()){
        $useremail  = $row["Email"];
        $userpassword = $row["Password"];
        }
    }

    if(md5($retrievedpassord) == $userpassword && $retrievedemail == $useremail)
    {
        header("Location: index.html");
    }

    
   
    
  
    



?>