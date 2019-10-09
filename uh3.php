<?php 
session_start();
if(isset($_SESSION['login'])){
    //menampilkan
}else{
    //sesion belum ada
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
        if (isset($_POST['send'])) {
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $jk = $_POST['jk'];
            $tgl = $_POST['tgl'];
            $jml = $_POST['jml'];
            $nb = $_POST['nb'];
            $kb = $_POST['kb'];
            $jenis = $_POST['jenis'];
            $hrg = $_POST['hrg'];
            $jb = $_POST['jb'];
        }
    ?>
    <header>
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
        <div class="row justify-content-lg-center" style="padding:20px;">
            <div class="col-md-12">
    <div class="card border-primary mb-3 align-content-center">
        <div class="card-header">Invoice Pembelian Buku</div><br>
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <tr>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th>Jumlah</th>
                            <th>Tanggal Pembelian</th>
                        </tr>
                        <tr>
                            <td><?php echo $nama; ?></td>
                            <td><?php echo $alamat; ?></td>
                            <td><?php echo $jk; ?></td>
                            <td><?php echo $jml; ?></td>
                            <td><?php echo $tgl; ?></td>
                        </tr>
                        
                    </table><hr>
                    <table class="table table-hover">
                    <center><h5>Daftar Barang Yang Di Beli</h5></center>
                        <tr>
                            <th>Nomor</th>
                            <th>Nama Barang</th>
                            <th>Kode Barang</th>
                            <th>Jenis Barang</th>
                            <th>Harga Satuan</th>
                            <th>Jumlah Barang</th>
                        </tr>
                        <?php 
                        foreach($kb as $i => $b) { 
                            # code...
                            
                        ?>
                        <tr>
                            <td><?php echo $i+1; ?></td>
                            <td><?php echo $nb[$i]; ?></td>
                            <td><?php echo $kb[$i]; ?></td>
                            <td><?php echo $jenis[$i]; ?></td>
                            <td><?php echo $hrg[$i]; ?></td>
                            <td><?php echo $jb[$i]; ?></td>
                            <?php $all1= array_sum($hrg)?>
                            <?php $all2= array_sum($jb)?>
                            <?php $all3=$all1*$all2; ?>
                         

                                    </tr>
                                <?php
                                }

                                if ($all3 > 500000) {
                                    $diskon = $all3 * 0.2;
                                    /* var_dump($diskon); */
                                    $desc = 20;
                                } else if ($all3 > 250000) {
                                    $diskon = $all3 * 0.1;
                                    $desc = 10;
                                    /* var_dump($diskon); */
                                } else if ($all3 >150000 ) {
                                    $diskon = $all3 * 0.05;
                                    $desc = 5;
                                    /* var_dump($diskon); */
                                 }else {
                                    $diskon = 0;
                                    $desc = 0;
                                    /* var_dump($diskon); */
                                }
                                $total = $all3 - $diskon;
                                ?>
</tr>
                                <tr>
                                    <td colspan="6" align="center"><b>Total Pembayaran</b></td>
                                </tr>
                                <tr>
                                    <th>Sub Total</th>
                                    <td colspan="5" align="right">Rp. <?php echo number_format($all3, 0, ',', '.') ?></td>
                                </tr>
                                <tr>
                                    <th>Diskon (<?php echo "$desc%"; ?>)</th>
                                    <td colspan="5" align="right">Rp. <?php echo number_format($diskon, 0, ',', '.') ?></td>
                                </tr>
                                <tr>
                                    <th>Total Pembayaran</th>
                                    <td colspan="5" align="right">Rp. <?php echo number_format($total, 0, ',', '.') ?></td>
                                    
                                </tr>
                                <tr>
                                 </table>
                               <form action="uh4.php" method="post">
                              <div class="form-group">
                             <label for="">Bayar</label>
                            <input type="hidden"  name ="total" value="<?php echo "$total"; ?>">
                            <input type="number" class="form-control" name="bayar" required min="<?php echo "$total"; ?>">
                            <input type="submit" value="bayar" class="btn btn-outline-primary btn-block" name="cost">
                            </form>
                           
                           
                        </div>
                </div>
            </div>           
        </div>
    </div>
    </div>
    </div>
    </div>

    <script type="text/javascript" src="../assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
</body>
</html>