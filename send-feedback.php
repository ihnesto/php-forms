<?php

//var_dump($_POST);

$username = $_POST['username'];
$subject = $_POST['subject'];
$email = $_POST['email'];
$message = $_POST['message'];
$ip = $_SERVER['REMOTE_ADDR'];

$link = mysqli_connect('localhost', 'root', '', 'feedback');

$sql = "INSERT INTO items(username, subject, email, message, ip) VALUES(\"$username\", \"$subject\", \"$email\", \"$message\", \"$ip\")";

//echo $sql;

$ret = mysqli_query($link, $sql);
if ($ret == false) {
    echo mysqli_error($link);
    exit();
}
mysqli_close($link);

echo "<p>Thanks. Your feedback was saved.</p>";
