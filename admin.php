<?php

$link = mysqli_connect('localhost', 'root', '', 'feedback');

$sql = 'SELECT * FROM items';

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
        <h1 class="text-center">Last messages</h1>
        <ul class="list-group">
            <li class="list-group-item d-flex font-weight-bold">
                <div class="col-1 text-center">Id</div>
                <div class="col-3 text-center">Name</div>
                <div class="col-3 text-center">Email</div>
                <div class="col-5">Subject</div>
            </li>

            <?php
              for($i = 0; $i < count($res); $i = $i + 1) {
            ?>
              
            <li class="list-group-item d-flex">
              <div class="col-1 text-center"><?php echo $res[$i]['id']; ?></div>
              <div class="col-3 text-center"><?php echo $res[$i]['username']; ?></div>
              <div class="col-3 text-center"><?php echo $res[$i]['email']; ?></div>
              <div class="col-5"><a href="show.php?id=<?php echo $res[$i]['id'];?>"><?php echo $res[$i]['subject']; ?></a></div>
            </li>

          <?php
              }
          ?>
        </ul>
        
          <nav aria-label="Page navigation example" class="mt-3">
            <ul class="pagination">
              <li class="page-item"><a class="page-link" href="#">Previous</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
          </nav>
        
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>