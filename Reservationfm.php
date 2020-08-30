<!DOCTYPE html>
<html>
    <head>
        <title>Reservation</title>
    </head>
    <link rel="stylesheet" href="style/reservation.css">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Lobster+Two&display=swap" rel="stylesheet">
    <body>
        <div class="form" align="center">
            <form action="reservesv.php" method="POST" name="reservation">
               <h1 class="heading">Reserve Your Gateway</h1>
                <table align="center">
                    <tr>
                        <th>E-Mail</th>
                        <td><input type="email" name="email"></td>
                    </tr>

                    <tr>
                        <th>
                            Select no of Visitors
                        </th> 
                        <td>
                          <select name="adult" id="adult">
                            <option value="0">Select No of adults</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                          </select>
                        </td>
                        
                    </tr>
                    <tr>
                        <th>No of Children</th>
                        <td>
                          <select name="child" id="children">
                            <option value="0">Select no of children</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                         </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Select Type Of Rooms</th>
                        <td> <select name="type" id="rooms">
                            <option value="none">Select Room Type</option>
                            <option value="premior">Premior</option>
                            <option value="Superior">Superior</option>
                            <option value="JuniorSuit">Junior Suit</option>                           
                         </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Select no of Beds</th>
                        <td> <select name="bed" id="beds">
                            <option value="0">Select no of Beds</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="4">4</option>                           
                         </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Checkin Date</th>
                        <td><input type="date" name="checkin"></td>
                    </tr>
                    <tr><th>Check Out date</th>
                    <td><input type="date" name="checkout"></td>
                </tr>

                <tr>
                    <td class="button"><input type="submit"></td>
                    <td class="button"><input type="reset"></td>
                </tr>
                <tr><td colspan="2"> <p class="warning0">**For reservations of the exsecutive Suits please contact the Hotel Front Desk for reservation details</p></td></tr>
               

                </table>
            </form>
        </div>
    </body>


</html>