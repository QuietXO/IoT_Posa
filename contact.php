<?php

$nameF = $_POST['nameF'];
$nameL = $_POST['nameL'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$file1 = fopen("mail.txt","w") or die("Unable to open file!");
$mail = "From: " . $nameF . " " . $nameL . "\n" .
        "Email: " . $email . "\n" . "Phone: " . $phone . "\n" .
        "Subject: " . $subject . "\n" . "Message: " . $message;

fwrite($file1, $mail);
fclose($file1);

echo'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Thanks for contacting us. We will get back to you as soon as possible!</h1>
        <p class="back">Go back to the <a href="index.php">homepage</a>.</p>
    </div>
</body>
</html>
';


?>
