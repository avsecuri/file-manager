<?php
//////////////////////////////////////////////////////
//			Gmanager mod by Tmc
//			File này lưu trử thông tin đăng nhập
//			Sửa cận thận
//			Mật khẩu phải mã hoá md5 2 lần trước khi viết vào
//////////////////////////////////////////////////////
//Tên đăng nhập
$setadmin = "avsecuri";
//Mật khẩu được mã hoá
$setpass = "c62c36043bf58eb5557b969ae7fef609";
//số dòng chỉnh sửa
$setdong = "100";
//Công cụ sửa văn bản
$setedit = "t";
//Thời gian thực thi sửa văn bản
setcookie("edit",$setedit,time()+24*365*3600);
//Tmc - fb.com/xtmc9x
