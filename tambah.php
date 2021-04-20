<?php

session_start();
require 'functions.php';
if (isset($_POST['tambah'])) {
  if (tambah($_POST)) {
    echo "<script>
            alert('Selamat, anda sudah terdaftar di SMK MERDEKA BELAJAR !');
            document.location.href = 'tambah.php';
          </script>";
  } else {
    echo "<script>
            alert('Maaf pendaftaran gagal !');
          </script>";
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  <title>FORM PENDAFTARAN | PPDB SMK MERDEKA BELAJAR</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-info">
    <a class="navbar-brand text-white" style="font-family: Arial, Helvetica, sans-serif;" href="index.php"> Halaman <?= $_SESSION['level']; ?> </a>
    <a href="logout.php" style="margin-left: 1220px;" type="button" class="btn btn-danger" onclick="return confirm ('apakah anda yakin ingin logout?')">Logout</a>
  </nav>
  <div class="container" style="margin-top: 50px;">
    <h1 class="text-center">FORM PENDAFTARAN </h1>

    <form action="" method="post" style="margin-top:50px;">
      <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">NAMA</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="" name="nama" required autocomplete="off">
        </div>
      </div>
      <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">JENIS KELAMIN</label>
        <div class="col-sm-10">
          <select class="form-control" id="" name="jk">
            <option value="Perempuan">Perempuan</option>
            <option value="Laki-laki">Laki-laki</option>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">ALAMAT</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="" name="alamat" required autocomplete="off">
        </div>
      </div>
      <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">AGAMA</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="" name="agama" required autocomplete="off">
        </div>
      </div>
      <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">ASAL SEKOLAH</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="" name="asal_sekolah" required autocomplete="off">
        </div>
      </div>
      <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">MINAT JURUSAN</label>
        <div class="col-sm-10">
          <select class="form-control" id="" name="minat_jurusan">
            <option value="RPL">RPL</option>
            <option value="TKJ">TKJ</option>
            <option value="MMD">MMD</option>
            <option value="BDP">BDP</option>
            <option value="OTKP">OTKP</option>
            <option value="TBG">TBG</option>
            <option value="HTL">HTL</option>
          </select>
        </div>
      </div>

      <button type="submit" class="btn btn-primary" style="margin-left: 810px; width:300px;" name="tambah">TAMBAH</button>
    </form>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>