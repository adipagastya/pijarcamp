<?php

include "koneksi.php";

$nama  = $_POST['nama'];
$hgr   = $_POST['harga'];
$jml   = $_POST['jml'];
$ket   = $_POST['ket'];

$query  = "INSERT INTO produk (nama_produk,keterangan,harga,jumlah) VALUES ('$nama','$ket','$hgr','$jml')";
$sql    = mysqli_query($koneksi, $query);

if ($sql) {
    echo '
        <script>
            window.location = "index.php";
        </script>
    ';
} else {
    echo '
        Maaf, terjadi kesalahan saat menyimpan data.
    ';
}
