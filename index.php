<?php  
 include "db.php";
 
 function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

$sql = mq("insert into ip (ip,agent) values('".get_client_ip()."','".$_SERVER['HTTP_USER_AGENT']."')");

 //$ip_check = mq("select * from ip");
 //$ip_check = $ip_check->fetch_array();
// if($ip_check >= 1){
  //   echo "<script>alert('통신사 IP가 감지되었습니다.');</script>";
 //}    
?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Diverse</title>
        <link rel="shortcut icon" href="diverseicon.png" type="image/x-icon">
        <link rel="stylesheet" href="style.css">
        <meta name="description" content="세상을 편리하게라는 모토로 여러 서비스를 만들고 있습니다.">
        <script
            async="async"
            src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5823287048846038"
            crossorigin="anonymous"></script>
        <link
            rel="stylesheet"
            type="text/css"
            href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
            crossorigin="anonymous">
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
            integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"/>
        <style>
            a {
                text-decoration: none;
                color: black;
            }

            .btn {
                border-radius: 10px!important;
            }

            .effects {
                font-size: 45px;
                text-shadow: 0 0 25px rgb(0, 0, 0, 0.3)!important;
                font-weight: 800;
            }

            .typeText::after {
                content: "|";
                animation: blink 1s step-end infinite;
                color: black;
            }

            @keyframes blink {
                0% {
                    opacity: 1;
                }
                49% {
                    opacity: 1;
                }
                50% {
                    opacity: 0;
                }
                100% {
                    opacity: 0;
                }
            }

            .btn-primary {
                background-color: #E1EEFF;
                border: 0;
                color: #0270FE;
            }

            .btn-primary:hover {
                background-color: #0270FE;
                border: 0;
                color: #fff;
            }

            .btn-secondary {
                background-color: #F2F2F2!important;
                border: 0!important;
                color: black!important;
            }

            .btn-secondary:hover {
                background-color: #F2F2F2!important;
                border: 0!important;
                color: black!important;
            }

            .btn-warning {
                background-color: rgb(255,255,255,0.8);
                border: 0;
                color: black;
            }

            .btn-warning:hover {
                background-color: rgb(255,255,255);
                border: 0;
                color: black;
            }
        </style>
    </head>
    <!-- Google tag (gtag.js) -->
    <script
        async="async"
        src="https://www.googletagmanager.com/gtag/js?id=G-Y7QGLFT91Q"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-Y7QGLFT91Q');
    </script>
    <body>

        <nav
            class="navbar navbar-expand-lg bg-dark navbar-dark bg-body-tertiary fixed-top"
            style="background-color: rgb(255, 255, 255)">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Diverse</a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <!-- <li class="nav-item"> <a class="nav-link active" aria-current="page"
                        href="#">Home</a> </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="https://notice.diverse.today">공지사항</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://stats.uptimerobot.com/3P7O0HXP1L/793329347">서버 상태</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="partner.php">파트너</a>
                        </li>
                        <!-- <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false"> Dropdown </a> <ul
                        class="dropdown-menu"> <li> <a class="dropdown-item" href="#">Action</a> </li>
                        <li> <a class="dropdown-item" href="#">Another action</a> </li> <li><hr
                        class="dropdown-divider"></li> <li> <a class="dropdown-item" href="#">Something
                        else here</a> </li> </ul> </li> <li class="nav-item"> <a class="nav-link
                        disabled">Disabled</a> </li> -->
                    </ul>
                    <form class="d-flex" role="search">
                        <a class="btn btn-outline-light" href="donate">
                            <i class="fa-solid fa-circle-dollar-to-slot"></i>
                            후원하기</a>
                        <?php
	if(isset($_SESSION['userid'])){
        $sql = mq("select * from member where id='{$_SESSION['userid']}'");
				while($member = $sql->fetch_array()){
              if($member['access'] == "admin") {
                echo '
                &nbsp;&nbsp; 
                <a class="btn btn-outline-light" href="manage">
                <i class="fa-solid fa-wrench"></i>
                관리</a>';
              }
                }
    }
	?>

                    </form>
                </div>
            </div>
        </nav>

        <div style="margin-top:56px;"></div>

        <!-- <div class="notice"> <i class="fa-solid fa-triangle-exclamation"></i>
        &nbsp;도메인이 diverse.today로 변경되었습니다. </div> -->

        <div class="div1">
            <center>
                <img src="divw.png" alt="" width="290" srcset="">
            </center>
        </div>
        <div class="mt-5">
            <div class="container">
                <h3>Made by Diverse</h3>
                <p>방문해주셔서 감사합니다 😍</p>
                <div
                    class="alert alert-secondary mb-4"
                    style="background-color: #E6E6E6; border: 0; border-radius:13px!important;"
                    role="alert">
                    <b>공지사항</b>&nbsp;
                    <?php 
                     $sql2 = mq("select * from board order by idx desc limit 0,1");  
                     $board = $sql2->fetch_array();
                     echo '<a href="https://notice.diverse.today/read.php?idx='.$board['idx'].'">'.$board['title'].'</a>';
                    ?>
                </div>
                <div class="row row-cols-1 row-cols-md-2 g-4 mb-5">
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div>

                                        <h4 class="weatherInfo">로딩중...</h4>
                                    </div>
                                </div>
                                <p style="margin-bottom: 0.5em">사용자의 위치 정보로 불러온 날씨 정보입니다.</p>
                                <a type="button" class="btn btn-primary" href="https://weather.naver.com/">더보기
                                    <i class="fa-solid fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">

                            <div class="d-flex flex-row">
                            <div class="profile"></div>
