<?php

$koneksi = mysqli_connect("localhost", "root", "", "pijarcamp");

if (mysqli_connect_error()) {
    printf("Gagal terhubung dengan database: " . mysqli_connect_error());
    exit();
}
