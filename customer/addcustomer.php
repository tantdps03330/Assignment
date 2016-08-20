    <title>Thêm khách hàng</title>
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a4/jquery.mobile-1.0a4.min.css">
	<link rel="stylesheet" href="../css/css.css">
    <script src="http://code.jquery.com/jquery-1.5.2.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.0a4/jquery.mobile-1.0a4.min.js"></script>
 
    <script>
        function onSuccess(data, status)
        {
            data = $.trim(data);
            $("#notification").text(data);
        }
  
        function onError(data, status)
        {
            // handle an error
        }        
  
        $(document).ready(function() {
            $("#submit").click(function(){  
                var formData = $("#callAjaxForm").serialize();
                $.ajax({
                    type: "POST",
                    url: "addajax.php",
                    cache: false,
                    data: formData,
                    success: onSuccess,
                    error: onError
                });
                return false;
            });
        });
				
		function trangchu(){
			window.location = '../index.php';	
		}
    </script>
  
    <!-- call ajax page -->
    <div data-role="page" id="callAjaxPage" data-url="callAjaxPage" class="ui-page ui-body-c ui-page-active">
        <div data-role="header" class="ui-bar-b ui-header" role="banner">
			<a href="" onclick="trangchu()" data-role="button" data-icon="arrow-l">Back</a>
            <h1 class="ui-title" tabindex="0" role="heading" aria-level="1">Thêm khách hàng</h1>
        </div>
  
        <div data-role="content" class="ui-content" role="main">
            <form id="callAjaxForm">
                <div data-role="fieldcontain" class="ui-field-contain ui-body ui-br">
                    <label for="idkh" class="ui-input-text">Mã khách hàng</label>
                    <input type="text" name="idkh" id="idkh" value="" class="ui-input-text ui-body-null ui-corner-all ui-shadow-inset ui-body-c">
 
                    <label for="namekh" class="ui-input-text">Họ và tên</label>
                    <input type="text" name="namekh" id="namekh" value="" class="ui-input-text ui-body-null ui-corner-all ui-shadow-inset ui-body-c">
					
					 <label for="diachi" class="ui-input-text">Địa chỉ</label>
                    <input type="text" name="diachi" id="diachi" value="" class="ui-input-text ui-body-null ui-corner-all ui-shadow-inset ui-body-c">
					
					 <label for="sdt" class="ui-input-text">Số điện thoại</label>
                    <input type="text" name="sdt" id="sdt" value="" class="ui-input-text ui-body-null ui-corner-all ui-shadow-inset ui-body-c">
										
                    <h3 id="notification"></h3>	
					<p>		
					<button id="submit" type="submit" class="ui-btn-hidden" aria-disabled="false">Thêm khách hàng</button>
					<button type="reset" id="rs">Hủy</button>
					</p>
                </div>
            </form>
        </div>
  
        <div data-role="footer" class="ui-bar-b ui-footer" role="contentinfo">
            <h1 class="ui-title" tabindex="0" role="heading" aria-level="1">PS03330</h1>
        </div>
    </div>
<div class="ui-loader ui-body-a ui-corner-all" style="top: 476.5px;"><span class="ui-icon ui-icon-loading spin"></span><h1>loading</h1></div>