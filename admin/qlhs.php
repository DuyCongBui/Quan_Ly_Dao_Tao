﻿<div class="banner">
<body bgcolor="#CAFFFF">
<?php
session_start();
echo '<br/>';
?>
<div style="text-align:right;margin-right:186px ">
<?php
echo "<b>Chào Bạn ".$_SESSION['ses_MaHS'];echo "</b>"
?>
</div>
<style type="text/css">
#menu ul{
	margin-left:145px;

}
.menu{

	}
#menu ul li{
display:inline;

}
#menu ul a{
text-decoration:none;
width:245px;
float:left;
background:#336699;
color:#FFFFFF;
text-align:center;
line-height:27px;
font-weight:bold;
border-left:1px solid #FFFFFF;
}

#menu ul a:hover{
background:#000000;
}
</style>
<link rel="stylesheet" type="text/css" href="style.css">
<div id="menu" >
		
    	<ul>
        	<li><a href="hocsinh/xemdiem_hs.php">Xem Điểm</a></li>
			<li><a href="hocsinh/hocsinh_xemthongtin.php">Thông Tin Học Sinh</a></li>
        	<li><a href="repass2.php">Thay Đổi Mật Khẩu</a></li>
        	<li><a href="logout.php">Đăng Xuất</a></li>

		</ul>
</div>

<table  border=0 cellpadding=5 cellspacing=0 align="center" width="983">
	<TR>
		<TD>	<tr>
		
	</tr>
</td>
	</TR>
</table>
</body>
