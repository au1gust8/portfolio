<? 
	session_start(); 
    @extract($_POST);
    @extract($_GET);
    @extract($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
<meta name="format-detection" content="telephone=no">
<title>경영목표·비전</title>
<link rel="apple-touch-icon-precomposed" href="app_icon.png">
<link rel="apple-touch-startup-image" href="startup.png">
<link rel="stylesheet" href="css/sub1.css">
<link rel="stylesheet" href="css/common.css">
<link rel="stylesheet" href="css/idangerous.swiper.css">
<link rel="stylesheet" href="css/flexslider.css">
<script src="js/prefixfree.min.js"></script>
<script>
// <![CDATA[
try {
    window.addEventListener('load', function () {
        setTimeout(scrollTo, 0, 0, 1);
    }, false);
}
catch (e) {}
// ]]>
</script>
<script src="js/jquery-1.7.1.min.js"></script>
<script src="js/nav_new.js"></script>
<script>
window.onload=function(){

        var num = '<?=$_GET['num']?>';
        var nav1= document.getElementById('nav1'); 
        var nav2= document.getElementById('nav2');
        var nav3= document.getElementById('nav3');
        var nav4= document.getElementById('nav4');

          if(num==1){
              nav1.className='current';

          }else if(num==2){
              nav2.className='current';

          }else if(num==3){
              nav3.className='current';

          }else if(num==4){
              nav4.className='current';
          }
}
</script>
<!--[if lt IE 9]> 
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!--[if lt IE 9]>
<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
</head>

<body>
<? include "head.html" ?>
<div id="skipNav"><a href="#content">본문바로가기</a><a href="#gnb">네비게이션바로가기</a> </div>

<div class="subvisual">
<!--<img src="../sub1/common/images/mainvisualsub.jpg" alt="">-->
<h2>기관 및 사업 정보</h2>
</div>
<div class="sub_nav_box">
 <div class="subnav">
    <ul>
        <li><a id="nav1" href="sub1-1.php">인사말</a></li>
        <li><a id="nav2" href="sub1-2.php">기관역사</a></li>
        <li><a id="nav3" href="sub1-3.php">경영목표·비전</a></li>
    </ul>
</div>
</div>            
<article id="content">
<h2>경영목표·비전</h2>
<div class="mission">
    <h4>MISSION</h4>
    <p>디자인주도 혁신을 통한 <br>국가경쟁력 강화 및 삶의 질 향상</p>
</div>
<div class="vision">
    <h4>VISION</h4>
    <p>글로벌 선도 디자인혁신기관</p>
</div>
<div class="goal">
    <h4>경영목표(2024년)</h4>
    <ul>
        <li>디자인 활용률</li>
        <li>33%달성</li>
    </ul>
    <ul>
        <li>디자인 혁신기업</li>
        <li>250개사 지원</li>
    </ul>
    <ul>
        <li>디자인</li>
        <li>시장규모24조원</li>
    </ul>
    <ul>
        <li>고객 만족도</li>
        <li>A등급</li>
    </ul>
</div>
<div class="policy">
    <h4>경영방침</h4>
    <ul>
        <li>혁신성장</li>
        <li>역량강화</li>
        <li>전략경영</li>
        <li>사회적 가치실현</li>
    </ul>
</div>
<div class="value">
    <h4>핵심가치</h4>
    <ul>
        <li>DESIGN DRIVEN INNOVATION(9D)</li>
        <li>스마트융합, 글로컬전문성, 공감소통, 포용안전 </li>
    </ul>
</div>
<div class="strategy">
    <h4>전략목표 및 전략과제</h4>
    <ul>
        <li><span>혁신성장</span> 디자인신시장창출</li>
        <li>전주기 지원을 통한 혁신 기업 활성화</li>
        <li>디자인주도 산업 지역 사회 혁신지원</li>
        <li>K-DESIGN인식 확산 및 국제화</li>
    </ul>
    <ul>
        <li><span>역량강화</span> 4차산업혁명 전략적 대응</li>
        <li>창의 융합형 디자인 인재양성</li>
        <li>미래 디자인 융합 선행연구 강화</li>
        <li>디지털 플랫폼 기반 DB센터 기능 구축</li>
    </ul>
    <ul>
        <li><span>전략경영</span> 디자인씽킹으로 조직혁신</li>
        <li>국민 참여형 정책검증 체계구축</li>
        <li>디자인 씽킹 기반 조직 문화 개선</li>
        <li>참여와 협력을 통해 할 일하는 기관 구현</li>
    </ul>
    <ul>
        <li><span>사회적가치실현</span> 사회적가치의 선도적실현</li>
        <li>디자인 혁신을 통한 양질의 일자리 창출</li>
        <li>환경재난안전관리 및 윤리인권경영을 통한 GWP구축</li>
        <li>사회공헌 및 상생협력을 통한 사회발전 도모</li>
    </ul>
</div>
</article>
<? include "foot.html" ?>
<script src="js/jquery-1.12.4.min.js"></script>
<script src="js/jquery-migrate-1.4.1.min.js"></script>
<script src="js/swiper.min.js"></script>
</body>
</html>