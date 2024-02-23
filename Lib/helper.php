<?php 

function base_url(){
    return "http:localhost/PWPB20";
}

function flash($tipe, $pesan = ''){
    if(empty($pesan)){
        $pesan = @$_SESSION[$tipe];
        unset($_SESSION[$tipe]);
        return $pesan;
    } else {
        $_SESSION[$tipe] = $pesan;
    }
}

function loginCheck() {
    $username = @$_SESSION['username'];  
    $level = @$_SESSION['level'];

    if (empty($username) && empty($level)) {
        header("location: login.php");
        exit(); // Make sure to exit after sending the header
    }
}

function loggedIn(){
    $username = @$_SESSION['username'];
    $level = @$_SESSION['level'];
    if (!empty($username) && !empty($level)) {
        header("location: index.php");
        exit(); // Make sure to exit after sending the header
    }
}
?>