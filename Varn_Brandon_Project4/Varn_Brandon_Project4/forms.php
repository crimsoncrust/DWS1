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

mail ($to, $subject, "From: " . $firstname . $lastname);
echo "Your Message has been sent";

?>