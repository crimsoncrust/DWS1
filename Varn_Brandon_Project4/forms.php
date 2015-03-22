<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$Email = $_POST['Email'];
$NickName = $_POST['NickName'];
$what = $_POST['what'];
$comments = $_POST['comments'];
$Add = $_POST['Add'];
$to = "brandon_varn@yahoo.com";
$subject = "New Message";
	mail ( string $to , string $subject , string $message [, string $additional_headers [, string $additional_parameters ]] )
mail ($to, $subject, $message, "From: " . $firstname . $lastname);
echo "Your Message has been sent";

?>