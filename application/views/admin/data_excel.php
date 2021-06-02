<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Pemilih.xls");
	?>
	<table>
		<?php foreach ($barang as $barang): ?>	
		<tr>
			<td>Kode : <?=$barang['kode']?></td>
			<td>Nama Barang : <?=$barang['nama']?></td>
			<td>Spesifikasi Barang : <?=$barang['spesifikasi']?></td>
			<td>Tgl Masuk : <?=$barang['tgl_masuk']?></td>
			<td>Supplier Barang : <?=$barang['suplier']?></td>
			<td>Harga Beli : <?=$barang['harga_beli']?></td>
		</tr>
		<?php endforeach ?>
	</table>
</body>
</html>