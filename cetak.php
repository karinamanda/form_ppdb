<?php

require_once __DIR__ . '/vendor/autoload.php';

require 'functions.php';

$regis = query("SELECT * FROM regis");

$html = '
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Siswa</title>
</head>
<body>
  <h1>Data Siswa</h1>

  <table border="1" cellpadding="10" cellspacing="0">
        <tr>
          <th>NO REGISTRASI</th>
          <th>NAMA</th>
          <th>JENIS KELAMIN</th>
          <th>ALAMAT</th>
          <th>AGAMA</th>
          <th>ASAL SEKOLAH</th>
          <th>MINAT JURUSAN</th>
        </tr>';


foreach ($regis as $r) {
  $html .= '<tr>
              <td>' . $r["no_reg"] . '</td>
              <td>' . $r["nama"] . '</td>
              <td>' . $r["jk"] . '</td>
              <td>' . $r["alamat"] . '</td>
              <td>' . $r["agama"] . '</td>
              <td>' . $r["asal_sekolah"] . '</td>
              <td>' . $r["minat_jurusan"] . '</td>
            </tr>';
}

$html .= '</table>
</body>
</html>';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output();
