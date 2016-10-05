<html>
<head>
<title>Studi Kasus 1</title>
</head>
<body>
	<?php
	$nilai=45;
	if ($nilai>=0 && $nilai<=59){
		echo "Nilai Anda Cukup";
	}elseif ($nilai>=60 && $nilai<=86) {
		echo "Nilai Anda Baik";
	}elseif ($nilai>=87 && $nilai<=100) {
		echo "Nilai Anda Baik Sekali";
	}else {
		echo "Error Input";
	}
	?>
</body>
</html>