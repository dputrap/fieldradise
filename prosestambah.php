<?php
include 'koneksi.php';
$namaTim=$_POST['namaTim'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$tgl=$_POST['tgl'];
$jam=$_POST['jam'];

$query=mysqli_query($koneksi, "INSERT INTO user (namaTim,nama,alamat,tgl,jam) 
VALUES('$namaTim','$nama','$alamat','$tgl','$jam')")
or die(mysqli_error($koneksi));

if ($query){
    header("Location: tambah.php");
}
else{
    echo "Gagal";
}

?> 