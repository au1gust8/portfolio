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
<title>기관역사</title>
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

<div class="visual">
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
<h2>기관역사</h2>
<div>
<p class="history1"></p>
<ul>
    <li><span class="red">2018</span><br> 한-베 디자인센터 개소</li>
    <li><span>2015</span><br> 한국디자인이우센터 오픈
        <br>미래디자인융합센터<br>완공 및 입주</li>
    <li><span>2013</span><br> 고객가치경영 선포
        <br>한국디자인진흥원<br> 중국사무소(KIDP China) 오픈</li>
    <li><span>2012</span><br> K-DESIGN 비전 선포식
        <br>제5차 산업디자인<br> 진흥종합계획(2013~2017)</li>
    <li><span>2011</span><br> 제9차 경제정책조정회의
        <br>'디자인산업 육성 종합계획' 발표</li>
    <li><span>2010</span><br> 해외디자인 나눔사업 실시
        <br>(베트남, 말레이시아)</li>
    <li><span>2008</span><br> 제4차 산업디자인 진흥종합계획 공고</li>
    <li><span>2007</span><br> 디자인나눔(사회공헌활동)시작</li>
    <li><span>2006</span><br> Design Korea
        <br>– 상하이 개최</li>
    <li><span class="red">2001</span><br> 세계산업디자인총회(ICSID) 개최
        <br>코리아디자인센터 준공<br> (한국디자인진흥원 이전)
        <br>한국디자인진흥원으로 출범<br> (산업디자인진흥법 개정)</li>
    <li><span>2000</span><br> 세계그래픽디자인대회(ICOGRADA) 개최</li>
</ul>
</div>
 <div>
<p class="history2"></p>
<ul>
    <li><span class="red">1999</span><br>제1회 대한민국디자인진흥대회 개최 </li>
    <li><span>1997</span><br>산업디자인진흥법 제정 </li>
    <li><span>1985</span><br>우수산업디자인(GD)상품 선정제 도입 </li>
    <li><span>1977</span><br>산업디자인포장진흥법 제정 </li>
    <li><span>1970</span><br>한국디자인포장센터 설립 </li>
</ul>
</div>
    </article>
<? include "foot.html" ?>
<script src="js/jquery-1.12.4.min.js"></script>
<script src="js/jquery-migrate-1.4.1.min.js"></script>
<script src="js/swiper.min.js"></script>
</body>
</html>