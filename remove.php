<?php

$id = $_GET["id"];

$link = mysqli_connect('localhost', 'root', '', 'feedback');

$sql = "DELETE FROM items WHERE id=$id";

$ret = mysqli_query($link, $sql);
if ($ret == false) {
    echo mysqli_error($link);
    exit();
}

mysqli_close($link);

header('Location: admin.php');
