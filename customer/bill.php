	<title>Hóa đơn</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a4/jquery.mobile-1.0a4.min.css">
    <script src="http://code.jquery.com/jquery-1.5.2.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.0a4/jquery.mobile-1.0a4.min.js"></script>

<style>  
		.btn input {			
			margin:0 5px;
			border-radius:5px;
			background:rgb(182, 182, 255);
			color:white;
			font-size:100%;
		}	
</style> 

<script>
	function trangchu(){
			window.location = '../index.php';		
		}
</script>

<div data-role="page"  class="ui-page ui-body-c ui-page-active">
<div data-role="header" class="ui-bar-b ui-header" role="banner">
		<a href="" onclick="trangchu()" data-role="button" data-icon="arrow-l">Back</a>
        <h1 class="ui-title" tabindex="0" role="heading" aria-level="1">Hóa đơn</h1>
</div>	

<?php
// Create connection
$conn = mysqli_connect("localhost", "root", "", "ps03330_dongho");

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
// Code for EDIT button
if (isset($_POST['edit'])) {
$idw = $_POST['idw'];
}
// Code for UPDATE button
if (isset($_POST['update'])) {
$idw = $_POST['idw'];
$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$email = $_POST['email'];
$sql = "UPDATE dongho SET lastname = '$lastname', firstname = '$firstname', email = '$email'  WHERE userid = '$userid';";
$conn->query($sql);
}
//Code for DELETE button
if (isset($_POST['delete'])){
$idkh = $_POST['idkh'];
$sql = "DELETE FROM khachhang WHERE MAKH = '$idkh';";
if ($conn->query($sql) === true){
//echo "Xóa thành công";
}
}

// SQL Query
$sql = "SELECT * FROM 
					hoadon
					INNER JOIN chitiethd ON hoadon.SOHD = chitiethd.SOHD
					INNER JOIN khachhang ON hoadon.MAKH = khachhang.MAKH
					INNER JOIN dongho ON dongho.MADH = chitiethd.MADH
					";
	
$result = $conn->query($sql);
//Loop through and echo all the records

while ($row = $result->fetch_assoc()){
$gia = $row['GIA'];$gia2 = number_format($gia,0,'','.');
$sl = $row['SOLUONG'];
$tong = $gia * $sl;	$tong2 = number_format($tong,0,'','.');

echo'	<div data-role="content" class="ui-content" role="main">';	
echo"	<form method='post' action='customer.php'>";
echo"	<input type='hidden' name='idkh' value='" .$row['SOHD'] . "'>";
echo"	<input type='hidden' name='sl' value='" .$row['SOLUONG'] . "'>";
echo"	<input type='hidden' name='gia' value='" .$row['GIA'] . "'>";

echo'  	<div class="sp1"  prod="'.$row['SOHD'].'" onclick="return false;" style=" width:98%; padding:10px 0; border-bottom:1px solid black;">';
echo'                       <div style="width:50%;margin:0 auto; padding:5px; text-align:left;">';  
echo'                         <div class="sp1_nd" style="display:block;background:none;border-top:none; ">';
echo'                             <p class="nd_tt" style="margin-top:10px; "><b>'.'Số hóa đơn: '.$row['SOHD'].'</b></p>';
echo'                             <p class="nd_tt" style="margin-top:10px; "><b>'.'Tên khách hàng: '.$row['HOTEN'].'</b></p>';
echo' 							  <p class="nd_tt" style="margin-top:10px; "><b>'.'Địa chỉ: '.$row['DIACHI'].'</b></p>';
echo' 							  <p class="nd_tt" style="margin-top:10px; "><b>'.'Số điện thoại: '.$row['SODT'].'</b></p>';
echo' 							  <p class="nd_tt" style="margin-top:10px; "><b>'.'Đồng hồ: '.$row['TENDH'].'</b></p>';   
echo' 							  <p class="nd_tt" style="margin-top:10px; "><b>'.'Số lượng: '.$row['SOLUONG'].'</b></p>';                                        
echo' 							  <p class="nd_tt" style="margin-top:10px; "><b>'.'Đơn giá: '.$gia2.' VNĐ'.'</b></p>';                                        
echo' 							  <p class="nd_tt" style="margin-top:10px; "><b>'.'Tổng: '.$tong2.' VNĐ'.'</b></p>';                                        
echo'                         </div>';
echo'                      </div>';
echo'                     </div>';
echo "</form>";
echo'</div>';
}
$conn->close();
?>
</div>