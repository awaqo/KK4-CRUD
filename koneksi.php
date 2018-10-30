<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'php-api';
// $conn = new mysqli($servername,$username,$password,$database);
// if($conn->connect_error){
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connection Succes";

$koneksi = mysqli_connect($servername, $username, $password, $database);
 
if(mysqli_connect_errno()){
	echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
}
 ?>