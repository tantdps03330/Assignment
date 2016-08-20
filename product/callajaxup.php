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
	$imgw = $_POST[imgw].'.jpg';
   	
	$sql = "UPDATE dongho SET TENDH='$namew', GIA=$pricew, MALOAI=$maw, XUATXU=$xuatxu, HINH='$imgw' WHERE MADH=$idw";
     
	if ($link->query($sql) === TRUE) {
    echo "Cập nhật thành công";
	} else {
    echo "Error updating record: " . $conn->error;
	}
	}	
	mysqli_close($link);
	?>