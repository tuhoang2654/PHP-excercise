<?php
	session_start();
	// if(isset($_SESSION['uid']))
	// {
	//     header('Location:thongtintaikhoan.php');
	// }
	require('header.php');
?>
<div id="contain" style="margin-top: 2%;">
			<div class="row">
				<div class="col-md-3"  style="margin-bottom: 4%;">
					
				</div>
				<div class="col-md-9">
					<div style="background-color:#d74b33;float: left;color: white;">
						<h1 style="font-size: 24px; font-weight: normal; padding: 0 12px; text-align: left; margin: 0!important;line-height: 31px">
						    ĐĂNG KÝ TÀI KHOẢN
					    </h1>
					</div>
					<div style="border-bottom:solid 1px #d74b33;clear: both;padding-top: 0.2%;"></div>
					<div id="form" class="col-md-8 col-md-offset-2 col-xs-12 col-sm-12 col-xs-offset-0 col-sm-offset-0">
						<form>
							<h2>
								Thông tin tài khoản
							</h2>
							<div class="form-group">
				                <label for="taikhoan" class="col-sm-3 control-label">Tài khoản <span class="warning" style="color: red">(*)</span></label>
				                <div class="col-sm-9">
				                    <input type="text" class="form-control" name="taikhoan" id="taikhoan" />
				                </div>
				            </div>
							<div class="form-group">
				                <label for="email" class="col-sm-3 control-label">Email <span class="warning" style="color: red">(*)</span></label>
				                <div class="col-sm-9">
				                    <input type="text" class="form-control" name="email" id="email" />
				                </div>
				            </div>
				            <div class="form-group">
				                <label for="matkhau" class="col-sm-3 control-label">Mật khẩu <span class="warning" style="color: red">(*)</span></label>
				                <div class="col-sm-9">
				                    <input type="password" class="form-control" name="matkhau" id="matkhau" />
				                </div>
				            </div>
				            <div class="form-group">
				                <label for="xnmk" class="col-sm-3 control-label">Nhập lại mật khẩu<span class="warning" style="color: red">(*) </span></label>
				                <div class="col-sm-9">
				                    <input type="password" class="form-control" name="xnmk" id="xnmk" />
				                </div>
				            </div>
				            <div style="width: 100%;" class="mess"></div>
				            
				            <div class="btn">
				            	<input type="button" name="ktdk" value="Đăng ký" onclick="fromRegister();">
				            </div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<script type="text/javascript">
	function fromRegister()
	{
		var taikhoan = document.getElementById('taikhoan');
		var email = document.getElementById('email');
		var matkhau = document.getElementById('matkhau');
		var xnmk = document.getElementById('xnmk');
	
		
		console.log(taikhoan)
		pattern = /^[a-zA-Z0-9]{6,}$/;
		if(pattern.test(taikhoan.value) == false){
			alert("Tài khoản phải có ít nhất 6 ký tự,không có khoảng trắng và ký tự đặc biệt");
			taikhoan.focus();
			return false;
		}
		pattern=/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)(([a-zA-Z0-9]{3})|([a-zA-Z0-9]{3})(\.[a-zA-Z0-9]{2}))$/;
		if(pattern.test(email.value) == false){
			alert("Email không hợp lệ");
			email.focus();
			return false;
		}
		pattern=/^[a-zA-Z0-9]{6,}$/;
		if(pattern.test(matkhau.value)==false){
			alert("Mật khẩu phải có ít nhất 6 ký tự,không có khoảng trắng và ký tự đặc biệt");
			matkhau.focus();
			return false;
		}
		if(xnmk.value != matkhau.value){
			alert("Xác nhận mật khẩu không đúng");
			xnmk.focus();
			return false;
		}
		
		
		
		$.ajax({
			type:"POST",
			url:"xulydangky.php",
			data:{taikhoan:taikhoan.value,email:email.value,matkhau:matkhau.value},
			cache:false,
			success:function(results){
				$('.mess').html(results);
				taikhoan.value = "";
				email.value = "";
				matkhau.value = "";
				xnmk.value = "";
			}
		});
	}
</script>