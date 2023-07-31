<?php
    include_once("koneksi.php");
  
    $query = mysqli_query(
        $koneksi, 
        "UPDATE karyawan SET nama_lengkap='Yoga', jenis_kelamin='Wanita' WHERE id='1'"
    );
      
    if(mysqli_affected_rows($koneksi) > 0)
    {
        echo "Data berhasil di rubah, silahkan lihat database perusahaan dan lihat table karyawan dan lihat id 1";
    }
    else
    {
        echo "Data gagal di ubah";
    }
