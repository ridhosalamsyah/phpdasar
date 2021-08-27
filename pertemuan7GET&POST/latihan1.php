<?php

//VIDEO SAMPAI DI MENIT 18:31
// // Variable Scope/lingkup variave
// $x = 10;

// function tampilx() {
//     global $x;
//     echo $x;
// }

// tampilx();

//SUPERGLOBALS
// variable global milik php
//merupakan Array Associative
// echo $_SERVER["SERVER_NAME"];

// $_GET
$mahasiswa= [
    [
        "nama"=>"Ridho S Alamsyah",
        "nrp" =>"123123",
        "email"=>"ridhosalamsyah22@gmail.com",
        "jurusan"=>"Backend",
        "gambar" => "gambar.png"

    ],
    [
        "nama"=>"Dani",
        "nrp" =>"321321",
        "email"=>"ridhodrach@gmail.com",
        "jurusan"=>"Mobile",
        "gambar" => "gambar1.png"
    ]
];




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
    
<ul>
<?php foreach ($mahasiswa as $mhs) {?>  
    <li>
        <a href="latihan2.php?nama=<?= $mhs['nama'];?>
        &nrp=<?= $mhs['nrp']?>
        &email=<?= $mhs['email']?>
        &jurusan=<?= $mhs['jurusan']?>
        &gambar=<?= $mhs['gambar']?>
        ">
        <?= $mhs['nama']?></a>
    </li>
<?php }?>
</ul>
    
</body>
</html>
