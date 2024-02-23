
<?php 
include 'Lib/library.php';
include 'Lib/helper.php';
include 'view/v_login.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM t_login WHERE username = '$username' AND password ='$password'";
    $data = $mysqli->query($sql) or die($mysqli->error);
}

if (isset($data) && $data->num_rows != 0) {
    $row = mysqli_fetch_object($data);
    $_SESSION['username'] = $row->username;
    $_SESSION['level'] = $row->level;
    header('location: index.php');
} else {
    $error = "Username atau password salah";
}


?>

