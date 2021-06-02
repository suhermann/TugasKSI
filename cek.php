<?php
session_start();

include("koneksi.php");

$username = $_POST['username'];
$password = md5($_POST['password']);

$data = mysqli_query($koneksi,"select * from userakun where username='$username' and password='$password'");
$cek = mysqli_num_rows($data);

if($cek > 0){

	$datas = mysqli_fetch_assoc($data);

	if ($datas['level']=="admin"){
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
		header("location:admin.php");

	}elseif($datas['level']=="mahasiswa"){
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
		header("location:mahasiswa.php");
	}else {
		header("location:index.php?pesan=gagal");
	}

}else{
	header("location:index.php?pesan=gagal");
}




?>