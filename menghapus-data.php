<?php

    include_once("koneksi.php");
  
    $query = mysqli_query($koneksi, "DELETE FROM karyawan WHERE id='1'");
      
    if(mysqli_affected_rows($koneksi) > 0)
    {
        echo "Data berhasil dihapus, silahkan lihat database perusahaan dan lihat table karyawan, kamu tidak akan melihat lagi id nomor 1";
    }
    else
    {
        echo "Data gagal di hapus";
    }
