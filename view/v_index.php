<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/main.css">
    <title>Isi Data</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');

        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #333;
            color: white;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-top: 3%;
            font-size: 2em;
            color: #fff;
        }

        a {
            color: white;
            text-decoration: none;
            margin-right: 20px;
            font-weight: bold;
        }

        a:hover {
            color: #29b9f6;
        }

        #database-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        #database-table th,
        #database-table td {
            border: 1px solid #ffffff;
            padding: 10px;
        }

        #database-table th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #6895D2;
            color: white;
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #0056b3;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin-bottom: 20px;
        }

        input,
        select,
        textarea {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        p {
            margin-bottom: 15px;
        }

        .gender-container {
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        .gender-container label {
            margin-left: 5px;
        }
        .danger-btn{
            background-color: red;
        }
        .danger-btn:hover{
            background-color: darkred;
        }
    </style>
</head>

<body>
    <header>
        <h1>Database Siswa</h1>
    </header>

    <a href="tambah.php">Update Data</a>

    <a href="logout.php">Log Out</a>

    <form method="GET" action="index.php">
        Cari berdasarkan Nis dan Nama
        <input type="text" name="search" value="<?= @$search ?>">
        <button type="submit">Cari</button>
        <button type="button" onclick="resetFilters()">Reset</button>
    </form>




    <table border="1" id="database-table">
        <thead>
            <tr>
                <th>#</th>
                <th>
                    Foto
                </th>
                <th>Nis
                    <a href="index.php?sort=nis&order=asc">🔺</a>
                    <a href="index.php?sort=nis&order=desc">🔻</a>
                </th>

                <th>Nama Lengkap
                    <a href="index.php?sort=nama_lengkap&order=asc">🔺</a>
                    <a href="index.php?sort=nama_lengkap&order=desc">🔻</a>
                </th>
                <th>Jenis Kelamin
                    <a href="index.php?sort=jenis_kelamin&order=asc">🔺</a>
                    <a href="index.php?sort=jenis_kelamin&order=desc">🔻</a>
                </th>
                <th>Kelas
                    <a href="index.php?sort=kelas&order=asc">🔺</a>
                    <a href="index.php?sort=kelas&order=desc">🔻</a>
                </th>
                <th>Jurusan
                    <a href="index.php?sort=jurusan&order=asc">🔺</a>
                    <a href="index.php?sort=jurusan&order=desc">🔻</a>
                </th>
                <th>Alamat
                    <a href="index.php?sort=alamat&order=asc">🔺</a>
                    <a href="index.php?sort=alamat&order=desc">🔻</a>
                </th>
                <th>Golongan Darah
                    <a href="index.php?sort=golongan_darah&order=asc">🔺</a>
                    <a href="index.php?sort=golongan_darah&order=desc">🔻</a>
                </th>
                <th>Nama Ibu
                    <a href="index.php?sort=nama_ibu&order=asc">🔺</a>
                    <a href="index.php?sort=nama_ibu&order=desc">🔻</a>
                </th>
                <th colspan="3">Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $i = 0; // Initialize a counter for the row numbers
            while ($siswa = $listSiswa->fetch_array()) {
            ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?php
                        if (isset($siswa['file'])) {
                            echo "<img src='http://localhost/pwpb20/media/Images/" . $siswa['file'] . "' width='100px' alt=''>";
                        } else {
                            echo "Gambar tidak tersedia";
                        }
                        ?></td>
                    <td><?= $siswa['nis'] ?></td>
                    <td><?= $siswa['nama_lengkap'] ?></td>
                    <td><?= $siswa['jenis_kelamin'] ?></td>
                    <td><?= $siswa['kelas'] ?></td>
                    <td><?= $siswa['jurusan'] ?></td>
                    <td><?= $siswa['alamat'] ?></td>
                    <td><?= $siswa['golongan_darah'] ?></td>
                    <td><?= $siswa['nama_ibu'] ?></td>
                    <td>
                        <button onclick="window.location.href='edit.php?nis=<?= $siswa['nis'] ?>'">Edit</button>
                    </td>
                    <td>
                    <button onclick="confirmDelete('<?= $siswa['nis'] ?>')" class="danger-btn">Delete</button>
                </tr>
            <?php } ?>
        </tbody>
    </table>







    <script>
            function resetFilters() {
                window.location.href = 'index.php';
            }


            function confirmDelete(nis) {
            if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
                window.location.href = 'delete.php?nis=' + nis;
            } else {
                toastr.info('Hapus data dibatalkan');
            }
        }
    </script>

</body>

</html>