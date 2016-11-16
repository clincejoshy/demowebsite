<?php
$to = "clincepro@gmail.com";
$subject = "Thanks For the tip";
$txt = "Hope this mail is somewhat convincing";
$headers = "From: vijirajv@gmail.com" . "\r\n" .
"CC: clincejoshy@outlook.com";

mail($to,$subject,$txt,$headers);
?>