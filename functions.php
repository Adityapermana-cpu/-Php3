<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar1");

function query($query) {
    global $conn;
    $result = mysqli_query($sconn,$query);
    $rows = [];
    while($rows = mysqli_fetch_assoc($result) ) {
    $rows[] = $rows;
    }
    return $rows;

}
?>