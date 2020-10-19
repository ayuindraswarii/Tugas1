<?php 

function angkafav($pertama,$kedua){
	$jumlah = $pertama + $kedua;
	return $jumlah;	
}

function data($nama,$tgl_lahir){
	echo "Nama :".$nama."<br/>";
	echo "Tanggal Lahir :".$tgl_lahir."<br/>";
	echo "Jumlah Angka Favorit : ".angkafav(10,20)."<br/>";
}

data("Ayu Indraswari", "13 November 2000");

 ?>