<?php
$to='clincepro@gmail.com';
$subject='subject';
$name='name';
$from='hello@hello.com';
$type='t';
$content='hello world';
mail($to,$subject,$content);
echo(“<p style=”color:green”>E-Mail Sent!</p>”);
}
else{
         echo(“<p style=”color:red”>E-Mail NOT Sent!</p>”);
}
?>
