<?php
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['number']))
$number = $_POST['number'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['inquiryType']))
$inquiryType = $_POST['inquiryType'];
if(isset( $_POST['inquiry']))
$inquiry = $_POST['inquiry'];

$content="From: $name \n Email: $email \n Type: $inquiryType \n Message: $inquiry";
$recipient = "jaaronsservices@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
echo "Email sent!";
?>