<?php
$to=$_POST['to'];
$subject=$_POST['subject'];
$name=$_POST['name'];
$from=$_POST['from'];
$type='t';
$content=$_POST['content'];
mail($to,$subject,$content,”From:$name<$from>\r\nContent-Type:$type”);
echo(“<p style=”color:green”>E-Mail Sent!</p>”);
}
else{
         echo(“<p style=”color:red”>E-Mail NOT Sent!</p>”);
}
?>
