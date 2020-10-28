<?php

//var_dump($_POST);

$to = $_POST['to'];
$subject = $_POST['subject'];
$message = $_POST['message'];

mail($to, $subject, $message);

echo '<p>The email was sent.<a href="admin.php">Return to admin page</a></p>';
