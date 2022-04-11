 <?php
include "koneksi.php";

$register_nik = $_POST['nik'];
$register_nama = $_POST['nama'];
$register_username = $_POST['username'];
$register_password = $_POST['password'];

$datasql = "INSERT INTO tbregistrasi (nik,nama,alamat,notelp) VALUES ('$register_nik', '$register_nama', '$register_username','$register_password')";

if (mysqli_query($query, $datasql)) {
	echo "<script>alert('Anda berhasil melakukan registrasi. Silahkan login!!; '); window.location = 'index.php'</script>";	
} else {
	echo "<script>alert('Registrasi Gagal!, Silahkan Ulangi'); window.location = 'index.php'</script>";	
}
?>