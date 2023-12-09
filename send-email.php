<?php

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$mailheader = "From: ".$name."<".$email.">\r\n";

$recipient = "stefan_tampu@yahoo.com";

mail($recipient, $subject, $message, &$mailheader)
or die("Error!");

echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    <h1>Thank you for contacting us!</h1>
    <p>Go back to the <a href="form.html">homepage.</a></p>
</body>
</html>
';
?>