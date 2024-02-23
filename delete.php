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

$nis = $_GET['nis'];

// Periksa apakah $nis kosong
if (empty($nis)) {
    header('location: index.php');
    exit();
}

// Delete data from the database
$sql = "DELETE FROM siswa WHERE nis = '$nis'";
$mysqli->query($sql) or die($mysqli->error);

header('location: index.php');
exit();

if ($result) {
    echo 1;
} else {
    echo 0;
    // You might want to include additional error handling/logging here.
}

// Avoid redirecting here, especially if echoing 0, as it will still redirect.
// header('location: index.php');
?>

</body>
</html>