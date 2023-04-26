<?php
$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['number'];
$mes=$_POST['mes'];

$to="arthinatarajan1812@gmail.com";
$subject = "mail from own project";
$txt = "Name = ".$name."\r\n Email=".$email. "\r\n Mobile Number=".$number. "\r\n Message =".$mes;

$header = "From:noreply@gmail.com" ."\r\n".
"CC:somebodyelse@gmail.com";
if($email=NULL){
    mail($to,$subject,$txt,$header);
   
}else{
echo "<script>alert('Thankyou for contact us.')</script>";
//header("Location:home.php");
}

?>