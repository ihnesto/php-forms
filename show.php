<?php

$id = $_GET["id"];

$link = mysqli_connect('localhost', 'root', '', 'feedback');

$sql = "SELECT * FROM items WHERE id=$id";

$ret = mysqli_query($link, $sql);
if ($ret == false) {
    echo mysqli_error($link);
    exit();
}

$res = mysqli_fetch_all($ret, MYSQLI_ASSOC);

//var_dump($res);

mysqli_close($link);


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

  <div class="container">
	<div class="row my-4">
		<h1 class="offset-3 col-6 text-center">Show message #<?php echo $res[0]['id']; ?></h1>
	</div>
	<p>
    Name: <?php echo $res[0]['username']; ?>
  </p>
	<p>
    Subject: <?php echo $res[0]['subject']; ?>
  </p>
	<p>
    Email: <?php echo $res[0]['email']; ?>
  </p>
	<p>
    Message: <?php echo $res[0]['message']; ?>
  </p>
	<div class="row">
		<a href="email.php?id=<?php echo $id; ?>" class="btn btn-primary col-2 offset-2">Email answer</a>
		<a href="remove.php?id=<?php echo $id; ?>" class="btn btn-primary col-2 offset-4">Remove message</a>
	</div>
		
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>