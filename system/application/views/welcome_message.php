﻿<div id="content-wapper">
	<div class="wrapper_slider">
		<!--- SILIDE BAR -->
	</div> 
	<div class="clear"></div>
	<div class="group-tour">
	<div class="col1">
		<div class="tour-in-water">
			<div class="title">
				<p class="text">
					<a href="/index/tourtrongnuoc">Tour trong nước</a>
				</p>
				<p class="more">
					<a href="/index/tourtrongnuoc">Xem thêm</a>
				</p>
			</div>
			<ul class="content">
				<?php
					foreach ($tourtrongnuoc as $value) {
						# code...
				?>
					<li>
						<p class="img">
							<?php 
								if(trim($value->texthot) != ""){
									echo '<span class="text_hot">'.$value->texthot.'</span> <span class="hot"></span>';
								}
							?>
							<a href="#">
								<img src="/public/img/imgtour/<?php echo $value->img?>" width="150" height="100" alt="<?php echo $value->name?>">
							</a>
						</p>
						<div class="info-tour">
							<p class="name">
								<a href="#" class="masterTooltip" title="<?php echo $value->name?>"><?php echo $value->name?>
								</a>
							</p>
							<p class="line"><strong>Thời gian:</strong> <?php echo $value->timeday?> ngày <?php echo $value->timenight?> đêm</p>
							<p class="price"><?php echo number_format($value->price, 0, ",",".")?> VNĐ</p>
							<p class="line"><strong>Phương tiện:</strong> <?php echo $value->how?></p>
							<p class="line"><strong>Khởi hành:</strong> <?php echo $value->startdate?></p>
						</div>
					</li>
				<?php
					}
				?>
			</ul>
		</div>
		<div class="tour-in-water">
			<div class="title">
				<p class="text"><a href="/index/tourkhuyenmai">Tour khuyến mãi</a></p>
				<p class="more"><a href="/index/tourkhuyenmai">Xem thêm</a></p>
			</div>
			<ul class="content">
				<?php
					foreach ($tourkhuyenmai as $value) {
						# code...
				?>
					<li>
						<p class="img">
							<?php 
								if(trim($value->texthot) != ""){
									echo '<span class="text_hot">'.$value->texthot.'</span> <span class="hot"></span>';
								}
							?>
							<a href="#">
								<img src="/public/img/imgtour/<?php echo $value->img?>" width="150" height="100" alt="<?php echo $value->name?>">
							</a>
						</p>
						<div class="info-tour">
							<p class="name">
								<a href="#" class="masterTooltip" title="<?php echo $value->name?>"><?php echo $value->name?>
								</a>
							</p>
							<p class="line"><strong>Thời gian:</strong> <?php echo $value->timeday?> ngày <?php echo $value->timenight?> đêm</p>
							<p class="price"><?php echo number_format($value->price, 0, ",",".")?> VNĐ</p>
							<p class="line"><strong>Phương tiện:</strong> <?php echo $value->how?></p>
							<p class="line"><strong>Khởi hành:</strong> <?php echo $value->startdate?></p>
						</div>
					</li>
				<?php
					}
				?>
			</ul>
		</div>
	</div>
	<div class="col2">
		<div class="tour-in-water">
			<div class="title">
				<p class="text">
					<a href="/index/tourngoainuoc">Tour ngoài nước</a>
				</p>
				<p class="more">
					<a href="/index/tourngoainuoc">Xem thêm</a>
				</p>
			</div>
			<ul class="content">
				<?php
					foreach ($tourngoainuoc as $value) {
						# code...
				?>
					<li>
						<p class="img">
							<?php 
								if(trim($value->texthot) != ""){
									echo '<span class="text_hot">'.$value->texthot.'</span> <span class="hot"></span>';
								}
							?>
							<a href="#">
								<img src="/public/img/imgtour/<?php echo $value->img?>" width="150" height="100" alt="<?php echo $value->name?>">
							</a>
						</p>
						<div class="info-tour">
							<p class="name">
								<a href="#" class="masterTooltip" title="<?php echo $value->name?>"><?php echo $value->name?>
								</a>
							</p>
							<p class="line"><strong>Thời gian:</strong> <?php echo $value->timeday?> ngày <?php echo $value->timenight?> đêm</p>
							<p class="price"><?php echo number_format($value->price, 0, ",",".")?> VNĐ</p>
							<p class="line"><strong>Phương tiện:</strong> <?php echo $value->how?></p>
							<p class="line"><strong>Khởi hành:</strong> <?php echo $value->startdate?></p>
						</div>
					</li>
				<?php
					}
				?>
			</ul>
		</div>
		<div class="tour-in-water">
			<div class="title">
				<p class="text"><a href="/index/tourfree">TOUR FREE AND EASY</a></p>
				<p class="more"><a href="/index/tourfree">Xem thêm</a></p>
			</div>
			<ul class="content">
				<?php
					foreach ($tourfree as $value) {
						# code...
				?>
					<li>
						<p class="img">
							<?php 
								if(trim($value->texthot) != ""){
									echo '<span class="text_hot">'.$value->texthot.'</span> <span class="hot"></span>';
								}
							?>
							<a href="#">
								<img src="/public/img/imgtour/<?php echo $value->img?>" width="150" height="100" alt="<?php echo $value->name?>">
							</a>
						</p>
						<div class="info-tour">
							<p class="name">
								<a href="#" class="masterTooltip" title="<?php echo $value->name?>"><?php echo $value->name?>
								</a>
							</p>
							<p class="line"><strong>Thời gian:</strong> <?php echo $value->timeday?> ngày <?php echo $value->timenight?> đêm</p>
							<p class="price"><?php echo number_format($value->price, 0, ",",".")?> VNĐ</p>
							<p class="line"><strong>Phương tiện:</strong> <?php echo $value->how?></p>
							<p class="line"><strong>Khởi hành:</strong> <?php echo $value->startdate?></p>
						</div>
					</li>
				<?php
					}
				?>
			</ul>
		</div>
	</div>

	</div>
	<div class="group-ads-other">
	<div class="box-ads">
		<div id="video">
		<iframe width="280" height="230" src="https://www.youtube.com/embed/09R8_2nJtjg" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
	<div class="group-service">
		<div class="group-rent">
			<div class="bg-title">
				<p class="text">
					<a href="/index/thutucvisa">THỦ TỤC VISA</a>
				</p>
				<p class="more">
					<a href="/index/thutucvisa" target="_self">Xem thêm</a>
				</p>
			</div>
			<div class="item0">
				<p class="img">
					<a href="http://peacetour.com.vn/xem-tin/thu-tuc-visa-0/visa-nhap-canh-ukraina-1663.html">
						<img src="/public/img/imgvisa/<?php echo $visa_f->img ?>" width="150" alt="<?php echo $visa_f->title ?>">
					</a>
				</p>
				<div class="info-service">
					<p class="name">
						<a href="http://peacetour.com.vn/xem-tin/thu-tuc-visa-0/visa-nhap-canh-ukraina-1663.html"> <?php echo $visa_f->title ?>
						</a>
					</p>
					<p class="summary"></p>
				</div>
			</div> 
				<ul class="relative-service">
				<?php
					$i = 0;
					foreach ($visa_all as $value) {
						# code...
						if($i != 0){
				?>
							<li><a href="http://peacetour.com.vn/xem-tin/thu-tuc-visa-0/visa-nhap-canh-viet-nam-1475.html"><?php echo $value->title ?></a></li>
				<?php
						}
						$i++;
					}
				?>
				</ul>
			</div>
	</div>
	<div class="box-video-supprt">
		<div class="support">
			<ul class="items">
				<li>
					<a href="ymsgr:sendim?hotel.peacetour" title=" Đặt vé máy bay, xe hợp đồng, khách sạn, tour..."><img border="0" align="absmiddle" src="./Du lịch Hòa Bình_files/online(4)" pagespeed_url_hash="1547806218"></a>
					<span>Khách sạn-Nhà hàng</span>
				</li>
				<li>
					<a href="ymsgr:sendim?peacetour_outbound" title=" Đặt vé máy bay, xe hợp đồng, khách sạn, tour..."><img border="0" align="absmiddle" src="./Du lịch Hòa Bình_files/online(5)" pagespeed_url_hash="3601729825"></a>
					<span>Tour nước ngoài</span>
				</li>
			</ul>
		</div>
	</div>
	</div>
	<div class="box-news-index">
	<div class="box-slide">
	<div class="title-main">
		<p class="text"><a href="http://peacetour.com.vn/tin-du-lich.html">TIN DU LỊCH</a></p>
		<p class="more"><a href="http://peacetour.com.vn/tin-du-lich.html">Xem thêm</a></p>
	</div>
	<div class="item0">
		<p class="img">
			<a href="http://peacetour.com.vn/xem-tin/tin-du-lich-0/mo-cua-tham-quan-noi-vua-nguyen-doc-sach-2320.html"><img src="/public/img/imgnews/<?php echo $news_f->img ?>" width="296" alt="<?php echo $news_f->title ?>"></a>
		</p>
		<p class="name"><a href="http://peacetour.com.vn/xem-tin/tin-du-lich-0/mo-cua-tham-quan-noi-vua-nguyen-doc-sach-2320.html"><?php echo $news_f->title ?></a>
		</p>
	</div> 
	<div class="relative-item0">
		<ul class="items">
			<?php
					$i = 0;
					foreach ($news_all as $value) {
						# code...
						if($i != 0){
				?>
					<li>
						<a href="http://peacetour.com.vn/xem-tin/tin-du-lich-0/bao-tang-gia-lai-gioi-thieu-gan-7000-hien-vat-ve-vung-dat-tay-nguyen-2321.html"><?php echo $value->title ?></a>
					</li>
				<?php
						}
						$i++;
					}
				?>
		</ul>
	</div>
	</div>
	<div class="box-relative-news">
	<div class="title-main">
		<p class="text"><a href="http://peacetour.com.vn/nhat-ky-du-lich-hoa-binh.html">Nhật ký Du lịch Hoà Bình</a></p>
		<p class="more"><a href="http://peacetour.com.vn/nhat-ky-du-lich-hoa-binh.html">Xem thêm</a></p>
	</div>
	<div class="item0">
		<p class="img">
			<a href="http://peacetour.com.vn/xem-tin/nhat-ky-du-lich-hoa-binh/cong-ty-du-lich-hoa-binh-vinh-du-don-nhan-huan-chuong-lao-dong-hang-nhi-tu-hao-25-nam-hinh-thanh-va-phat-trien-2217.html">
				<img src="/public/img/imgdairy/<?php echo $dairy_f->img ?>" width="115" alt="<?php echo $dairy_f->title ?>">
			</a>
		</p>
		<div class="info-news">
			<p class="name">
				<a href="http://peacetour.com.vn/xem-tin/nhat-ky-du-lich-hoa-binh/cong-ty-du-lich-hoa-binh-vinh-du-don-nhan-huan-chuong-lao-dong-hang-nhi-tu-hao-25-nam-hinh-thanh-va-phat-trien-2217.html"><?php echo $dairy_f->title ?></a>
			</p>
		</div>
	</div> 
	<ul class="relative-news">
		<?php
			$i = 0;
			foreach ($dairy_all as $value) {
				# code...
				if($i != 0){
		?>
					<li>
						<a href="http://peacetour.com.vn/xem-tin/nhat-ky-du-lich-hoa-binh/tranh-nham-lan-giua-2-cong-ty-cp-du-lich-hoa-binh-viet-nam-va-hoa-binh-tphcm-2216.html"><?php echo $value->title ?></a>
					</li>
		<?php
				}
				$i++;
			}
		?>
	</ul>
	</div>
	</div>
	</div>