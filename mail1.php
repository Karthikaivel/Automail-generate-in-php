<?php
$mail = $_POST['email'];
$name = $_POST['name'];
$mailto=$mail;
$mailsub="Welcome to Our Company";
$mailmsg="<html>
<head></head>
<style>
a
{
text-decoration:none;
}
</style>
<body>
<br/>
<br/>
<center>
<h1><font color='blue'>WELCOME TO Our Company</font></h1>
</center>
<p><b>Dear ".$name.",</b><br/>
<div>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     Thank you for Your Registration in Our Company.For any queries,please Contact us. 
<b><br/>
</div>
<br/>
<br/>
Regards,<br/>
Our Company,<br/>
</p>
</body>
</html>	";
require 'PHPMailer_5.2.0/class.phpmailer.php';
$mail=new PHPMailer();
$mail->IsSmtp();
$mail->SMTPDebug=1;
$mail->SMTPAuth=true;
$mail->SMTPSecure='ssl';
$mail->Host="smtp.gmail.com";
$mail->Port=465;
$mail->IsHTML(true);
$mail->Username="";
$mail->Password="";
$mail->SetFrom("");

$mail->Subject=$mailsub;
$mail->Body=$mailmsg;
$mail->AddAddress($mailto);
if(!$mail->Send())
{
echo "Mail not sent";
}
else
{
echo "Mail sent";
}
?>