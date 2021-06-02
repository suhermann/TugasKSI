<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="form-admin">
    <?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:index.php");
	}
	?>

    <br>
    <h4>Selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.</h4>
    <a href="logout.php">Log out</a><br><br>
    <br>
    <h2>Daftar Mahasiswa</h2>
    <br>
    <br>
    <table id="mahasiswa" border="1">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Jurusan</th>
        </tr>


    <?php

    include 'koneksi.php';

    $sql = "select * from mahasiswa";
    $hasil = mysqli_query($koneksi, $sql);
    if (mysqli_num_rows($hasil) > 0) {

    // output data setiap baris
    while($baris = mysqli_fetch_assoc($hasil)) {
    $nim = $baris['nim'];
    $nama = $baris['nama'];
    $kelamin = $baris['kelamin'];
    $jurusan = $baris['jurusan'];
    echo "
    <tr>
        <td>$nim</td>
        <td>$nama</td>
        <td>$kelamin</td>
        <td>$jurusan</td>
    </tr>
    ";

    }
    } else {
    echo "Tidak ada record";
    }
    mysqli_close($koneksi);
    ?>
    </table>
</body>
</html>