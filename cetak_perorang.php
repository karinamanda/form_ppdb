<?php

require_once __DIR__ . '/vendor/autoload.php';

require 'functions.php';


$no_reg = $_GET['no_reg'];

$regis = query("SELECT * FROM regis WHERE no_reg = $no_reg");

$html = '<!DOCTYPE html>
            <html lang="en">
            <head>
              <meta charset="UTF-8">
              <meta http-equiv="X-UA-Compatible" content="IE=edge">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
            </head>
            <body>';

foreach ($regis as $r) {
  $html = '
            <h1>Data siswa</h1>
              <p>No Registrasi = ' . $r["no_reg"] . '</p>
              <p>Nama = ' . $r["nama"] . '</p>
              <p>Jenis Kelamin =' . $r["jk"] . '</p>
              <p>Alamat = ' . $r["alamat"] . '</p>
              <p>Agama = ' . $r["agama"] . '</p>
              <p>Asal sekolah = ' . $r["asal_sekolah"] . '</p>
              <p>Minat jurusan = ' . $r["minat_jurusan"] . '</p>
              ';
}
$html .= '</body>
            </html>';
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output();
