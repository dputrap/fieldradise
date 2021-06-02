<?php
include 'koneksi.php';
$namaTim=$_GET['namaTim'];

$query=mysqli_query($koneksi, "DELETE FROM user WHERE namaTim='$namaTim'")
or die(mysqli_error($koneksi));

if($query){
    header("Location: jadwal.php");
}else{
    echo "Gagal";
}
?>