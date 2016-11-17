<?php
$to=$_POST['to'];
$subject=$_POST['subject'];
$from=$_POST['from'];
$txt=$_POST['content'];
$headers = "From:".$txt;

mail($to,$subject,$txt,$headers);
?>
