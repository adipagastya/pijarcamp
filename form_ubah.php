<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $id     = $_GET['id'];
    $sql    = mysqli_query($koneksi, "SELECT * FROM produk WHERE id='$id'");
    while ($data = mysqli_fetch_array($sql)) {
    ?>
    <form action="aksi_ubah.php" method="post">
        <input name="id" type="hidden" value="<?= $data['id']; ?>" />
        <input type="text" name="nama" placeholder="Nama Produk" value="<?= $data['nama_produk'] ?>">
        <input type="number" name="harga" placeholder="Harga" value="<?= $data['harga'] ?>">
        <input type="number" name="jml" placeholder="Jumlah" value="<?= $data['jumlah'] ?>">
        <textarea name="ket" id="" cols="30" rows="10" placeholder="Keterangan"><?= $data['keterangan'] ?></textarea>
        <button type="submit">UBAH</button>
        <a href="index.php">BATAL</a>
    </form>
    <?php } ?>
</body>
</html>