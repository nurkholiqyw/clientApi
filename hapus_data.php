<?php
    //memasukan file config
    include("config/config.php");
 
    //ambil parameter ID dar URL
    $id=$_GET['id'];
 
    //url untuk hapus data
    $url="http://localhost/rest-api/hapus_data.php?id=".$id;
 
    //menyimpan hasil dalam variabel
    $data=http_request_get($url);
 
    //konversi data json ke array
    $hasil=json_decode($data,true);
 
    //memunculkan pesan 
    var_dump($hasil);
 
?>