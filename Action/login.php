<?php


if (isset($_POST['login'])) {
session_start();
    $email = $_POST['email'];
    $pass = $_POST['password'];

    if ($email == 'admin@example.com' && $pass == 'admin@sms') {
        $_SESSION['login'] = true;
        header('Location: ./index.php');
        exit();
    } else {
        echo 'Invalid Credentials';
    }
}
?>
