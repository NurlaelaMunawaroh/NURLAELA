<?php
session_star();
if(lisset($_SESSION['username'])){
    echo "<script>alert('Anda belum login! silahkan login';</script>";
    header('location:login.php');
}else{
    header('location:dashboard.php');
}