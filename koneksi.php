<?php
$host="localhost";
$username="root";
$password="";
$koneksi=mysql_connect($host,$username,$password);
if(!$koneksi){
	echo ("Koneksi gagal dilakukan");
	die();
}
mysql_select_db('14650002_achmad');
?>