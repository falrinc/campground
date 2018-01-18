<?php
if(!isset($_POST["email"])) {
    exit();
}

$email = $_POST["email"];
$name = "No Name Given";
$subject = "RE: Santa Fe River Campground";
$message = "No Message Supplied";

if(isset($_POST["name"])) $name = $_POST["name"];
if(isset($_POST["subject"])) $name = $_POST["subject"];
if(isset($_POST["message"])) $name = $_POST["message"];

$headers = 'MIME-VERSION: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From:  ' . $name . ' <' . $email . '>' . " \r\n" .
            'Reply-To: '. $email . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
mail("sfriverretreat@gmail.com", $subject, $message, $headers);
?>