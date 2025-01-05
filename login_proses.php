<?php
session_start();

$admin_username = "NURLAELA MUNAWAROH";
$admin_password = "512121";

$username = $_POST['username']
$password = $_POST['password']

if ($username === $admin_username && $password === $admin_password) {
    $_SESSION[]
    $_SESSION['username'] = $username;
    header("Location: dashboard.php");
    exit;
} else {
    echo "Username atau Password salah!";
    echo "<br><a href='login.php'>kembali ke login</a>";
}
?>