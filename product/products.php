	<title>Thông tin sản phẩm</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a4/jquery.mobile-1.0a4.min.css">
    <script src="http://code.jquery.com/jquery-1.5.2.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.0a4/jquery.mobile-1.0a4.min.js"></script>

	<style>
			.phanloai_sp_{margin-top:3px;}
				.phanloai_sp_ a{background:rgb(182, 182, 255);padding:2px 5px;border-radius:3px;color:#fff;margin-top:2px; text-decoration:none;}
				.phanloai_sp_ a:hover{box-shadow: 0px 1px 1px rgb(99, 112, 253);}
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
        <h1 class="ui-title" tabindex="0" role="heading" aria-level="1">Sản phẩm </h1>
</div>	

<?php
// Create connection
$conn = mysqli_connect("localhost", "root", "", "ps03330_dongho");

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

//Code for DELETE button
if (isset($_POST['delete'])){
$idw = $_POST['idw'];
$sql = "DELETE FROM dongho WHERE MADH = '$idw';";
if ($conn->query($sql) === true){
echo "Xóa thành công";
}
}
// SQL Query
$sql = "SELECT * FROM dongho
				INNER JOIN loaidongho ON dongho.MALOAI = loaidongho.MALOAI";
$result = $conn->query($sql);
//Loop through and echo all the records

while ($row = $result->fetch_assoc()){
$gia = $row['GIA'];$gia2 = number_format($gia,0,'','.');

echo'	<div data-role="content" class="ui-content" role="main">';	
echo"	<form method='post' action='products.php'>";
echo"	<input type='hidden' name='idw' value='" . $row['MADH'] . "'>";

echo'  	<div class="sp1"  prod="'.$row['MADH'].'" onclick="return false;" style=" width:100%; padding:10px 0;">';
echo'                       <div style="width:50%;margin:0 auto; padding:5px; text-align:center;">';  
echo'                         <div class="sp1_img"><img style="max-height:150px; padding:5px; border-radius:10px; background:#F5F5F5; " src="'.'images/'.$row['HINH'].'"/></div>';
echo'                         <div class="sp1_nd" style="display:block;background:none;border-top:none; ">';
echo'                           <p class="nd_tt" style="margin-top:10px; "><b>'.'Đồng hồ '.$row['TENDH'].'</b></p>';
echo'                           <p class="nd_tt" style="margin-top:10px; "><b>'.'Đồng hồ '.$row['TENLOAI'].'</b></p>';
echo' 							<p class="nd_tt" style="margin-top:10px; "><b>'.'Xuất xứ '.$row['XUATXU'].'</b></p>';
echo' 							<p class="nd_tt" style="margin-top:10px; "><b>'.$gia2." VNĐ".'</b></p>';
echo'                           <p class="phanloai_sp_" align="center">';
echo'								<a href="#" class="sp1_mua">Mua sản phẩm</a>';								
echo' 							</p>';                         
echo'                         </div>';
echo'                      </div>';
echo'                     </div>';
echo'	<div class="btn" style="text-align:center; ">';
echo'	<input type="submit" name="delete" value="Xóa">';
echo'	</div>';
echo"	</form>";
echo'	</div>';
}
$conn->close();
?>
</div>