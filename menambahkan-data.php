<?php

include_once("koneksi.php");

$query = mysqli_query(
    $koneksi,
    "INSERT INTO karyawan (nama_lengkap, jenis_kelamin) VALUES ('Rudi','Pria')"
);

if (mysqli_affected_rows($koneksi) > 0) {
    echo "Data berhasil di masukan, silahkan lihat database perusahaan dan lihat table karyawan, disana kamu akan melihat nama Rudi dengan jenis kelamin Pria";
} else {
    echo "Data gagal di masukan";
}
