<?php

include("koneksi.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    $getnim = $_POST['nim'];
    $getnama = $_POST['nama'];
    $getkelamin =$_POST['kelamin'];
    $getjurusan = $_POST['jurusan'];

    $sql = "UPDATE mahasiswa SET nama='$getnama', kelamin='$getkelamin', jurusan='$getjurusan' WHERE nim='$getnim'";
    $query = mysqli_query($koneksi, $sql);

    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: admin.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>
