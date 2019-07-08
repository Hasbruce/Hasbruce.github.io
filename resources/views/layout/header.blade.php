<!doctype html>
<html>
<head>
    <meta charset="gbk">
    <title>故乡个人博客模板《showtime》</title>
    <meta name="keywords" content="个人博客模板,showtime" />
    <meta name="description" content="个人博客模板《show time》蓝色版，出自前端设计师，杨青的作品。这是一个展示自我的一个博客平台，首页有幻灯，有图文，有tab栏目切换，多样式的调用，图片，文字结合这样一点也不单调." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/showtime/base.css"  rel="stylesheet">
    <link href="/showtime/index.css"  rel="stylesheet">
    <link href="/showtime/about.css"  rel="stylesheet">
    <link href="/showtime/m.css"  rel="stylesheet">
    <link href="/showtime/info.css"  rel="stylesheet">
    <link href="/showtime/share.css"  rel="stylesheet">
    <link href="/showtime/time.css"  rel="stylesheet">

    <script src="/showtime/jquery.min.js"  ></script>
    <script src="/showtime/jquery.easyfader.min.js" ></script>
    <script src="/showtime/hc-sticky.js" ></script>
    <script src="/showtime/comm.js"></script>
    <script src="/showtime/scrollReveal.js" ></script>
    <script src="/showtime/ab.js" ></script>
    <script src="/showtime/ajax.js" ></script>
    <script src="/showtime/gbook.js" ></script>
    <script src="/showtime/scrollReveal.js" ></script>
    <script src="/showtime/share.js" ></script>
    <script src="/showtime/time.js" ></script>
    <!--[if lt IE 9]>
    <script src="/showtime/modernizr.js"></script>
    <![endif]-->
</head>
<body>
<header class="header-navigation" id="header">
    <nav>
        <div class="logo"><a href="/" tppabs="http://showtime.yangqq.com/">故乡个人博客</a></div>
        <h2 id="mnavh"><span class="navicon"></span></h2>
        <ul id="starlist">
            <li><a href="/" tppabs="http://showtime.yangqq.com/">首页</a></li>


            <li ><a href="/home/info" tppabs="http://showtime.yangqq.com/about/">关于我</a></li>


            <li ><a href="/home/list" tppabs="http://showtime.yangqq.com/photo/">图片集锦</a></li>


            <li ><a href="/home/slowlife" tppabs="http://showtime.yangqq.com/life/">慢生活</a></li>


            <li ><a href="/home/fengmain" tppabs="http://showtime.yangqq.com/study/">学无止境</a></li>


            <li ><a href="/home/time" tppabs="http://showtime.yangqq.com/time/">时间轴</a></li>


            <li ><a href="/home/message" tppabs="http://showtime.yangqq.com/e/tool/gbook/?bid=1">留言</a></li>

        </ul>
        <div class="searchbox">
            <div id="search_bar" class="search_bar">
                <form  id="searchform" action="http://showtime.yangqq.com/e/search/index.php" method="post" name="searchform">
                    <input class="input" placeholder="想搜点什么呢.." type="text" name="keyboard" id="keyboard">
                    <input type="hidden" name="show" value="title" />
                    <input type="hidden" name="tempid" value="1" />
                    <input type="hidden" name="tbname" value="news">
                    <input type="hidden" name="Submit" value="搜索" />
                    <p class="search_ico"> <span></span></p>
                </form>
            </div>
        </div>
    </nav>
</header>

<!-- 公共头部代码 -->



@yield('content')








