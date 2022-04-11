 <?php
include 'koneksi.php';

$id_catatan = $_POST['idcatatan'];
$nik = $_POST['nik'];
$tgl = $_POST['tgl'];
$instansi_catatan = $_POST['instansi'];
$lokasi_catatan = $_POST['lokasi'];
$suhu_catatan = $_POST['suhu'];

mysqli_query($query,"INSERT INTO tbcatatan values('$id_catatan','$nik','$tgl','$instansi_catatan','$lokasi_catatan','$suhu_catatan')");

$format = "\n$id_catatan|nik|$tgl|$instansi_catatan|$lokasi_catatan|$suhu_catatan";
$file = fopen('catatan.txt','a');
//buka file
fwrite($file,$format);
//tutup file
fclose($file);
header("location:catatan.php?pesan=berhasil_simpan");
?>