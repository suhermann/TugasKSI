<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
</head>

<body>
    <?php
    session_start();
    if($_SESSION['status']!="login"){
        header("location:index.php");
    }
    ?>

    <header>
        <h3>Tambah Data</h3>
    </header>

    <form action="proses-tambah.php" method="POST">

        <fieldset>

        <p>
            <label for="nim">NIM: </label>
            <input type="number" name="nim" placeholder="nim" />
        </p>

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama" />
        </p>

        <p>
            <label for="kelamin">Jenis Kelamin: </label>
            <label><input type="radio" name="kelamin" value="L"> Laki-laki</label>
            <label><input type="radio" name="kelamin" value="P"> Perempuan</label>
        </p>
        <p>
            <label for="jurusan">Jurusan: </label>
            <select name="jurusan">
                <option>TI</option>
                <option>SI</option>
                <option>MI</option>
                <option>TK</option>
                <option>KA</option>
            </select>
        </p>
        <p>
            <input type="submit" value="Tambah" name="tambah" />
        </p>

        </fieldset>

    </form>

    </body>
</html>