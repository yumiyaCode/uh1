<?php 
session_start();
if(isset($_SESSION['login'])){
    //menampilkan
}else{
    //sesion belum ada
    
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css"/>
    <title>Document</title>
</head>
<body>
<?php
   if($_POST['cost']){
                        
     $bayar=$_POST['bayar'];
     $hasil=$_POST['total'];
     $bayar1=$bayar-$hasil;
?>
    
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Diki Maulana</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="menu.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="uh1.php">produk</a>
      </li>
      
     
      
    </ul>
    <form class="form-inline my-2 my-lg-0" action="logout.php" method="post">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="send">Logout</button>
    </form>
  </div>
</nav>
</header>
    <div class="container">
        <div class="row justify-content-center" style="padding:20px;">
            <div class="col-md-8">
                <div class="card border-primary ">
                    <div class="card-header">Detail Pembelian</div>
                    <div class="card-body">
                     <input type="hidden"  name ="total" value="<?php echo "$total"; ?>">
                         <?php
                         
                         echo"Total Harga:Rp.".$hasil."<br>";
                         echo"Total Pembayaran:Rp.".$bayar;
                            if($bayar >= $hasil ){ ?>
                             <div class="alert alert-success" role="alert">
                              Terima Kasih Ini Kembaliannya :Rp.<?php echo $bayar1 ?>
                               </div>

                            <label for="">Ingin beli lagi?</label>
                                <?php } 
                                 elseif($bayar < $hasil){?>
                                  <div class="alert alert-danger">
                                   uang kurang <?php echo "$total"; ?></div>
                                    <?php } ?>
                                 
                             <form action="uh1.php" method="post">
                              <input type="submit" class="btn btn-outline-primary btn-block" name="beli" value="ya">
                               </form>     
                        <form action="" method="post">
                        <input type="hidden" value="<?php echo $bayar1 ?>">
                        <input type="submit" class="btn btn-outline-danger mt-1 btn-block" name="u" value="tdk">
                        <?php
                       
                               
                               
                        
                        ?>
                        </form>
                        
                    </div>
                </div>
            </div>
   <?php } ?>

    <script type="text/javascript" src="../assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
</body>
</html>