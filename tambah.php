<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
include 'Lib/library.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $nis = $_POST['nis'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];
    $golongan_darah = $_POST['golongan_darah'];
    $nama_ibu = $_POST['nama_ibu'];
    $no_telp = $_POST['no_telp'];
    $foto = $_FILES['foto'];

    // Periksa apakah ada file yang diunggah
    if(!empty($foto) AND $foto['error'] == 0) {
                $path = './media/images/';
                $fotoname = $_FILES['foto']['name'];
                $upload = move_uploaded_file($foto['tmp_name'], $path . $fotoname);

                if (!$upload){
                    flash('error', "Upload file gagal");
                    header('Location: index.php');
                    exit;
                }
                $file = $fotoname;
            } else {
                $file = '';
            }

    // Pastikan variabel $file di-set dengan benar dalam query SQL
    $sql = "INSERT INTO siswa (nis, nama_lengkap, jenis_kelamin, kelas, jurusan, alamat, golongan_darah, nama_ibu, no_telp, file)
            VALUES ('$nis', '$nama_lengkap', '$jenis_kelamin', '$kelas', '$jurusan', '$alamat', '$golongan_darah', '$nama_ibu', '$no_telp', '$file')";

    $mysqli->query($sql) or die($mysqli->error);
    header('location: index.php');
}
include 'View/v_tambah.php';
?>

</body>
</html>