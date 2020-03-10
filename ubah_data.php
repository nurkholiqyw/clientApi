<?php
    include("config/config.php");
 
    //jika tombol ubah di klik
    if(isset($_POST['ubah'])) {
 
        $id=$_POST['id'];
        $nama=$_POST['nama'];
        $alamat=$_POST['alamat'];
        $gender=$_POST['gender'];
        $gaji=$_POST['gaji'];
 
        //membuat data array data yang kirim
        $data=array(
            'id' => $id,
            'nama' => $nama,
            'alamat' => $alamat,
            'gender' => $gender,
            'gaji' => $gaji
        );
 
        //url untuk ubah data
        $url="http://localhost/rest-api/ubah_data.php";
 
        //menyimpan hasil dalam variabel
        $hasil=http_request_post($url,$data);
         
        //memunculkan pesan 
        var_dump($hasil);
    }
?>