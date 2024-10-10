<?php

// tombol cari ditekan
if( isset($_POST ["cari"]) ) {
    $mahasiswa - cari ($_POST["keywoard"]);
}
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Halaman Admin</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<a href="tambah.php">Tambah data mahasiswa</a>
<br><br>

<form action="" method="post">
    <input type="text" name="keywoard" size="40" autofocus 
    placeholder="massukan keywoard pencarian,," autocomplete="off">
    <button type="submit" name="cari">Cari!</button>


</form>

<table border="1"cellpadding="10" cellspacing="0">
 
<tr>
    <th>No</th>
    <th>Aksi</th>
    <th>Gambar</th>
    <th>NRP</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Jurusan</th>
</tr>
<tr>
    <td>1</td>
    <td>
        <a href="">ubah</a>
        <a href="">hapus</a>
    </td>
    <td><img src="img/poto.jpg" width="70"></td>
    <td>10985247</td>
    <td>siti jubaedah</td>
    <td>sitijubaedah@gmail.com</td>
    <td>sti</td>
</tr>
<tr>
<tr>
    <td>2</td>
    <td>
        <a href="">ubah</a>
        <a href="">hapus</a>
    </td>
    <td><img src="img/poto3.jpg" width="70"></td>
    <td>12537480</td>
    <td>siti marpuah</td>
    <td>sitimarpuah@gmail.com</td>
    <td>sti</td>
</tr>
<tr>
    <td>3</td>
    <td>
        <a href="">ubah</a>
        <a href="">hapus</a>
    </td>
    <td><img src="img/poto5.jpg" width="70"></td>
    <td>04072008</td>
    <td>siti ropeah</td>
    <td>sitiropeah@gmail.com</td>
    <td>Lk</td>
</tr>

<tr>
    <td>4</td>
    <td>
        <a href="">ubah</a>
        <a href="">hapus</a>
    </td>
    <td><img src="img/poto2.jpg" width="70"></td>
    <td>06062008</td>
    <td>siti masnuah</td>
    <td>sitimasnuah@gmail.com</td>
    <td>tbo</td>
</tr>

<tr>
    <td>5</td>
    <td>
        <a href="">ubah</a>
        <a href="">hapus</a>
    </td>
    <td><img src="img/poto1.jpg" width="70"></td>
    <td>27784678</td>
    <td>siti wartiah</td>
    <td>sitiwartiah@gmail.com</td>
    <td>dkv</td>
</tr>

</table>
</body>
</html>
