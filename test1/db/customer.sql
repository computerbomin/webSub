-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 22-06-05 08:54
-- 서버 버전: 10.4.22-MariaDB
-- PHP 버전: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `sample`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `customer`
--

CREATE TABLE `customer` (
  `num` int(11) NOT NULL,
  `subject` char(200) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `customer`
--

INSERT INTO `customer` (`num`, `subject`, `content`) VALUES
(1, '[회원관련]회원가입없이 주문할수있나요?', '저희 서점은 회원가입후 주문을 할수있습니다. 책 주문을 하고싶으시면 회원가입부터 하시길 바랍니다.'),
(2, '[회원관련]비밀번호를 바꾸고 싶어요', '로그인후 정보수정페이지로 들어가 바꾸시거나 고객센터에 문의하세요'),
(3, '[회원관련]탈퇴후 재가입할려는데 제한이있나요?', '탈퇴후 기간제한 없이 바로재가입 가능합니다.'),
(4, '[회원관련]비밀번호도 모르고 등록이메일도 모르겠어요', '고객센터에 전화하셔서 고객님의 정보를 알려주시면 관리자가 임시비밀번호를 알려드리겠습니다.'),
(5, '[회원관련]로그인하지않았는데 자동으로 로그인 되어있어요', '기본적으로 자동로그인을 지원하고있습니다. 자동로그인을 원하지 않으시면 불편하시겠지만 사이트 이용이 끝날때마다 로그아웃을 해주시길 바랍니다.'),
(6, '[회원관련]회원가입에 제한이 있나요?', '회원가입에는  제한을 두고 있지 않습니다'),
(7, '[결제관련]결제했는데 결제수단 바꿀수있나요?', '결제완료후에는 변경이 가능하지 않습니다.결제수단으로 바꾸시려면 현재 주문하신 상품을 취소하신후 다시 결제해주시길 바랍니다.'),
(8, '[결제관련]주문했는데 주문한 내역은 어디서 보나요?\n', '탭에 주문자 정보를 보시면 확인이 가능합니다.\n'),
(9, '[결제관련]주문을 했는데 취소하고싶어요', '주문자정보를 통해서 취소하실수있습니다. '),
(10, '[결제관련]상품이 발송중이라고 떴는데 취소할수있나요?\n', '발송준비중일때만 취소할수있습니다. 발송중 발송후에는 상품수령후 반품을 해주시길바랍니다.'),
(11, '[환불관련]상품이 왔는데 하자가 있는경우엔 환불이 되나요?\n', '정책에따라 저희측에 문제가있는경우엔 전액환불 또는 교환을 해드리고 고객님의 실수로 하자가 생기는 경우 환불은 해드리지 않습니다.'),
(12, '[환불관련]반품 환불했을때 택배비를 고객이 지불하나요?\n', '고객님의 단순 변심으로 인한 환불 반품 경우에만 택배비를 받고있습니다.\n'),
(13, '[환불관련]반품취소는 어떻게 하나요?\n', '고객센터에 문의하시면 취소할수있습니다.\n'),
(14, '[환불관련]환불신청하면  언제 환불이 완료되나요?', '환불신청날로부터 3~5일내로 환불이 완료됩니다.'),
(15, '찾는 책이 없어요', '검색어를 잘못입력하셨거나 저희서점에는 없는 책입니다. 검색어를 제대로 입력해주시거나 고객센터에 문의해주시길 바랍니다.');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`num`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `customer`
--
ALTER TABLE `customer`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
