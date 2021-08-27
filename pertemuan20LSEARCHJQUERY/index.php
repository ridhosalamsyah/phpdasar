<?php
session_start();

if(!isset($_SESSION["login"])){
    header("Location: login.php");
}
require 'functions.php';

$mahasiswa= query("SELECT * FROM mahasiswa");

// tombol cari ditekan
if(isset($_POST["cari"]) ){
    $mahasiswa = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Admin</title>
    <style>
        .loader {
            width: 100px;
            position: absolute;
            top: 117px;
            z-index: -1;
            left: 245px;
            display: none;
        }
    </style>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
<a href="logout.php">Logout</a>

<h1>Daftar Mahasiswa</h1>

<a href="tambah.php">Tambah data Mahasiswa</a>
<br><br>

<form action="" method="post">


    <input type="text" name="keyword" size="30" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off" id="keyword">
    <button type="submit" name ="cari" id="tombol-cari">Cari!</button>

    <img src="img/loader.gif" class="loader">


</form>
<div id="container">
<br>
<table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NRP</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>
    <?php $i=1 ;?>
    <?php foreach ($mahasiswa as $row) {     ?>
    <tr>
        <td><?= $i;?></td>
        <td>
            <a href="ubah.php?id=<?= $row["id"]?>">ubah</a> |
            <a href="hapus.php?id=<?= $row["id"]?>" 
            onclick ="return confirm('menghapus data?');"
            >hapus</a> 
        </td>
        <td><img src="img/<?= $row["gambar"]?>" 
        width=50 ></td>
        <td><?= $row["nrp"]?></td>
        <td><?= $row["nama"]?></td>
        <td><?= $row["email"]?></td>
        <td><?= $row["jurusan"]?></td>

    </tr>
    <?php $i++;?>
    <?php }?>

</table>
</div>

</body>
</html>