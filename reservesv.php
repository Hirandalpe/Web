<?php

$host = "localhost";
$userdb = "root";
$pswdb = "";
$db = "ph_hotel";


$CheckInDate = $_REQUEST["checkin"];
$CheckOutDate = $_REQUEST["checkout"];
$Adults = $_REQUEST["adult"];
$Children = $_REQUEST["child"];
$Type = $_REQUEST["type"];
$Beds = $_REQUEST["bed"];
$user = $_REQUEST["email"];

$con = mysqli_connect($host, $userdb, $pswdb, $db);

if($con){
    $CheckingRooms = "SELECT NoofRooms FROM roomsavailable WHERE NoOfBeds = '$Beds' AND RoomType = '$Type'";
    $check = $con->query($CheckingRooms);
   
    

    if ($check->num_rows>0) {
         $row = mysqli_fetch_row($check);
         if($row[0]>0){
            $insert = "INSERT INTO reservation VALUES ('$user','$CheckInDate','$CheckOutDate','$Adults','$Children','$Beds','$Type')";
            $inst = mysqli_query($con,$insert);
            if($inst){
                
            }
            else{
                echo"not inserted"+ $inst;
            }
        }
       
    }
    else{
        echo"Rooms Not Available!";
    }
}
else{
    
}

?>

<!DOCTYPE HTML>


<html>
    <head>
        <title>Confirmation</title>
    </head>
    <link rel="stylesheet" href="style/confirm.css">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Lobster+Two&display=swap" rel="stylesheet">
    <body>
       
       
            
        <table class="words">
            <tr><th colspan="2">
        <h1 class="head" align="center">Reservation Details</h1></th></tr>
            <tr>
                <th>Email:</th>
                <td><?php echo"$user";?></td>
            </tr>
            <tr>
                <th>Type of Room:</th>
                <td><?php echo"$Type";?></td>
            </tr>
            <tr>
                <th>Check in Date:</th>
                <td><?php echo"$CheckInDate";?></td>
            </tr>
            <tr>
                <th>Check out Date:</th>
                <td><?php echo"$CheckOutDate";?></td>
            </tr>
            <tr >
                <th>No of Adults:</th>
                <td ><?php echo"$Adults";?></td>
            </tr>
            <tr>
                <th>No of Children:</th>
                <td><?php echo"$Children";?></td>
            </tr>
           
            <tr>
                <th>No of Beds:</th>
                <td><?php echo"$Beds";?></td>
            </tr>
            <tr>
                <th><a href="index.html"><button class="button">Home</button></a></th>
            </tr>
            
        </table>
        
        
    </body>
</html>
