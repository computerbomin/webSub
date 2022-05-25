<?php include  $_SERVER['DOCUMENT_ROOT']."/project/webSub/BUY_TEST/include/header.php"; ?>

<!-- 카테고리 -->
<section id="catagory_list">
	<h2>카테고리</h2>
		<div id="catagory_wrap">
			
			<div class="catagory_container">
				<div class="catagory_img">
					<a href=""><img src="/project/webSub/BUY_TEST/imgs/catagory/home.png" alt="home" title="home" /></a>
				</div>
				<span>생활</span>
			</div>
			<div class="catagory_container">
				<div class="catagory_img">
					<a href=""><img src="/project/webSub/BUY_TEST/imgs/catagory/tv.png" alt="tv" title="tv" /></a>
				</div>
				<span>TV</span>
			</div>
			<div class="catagory_container">
				<div class="catagory_img">
					<a href=""><img src="/project/webSub/BUY_TEST/imgs/catagory/sports.png" alt="sports" title="sports" /></a>
				</div>
				<span>스포츠</span>
			</div>
			<div class="catagory_container">
				<div class="catagory_img">
					<a href=""><img src="/project/webSub/BUY_TEST/imgs/catagory/computer.png" alt="computer" title="computer" /></a>
				</div>
				<span>컴퓨터</span>
			</div>
			<div class="catagory_container">
				<div class="catagory_img">
					<a href=""><img src="/project/webSub/BUY_TEST/imgs/catagory/camera.png" alt="camera" title="camera" /></a>
				</div>
				<span>카메라</span>
			</div>
			<div class="catagory_container">
				<div class="catagory_img">
					<a href=""><img src="/project/webSub/BUY_TEST/imgs/catagory/tshirt.png" alt="tshirt" title="tshirt" /></a>
				</div>
				<span>옷/의료</span>
			</div>
			<div class="catagory_container">
				<div class="catagory_img">
					<a href=""><img src="/project/webSub/BUY_TEST/imgs/catagory/food.png" alt="food" title="food" /></a>
				</div>
				<span>음식</span>
			</div>
			<div class="catagory_container">
				<div class="catagory_img">
					<a href=""><img src="/project/webSub/BUY_TEST/imgs/catagory/book.png" alt="book" title="book" /></a>
				</div>
				<span>도서</span>
			</div>
		</div>
</section>

<!--인기상품-->
<section id="best_list">
	<h2>인기상품</h2>
		<?php
			$sql = mq("select * from product order by pro_num desc limit 0,10"); 
			while($board = $sql->fetch_array())
			{
			//title변수에 DB에서 가져온 title을 선택
			$title=$board["pro_name"]; 
			if(strlen($title)>30)
			{ 
				//title이 30을 넘어서면 ...표시
				$title=str_replace($board["pro_name"],mb_substr($board["pro_name"],0,30,"utf-8")."...",$board["pro_name"]);
			}

		?>
		<div id="shopList2">
			<a href="/page/product/read.php?pno=<?php echo $board['pro_num']; ?>">
				<div class="grid-container">
					<div class="productImg">
						<img src="/project/webSub/BUY_TEST/imgs/catagory/product/computer/<?php echo $board['pro_proimg']; ?>.png" alt="<?php echo $board['pro_proimg']; ?>" title="<?php echo $board['pro_proimg']; ?>" width="220" height="140" />
					</div>
				<ul class="productInfo">
					<li><?php echo $title; ?></li>
					<li><?php echo $board['pro_price']; ?>원</li>
				</ul>
			</a>
		</div>
	<?php } ?>
</div>
<div class="more_bt">더보기</div>
</section>
<!--관심있는 상품-->
<?php include  $_SERVER['DOCUMENT_ROOT']."/project/webSub/BUY_TEST/include/footer.php"; ?>