<div>

<h4>
                                    <b>

                                    <?php
	if(isset($_SESSION['userid'])){
				$sql = mq("select * from member where id='{$_SESSION['userid']}'");
				while($member = $sql->fetch_array()){

        $mail_hash = md5( strtolower( trim( "{$member['id']}" ) ) );
        //echo '<img src="http://www.gravatar.com/avatar/'.$mail_hash.'?s=40?d=mm">';
       echo '  '.$member['name']."님,";

                }
    }else {
            echo get_client_ip()."님,";
    }
	?>
                                    </b>환영합니다!</h4>
</h4>
</div>
</div>

                                <?php
	if(isset($_SESSION['userid'])){
        echo "보유중인 크레딧 : ";
        $sql = mq("select * from member where id='{$_SESSION['userid']}'");
				while($member = $sql->fetch_array()){
              echo $member['credit']."크레딧";
                }
    }else {
        echo "로그인 시 더 많은 기능을 사용하실 수 있습니다.";
    }
	?>
                                </p>
                            <?php
	if(isset($_SESSION['userid'])){
        echo '                                <a type="button" class="btn btn-primary" href="login/member/logout.php">로그아웃
        <i class="fa-solid fa-chevron-right"></i>
    </a>   &nbsp;  <a type="button" class="btn btn-primary" href="login/member/mypage.php">내 정보 변경
    <i class="fa-solid fa-chevron-right"></i>
</a>';
    }else {
        echo '                                <a type="button" class="btn btn-primary" href="login">로그인
        <i class="fa-solid fa-chevron-right"></i>
    </a>';
    }
	?>

                            </div>
                        </div>
                    </div>
                </div>

                <h3>Diverse 서비스</h3>
                <div style="height:11px;"></div>
                <div class="row row-cols-1 row-cols-md-4 g-4 mb-5">
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">CloudXellent</h5>
                                <p class="card-text">Diverse의 서버들을 관리하는 클라우드셀런트입니다.</p>
                                <div class="d-grid gap-2">
                                    <a
                                        class="btn btn-primary"
                                        type="button"
                                        href="https://cloudxellent.oneoclock.kr">바로가기
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">한시 웹툴</h5>
                                <p class="card-text">생활에 꼭 필요한 기능들을 모아둔 웹툴 모음 사이트입니다.</p>
                                <div class="d-grid gap-2">
                                    <a class="btn btn-primary" type="button" href="https://tools.oneoclock.kr">바로가기
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Diverse 메모</h5>
                                <p class="card-text">훌륭한 웹메모인 Diverse 메모로 여러분의 삶이 더 편리하지길 응원합니다!</p>
                                <div class="d-grid gap-2">
                                    <a class="btn btn-primary" type="button" href="https://memo.diverse.today">바로가기
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">GJMATE 링크단축</h5>
                                <p class="card-text">긴 링크를 GJMATE.GA로 짧게 단축할수 있습니다.</p>
                                <div class="d-grid gap-2">
                                    <a class="btn btn-primary" type="button" href="https://gjmate.ga">바로가기
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h3>조회 서비스</h3>
                <div style="height:11px;"></div>

                <div class="row row-cols-1 row-cols-md-4 g-4 mb-5">
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">택배조회</h5>
                                <p class="card-text">여러 택배사들의 배송정보를 조회할 수 있습니다.</p>
                                <div class="d-grid gap-2">
                                    <a class="btn btn-primary" type="button" href="https://tb.diverse.today">바로가기
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">내 IP 조회</h5>
                                <p class="card-text">나의 IP와 접속 정보를 조회할 수 있는 서비스입니다.</p>
                                <div class="d-grid gap-2">
                                    <a class="btn btn-primary" type="button" href="http://hansub.dothome.co.kr/ip/">바로가기
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">우편번호 조회</h5>
                                <p class="card-text">원하는 주소의 우편번호를 쉽게 조회할 수 있습니다.</p>
                                <div class="d-grid gap-2">
                                    <a class="btn btn-primary" type="button" href="https://zipcode.diverse.today">바로가기
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h3>기타 서비스</h3>
                <div style="height:11px;"></div>
                <div class="row row-cols-1 row-cols-md-4 g-4 mb-5">

                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Diverse Lab</h5>
                                <p class="card-text">새로운 서비스가 공개되기 전 테스트해보는 곳입니다.</p>

                                <div class="d-grid gap-2">
                                    <a
                                        class="btn btn-primary"
                                        type="button"
                                        href="alert.php?credit=5&service=Diverse Lab&link=https://lab.diverse.today">바로가기
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">인스타그램 사진 추출기</h5>
                                <p class="card-text">인스타그램 게시물의 사진을 추출합니다. 추출된 사진을 저장할 수 있습니다.</p>

                                <div class="d-grid gap-2">
                                    <a class="btn btn-primary" type="button" href="https://instagram.diverse.today">바로가기
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm" style="background-color: #FF8000; color: white;   ">
                            <div class="card-body">
                                <h5 class="card-title">테크러스트 인스타그램 팔로우</h5>
                                <p class="card-text">AD | 테크러스트에서는 좋은 IT 콘텐츠로 보답합니다.</p>

                                <div class="d-grid gap-2">
                                    <a
                                        class="btn btn-warning"
                                        type="button"
                                        href="https://www.instagram.com/tech_rust/">바로가기
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5"></div>
            <div class="footer">
                <div class="container">
                    <p>ⓒ 2020-<?php echo date('Y'); ?>.
                        <b>Diverse</b>
                        All rights reserved.
                        <br>
                        Made with ♥ by Diverse</p>
                    <p>문의 :
                        <a href="mailto:contact@diverse.today">contact@diverse.today</a>
                        <br>
                        (답변까지 영업일 기준 평균 1~3일이 소요됩니다.)</p>
                    <p style="margin-bottom:0">
                        <a href="privacy.php">개인정보처리방침</a>
                        |
                        <a href="uses.php">이용약관</a>
                        |
                        <a href="donate">후원하기</a>
                        |
                        <a href="email.php">이메일무단수집거부</a>
                    </p>

                </div>
            </div>

            <!-- Channel Plugin Scripts -->
            <script>
                (function () {
                    var w = window;
                    if (w.ChannelIO) {
                        return (window.console.error || window.console.log || function () {})(
                            'ChannelIO script included twice.'
                        );
                    }
                    var ch = function () {
                        ch.c(arguments);
                    };
                    ch.q = [];
                    ch.c = function (args) {
                        ch
                            .q
                            .push(args);
                    };
                    w.ChannelIO = ch;
                    function l() {
                        if (w.ChannelIOInitialized) {
                            return;
                        }
                        w.ChannelIOInitialized = true;
                        var s = document.createElement('script');
                        s.type = 'text/javascript';
                        s.async = true;
                        s.src = 'https://cdn.channel.io/plugin/ch-plugin-web.js';
                        s.charset = 'UTF-8';
                        var x = document.getElementsByTagName('script')[0];
                        x
                            .parentNode
                            .insertBefore(s, x);
                    }
                    if (document.readyState === 'complete') {
                        l();
                    } else if (window.attachEvent) {
                        window.attachEvent('onload', l);
                    } else {
                        window.addEventListener('DOMContentLoaded', l, false);
                        window.addEventListener('load', l, false);
                    }
                })();
                ChannelIO('boot', {"pluginKey": "5a2aa9c9-bccb-4776-92f0-b6472bd31227"});
            </script>
            <?php?>

            <script>
                function getHide() {
                    document
                        .getElementById("Img_Area")
                        .style
                        .display = "none";
                }
            </script>

            <!-- End Channel Plugin -->
            <script src="weather.js"></script>
            <script src="script.js"></script>
            <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
            <script
                src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
                crossorigin="anonymous"></script>
            <script
                async="async"
                src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5823287048846038"
                crossorigin="anonymous"></script>
        </body>
    </html>