<?php
/* Set email recipient */
$myemail = "user@email.com";

/* Check all form inputs using check_input function */
$firstname = check_input($_POST['first']);
$lastname = check_input($_POST['last']);
$email = check_input($_POST['email']);
$message = check_input($_POST['message']);

$subject = date("Y-m-d h:i:sa") 
$emailmessage = "Steven,

$first $last left you a message on your website.

Their email is:  $email
Message:
$message
";

/* Send the message using mail() function */
mail($myemail, $subject, $message);

/* Redirect visitor to the confirmation page */
header('Location: contact_confirm.html');

/* Functions */
function check_input($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	
	return $data;
}
?>
