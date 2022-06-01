<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>라일락 서점</title>
<link rel="stylesheet" type="text/css" href="./css/common.css">
<link rel="stylesheet" type="text/css" href="./css/board.css">
</head>
<body> 
<header>
    <?php include "./include/header.php";?>
</header>  
<section>
   	<div id="board_box">
	    <h3 class="title">
			게시판 > 상품보기
		</h3>
<?php
	$num  = $_GET["num"];
	$page  = $_GET["page"];

	$con = mysqli_connect("localhost", "user1", "12345", "sample");
	$sql = "select * from board where num=$num";
	$result = mysqli_query($con, $sql);

	$row = mysqli_fetch_array($result);
	$id      = $row["id"];
	$name      = $row["name"];
	$regist_day = $row["regist_day"];
	$price    = $row["price"];
	$imageUrl    = $row["imageUrl"];
	$file_image = "<img src='$imageUrl'>";
	$subject    = $row["subject"];
	$content    = $row["content"];
	$file_name    = $row["file_name"];
	$file_type    = $row["file_type"];
	$file_copied  = $row["file_copied"];
	$hit          = $row["hit"];

	$content = str_replace(" ", "&nbsp;", $content);
	$content = str_replace("\n", "<br>", $content);

	$new_hit = $hit + 1;
	$sql = "update board set hit=$new_hit where num=$num";   
	mysqli_query($con, $sql);
?>		
	    <ul id="view_content">
			<li>
				<span class="col4"><a href="board_view.php?num=<?=$num?>&page=<?=$page?>"><?=$file_image?></a></span>
				<span class="col1"><b>상품명 :</b> <?=$subject?></span>
				<span class="col2"><b>가격 : </b> <?=$price?></span>
			</li>
			<li>
				<?php
					if($file_name) {
						$real_name = $file_copied;
						$file_path = "./data/".$real_name;
						$file_size = filesize($file_path);
			           	}
				?>
				<?=$content?>
			</li>		
	    </ul>
		<?php
            if($userlevel==1) {
            ?>
			<ul class="buttons">
				<li><button onclick="location.href='board_modify_form.php?num=<?=$num?>&page=<?=$page?>'">수정</button></li>
				<li><button onclick="location.href='board_delete.php?num=<?=$num?>&page=<?=$page?>'">삭제</button></li>
				<li><button onclick="location.href='board_form.php'">글쓰기</button></li>
				<li><button onclick="location.href='board_list.php?page=<?=$page?>'">목록</button></li>
			</ul>
            <?php
        	}
			else {
				?>
				<ul class="buttons">
				<li><button onclick="location.href='board_list.php?page=<?=$page?>'">목록</button></li>
			</ul>
			<?php
			}
            ?>
	</div> <!-- board_box -->
</section> 
<footer>
    <?php include "./include/footer.php";?>
</footer>
</body>
</html>
