   	  <meta charset="UTF-8">
      <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a4/jquery.mobile-1.0a4.min.css">
	  <link rel="stylesheet" href="css/css.css">
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
                    url: "callajaxup.php",
                    cache: false,
                    data: formData,
                    success: onSuccess,
                    error: onError
                });
  
                return false;
            });
        });
		
		function rs(){
			
			
		}
    </script>
  
    <!-- call ajax page -->
    <div data-role="page" id="callAjaxPage" data-url="callAjaxPage" class="ui-page ui-body-c ui-page-active">
        <div data-role="header" class="ui-bar-a ui-header" role="banner">
            <h1 class="ui-title" tabindex="0" role="heading" aria-level="1">Cập nhật sản phẩm</h1>
        </div>
  
        <div data-role="content" class="ui-content" role="main">
            <form  id="callAjaxForm">
                <div data-role="fieldcontain" class="ui-field-contain ui-body ui-br">
                    <label for="idw" class="ui-input-text">Mã đồng hồ</label>
                    <input type="text" name="idw" id="idw" value="" class="ui-input-text ui-body-null ui-corner-all ui-shadow-inset ui-body-c">
 
                    <label for="namew" class="ui-input-text">Tên đồng hồ</label>
                    <input type="text" name="namew" id="namew" value="" class="ui-input-text ui-body-null ui-corner-all ui-shadow-inset ui-body-c">
					
					 <label for="pricew" class="ui-input-text">Giá</label>
                    <input type="text" name="pricew" id="pricew" value="" class="ui-input-text ui-body-null ui-corner-all ui-shadow-inset ui-body-c">
					
					 <label for="maw" class="ui-input-text">Mã loại</label>
                    <input type="text" name="maw" id="maw" value="" class="ui-input-text ui-body-null ui-corner-all ui-shadow-inset ui-body-c">
					
					 <label for="imgw" class="ui-input-text">Hình</label>
                    <input type="text" name="imgw" id="imgw" value="" class="ui-input-text ui-body-null ui-corner-all ui-shadow-inset ui-body-c">
                    <h3 id="notification"></h3>	
					<p>		
					<button id="submit" type="submit" class="ui-btn-hidden" aria-disabled="false">Cập nhật</button>
					<button type="reset" id="rs">Hủy</button>
					</p>
                </div>
            </form>
        </div>
  
        <div data-role="footer" class="ui-bar-a ui-footer" role="contentinfo">
            <h1 class="ui-title" tabindex="0" role="heading" aria-level="1">PS03330</h1>
        </div>
    </div>
 
 
<div class="ui-loader ui-body-a ui-corner-all" style="top: 476.5px;"><span class="ui-icon ui-icon-loading spin"></span><h1>loading</h1></div>