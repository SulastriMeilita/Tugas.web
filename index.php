<?php

 $nama=$_POST [ "nama" ] ;
 $jk=$_POST [ "gender" ] ;
 $alamat= $_POST [ "alamat" ];
 $hobby =$_POST [ "hobby" ];

 include_once ("connection.php");
 $result= mysqli_query ($connect. "INSERT INTO tabel_siswa(nama,jk,alamat,hobby) VALUES ('$nama','$jk','$alamat','$hobby');
 if($result){
      echo"<script>alert('Data successfully');window.location.href='index.php';</script>";
     }

?>
