<?php
if($_POST["message"]) {
    mail("gemmadruce@live.co.uk", "Form to email message", $_POST["message"], "From: an@email.address");
}
?>

<?php

if($_POST["submit"]) {
    $recipient="your@email.address";
    $subject="Form to email message";
    $sender=$_POST["fname"];
    $senderEmail=$_POST["email"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $email\n\n$subject";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?><!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>Contact form to email</title>
</head>

<body>

    <?=$thankYou ?>

    <form method="post" action="contact.php">
        <label>First name:</label>
        <input name="fname">

        <label>Last name:</label>
        <input name="lname">

        <label>Email address:</label>
        <input name="email">

        <label>Message:</label>
        <textarea rows="5" cols="20" name="subject"></textarea>

        <input type="submit" name="submit">
    </form>

</body>

</html>