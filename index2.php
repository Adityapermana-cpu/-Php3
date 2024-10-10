<?php
$sconn = mysqli_connect("localhost","root","","phpdasar");

// ambildata dari maha_siswa /query data maha_siswa 
$result = mysqli_query($conn,"SELECT * FROM maha_siswa");

// ambil data maha_siswa dari objek result
// ada empat cara teman kalian ambil baju dari lemarinya
// 1. mysqli_fetch_row() mengembalikan array numerik
// 2. mysqli_fetch_assoc() mengembalikan array assoc numerik
// 3. mysqli_fetch_array() 
// 4. mysqli_fetch_object() 

// while ($mhs = mysqli_fetch_assoc($result) ) {
//      var_dump($mhs);
//}