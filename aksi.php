<?php
include_once('koneksi.php');
error_log(0);
function simpandata(){

$nama=$_POST['nama'];
$email=$_POST['nama'];
$web=$_POST['nama'];
$alamat=$_POST['nama'];
$query="INSERT INTO data_mahasiswa (nama,email,web,isi) VALUES ($nama,$email,$web,$alamat)";
$eksekusi=mysql_query($query);
if ($eksekusi) {
	echo ("proses input berhasil");
}else{
	echo ("proses input gagal");
}
}

function hapus_data(){
	$kode=$_GET['kode'];
$perintah="DELETE FROM data_mahasiswa WHERE kode='$kode'";
$hasil=mysql_query($perintah);
if ($hasil)
{
echo("Proses Hapus Berhasil");
}else
{
echo("Proses Hapus Gagal");
}
}

function update_data(){
$kode=$_POST['nama'];
$nama=$_POST['nama'];
$email=$_POST['nama'];
$web=$_POST['nama'];
$alamat=$_POST['nama'];
$perintah="UPDATE data_mahasiswa SET nama='$nama',email='$email',
web='$web',isi='$alamat' WHERE kode='$kode'";
$hasil=mysql_query($perintah);
if ($hasil)
{
echo("Proses Update Berhasil");
}else
{
echo("Proses Update Gagal");
}

}

if(isset($_GET['proses']) and $_GET['proses']=='hapus')
{
hapus_data();
}else If(isset($_POST['proses']) and $_POST['proses']=='Simpan')
{
simpandata();
} else If(isset($_POST['proses']) and $_POST['proses']=='Update')
{
update_data();
}



?>