 <?php
include "koneksi.php";

$register_nik		 = $_POST['nik'];
$register_nama 	 = $_POST['nama'];

$datasql = "SELECT * FROM tbregistrasi where nik='$register_nik' and nama='$register_nama'";
$result = $query->query($datasql);

if ($result->num_rows > 0) {
    // output data of each row
    while($data = $result->fetch_assoc()) {

    	if (!isset($_SESSION)) {
        session_start();
        $_SESSION['nikuser']=$data['nik'];
        $_SESSION['namauser']=$data['nama'];
        $_SESSION['status'] = "login";
    	}
      echo "<script>alert('Anda berhasil login sebagai : $data[nama]'); window.location = 'halaman.php'</script>";	} 
    } else {
      echo "<script>alert('Login gagal!, silahkan diulangi!'); window.location = 'index.php'</script>";
    }
    $query->close();
?>