<?php

if (isset($_POST['submit'])) {
    $firstname = $['firstname'];
    $lastname = $['lastname'];
    $mailFrom = $['email'];
    $message = $['message'];
}

$mailTo = "gemmadruce@live.co.uk";
$headers = "From: ".$mailFrom;
$txt = "You have received an email from ".$firstname. ".\n\n".$message; 

mail($mailTo,$subject, $txt, $headers);
header("Location: index.php?mailsend");
}
?>