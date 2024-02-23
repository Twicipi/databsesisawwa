<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/CSS/main.css">
    <title><?= isset($siswa) ? 'Edit Data Siswa' : 'Tambah Data Siswa' ?></title>
    <style>
        /* Style untuk form */
        form {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 8px;
            margin: 5px 0 15px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="file"] {
            margin-top: 10px;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        /* Style untuk gambar */
        img {
            margin-bottom: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
<?php 
    $action = isset($siswa) ? "edit.php?nis=" . $siswa['nis'] : "tambah.php";
?>

<form action="<?= $action ?>" method="POST" enctype="multipart/form-data">
    <label for="nama">Nama Lengkap:</label><br>
    <input type="text" id="nama" name="nama_lengkap" value="<?= isset($siswa) ? $siswa['nama_lengkap'] : '' ?>"><br>

    <br>

    NIS <input type="number" name="nis" value="<?= isset($siswa) ? $siswa['nis'] : '' ?>">

    Jenis Kelamin:<br>
    <input type="radio" name="jenis_kelamin" value="L" <?= isset($siswa) && $siswa['jenis_kelamin'] == "L" ? 'checked' : '' ?>>
    Laki-Laki<br>
    <input type="radio" name="jenis_kelamin" value="P" <?= isset($siswa) && $siswa['jenis_kelamin'] == "P" ? 'checked' : '' ?>>
    Perempuan<br>
    <br>

    Kelas:<br>
    <select name="kelas">
        <option value="X" <?= isset($siswa) && $siswa['kelas'] == 'X' ? 'selected' : '' ?>>X</option>
        <option value="XI" <?= isset($siswa) && $siswa['kelas'] == 'XI' ? 'selected' : '' ?>>XI</option>
        <option value="XII" <?= isset($siswa) && $siswa['kelas'] == 'XII' ? 'selected' : '' ?>>XII</option>
    </select><br>

    <br>
    Jurusan:<br>
    <input type="text" name="jurusan" value="<?= isset($siswa) ? $siswa['jurusan'] : '' ?>"><br>
    <br>

    Alamat: <br>
    <input type="text" id="alamat" name="alamat" value="<?= isset($siswa) ? $siswa['alamat'] : '' ?>"><br><br>

    Golongan Darah: <br>
    <input type="text" id="golongan-darah" name="golongan_darah" value="<?= isset($siswa) ? $siswa['golongan_darah'] : '' ?>"><br><br>

    Nama Ibu: <br>
    <input type="text" id="nama-ibu" name="nama_ibu" value="<?= isset($siswa) ? $siswa['nama_ibu'] : '' ?>"><br><br>

    <div class="form-group">
        <label class="col-sm-2 control-label">Foto</label>
        <div class="col-sm-6">
            <?php if (isset($siswa) && !empty($siswa['file'])) : ?>
                <img src="media/Images/<?= $siswa['file'] ?>" width="100px" alt="foto" />
            <?php else : ?>
                <img src="media/Images/default.jpg" width="100px" alt="foto" />
            <?php endif; ?>
            <input type="file" name="foto" />
        </div>
    </div>

    <button type="submit" class="btn btn-primary" value="simpan">Submit</button>
</form>
</body>
</html>
