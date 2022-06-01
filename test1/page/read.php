<?php include  $_SERVER['DOCUMENT_ROOT']."/project/webSub/BUY_TEST/include/header.php";
		$bno = $_GET['pno']; /* bno함수에 pno값을 받아와 넣음*/
		$date = date('Y-m-d');
        $userid="";
        //$userip = $_SERVER['REMOTE_ADDR']; '".$userip."'
        if(isset($_SESSION['userid'])){
            $userid = $_SESSION['userid'];
        }else{
            $userid = "guest";
        }

        $sql = mq("insert into recent(pro_no,userid,creation_date) values('".$bno."', '".$userid."', '".$date."')");

?>


<?php include  $_SERVER['DOCUMENT_ROOT']."/project/webSub/test1/include/footer.php"; ?>