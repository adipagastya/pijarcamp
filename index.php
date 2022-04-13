<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <h1>CRUD</h1>
    <h4>
        <a href="form_tambah.php">TAMBAH DATA</a>
    </h4>
    <table style="border: 2px;">
        <tr>
            <td>No.</td>
            <td>Nama</td>
            <td>Keterangan</td>
            <td>Harga</td>
            <td>Jumlah</td>
            <td>Aksi</td>
        </tr>
        <tr>
        <?php
            $query = mysqli_query($koneksi, "SELECT * FROM produk");
            if ($query == false) {
                die("Error: " . mysqli_error($koneksi));
            }
            $i = 1;

            while ($data = mysqli_fetch_array($query)) {
                echo "
            <td>$i.</td>
            <td>$data[nama_produk]</td>
            <td>$data[keterangan]</td>
            <td>$data[harga]</td>
            <td>$data[jumlah]</td>
            <td>" ?>
            <a href='form_ubah.php?id=<?= $data["id"] ?>'>Ubah</a> 
            <a href='aksi_hapus.php?id=<?= $data["id"] ?>' onClick='return confirm("Anda yakin ingin menghapus data?")'>Hapus</a> 
            <?= "
            </td>
            "; 
            $i++;
             } ?>
        </tr>
    </table>
</body>
</html>