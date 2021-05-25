<?php
$first_name = $_POST['first name']
$last_name = $_POST['last name']
$registrant_email = $_POST['email']
$number = $_POST['number']
$city = $_POST['city']
$postal_code = $_POST['postal code']
$DoB = $_POST['dob']

$email_from = 'info@compassaviation.com';

$email_subject = 'New Form Submission';

$email_body = "First Name: $first_name.\n".
              "Last Name: $last_name.\n".
              "Registrant Email: $registrant_email.\n".
              "Number: $number.\n".
              "City: $city.\n".
              "Postal Code: $postal_code.\n".
              "DoB: $DoB.\n";


$to = 'compassaviation@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $registrant_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: index.html");
?>