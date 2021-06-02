<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>Fieldradise</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e70eae7c8b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">    
    <style>
    body{
        background-color: lightblue;
    }
    h1{
        font-family: Georgia, serif;
    }
    .nav-links1{
    flex: 100;
    }
</style>

</head>
<body>

<!----------Sub Header----------->
<section class="sub-header">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <img src="images/logo.png" style="width:130px; height:50px;">    
     <div class="navbar ms-auto">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">HOME</a>
            </li>
            <li class="nav-item ">
                 <a class="nav-link" href="jadwal.php">JADWAL</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="lokasi.html">LOKASI</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="booking.html">BOOKING</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="promo.html">PROMO</a>
            </li>
        </ul>
        </div>
    </nav>
</section>
<!----------Tambah Data----------->  
    <div class="container">
        <h1>Silahkan Masukkan Data</h1>
        <div>
            <form class="" action="prosestambah.php" method="post">
                <label for="namaTim">Nama Tim</label>
                <input type="text" class="form-control" name="namaTim" value="">

                <label for="nama">Nama Penjamin</label>
                <input type="text" class="form-control" name="nama" value="">

                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" name="alamat" value="">

                <label for="tgl">Tanggal</label>
                <input type="date" class="form-control" name="tgl" value="">

                <label for="jam">Jam</label>
                <input type="text" class="form-control" name="jam" value="">
                
                <br>
                <button class="btn btn-primary" type="submit" name="button">Simpan</button>
               
            </form>
        </div>
    </div>
</body>
</html>