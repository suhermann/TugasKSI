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
    <h4>Selamat datang, Admin! anda telah login.</h4>
    <a href="logout.php">Log out</a><br><br>
    <h2>Daftar Mahasiswa</h2>
    <br>
    <div class="tambah">
        <p><a href="form-tambah.php">Tambah Data</a></p>
    </div>
    <br>
    <table id="mahasiswa" border="1">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Jurusan</th>
            <th>Action</th>
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
    <td>
        <a href='form-edit.php?nim=".$baris['nim']."'>Edit</a> |
        <a href='hapus.php?nim=".$baris['nim']."'>Hapus</a>
    </td>
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