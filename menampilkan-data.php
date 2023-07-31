<?php
 
    include_once("koneksi.php");
 
    echo "<table border='1'>";
      
        echo "<tr>
                <th>Nama Lengkap</th>
                <th>Jenis Kelamin</th>
             </tr>";
  
        $query = mysqli_query($koneksi, "SELECT * FROM karyawan");
          
        while($row=mysqli_fetch_assoc($query))
        {
            echo "<tr>
                    <td>$row[nama_lengkap]</td>
                    <td>$row[jenis_kelamin]</td>
                 </tr>";
        }
      
    echo "</table>";
