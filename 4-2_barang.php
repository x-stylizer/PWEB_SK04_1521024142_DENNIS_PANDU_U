<html>
<head>
<title>Studi Kasus 2</title>
</head>
<body>
	<?php
	$brg="M717";
	if ($brg=="MB25"){
		echo "Nama Barang = Motherboard <br> Harga Barang = Rp. 250.000,-";
	}elseif ($brg=="PR80"){
		echo "Nama Barang = Printer <br> Harga Barang = Rp. 750.000,-";
	}elseif ($brg=="M717"){
		echo "Nama Barang = Mouse <br> Harga Barang = Rp. 30.000,-";
	}elseif ($brg=="MM34") {
		echo "Nama Barang = Memory <br> Harga Barang = Rp. 150.000,-";
	}elseif ($brg=="K987") {
		echo "Nama Barang = Keyboard <br> Harga Barang = Rp. 35.000,-";
	}else {
		echo "Error Input";
	}
	?>
	</div>
</body>
</html>