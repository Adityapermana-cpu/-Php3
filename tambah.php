<?php
//koneksi ke DBMS
$conn = mysqli_connect("localhost", "root", "", "phpdasar1");

// cek apakah tombol submit ditekan atau belum
if(isset ($_POST["submit"]) ) {
// ambil data dari tiap elemen dalam form
    $nrp = $_POST["nrp"];
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $jurusan = $_POST["jurusan"];
    $gambar= $_POST["gambar"];

// query insert data
$query = "INSERT INTO mahasiswa
            VALUES
            ('', '$nrp', '$nama', '$email', '$jurusan', '$gambar')";
 mysqli_query($conn, "$query");

       if( mysqli_affected_rows($conn) > 0 )
       echo "berhasil";
}
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>tambah data siswa</title>
</head>
<body>
    <h1>tambah data mahasiswa</h1>

    <form action="" method="post">
        <ul>
        <li>
                <label for="nrp">NRP : </label>
                <input type="text" name="nrp" id="nrp">
        </li>
        <li>
                <label for="nrp">Nama : </label>
                <input type="text" name="nama" id="nama">
        </li>
        <li>
                <label for="nrp">Email: </label>
                <input type="text" name="email" id="email">
        </li>
        <li>
                <label for="nrp">Jurusan: </label>
                <input type="text" name="jurusan" id="jurusan">
        </li>
        <li>
                <label for="nrp">Gambar : </label>
                <input type="text" name="gambar" id="gambar">
      </li>
      <li>
        <button type="submit" name="submit">Tambah Data!</button>


    </ul>
</form>
    
</body>
</html>