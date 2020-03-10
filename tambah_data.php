<?php
    include("config/config.php");
 
    //jika tombol simpan di klik
    if(isset($_POST['simpan'])) {
 
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
 
        //url untuk tambah data
        $url="http://localhost/rest-api/tambah_data.php";
 
        //menyimpan hasil dalam variabel
        $hasil=http_request_post($url,$data);
        //memunculkan pesan 
        var_dump($hasil);
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data dengan cURL</title>
</head>
<body>
    <h1>Input Data Pengurus</h1>
<form method="POST">
    <table>
        <tr>
            <td>ID</td>
            <td><input type="text" name="id"></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><textarea name="alamat"></textarea></td>
        </tr>
        <tr>
            <td>GENDER</td>
            <td>
            <select name="gender">
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
            </td>
        </tr>
        <tr>
            <td>GAJI</td>
            <td><input type="number" name="gaji"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button type="submit" name="simpan">SIMPAN</button>
                <button type="reset">BATAL</button>
            </td>
        </tr>
    </table>
</form>
</body>
</html>-