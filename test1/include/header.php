<?php
include $_SERVER['DOCUMENT_ROOT']."/project/webSub/test1/include/db.php";
?>

<?php
if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
else $userid = "";
if (isset($_SESSION["username"])) $username = $_SESSION["username"];
else $username = "";
if (isset($_SESSION["userlevel"])) $userlevel = $_SESSION["userlevel"];
else $userlevel = "";
if (isset($_SESSION["userpoint"])) $userpoint = $_SESSION["userpoint"];
else $userpoint = "";
?> 

<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <title>라일락 서점</title>
    <link rel="stylesheet" href="/project/webSub/test1/css/common.css" />
</head>
<body>
    <header>
        <div id="header_in">
            <div id="logo">
                <a href="index.php"><input type="image" src="/project/webSub/test1/img/logo.jpg" alt="logo" title="logo" width="100" left="10px"/></a>
            </div>
            <form action="search.php" method="get">
                <div id="search_bar">
                    <input type="text" name="search"/>
                </div>
                <div id="search_bt">
                    <input type="image" src="/project/webSub/test1/img/search_bt.png" onclick="location.href='search.php'" name="search">
                </div>
            </form>
            <div id="header_in2">
                <div id="service_menu">
                    <ul>
                        <?php
                        if(!$userid) {
                            ?>
                            <li><a href="login_form.php">로그인</a></li>
                            <li><a href="member_form.php">회원 가입</a> </li>
                            <?php
                        } else {
                            $logged = $username." 님";
                            ?>
                            <li><?=$logged?></li>
                            <li><a href="logout.php">로그아웃</a> </li>
                            <li><a href="member_modify_form.php">정보 수정</a></li>
                            <?php
                        }
                        ?>
                        <?php
                        if($userlevel==1) {
                            ?>
                            <li><a href="admin.php">관리자 모드</a></li>
                            <li><a href="board_form.php">상품 올리기</a></li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
                <nav>
                    <ul>
                        <li><a href="./customer_center.php">고객센터</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>