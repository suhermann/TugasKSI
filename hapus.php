<?php

include("koneksi.php");

if( isset($_GET['nim']) ){

    // ambil id dari query string
    $id = $_GET['nim'];

    // buat query hapus
    $sql = "DELETE FROM mahasiswa WHERE nim=$id";
    $query = mysqli_query($koneksi, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: admin.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>
