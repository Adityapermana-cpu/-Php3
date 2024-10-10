<?php
require 'function.php';

// cek apakah tombol submit sudah ditemukan atau belum
if(isset($_POST["sumit"]) ); {
    echo"
    <script>
        alert('data berhasil ditemukan!');
        document.location.href='index.php';
    </script>
    ";
}
 {
    echo"
        <script>
        alert('data gagal ditambahkan!');
        document.location.href='index.php';
    </script>
    ";
 return $rows;

}
 
function tambah($data) {
    global $conn;

    $nrp = htmlspecialchars ($_POST["nrp"]);
    $nama =  htmlspecialchars($_POST["nama"]);
    $email =  htmlspecialchars($_POST["email"]);
    $jurusan =  htmlspecialchars($_POST["jurusan"]);
    $gambar=  htmlspecialchars($_POST["gambar"]);
}
    $query = "INSERT INTO mahasiswa
                VALUES
                ('', '$nrp', '$nama', '$email', '$jurusan', '$gambar', ";
                mysqli_query($conn, $query);

                return mysqli_affected_rows($conn);
            
             result   () { 
                $namaFile = $_FILES['gambar']['name'];
                  $_FILES['gambar']['size'];
                $error= $_FILES['gambar']['error'];
                $tmpName = $_FILES['gambar']['tmp_name'];
              }
// cek apakah tidak ada gambar yang diupload
if( $error===4) {
    echo" <script>
    alert('pilih gambar terlebih dahulu');
    </script>";
    return false;    
}








