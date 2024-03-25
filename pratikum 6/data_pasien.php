<?php
// sisipkan file koneksi
require_once('koneksi.php');

// buat query untuk mengambil semua data
$quire = "SELECT * FROM pasien";

//eksekusi query dengan PDO
 $spasiens= $dbh ->query($quire);
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list Data Pasien</title>
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <h1>List Data Pasien </h1>
<table class="table">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>L/P</th>
        <th>Aksi</th>
    </tr>
    <?php 
    $no = 0;
    foreach($spasiens as $spasien): ?>
        <tr>
            <td><?= $no = $no + 1 ?></td>
            <td><?= $spasien['nama']?></td>
            <td><?= $spasien['email']?></td>
            <td><?= $spasien['tmp_lahir']?></td>
            <td><?= $spasien['tgl_lahir']?></td>
            <td><?= $spasien['gender']?></td>
            <td>
                <a href="#" class="btn btn-primary">Edit</a>
                <a href="#" class="btn btn-danger">Hapus</a>
        </tr>
    
    <?php endforeach; ?>
</table>
        

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>      
</body>
</html>