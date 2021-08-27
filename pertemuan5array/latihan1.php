<?php
// array
// variable yang dapat memiliki banyak nilai
// elemen pada array boleh meiliki tipe data yg berbeda
// pasangan antara key dan value
// key-nya adalah  index, yang dimulai dari 0

// membuat arrya 
// cara lama
$hari = array("Senin", "Selasa", "Rabu");
// cara baru
$bulan =["Januari", "Februari","Maret"];
$arr1 = [123,"tulisan", false];

// Menampilkan Array
// var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// // Menampilakan 1 elemen pada array

// echo $arr1[0];
// echo "<br>";
// echo $bulan[1];

// Menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jumat";
echo '<br>';
var_dump($hari);

?>