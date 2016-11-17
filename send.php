<?php
$to=$_POST['to'];
$subject=$_POST['subject'];
$from=$_POST['from'];
$txt=$_POST['content'];
$headers = "From: sreerag939@gmail.com";

mail($to,$subject,$txt,$headers);
?>
