<?php

//koneksi ke database
$conn = mysqli_connect("localhost","root","adminsabar","phpdasar");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }

    return $rows;
}


function tambah($data) {
    global $conn;

    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "INSERT INTO `mahasiswa`  
    VALUES 
    (NULL, '$nama', '$nrp', '$email', '$email', '$gambar') ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}




function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa where id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data){

    global $conn;
    $id = $data["id"];
    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query ="UPDATE mahasiswa SET 
    `nama` = '$nama', 
    `nrp` = '$nrp', 
    `email` = '$email', 
    `jurusan` = '$jurusan', 
    `gambar` = '$gambar' 
    WHERE mahasiswa.`id` = $id "; 
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}



?>