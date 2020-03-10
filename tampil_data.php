<?php
    //memasukan file config
    include("config/config.php");
 
    //url untuk lihat data
    $url="http://localhost/rest-api/tampil_data.php";
 
    //menyimpan hasil dalam variabel
    $data=http_request_get($url);
 
    //konversi data json ke array
    $hasil=json_decode($data,true);
 
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Tampil Data dengan cURL</title>
</head>
<body>
    <h1>Data Pengurus dengan RestAPI</h1>
    <table border="2">



        <tr>
            <th>ID</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>GENDER</th>
            <th>GAJI</th>
        </tr>
        <?php foreach($hasil as $row) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nama']; ?></td>
            <td><?php echo $row['alamat']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['gaji']; ?></td>
            <td>
                <a href="edit_data.php?id=<?php echo $row['id']; ?>">Edit</a> |
                <a href="hapus_data.php?id=<?php echo $row['id']; ?>">Hapus</a>
            </td>
        </tr>
        <?php }  ?>
    </table>
 
</body>
</html>