<?php

include "koneksi.php";

$id   = $_GET['id'];

$query  = "DELETE FROM produk WHERE id=$id";
$sql    = mysqli_query($koneksi, $query);

if ($sql) {
    echo '
        <script>
            window.location = "index.php";
        </script>
    ';
} else {
    echo '
        Maaf, terjadi kesalahan saat menghapus data.
    ';
}
