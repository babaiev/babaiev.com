<?php
$field_name = $_POST['your_name'];
$field_email = $_POST['your_email'];
$field_message = $_POST['your_quiry'];

$mail_to = 'valerii.babaiev@gmail.com';
$subject = 'Message from a site visitor '.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Hey, thanks for massaging me. I will contact you shortly.');
		window.location = 'contacts.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed. Please, send an email to valerii.babaiev@gmail.com');
		window.location = 'contacts.html';
	</script>
<?php
}
?>