<?php
// $mahasiswa = [
//     ["Ridho", "123123", "ridhodrach@gmail.com", 
// "Backend"],
//     ["Dani", "312312", "ridhodrach@gmail.com", 
// "Backend"]
// ];

// Array ASsociative
// definisinya sama seperti arrya numerik, kecuali
// key-nya adalah string yang kita  buat sendiri
$mahasiswa= [
    [
        "nama"=>"Ridho S Alamsyah",
        "nrp" =>"123123",
        "email"=>"ridhosalamsyah22@gmail.com",
        "jurusan"=>"Backend",
        "gambar" => "tugas.png"

    ],
    [
        "nama"=>"Dani",
        "nrp" =>"321321",
        "email"=>"ridhodrach@gmail.com",
        "jurusan"=>"Mobile",
        "gambar" => "tugas-4.2.png"
    ]
];

// echo $mahasiswa[1]["tugas"][1];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach($mahasiswa as $mhs) {?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"];?>" alt="">
            </li>
            <li>Nama : <?= $mhs["nama"];?></li>
            <li>NRP : <?= $mhs["nrp"];?></li>
            <li>Jurusan : <?= $mhs["email"];?></li>
            <li>Email : <?= $mhs["jurusan"];?></li>
        </ul>

    <?php } ?>    
</body>
</html>
