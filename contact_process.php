<?php
	ob_start();
	//$to = "rockybd1995@gmail.com";
	//$to = "rockybd1995@mailinator.com";
	//$to = "manulalmanoharan@gmail.com";
	$to = "manulalmanoharan@gmail.com";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $subject = $_REQUEST['subject'];
   // $number = $_REQUEST['number'];
    $cmessage = $_REQUEST['message'];

	$headers = "From: $from";

	$headers = "From: $from" . "\r\n" ."CC: rockybd1995@mailinator.com" . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $subject = "You have a message from your roach.fit CONTACT US.";

    $logo = 'http://www.roach.fit/assets/img/logo/logo.png';
    $link = 'http://www.roach.fit';

	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
	$body .= "<table style='width: 100%;'>";
	$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
	$body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
	$body .= "</td></tr></thead><tbody><tr>";
	$body .= "<td style='border:none;'><strong>Name:</strong> {$name}</td>";
	$body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
	$body .= "</tr>";
	$body .= "<tr><td style='border:none;'><strong>Subject:</strong> {$subject}</td></tr>";
	$body .= "<tr><td></td></tr>";
	$body .= "<tr><td colspan='2' style='border:none;'>{$cmessage}</td></tr>";
	$body .= "</tbody></table>";
	$body .= "</body></html>";

	$send = mail($to, $subject, $body, $headers);
	echo $send;

?>