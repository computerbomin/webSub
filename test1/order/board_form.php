<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>라일락 서점</title>
<link rel="stylesheet" type="text/css" href="./css/common.css">
<link rel="stylesheet" type="text/css" href="./css/board.css">
<script>
  function check_input() {
      if (!document.board_form.subject.value)
      {
          alert("상품명을 입력하세요!");
          document.board_form.subject.focus();
          return;
      }
	  if (!document.board_form.price.value)
      {
          alert("가격을 입력하세요!");
          document.board_form.price.focus();
          return;
      }
      if (!document.board_form.content.value)
      {
          alert("내용을 입력하세요!");    
          document.board_form.content.focus();
          return;
      }
	  if (!document.board_form.imageUrl.value)
      {
          alert("이미지 경로를 입력하세요!");    
          document.board_form.imageUrl.focus();
          return;
      }
      document.board_form.submit();
   }
</script>
</head>
<body> 
<header>
    <?php include "./include/header.php";?>
</header>  
<section>
   	<div id="board_box">
	    <h3 id="board_title">
	    		게시판 > 글 쓰기
		</h3>
	    <form  name="board_form" method="post" action="board_insert.php" enctype="multipart/form-data">
	    	 <ul id="board_form">
				<li>
					<span class="col1">이름 : </span>
					<span class="col2"><?=$username?></span>
				</li>		
	    		<li>
	    			<span class="col1">상품명 : </span>
	    			<span class="col2"><input name="subject" type="text"></span>
	    		</li>
				<li>
	    			<span class="col1">상품 가격 : </span>
	    			<span class="col2"><input name="price" type="text"></span>
	    		</li>		    	
	    		<li id="text_area">	
	    			<span class="col1">추가설명 : </span>
	    			<span class="col2">
	    				<textarea name="content"></textarea>
	    			</span>
	    		</li>
				<li id="text_area">	
	    			<span class="col1">상품 이미지 : </span>
	    			<span class="col2">
	    				<textarea name="imageUrl"></textarea>
	    			</span>
	    		</li>
	    	    </ul>
	    	<ul class="buttons">
				<li><button type="button" onclick="check_input()">완료</button></li>
				<li><button type="button" onclick="location.href='board_list.php'">목록</button></li>
			</ul>
	    </form>
	</div> <!-- board_box -->
</section> 
<footer>
    <?php include "./include/footer.php";?>
</footer>
</body>
</html>
