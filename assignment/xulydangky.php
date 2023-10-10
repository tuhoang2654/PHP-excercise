<?php
	require("connect_db.php");
	include("check_errors.php");
	$taikhoan = $_POST['taikhoan'];
	$email = $_POST['email'];
	$matkhau = md5($_POST['matkhau']);
	print("aloo");
    $currentDateTime = date('Y-m-d H:i:s'); // get current time
	$query_item="SELECT * FROM users WHERE username='".$taikhoan."' or email='".$email."'";
	$result_item=mysqli_query($dbc,$query_item);
    check_errors($result_item,$query_item);
	if(mysqli_num_rows($result_item) >= 1)
	{
		echo "<b style='color:red;'>Tài khoản hoặc email đã được tạo trước đó!!! Bạn vui lòng nhập email hoặc tài khoản mới</b>";
	}
	else{
		$query_tk="INSERT INTO users(username,password,email,created_at) VALUES('$taikhoan','$matkhau','$email','$currentDateTime')";
		$result_tk=mysqli_query($dbc,$query_tk);check_errors($result_tk,$query_tk);
		echo "<b style='color:green;font-size:20px;'> Bạn đã đăng ký thành công</b>";
	}
?>