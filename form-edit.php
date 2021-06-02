<?php

include("koneksi.php");

// kalau tidak ada id di query string
if( !isset($_GET['nim']) ){
    header('Location: list-siswa.php');
}

//ambil id dari query string
$id = $_GET['nim'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM mahasiswa WHERE nim=$id";
$query = mysqli_query($koneksi, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title> Edit Data</title>
</head>

<body>
    <header>
        <h3>Edit Data</h3>
    </header>

    <form action="proses-edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="nim" value="<?php echo $siswa['nim'] ?>" />

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $siswa['nama'] ?>" />
        </p>
        <p>
            <label for="kelamin">Jenis Kelamin: </label>
            <?php $jk = $siswa['kelamin']; ?>
            <label><input type="radio" name="kelamin" value="L" <?php echo ($jk == 'L') ? "checked": "" ?>> Laki-laki</label>
            <label><input type="radio" name="kelamin" value="P" <?php echo ($jk == 'P') ? "checked": "" ?>> Perempuan</label>
        </p>
        <p>
            <label for="jurusan">Jurusan: </label>
            <?php $jurusan = $siswa['jurusan']; ?>
            <select name="jurusan">
                <option <?php echo ($jurusan == 'TI') ? "selected": "" ?>>TI</option>
                <option <?php echo ($jurusan == 'SI') ? "selected": "" ?>>SI</option>
                <option <?php echo ($jurusan == 'MI') ? "selected": "" ?>>MI</option>
                <option <?php echo ($jurusan == 'TK') ? "selected": "" ?>>TK</option>
                <option <?php echo ($jurusan == 'KA') ? "selected": "" ?>>KA</option>
            </select>
        </p>

        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>
