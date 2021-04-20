<?php

function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'ppdb');
}

function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function tambah($data)
{
  $conn =  koneksi();
  $nama =  htmlspecialchars($data['nama']);
  $jk = htmlspecialchars($data['jk']);
  $alamat = htmlspecialchars($data['alamat']);
  $agama =  htmlspecialchars($data['agama']);
  $asal_sekolah = htmlspecialchars($data['asal_sekolah']);
  $minat_jurusan = htmlspecialchars($data['minat_jurusan']);

  $query = ("INSERT INTO
                  regis
                  VALUES
                  (null,'$nama','$jk','$alamat','$agama','$asal_sekolah','$minat_jurusan')");

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}


function edit($data)
{
  $conn =  koneksi();

  $no_reg = htmlspecialchars($data['no_reg']);
  $nama =  htmlspecialchars($data['nama']);
  $jk = htmlspecialchars($data['jk']);
  $alamat = htmlspecialchars($data['alamat']);
  $agama =  htmlspecialchars($data['agama']);
  $asal_sekolah = htmlspecialchars($data['asal_sekolah']);
  $minat_jurusan = htmlspecialchars($data['minat_jurusan']);

  $query = ("UPDATE regis SET
            no_reg = '$no_reg',
            nama = '$nama',
            jk = '$jk',
            alamat = '$alamat',
            agama = '$agama',
            asal_sekolah  = '$asal_sekolah',
            minat_jurusan = '$minat_jurusan'
            WHERE no_reg = $no_reg");

  mysqli_query($conn, $query);

  echo mysqli_error($conn);

  return mysqli_affected_rows($conn);
}

function hapus($no_reg)
{
  $conn = koneksi();

  mysqli_query($conn, "DELETE FROM regis WHERE no_reg = $no_reg");

  echo mysqli_error($conn);

  return mysqli_affected_rows($conn);
}
