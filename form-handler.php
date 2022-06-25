<?php

if (isset($_POST['submit'])){
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);

    $myMail = "hostine_@outlook.com";
    $header = "From: ".$email;
    $message2 = "You have received a message from ".$name . ".\n\n" . $message;

    //email sending to
    //subject
    //message
    mail($myMail,$subject,$message2,$header);

    header("Location: contact.html?mailsend");

}
















/*
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];



$email_from = "austinjuniou4@gmail.com";

$email_subject = "New Form Submission";

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "Subject: $subject.\n".
                "User Message: $message.\n";

$to = 'scot.hub5@gmail.com'

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers)

header("Location: contact.html")


*/




?>