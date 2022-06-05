<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>라일락 서점</title>
<link rel="stylesheet" type="text/css" href="./css/common.css">
<link rel="stylesheet" type="text/css" href="./css/customer.css">
</head>
<body> 
<header>
    <?php include "./include/header.php";?>
</header>  
<section>
   	<div id="board_box">
	    <h3 class="title">
			FAQ
		</h3>
<?php
	$num  = $_GET["num"];
	$page  = $_GET["page"];

	$con = mysqli_connect("localhost", "user1", "12345", "sample");
	$sql = "select * from customer where num=$num";
	$result = mysqli_query($con, $sql);

	$row = mysqli_fetch_array($result);
	$subject    = $row["subject"];
	$content    = $row["content"];

	$content = str_replace(" ", "&nbsp;", $content);
	$content = str_replace("\n", "<br>", $content);

  
	mysqli_query($con, $sql);
?>		
	    <ul id="view_content">
			<li>
				<span class="col1"><b>제목 :</b> <?=$subject?></span>
			</li>
			<li>
				<?=$content?>
			</li>		
	    </ul>
        <ul class="buttons">
				<li><button onclick="location.href='customer_center.php'">목록</button></li>
        </ul>
	</div> <!-- board_box -->
</section>
<footer>
    <?php include "./include/footer.php";?>
</footer>
</body>
</html>