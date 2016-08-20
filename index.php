	<title>Đồng hồ</title>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="css/css.css">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a4/jquery.mobile-1.0a4.min.css">
    <script src="http://code.jquery.com/jquery-1.5.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.0a4/jquery.mobile-1.0a4.min.js"></script>
	 
	  <style>
		table{
			width:70%;
			margin:auto;
			padding:10px;
			text-align:center;
		}
		
		a{
			text-decoration: none;	
		}
		
		table td{
				width:50%;
				border-radius:10px;
				background:#DDDDDD;
		}
			
		.ui-content{
			width:98%;					
		}  
	  </style>
	  <script>
		function sp(){
			window.location = 'product/products.php';
			
		}
	  
		function them(){
			window.location = 'product/addproduct.php';
			
		}
		
		function capnhat(){
			window.location = 'product/update.php';
			
		}
		
		function kh(){
			window.location = 'customer/customer.php';
			
		}
		
		function hd(){
			window.location = 'customer/bill.php';
			
		}
	  </script>
	  <div data-role="page" class="ui-page ui-body-a ui-page-active">
        <div data-role="header" class="ui-bar-b ui-header" role="banner">
			<img src="images/logo.png" style="width:30px;" class="ui-btn-left" />
            <h1 class="ui-title" tabindex="0" role="heading" aria-level="1">ĐỒNG HỒ</h1>
        </div>
  
        <div data-role="content" class="ui-content" role="main">
            <table   data-role="table" id="movie-table" data-mode="reflow" class="ui-responsive table-stroke">		
			  <tbody>
			    <tr>
					     
			    	<td >
						<a href="" onclick="sp()">						
						<img style="width:70px;" src="images/sanpham.png"/>
						<p>Sản phẩm</p>
						</a>
					</td>
			      	<td>
						<a href="" onclick="them()">

						<img style="width:70px;" src="images/themsp.png"/>
						<p>Thêm sản phẩm</p>	
						</a>
					</td>
			     
			    </tr>
			    <tr>		  		      	
			      	<td>
						<a href="" onclick="capnhat()">
						<img style="width:70px;" src="images/capnhat.png"/>
						<p>Cập nhật sản phẩm</p>
						</a>
					</td>
					<td>
						<a href="" onclick="kh()">
						<img style="width:70px;" src="images/khachhang.png"/>
						<p>Khách hàng</p>	
						</a>
					</td>    
			    </tr>
			
				<tr>	
					<td>
						<a href="" onclick="hd()"> 
						<img style="width:70px;" src="images/hoadon.png"/>
						<p>Hóa đơn</p>
						</a>
					</td>
			      	<td>
						<a href="info.php">
						<img style="width:70px;" src="images/gioithieu.png"/>
						<p>Giới thiệu</p>
						</a>
					</td>		   		    
			    </tr>
			  </tbody>
			</table>		
        </div>	
		
        <div data-role="footer" class="ui-bar-b ui-footer" role="contentinfo">			
            <h1 class="ui-title" tabindex="0" role="heading" aria-level="1">PS03330</h1>
        </div>
    </div>