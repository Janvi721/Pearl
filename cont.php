<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];


$email_subject = "New Form";
$mailheader = "From:" .$name. "<" .$email. ">\r\n";

$recipient = "janvim2103@gmail.com";
mail($recipient, $email_subject, $mailheader)
or die("Error");
echo "Message Sent";

?>