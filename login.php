<?php
    $servername = "localhost";
    $username = "root";
    $password = "" ;
    $dbname = "ph_hotel";
    $userusername;
    $userpassword;
    $retrievedpassord = $_REQUEST["password"];
    $retrievedusername = $_REQUEST["username"];


    $con = new mysqli($servername, $username, $password, $dbname);

    if($con->connect_error){
        die("Connection Failed: ".$con->connect_error);
    }


    $qry = "SELECT Username, Password FROM customer_info";
    $result = $con->query($qry);

    if($result->num_rows>0){
        while($row= $result->fetch_assoc()){
        $userusername  = $row["Username"];
        $userpassword = $row["Password"];
        }
    }

    if($retrievedpassord == $userpassword && $retrievedusername == $userusername)
    {
        echo"DONE!!!!!!";
    }
    echo "$userusername <br/>";
    echo" $userpassword ";
    
  
    



?>