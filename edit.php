<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Siswa</title>
</head>
<body>
<?php 
    include 'Lib/library.php';
    $nis = $_GET['nis'];

    // Periksa apakah $nis kosong
    if (empty($nis)) {
        header('location: index.php');
        exit(); // Hentikan eksekusi skrip setelah melakukan redirect
    }

    $sql = "SELECT * FROM siswa WHERE nis = '$nis'";
    $query = $mysqli->query($sql);
    $siswa = $query->fetch_array();

    // Periksa apakah data siswa ditemukan
    if(empty($siswa)) {
        header('location: index.php');
        exit(); // Hentikan eksekusi skrip setelah melakukan redirect
    }

    include 'View/v_tambah.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nis = $_POST['nis'];
        $nama_lengkap = $_POST['nama_lengkap'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $kelas = $_POST['kelas'];
        $jurusan = $_POST['jurusan'];
        $alamat = $_POST['alamat'];
        $golongan_darah = $_POST['golongan_darah'];
        $nama_ibu = $_POST['nama_ibu'];
    
        // Periksa apakah file foto diupload
        if ($_FILES['foto']['error'] === UPLOAD_ERR_OK) {
            $foto_name = $_FILES['foto']['name'];
            $foto_tmp = $_FILES['foto']['tmp_name'];
            move_uploaded_file($foto_tmp, "media/Images/$foto_name");
    
            $sql = "UPDATE siswa SET
                nama_lengkap = '$nama_lengkap',
                jenis_kelamin = '$jenis_kelamin',
                kelas = '$kelas',
                jurusan = '$jurusan',
                alamat = '$alamat',
                golongan_darah = '$golongan_darah',
                nama_ibu = '$nama_ibu',
                file = '$foto_name'
                WHERE nis = '$nis'";
        } else {
            // Jika tidak ada foto diupload, hanya update data siswa
            $sql = "UPDATE siswa SET
                nama_lengkap = '$nama_lengkap',
                jenis_kelamin = '$jenis_kelamin',
                kelas = '$kelas',
                jurusan = '$jurusan',
                alamat = '$alamat',
                golongan_darah = '$golongan_darah',
                nama_ibu = '$nama_ibu'
                WHERE nis = '$nis'";
        }
    
        $mysqli->query($sql) or die($mysqli->error);
        header('location: index.php');
        exit(); 
    }
?>

</body>
</html>
