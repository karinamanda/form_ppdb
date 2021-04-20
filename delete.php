<?php

require 'functions.php';

$no_reg = $_GET['no_reg'];

if (hapus($no_reg)) {
  echo "<script>
          alert('DATA BERHASIL DI DIHAPUS !');
          document.location.href = 'list.php';
        </script>";
} else {
  echo "<script>
          alert('DATA GAGAL DI DIHAPUS !');
        </script>";
}
