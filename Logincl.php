<?php
//starting a session
session_start();


//this function gets the value if its preset

function fetifset(&$value, $default = null){
    return isset($value) ? $value : $default;
}
//set the username value to a variable
$username = getifSet($_SESSION['user'])

?>



<!DOCTYPE html>
<html>

<head>
    <title>
        Login
    </title>
</head>
<link rel="stylesheet" type="text/css" href="Login123.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<body>
    <div class="border">

        <div class="formside">
            <h1 class="header"><img src="weblogog.png" alt=""></h1>
            <h2>Login</h2>
            <form action="login.php" method="POST">

                <table>
                    <tr class="row">
                        <th>E-mail</th>
                        <td class="border-bottom"><input oninput="change_email();" type="email" name="email" class="td" id="mail"></td>
                    </tr>

                    <tr class="row">
                        <th>Password</th>
                        <td><input type="password" name="password" class="td border-bottom" id="pass"></td>
                    </tr>
                    <tr class="row">
                        <td>
                            <input type="checkbox" name="remember">
                            <label for="remember">Remember Me</label>
                        </td>
                        <td id="forgot-psw">
                            <a href="">Forgot Password?</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Not a member?</td>
                        <td><a href="Signup.html">Sign Up</a></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" name="submit" id="submit"></td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="pictureside">
            <img src="IMG_1110.JPG" alt="">
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script>
        var pre = "<?php echo $username?>";
        var mail = document.getElementById("mail");

        if(pre != null){
            mail.value = preset;
            mail.style.backgroundColor = "#ffffcc";
            document.getElementById("pass").focus();
        }

        function change_email(){
            mail.style.backgroundColor = "#ffffff";
        }

    </script>

</body>

</html>