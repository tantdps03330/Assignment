<?php
	
	$link = mysqli_connect("localhost", "root", "", "ps03330_dongho");	

	if(!$link){
		echo "Error: Unable to connect to MySQL." . PHP_EOL;
		echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
		echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
		exit;
	} else {

    $idw = $_POST[idw];
    $namew = $_POST[namew];
	$pricew = $_POST[pricew];
    $maw = $_POST[maw];
	$xuatxu = $_POST[xuatxu];
	$imgw = $_POST[imgw];
   
	$sql = "INSERT INTO dongho (MADH, TENDH, GIA, MALOAI, XUATXU, HINH)
	VALUES ('$idw', '$namew', '$pricew', '$maw', '$xuatxu', '$imgw')";
	
	if (mysqli_query($link, $sql)) {
		echo "Thêm thành công";
		//echo("Mã đồng hồ: " . $idw . " Tên đồng hồ: " . $namew . "Giá: " . $pricew . "Mã đồng hồ: ". "Hình: " . $imgw);
	} else {
    echo "Error: " . $sql . "</br>" . mysqli_error($conn);
	};
	 
	}
	mysqli_close($link);
	?>