<?php
$to=$_POST['to'];
$subject=$_POST['subject'];
$from=$_POST['from'];
$txt=$_POST['content'];
$headers = "From: xyz@anaon.com" . "\r\n";

mail($to,$subject,$txt,$headers);
?>