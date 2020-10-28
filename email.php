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
            <h1 class="offset-3 col-6 text-center">Answer to message</h1>
        </div>
            <form method="post" action="send-mail.php" class="offset-3 col-6">
            <div class="form-row">
                <div class=" col form-group">
                    <label>From:</label>
                    <input type="text" class="form-control" value="admin@localhost">
                </div>
                <div class=" col form-group">
                    <label>To:</label>
                    <input name="to" type="text" class="form-control" value="<?php echo $res[0]['email']; ?>">
                </div>
            </div>
            <div class="form-group">
                <label>Subject</label>
                <input name="subject" type="text" class="form-control" value="<?php echo $res[0]['subject']; ?>">
            </div>
                <div class=" form-group"> 
                    <label>Answer:</label>
                    <textarea name="message" class="form-control"></textarea>
                </div>
                <div class=" form-group">
                    <button type="submit" class="btn btn-primary btn-block">
                        Send
                    </button>
                </div>		
            </form>
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>