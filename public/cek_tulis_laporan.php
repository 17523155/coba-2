<?php
include "koneksi.php";
$foto = $_FILES['foto']['name'];
$nama = $_POST['nama'];
$deskripsi = $_POST['deskripsi'];
$provinsi = $_POST['provinsi'];
$kabupaten = $_POST['kabupaten'];
$kecamatan = $_POST['kecamatan'];
$tingkat_kerusakan = $_POST['tingkat_kerusakan'];


if (empty($nama)){
echo "<script>alert('nama belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=/tulislaporan'>";
}else
if (empty($deskripsi)){
echo "<script>alert('deskripsi belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=/tulislaporan'>";
}else 
if(empty($provinsi)){
echo "<script>alert('provinsi belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=/tulislaporan'>";
}else 
if (empty($kabupaten)){
echo "<script>alert('kota/kabupaten belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=/tulislaporan'>";
}else 
if (empty($kecamatan)){
echo "<script>alert('kecamatan belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=/tulislaporan'>";
}else 
if (empty($tingkat_kerusakan)){
echo "<script>alert('tingkat kerusakan belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=/tulislaporan'>";
}else
{

$daftar = "INSERT INTO tulis_laporan (foto,nama,deskripsi,provinsi,kabupaten,kecamatan,tingkat_kerusakan) values ('$foto','$nama','$deskripsi','$provinsi','$kabupaten','$kecamatan','$tingkat_kerusakan')";
$q = $koneksi->query($daftar);
if ($q == TRUE){
echo "<script>alert('Laporan Terkirim')</script>";
echo "<meta http-equiv='refresh' content='1 url=/kode_laporan'>";
}else{
echo "<script>alert('Laporan Gagal Terkirim')</script>";
echo "<meta http-equiv='refresh' content='1 url=/tulis_laporan'>";
}
}
?>

<!-- disimpan di public -->