<?php
	
	$link = mysqli_connect("localhost", "root", "", "ps03330_dongho");	

	if(!$link){
		echo "Error: Unable to connect to MySQL." . PHP_EOL;
		echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
		echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
		exit;
	} else {

    $idkh = $_POST[idkh];
    $namekh = $_POST[namekh];
	$diachi = $_POST[diachi];
    $sdt = $_POST[sdt];
	 
	$sql = "INSERT INTO khachhang (MAKH, HOTEN, DIACHI, SODT)
	VALUES ('$idkh', '$namekh', '$diachi', '$sdt')";
	    
	if (mysqli_query($link, $sql)) {
		echo "Thêm thành công";
	} else {
    echo "Error: " . $sql . "</br>" . mysqli_error($conn);
	};
	}
	mysqli_close($link);
	?>