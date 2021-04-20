<?php

require 'functions.php';

$conn = koneksi();

$pass = md5($_POST['password']);
$username = mysqli_escape_string($conn, $_POST['username']);
$password = mysqli_escape_string($conn, $pass);
$level = mysqli_escape_string($conn, $_POST['level']);

// uji apakah username terdafatar atau tidak
$cek_user = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' and level ='$level'");
$user_valid = mysqli_fetch_array($cek_user);

// uji jika username terdaftar
if ($user_valid) {
  // jika username terdaftar
  // cek password
  if ($password == $user_valid['password']) {
    // jika password benar buat session
    session_start();
    $_SESSION['username'] = $user_valid['username'];
    $_SESSION['nama_lengkap'] = $user_valid['nama_lengkap'];
    $_SESSION['level'] = $user_valid['level'];

    // uji level user
    if ($level == "User") {
      header("location:home_user.php");
    } elseif ($level == "Admin") {
      header("location:index.php");
    }
  } else {
    echo "<script>
            alert ('Maaf login gagal, Password tidak sesuai');
            document.location.href= 'login.php';
          </script>";
  }
} else {
  echo "<script>
          alert ('Maaf login gagal, Username tidak terdaftar');
          document.location.href= 'login.php';
        </script>";
}
