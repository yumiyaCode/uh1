<?php
session_start();
if(isset($_SESSION['login'])){
    unset($_SESSION);
    session_destroy();

  header("location:login3.php");
}
else{
    ?>
    <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">

    <title></title>
  </head>
  <body style="background-color:skyblue;">

<div class="container-fluid" style="padding:100px;">
 <div class="row">
  <div class="col-md-4 m-auto">
    <div class="card border-danger">
      <div class="card-body">
    <h1><center>404 NOT FOUND</center></h1>
     <img class="card-img-top" src="/assets/img/GIF_8215787.gif" alt="Card image">
     <div class="col mt-3">
     <a href="login3.php"><button class="btn-outline-primary btn-block">Login Dulu!!</button></a>
    </div>
    </div>

      </form>
      </div>
        </div>
          </div>
          </div>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
   </body>
</html>
<?php    
}

?>
