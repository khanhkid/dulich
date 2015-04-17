﻿<?php
	$template = "/";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Du lịch Sun Rise TST Travel </title>
		<meta name="description" content="CÔNG TY DU LỊCH SUN RISE TST TRAVEL - Du lich trong nuoc, Du lich nuoc ngoai, Ve may bay, Thue xe du lich, Dat phong khach san">
		<meta name="keywords" content="    du lịch giá rẻ,tour giá rẻ,tour du lịch,du lịch trong nước,du lịch nước ngoài,đặt phòng khách sạn,mua vé máy bay,tour tiết kiệm,cty du lịch uy tín">

		<link type="image/x-icon" href="public/images/favicon.ico" rel="shortcut icon">
		<link href="<?php echo $template?>css/style.css" rel="stylesheet">
		<link href="<?php echo $template?>css/show_albums.css" rel="stylesheet">
		<script type="text/javascript" language="javascript" src="<?php echo $template?>js/jquery.js"></script>

		
		<link href="<?php echo $template?>css/menu.css" rel="stylesheet">
		<link href="<?php echo $template?>css/css_tooltip.css" rel="stylesheet">
		<link href="<?php echo $template?>css/default.css" media="screen" rel="stylesheet" type="text/css">
		<?php echo $this->layouts->print_includes(); ?>
	</head>

<body style="background:url(<?php echo $template?>images/body_bg.jpg) no-repeat fixed center top" gram_dict="true">
	<div id="dhtmltooltip"></div>
	<img id="dhtmlpointer" src="./Du lịch Hòa Bình_files/tooltiparrow.gif">
	<script type="text/javascript" src="<?php echo $template?>js/jquery.watermarkinput.js" charset="UTF-8"></script>
	<script type="text/javascript" src="<?php echo $template?>js/search.js" charset="UTF-8"></script>
	<script type="text/javascript" charset="utf-8" src="<?php echo $template?>js/common.js"></script>
	
	<link rel="stylesheet" href="<?php echo $template?>css/slider.css" type="text/css" media="screen">
	<link rel="stylesheet" type="text/css" href="<?php echo $template?>css/my.css">

	<div id="main-container" style="position: relative;">
		<div id="header">
			<div class="sub-header">
				<p class="logo">
					<a href="/">
						<img src="<?php echo $template?>images/logo.png" width="170">
					</a>
				</p>
				<div class="box-search-menu-top">
					<div class="menu-top">
						<ul class="menu-item">
							<li class="gt">
								<a href="/a/gioithieu">Giới thiệu</a>
							</li>
							<li>
								<a href="/a/lienhe">Liên hệ</a>
							</li>
						</ul>
					</div>
					<div class="box-search">
						<div class="holine"></div>
					</div>
				</div>
				<div class="nav">
					<ul>
						<li>
							<a href="/">Trang chủ</a>
						</li>
						<li>
							<a class="main" href="/a/tourtrongnuoc" style="padding: 0px 9px;">Tour trong nước</a>
						</li>
						<li>
							<a class="main" href="/a/tourngoainuoc" style="padding: 0px 9px;">Tour nước ngoài</a>
						</li>
						<li>
							<a class="main" href="/a/khachsan" style="padding: 0px 9px;">Khách sạn</a>
						</li>
						<li>
							<a class="main" href="/a/dichvukhac" style="padding: 0px 9px;">Dịch vụ khác</a>
						</li>
						<li>
							<a class="main" href="/a/thangcanh" style="padding: 0px 9px;">Danh lam thắng cảnh</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div id="content-wapper-main">
			<?php echo $content_for_layout; ?>
		</div>
		
		
		
		<div id="footer">
				<div class="menu-footer chrome_nav">
					<ul id="nav" class="dropdown dropdown-horizontal dropdown-upward">
						<li><a href="/">Trang chủ</a></li>
						<li><a href="/a/tourtrongnuoc">Tour trong nước</a></li>
						<li><a href="/a/tourngoainuoc">Tour nước ngoài</a></li>
						<li><a href="/a/dichvukhac">Dịch vụ khác</a></li>
						<li><a href="/a/thangcan">Danh lam thắng cảnh</a></li>
					</ul>
				</div>
				<div class="sub-footer">
					<div class="address">
						<div class="logo">
							<a href="/">
								<img src="<?php echo $template?>images/logo_f.png" width="85" pagespeed_url_hash="1005337039">
							</a>
							<p class="slogun">Thắp sáng tình yêu việt</p>
						</div>
						<ul class="items-address">
							<li class="name">CÔNG TY CỔ PHẦN DU LỊCH Sunrise TST Travel</li>
							<li>60 Võ Văn Tần, quận 3, TP. Hồ Chí Minh, Việt Nam</li>
							<li><strong>ĐT:</strong> (84.8) 3933.0228 (Xe), (84.8) 3930.4079 (Vé), (84.8) 3930.3325 (Tour)</li>
							<li><strong>Email:</strong> peacetour@hcm.vnn.vn</li>
							<li>Fax: (84.8) 3930.4416 - Hotline: 0913.172741 / 0912.024.347</li>
						</ul>
					</div>
					<div class="copyright">
						<ul class="items">
							<li>Số đăng ký kinh doanh: 0300469106 do Sở kế hoạch và đầu tư Tp.HCM cấp</li>
							<li>Số giấy phép thiết lập trang TTĐTTH: 87/GP-ICP-STTTT cấp ngày29/10/2012</li>
							<li>Người chịu trách nhiệm trang web: bà Hoàng Lê Quyên</li>
							<li>© Copyright 2011 - Peace Tour Co., All rights reserved</li>
						</ul>
					</div>
				</div>
		</div>
	</div>
</body>
</html>