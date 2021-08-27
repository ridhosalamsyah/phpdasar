<?php
//Date
// Untuk menampilkan tanggal dengan format tertentu
    // echo date("l, d-M-Y");

//Time
//UNIX Timestamp / EPOCH time
//detik yang sudah berlalu sejak 1 januari 1970 
// echo time();

// echo date("l d M Y", time()-60*60*24*100);
//mktime
// membuat sendiri detik
// mktime (0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l d M Y", mktime(0,0,0,8,25,1985));


// echo "<br>"; 
// echo date("l d M Y", mktime(0,0,0,5,8,1999));

//strtotime

// echo date("l",strtotime("25 aug 1985"));

// string----
// strlen()
// strcmp()
// explode ()
// htmlspecialchars()

// utiliy
// var_dump()
// isset()
// empty()
// die()
// sleep()


?>