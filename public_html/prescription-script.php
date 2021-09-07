<?php
if (isset($_POST['sendMailBtn'])) {
    $fromEmail = $_POST['fromEmail'];
    $toEmail = $_POST['toEmail'];
    $doctorName = $_POST['doctorName'];
    $medicine1 = $_POST['medicine1'];
    $medicine2 = $_POST['medicine2'];
    $medicine3 = $_POST['medicine3'];
    $subjectName = $_POST['subject'];

    $to = $toEmail;
    $subject = $subjectName;
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: '.$fromEmail.'<'.$fromEmail.'>' . "\r\n".'Reply-To: '.$fromEmail."\r\n" . 'X-Mailer: PHP/' . phpversion();
    $message = '<!doctype html>
			<html lang="en">
			<head>
				<meta charset="UTF-8">
				<meta name="viewport"
					  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
				<meta http-equiv="X-UA-Compatible" content="ie=edge">
				<title>Document</title>
			</head>
			<body>
				<div class="container">
                <h1>JomSehat - Medicine Perscription for '.$toEmail.'</h1>
                <br/>
                Dear patient, here are your medication prescribed by '.$doctorName.'<br/>
                 '.$medicine1.'<br/>
                 '.$medicine2.'<br/>
                 '.$medicine3.'<br/>
                 Hope you get well soon!<br/>
                    Regards<br/>
                  '.$fromEmail.'
				</div>
			</body>
			</html>';
    $result = @mail($to, $subject, $message, $headers);

    echo '<script>alert("Email sent successfully !")</script>';
    echo '<script>window.location.href="index.php";</script>';
}