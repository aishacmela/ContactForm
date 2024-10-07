<?php
//create variables name, email, subject and message
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

//create mail header
$mailheader = "From: ".$name."<".$email.">\r\n";

$recipient = "äishacmela@gmail.com";

//mail function
//mail(to, subject, message, headers, parameters)

mail($recipient, $subject, $message, $mailheader)
or die ("Error!");

echo"message send";
?>