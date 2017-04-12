<form name="form1" method="post" action="aksi.php">
<?php
include_once('koneksi.php');
if(isset($_GET['kode']))
{
	$kode=$_GET['kode'];
$query="select * from data_mahasiswa where kode=$kode";
$eksekusi=mysql_query($query);
if($data=mysql_fetch_array($eksekusi))
{
$kode=$data['kode'] ;
$nama=$data['nama'] ;
$email=$data['email'] ;
$web=$data['web'] ;
$isi=$data['isi'] ;
}
}
?>
	<input type="text" name="nama" value="<?php echo $kode;?>" ><br>
	Nama anda: <input type="text" name="nama" value="<?php echo $nama;
?>"><br>
	
	Email: <input type="text" name="nama" value="<?php echo $email;
	?>"><br>
	
	Web: <input type="text" name="nama" value="<?php echo $web;
	?>"><br>
	
	Isi: <input type="text" name="nama" value="<?php echo $isi;
	?>"><br>

<?php
if(isset($_GET['kode']))
{

?>
<input type="submit" name="proses" value="Update">
<?
}else{
?>
<input type="submit" name="proses" value="Simpan">
<?
}
?>
	<input type="reset" name="proses" value="Reset">
	
	
</form>