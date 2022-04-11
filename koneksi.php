<?php 
$query = mysqli_connect("localhost","root","","ukkperjalanan");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>