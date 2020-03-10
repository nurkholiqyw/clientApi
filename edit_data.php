<?php
    //memasukan file config
    include("config/config.php");
 
    //ambil parameter ID dar URL
    $id=$_GET['id'];
 
    //url untuk lihat data berdasarkan id yang dipilih
    $url="http://localhost/rest-api/tampil_data.php?id=".$id;
 
    //menyimpan hasil dalam variabel
    $data=http_request_get($url);
 
    //konversi data json ke array
    $hasil=json_decode($data,true);
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Ubah Data dengan cURL</title>
</head>
<body>
    <h1>Ubah Data Pengurus</h1>
 
    <form method="POST" action="ubah_data.php">
 
<?php foreach ($hasil as $row) { ?>
 
    <table>
        <tr>
            <td>ID</td>
            <td><input type="text" name="id" value="<?php echo $row['id']; ?>"></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="nama" value="<?php echo $row['nama']; ?>"></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><textarea name="alamat"><?php echo $row['alamat']; ?></textarea></td>
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
            <td><input type="number" name="gaji" value="<?php echo $row['gaji']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button type="submit" name="ubah">UBAH</button>
                <button type="reset">BATAL</button>
            </td>
        </tr>
    </table>
 
<?php } ?>
 
</form>
 
</body>
</html>