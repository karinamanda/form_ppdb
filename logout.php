<?php

session_start();

unset($_SESSION['username']);
unset($_SESSION['password']);
unset($_SESSION['nama_lengkap']);
unset($_SESSION['level']);

session_destroy();

echo "<script>
            alert ('Anda berhasil keluar');
            document.location.href= 'login.php';
          </script>";
