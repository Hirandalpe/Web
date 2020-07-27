<!--mizabdue:contact.PHP__2020/07/25-->	
<?php
if (isset($_POST['Email'])) {

    $email_to = "mizabdue@students.nsbm.lk";
    $email_subject = "New form submissions";

    function problem($error)
    {
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br><br>";
        echo $error . "<br><br>";
        echo "Please go back and fix these errors.<br><br>";
        die();
    }


    if (
        !isset($_POST['name']) ||
		!isset($_POST['phone']) ||
        !isset($_POST['mail']) ||
        !isset($_POST['message'])
    ) {
        problem('We are sorry, but there appears to be a problem with the form you submitted.');
    }

    $name = $_POST['name']; 
	$phone = $_POST['phone'];
    $mail = $_POST['mail']; 
    $message = $_POST['message']; 

    $error_message = "";
    $string_exp = "/^[A-Za-z .'-]+$/";

    if (!preg_match($string_exp, $name)) {
        $error_message .= 'The Name you entered does not appear to be valid.<br>';
    }
	
	$phone_exp = "/^[0-9 .'-]+$/";

    if (!preg_match($phone_exp, $phone)) {
        $error_message .= 'The Phone number you entered does not appear to be valid.<br>';
    }
	
	$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if (!preg_match($email_exp, $mail)) {
        $error_message .= 'The Email address you entered does not appear to be valid.<br>';
    }

    if (strlen($message) < 2) {
        $error_message .= 'The Message you entered do not appear to be valid.<br>';
    }

    if (strlen($error_message) > 0) {
        problem($error_message);
    }

    $email_message = "Form details below.\n\n";

    function clean_string($string)
    {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }

    $email_message .= "Name: " . clean_string($name) . "\n";
	$email_message .= "Phone: " . clean_string($phone) . "\n";
    $email_message .= "Email: " . clean_string($email) . "\n";
    $email_message .= "Message: " . clean_string($message) . "\n";


    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);
	
	echo "Thank you for contacting us. We will be in touch with you very soon.";
?>