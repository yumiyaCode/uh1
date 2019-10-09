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
    if (isset($_POST['send'])) {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $jk = $_POST['jk'];
        $tgl = $_POST['tgl'];
        $jml = $_POST['jml'];
        
    }
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
                        <?php 
                    
                            for ($i=0; $i < $jml; $i++) { 
                                
                            
                        ?>
                        <form action="uh3.php" method="post">
                        <div class="form-group">
                            <label for="">Nama Barang</label>
                            <input type="text" name="nb[]" class="form-control" id="" required>
                        </div>
                        <div class="form-group">
                          <label>Kode Barang</label>
                          <input type="text" name="kb[]" class="form-control" id="" required>
                        </div>
                        <div class="form-group">
                          <label>Jenis Barang</label>
                          <select class="custom-select custom-select-md mb-3" name="jenis[]" required>
                                <option value="Beras" selected>Beras</option>
                                <option value="Telur">Telur</option>
                                <option value="Terigu">Terigu</option>
                                <option value="Minyak">Minyak</option>
                                <option value="Gula">Gula</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Harga Satuan</label>
                            <input type="number" name="hrg[]" class="form-control" id="" required>
                        </div>
                        <div class="form-group">
                            <label for="">Jumlah Barang</label>
                            <input type="number" name="jb[]" class="form-control" id="" required><br>
                            </div>
                            <hr class="bg-primary">
                            <?php } ?>
                        <div class="form-group">
                            <input type="submit" value="Simpan" name ="send" class=" btn btn-outline-info btn-block">
                        </div>
                        <input type="hidden" name="nama" value="<?php echo $nama; ?>">
                        <input type="hidden" name="alamat" value="<?php echo $alamat; ?>">
                        <input type="hidden" name="jk" value="<?php echo $jk; ?>">
                        <input type="hidden" name="tgl" value="<?php echo $tgl; ?>">
                        <input type="hidden" name="jml" value="<?php echo $jml; ?>">
                        </form>
                    </div>
                </div>
            </div>

    <script type="text/javascript" src="../assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
</body>
</html>