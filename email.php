
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>이메일무단수집거부 - 한시 Lights</title>
        <link rel="stylesheet" href="style.css?ver=7">
        <meta name="description" content="세상을 편리하게라는 모토로 여러 서비스를 만들고 있습니다.">
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

            .form-control {
                border-radius: 10px!important;
            }
            
            .custom-select {
                border-radius: 10px!important;
                border: 1px solid #ced4da;
            }
        </style>
    </head>
    <body>
        <div class="mt-5"></div>

        <div class="tb mb-4 ">
            <div class="container">
                <h1 class="effects" style="font-size:50px;">
                    이메일무단수집거부
                </h1>
                본 웹사이트는 게시된 이메일 주소가 전자우편 수집 프로그램이나 그 밖의 기술적 장치를 이용하여 무단 수집되는 것을 거부합니다. 이를 위반시 『정보통신망 이용촉진 및 정보보호등에 관한 법률』등에 의해 처벌 받을 수 있습니다.
            </div>
        </div>
        <div class="container">
            <hr style="margin-top: 0;">
            <div class="mt-4"></div>
            <h4>정보통신망 이용촉진 및 정보보호 등에 관한 법률 제50조의 2 (전자우편주소의 무단 수집행위 등 금지)</h4>
누구든지 전자우편주소의 수집을 거부하는 의사가 명시된 인터넷 홈페이지에서 자동으로 전자우편주소를 수집하는 프로그램 그 밖의 기술적 장치를 이용하여 전자우편주소를 수집하여서는 아니된다. <br>
누구든지 제1항의 규정을 위반하여 수집된 전자우편주소를 판매·유통하여서는 아니된다. <br>
누구든지 제1항의 및 제2항의 규정에 의하여 수집·판매 및 유통이 금지된 전자우편주소임을 알고 이를 정보전송에 이용하여서는 아니된다. <br>
<br>
※ 만일, 위와 같은 기술적 조치를 사용한 이메일주소 무단수집 피해를 당하신 경우
불법스팸 대응센터 전용전화(국번없이 1336)나 홈페이지 (http://www.spamcop.or.kr/)의 신고 창을 통하여 신고하기 바랍니다.
 
<div class="mt-4"></div>
            <hr>
            <p>ⓒ 2020-<?php echo date('Y'); ?>.
                <b>HANSHI</b>
                All rights reserved.
                <br>
                Made with ♥ by HANSHI</p>
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
        <!-- End Channel Plugin -->
        <script src="weather.js"></script>
        <script src="script.js"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
            crossorigin="anonymous"></script>
    </body>
</html>