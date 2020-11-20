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
<title>인사말</title>
<link rel="apple-touch-icon-precomposed" href="app_icon.png">
<link rel="apple-touch-startup-image" href="startup.png">
<!--<link rel="stylesheet" href="css/sub1.css">-->
<link rel="stylesheet" href="css/common.css">    
<link rel="stylesheet" href="css/idangerous.swiper.css">

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
<div id="wrap">
 <div class="box"></div>
<header id="headerArea">
<div class="headerBox">
<h1><a href="index.html"></a></h1>
<a href="#" class="menuBtn"><span></span><span></span><span></span></a>
<div id="nav">
<nav id="gnb">
<ul class="user">
    <li>
        <a href="#"></a>
    </li>
</ul>
<h2 class="hidden">글로벌네비게이션영역</h2>
<ul class="mainMenu">
    <li class="depth1"><a href="#"><span>▼</span> 기관정보 및 사업정보</a>
        <ul>
            <li><a href="sub1-1.php">인사말</a></li>
            <li><a href="sub1.html">기관역사</a></li>
            <li><a href="sub1.html">경영목표·비전</a></li>
        </ul>
    </li>
    <li class="depth1"><a href="#"><span>▼</span> 디자인의 사회적 가치</a>
        <ul>
            <li><a href="sub2.html">추진체계</a></li>
            <li><a href="sub2.html">전략과제 및 추진활동</a></li>
        </ul>
    </li>
    <li class="depth1"><a href="#"><span>▼</span> 통합 디자인 민원센터</a>
        <ul>
            <li><a href="sub3.html">핵심서비스 이행표준</a></li>
            <li><a href="sub3.html">KIDP Main News</a></li>
        </ul>
    </li>
    <li class="depth1"><a href="#"><span>▼</span> 문화확산 및 해외시장</a>
        <ul>
            <li><a href="sub4.html">대한민국디자인전람회</a></li>
            <li><a href="sub4.html">디자인코리아</a></li>
        </ul>
    </li>
</ul>
<a class="mclose" href="#"></a>
</nav>
<ul class="join"> <?
if(!$userid) 
{
?>
<li><a href="../login/login_form.php">로그인</a></li>
<li><a href="../member/join.html">회원가입</a></li>
<?
}
else
{
?>
<li><a href="../login/logout.php">로그아웃</a></li>
<li><a href="../login/member_form_modify.php">정보수정</a></li>
<?
}
?>
</ul>
</div>
</div>
</header>
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
<h2>인사말</h2><p></p>
<p>한국디자인진흥원장 윤주현</p>
<ul>

<li>21세기 디자인 시대, 한국디자인진흥원 홈페이지를 방문하여 주신 여러분을 진심으로 환영합니다.</li>
<li>한국디자인진흥원은 디자인산업 육성을 위해 국가가 설립한 국내 유일의 디자인 선도·진흥기관입니다. 1970년 이래 디자인기업지원·문화확산·인재육성·미래연구·정보제공 등, 디자인 영역 전반을 아우르며 한국 디자인과 산업 경쟁력 향상을 위해 힘써왔습니다.</li>
<li>디자인 주도 창업 문화 활성화와 디자인산업의 일자리 창출을 위한 창업보육센터(2010년/2017년, 대전/성남 본원), 디자인 융합연구 수행의 거점인 미래디자인융합센터(2015년, 양산)를 설립 운영하고 있고, 중국 베이징(2013년)과 이우(2015년), 베트남 하노이(2018년), 2019년에는 중국 순더에 한국디자인 사무소를 개소하여 K-디자인이 세계 곳곳에 진출할 수 있도록 지원하고 있습니다.</li>
<li>2019년부터 패션, 뷰티, 라이프스타일 디자인에 AI, IT기술을 접목해 스타일테크 산업에 디자인이 혁신 전략으로 활용되도록 추진하고 있습니다.
 국민디자인단, 국민UX사업, 도시재생사업 등 공공서비스와 정부 정책에도 서비스디자인이 참여해 사회문제를 해결하고 지역사회를 혁신하는 역할로 자리잡을 수 있도록 하겠습니다.</li><li> 디자인통합민원센터(drights.kidp.or.kr) 운영으로 디자인 가치를 존중하고 디자인권리가 보호받는 문화를 정착시켜 궁극적으로 건강한 디자인 생태계를 조성하겠습니다.</li>
<li>한국디자인진흥원이 주관하는 모든 공모전과 선정사업의 심사는 우수하고 검증된 평가위원 풀을 통해 공정성과 투명성을 한층 강화하여 운영하고 있습니다.
 디자이너를 비롯한 기업인 여러분의 많은 참여와 관심을 부탁드립니다.</li>
<li>한국디자인진흥원은 4대 경영방침과 9대 핵심가치를 바탕으로 디자인 주도로 산업과 사회를 혁신하고 모든 국민이 행복한 포용국가를 실현하는 데 기여하겠습니다.
    <br>감사합니다.</li>
</ul>
    </article>
    <? include "foot.html" ?>

    </div>
</body>
<script src="js/prefixfree.min.js"></script>
<script src="js/nav_new.js"></script>
<script src="js/jquery-1.12.4.min.js"></script>
<script src="js/jquery-migrate-1.4.1.min.js"></script>
</html>