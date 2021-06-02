<?php
include 'koneksi.php';
$namaTimlama=$_GET['namaTim'];
$namaTim=$_POST['namaTim'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$tgl=$_POST['tgl'];
$jam=$_POST['jam'];



$query=mysqli_query($koneksi, "UPDATE user SET namaTim='$namaTim', nama='$nama', alamat='$alamat',tgl='$tgl', jam='$jam' 
WHERE namaTim='$namaTimlama' ") 
or die (mysqli_error($koneksi));


if($query){
    header("Location: jadwal.php");
} else{
    echo "Gagal";
}
?>