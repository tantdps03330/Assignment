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
	$imgw = $_POST[imgw].'.jpg';
   
	
	
	$sql = "UPDATE dongho SET TENDH='$namew', GIA=$pricew, MALOAI=$maw, HINH='$imgw' WHERE MADH=$idw";
     
	if ($link->query($sql) === TRUE) {
    echo "Record updated successfully";
	} else {
    echo "Error updating record: " . $conn->error;
	}
	 
    //echo("Mã đồng hồ: " . $idw . " Tên đồng hồ: " . $namew . "Giá: " . $pricew . "Mã đồng hồ: ". "Hình: " . $imgw);
	
	}
	
	mysqli_close($link);
	
	?>