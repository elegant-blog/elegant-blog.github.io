<?php
if(isset($_POST['submit'])){
$name = $_POST['name'];
$emails = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['email-message'];
$headername =$name;
$header =$emails;
$sentname= '
<div class="name">  اسم المرسل : '.$headername.'</div><br>';



$sentemaile= '

<div class="email">ايميل المرسل : '.$header.'</div><br>';
$message .= $sentname;
$message .=$sentemaile;
$email = "your@gmail.com";
}
 
	require_once('mailer/class.phpmailer.php');
	
	$mail = new PHPMailer();
		$mail->IsSMTP(); 
		$mail->CharSet =  "utf-8";
		$mail->SMTPDebug  = 0;                     
		$mail->SMTPAuth   = true;                  
		$mail->SMTPSecure = "tls";                 
		$mail->Host       = "smtp.gmail.com";      
		$mail->Port       = 587;            
		$mail->AddAddress($email);
		$mail->Username="your@gmail.com";  
		$mail->Password="yourpass";            
		$mail->SetFrom('your@gmail.com','beall');
		$mail->AddReplyTo("your@gmail.com","beall");
		$mail->Subject    = $subject;
		$mail->MsgHTML($message);
		$mail->Send();
 






//$send = mail("yyassmeen@gmail.com",$subject,$msg);

if($mail->Send()){
echo "تم ارسال الرسالة سيتم الرد عليك باقرب وقت ممكن!";
echo '<meta http-equiv="refresh" content="4; \'blog.html\' ">';
}else{
"There is something went wrong!";

}


?>
