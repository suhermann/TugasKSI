<?php

include("koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['tambah'])){

    // ambil data dari formulir
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $kelamin = $_POST['kelamin'];
    $jurusan = $_POST['jurusan'];

    // buat query
    $sql = "INSERT INTO mahasiswa (nim, nama, kelamin, jurusan ) VALUE ('$nim','$nama', '$kelamin', '$jurusan')";
    $query = mysqli_query($koneksi, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: admin.php?status=sukses');
        session_destroy();
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: admin.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>