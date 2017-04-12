<table width="513" border="0" align="center">
	<tr bgcolor="$FFFFCC">
		<td width="100">Nama </td>
		<td width="100">email </td>
		<td width="100">web </td>
		<td width="100">isi </td>
		<td colspan="2"></td>
	</tr>
	<?php
	include_once('koneksi.php');
	$query="select * from data_mahasiswa";
	$eksekusi = mysql_query($query);
	while ($data=mysql_fetch_array($eksekusi)) 
	{
		?>
			<tr>
				<td><?php echo $data['nama'];?></td>
				<td><?php echo $data['email'];?></td>
				<td><?php echo $data['web'];?></td>
				<td><?php echo $data['isi'];?></td>
			<<td width="43">
<div align="center">
<a href="form.php?kode=<?=$data['kode']?>">edit</a>
</div></td>
<td width="35"><div align="center">
<a href="aksi.php?kode=<?=$data['kode']?>&proses=hapus">
hapus</a></div></td>
</tr>

<?php
}
?>
</table>