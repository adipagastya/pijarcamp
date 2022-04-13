<?php

include "koneksi.php";

$id     = $_POST['id'];
$nama  = $_POST['nama'];
$hgr   = $_POST['harga'];
$jml   = $_POST['jml'];
$ket   = $_POST['ket'];

$query  = "UPDATE produk SET nama_produk='$nama', keterangan='$ket', harga='$hgr', jumlah='$jml' WHERE id='$id'";
$sql    = mysqli_query($koneksi, $query);

if ($sql) {
    echo '
        <script>
            window.location = "index.php";
        </script>
    ';
} else {
    echo '
        Maaf, terjadi kesalahan saat mengubah data.
    ';
}
