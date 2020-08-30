<?php

//this function is to get the value if it is pre setted
//I created this code snipped to reduce time to type if(isset()) Everywhere.
function getifSet(&$value, $default = null)
{
    //if it is set return the value, or else, return the default value
    return isset($value) ? $value : $default;
}
$error = getifSet($_REQUEST["st"]); 


if($error == null)
{
    echo "Error : 873647836498163248";
}
else if($error == "erroremailexists"){
    echo "Inserted Email Already exists enter another and try Again";
}
else{
  echo "rH4O/A9KvDIPjudrnBplY3yINHbxHQWQgraqe0Ol+5NiSZW+lAeA8nDs/QRSnTAjG15oYiaTCehSio+MWh5wIv2Ux3lDu1RkSBISX6KY3KgF26dCfCkNzEbcotqR5zoJOwzW672JZI6zX6a0tPp/NpEM6Tkwlii9BjaR7GCWUOn+sIjC4hgdkvavaMy19Zkz3PcHHBC9KweNvJk8Jx4PgVT9JFp8Jmpla4MRCN65nuftP2GMVSGKD75K4840zOxW";
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Sign-up</title>


</head>
<link rel="stylesheet" href="style/Signup.css">
<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">

<body>
<p><?php $filtered ?></p>
    <section>
        <form action="Signup.php" method="POST" name="signup_form" onsubmit="passwordvalidate();">
            <table>
                <h1>Sign up</h1>
                <tr>
                    <th>First Name</th>
                    <td><input type="text" name="fname" id="fname" required></td>
                </tr>

                <tr>
                    <th>Last Name</th>
                    <td><input type="text" name="lname" id="lname" required></td>
                </tr>

                <tr>
                    <th>E-mail</th>
                    <td><input type="email" name="email" id="email" required></td>
                </tr>

                <tr>
                    <th>Password</th>
                    <td> <input type="password" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required></td>

                </tr>
                <tr>
                    <th>Confirm Password</th>
                    <td><input type="password" name="cpassword" id="cpassword" required></td>
                </tr>

                <tr>
                    <th colspan="2">
                        <input type="submit" name="submit" id="submit">
                    </th>
                </tr>

            </table>

        </form>
    </section>

    <script>
        function passwordvalidate() {

            var check = document.signup_form.cpassword.value;
            var pass = document.signup_form.password.value;

            if (pass == check) {
                
                alert("Done!!")
            } else {
                document.signup_form.action = "";

                alert("Both passwords should be same. Check password and try again!");
            }
        }

        function password() {



            var decimal = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;;
            if (!(document.signup_form.password.value.match(decimal))) {
                document.getElementById("valid").style.display = "block";
                document.signup_form.action = "";
            }

        }
    </script>
</body>

</html>