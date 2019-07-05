@extends('layout.header')
@section('content')
<header class="header-navigation" id="header">
    <nav>
        <div class="logo"><a href="/" tppabs="http://showtime.yangqq.com/">故乡个人博客</a></div>
        <h2 id="mnavh"><span class="navicon"></span></h2>
        <ul id="starlist">
            <li><a href="/" tppabs="http://showtime.yangqq.com/">首页</a></li>


            <li ><a href="/home/proinfo" tppabs="http://showtime.yangqq.com/about/">关于我</a></li>


            <li ><a href="/home/list" tppabs="http://showtime.yangqq.com/photo/">图片集锦</a></li>


            <li ><a href="/home/slowlife" tppabs="http://showtime.yangqq.com/life/">慢生活</a></li>


            <li ><a href="/home/fengmain" tppabs="http://showtime.yangqq.com/study/">学无止境</a></li>


            <li ><a href="/home/time" tppabs="http://showtime.yangqq.com/time/">时间轴</a></li>


            <li ><a href="/home/talk" tppabs="http://showtime.yangqq.com/e/tool/gbook/?bid=1">留言</a></li>

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
<article>
    <!--banner begin-->
    <div class="banner">
        <div id="banner" class="fader">
            <li class="slide" ><a href="/showtime/12.html" tppabs="http://showtime.yangqq.com/life/12.html" title="安静地做一个爱设计的女子" target="_blank"><img src="/showtime//banner01-1.jpg" tppabs="http://www.yangqq.com/skin/852/images/banner01.jpg"><span class="imginfo">安静地做一个爱设计的女子</span></a></li>
            <li class="slide" ><a href="/showtime/13.html" tppabs="http://showtime.yangqq.com/life/13.html" title="个人博客，属于我的小世界！" target="_blank"><img src="/showtime//762f99f369ae786f970477feeb3b9d77-1.jpg" tppabs="http://www.yangqq.com/d/file/news/life/2018-04-27/762f99f369ae786f970477feeb3b9d77.jpg"><span class="imginfo">个人博客，属于我的小世界！</span></a></li>
            <div class="fader_controls">
                <div class="page prev" data-target="prev">&lsaquo;</div>
                <div class="page next" data-target="next">&rsaquo;</div>
                <ul class="pager_list">
                </ul>
            </div>
        </div>
    </div>
    <!--banner end-->
    <div class="toppic">
        <li><a href="/showtime/52.html" tppabs="http://showtime.yangqq.com/life/52.html" title="个人博客从简不繁" target="_blank"><i><img src="/showtime//7d49754e217a5ad6b80e88acde94bc57-1.jpg" tppabs="http://www.yangqq.com/d/file/news/s/2018-06-29/7d49754e217a5ad6b80e88acde94bc57.jpg"></i>
                <h2>个人博客从简不繁</h2>
                <span>慢生活</span> </a> </li>
        <li><a href="/showtime/34.html" tppabs="http://showtime.yangqq.com/study/biji/34.html" title="我们可以从CSS框架中借鉴到什么" target="_blank"><i><img src="/showtime//bc2570db45bb0e607cbb3f3bffdec246.png" tppabs="http://showtime.yangqq.com/d/file/p/2018/08-04/bc2570db45bb0e607cbb3f3bffdec246.png"></i>
                <h2>我们可以从CSS框架中借鉴到什么</h2>
                <span>学习笔记</span> </a> </li>
    </div>
    <main>
        <div class="news_box">
            <ul>
                <li>
                    <i>
                        <a href="/showtime/11.html" tppabs="http://showtime.yangqq.com/life/11.html"
                           title="我是怎么评价自己的？" target="_blank">
                            <img src="/showtime//95d1b1577a8a7aa4fe3893f2502617e9-1.jpg" tppabs="http://www.yangqq.com/d/file/news/s/2018-07-28/95d1b1577a8a7aa4fe3893f2502617e9.jpg">
                        </a>
                    </i>
                    <h3>
                        <a href="/showtime/11.html" tppabs="http://showtime.yangqq.com/life/11.html"
                           title="我是怎么评价自己的？" target="_blank">
                            我是怎么评价自己的？
                        </a>
                    </h3>
                </li>
                <li>
                    <i>
                        <a href="/showtime/14.html" tppabs="http://showtime.yangqq.com/life/14.html"
                           title="作为一个设计师,如果遭到质疑你是否能恪守自己的原则?" target="_blank">
                            <img src="/showtime/75842f4d1e18d692a66c38eb172a40ab-1.jpg" tppabs="http://www.yangqq.com/d/file/news/life/2018-06-29/75842f4d1e18d692a66c38eb172a40ab.jpg">
                        </a>
                    </i>
                    <h3>
                        <a href="/showtime/14.html" tppabs="http://showtime.yangqq.com/life/14.html"
                           title="作为一个设计师,如果遭到质疑你是否能恪守自己的原则?" target="_blank">
                            作为一个设计师,如果遭到质疑你是否能恪守自己的原则?
                        </a>
                    </h3>
                </li>
            </ul>
        </div>
        <div class="pics">
            <ul>
                <li>
                    <i>
                        <a href="/showtime/53.html" tppabs="http://showtime.yangqq.com/life/53.html"
                           title="云南之行——丽江古镇玉龙雪山" target="_blank">
                            <img src="/showtime/cb83fc3e74125e79a3c508eecbe99cda-1.jpg" tppabs="http://www.yangqq.com/d/file/news/s/2014-01-04/cb83fc3e74125e79a3c508eecbe99cda.jpg">
                        </a>
                    </i>
                    <span>
                云南之行——丽江古镇玉龙雪山
            </span>
                </li>
                <li>
                    <i>
                        <a href="/showtime/54.html" tppabs="http://showtime.yangqq.com/life/54.html"
                           title="云南之行——大理洱海一日游" target="_blank">
                            <img src="/showtime/8f91a94816062276afe62062ef271239-1.jpg" tppabs="http://www.yangqq.com/d/file/news/s/2014-01-04/8f91a94816062276afe62062ef271239.jpg">
                        </a>
                    </i>
                    <span>
                云南之行——大理洱海一日游
            </span>
                </li>
                <li>
                    <i>
                        <a href="/showtime/55.html" tppabs="http://showtime.yangqq.com/life/55.html"
                           title="云南之行——初到昆明滇池半日游" target="_blank">
                            <img src="/showtime/9129a0317b9e3dda6b8e5e4af8f21b60-1.jpg" tppabs="http://www.yangqq.com/d/file/news/s/2014-01-04/9129a0317b9e3dda6b8e5e4af8f21b60.jpg">
                        </a>
                    </i>
                    <span>
                云南之行——初到昆明滇池半日游
            </span>
                </li>
            </ul>
        </div>
        <div class="blogtab">
            <ul id="blogtab">
                <li class="current">站长推荐</li>
                <li><a href="/showtime/" target="_blank"></a></li>
            </ul>

            <div class="blogs" data-scroll-reveal="enter bottom over 1s" >


                <h3 class="blogtitle"><a href="/showtime/35.html" tppabs="http://showtime.yangqq.com/study/web/35.html" target="_blank" >帝国cms列表页调用关键字tag标签</a></h3>
                <span class="blogpic"><a href="/showtime/35.html" tppabs="http://showtime.yangqq.com/study/web/35.html" title="帝国cms列表页调用关键字tag标签"><img src="/showtime/fbe877634a8eb658f4d19b83c960d6ab-1.png" tppabs="http://www.yangqq.com/d/file/jstt/web/2018-07-16/fbe877634a8eb658f4d19b83c960d6ab.png" alt="帝国cms列表页调用关键字tag标签"></a></span>

                <p class="blogtext">有很多朋友都在问帝国cms列表页怎么调用关键字tag，tag作为内链手法，对于SEO有一定的好处，下面故乡博客就实例讲述一下帝国cms列表页面调用关键字tag标签的方法，分享给大... </p>
                <div class="bloginfo">
                    <ul>
                        <li class="author"></li>
                        <li class="lmname"><a href="/showtime/index-6.htm" tppabs="http://showtime.yangqq.com/study/web/"  target="_blank" >网站建设</a></li>
                        <li class="timer">2018-07-26</li>
                        <li class="view"><span>22</span>已阅读</li>

                    </ul>
                </div>
            </div>


            <div class="blogs" data-scroll-reveal="enter bottom over 1s" >


                <h3 class="blogtitle"><a href="/showtime/17.html" tppabs="http://showtime.yangqq.com/life/17.html" target="_blank" >或许换一个活法,能让你走出阴霾</a></h3>
                <span class="blogpic"><a href="/showtime/17.html" tppabs="http://showtime.yangqq.com/life/17.html" title="或许换一个活法,能让你走出阴霾"><img src="/showtime/43baa4c7c03ed66bae98696de5ebc64e-1.jpg" tppabs="http://www.yangqq.com/d/file/news/life/2014-07-10/43baa4c7c03ed66bae98696de5ebc64e.jpg" alt="或许换一个活法,能让你走出阴霾"></a></span>

                <p class="blogtext">前段时间回成都,去见了几年未见的老友.一起吃了饭,还带我家宝宝去玩.我问她为什么这么久都还没有打算要孩子,她说,她有一段时间患上了忧郁症,很长的时间才走出来,我听她这么说,我都很惊讶!想问问她原因,可见她欲言又止的神情,我便不再主动问她.就听着她慢慢的说.其实主要的原因还是源自于工作和家庭,工作压力大,每天的程序代码,上级不停的催,她甚至连续好几个通宵的熬夜,,,... </p>
                <div class="bloginfo">
                    <ul>
                        <li class="author">故乡</li>
                        <li class="lmname"><a href="/showtime/index-3.htm" tppabs="http://showtime.yangqq.com/life/"  target="_blank" >慢生活</a></li>
                        <li class="timer">2018-02-26</li>
                        <li class="view"><span>19</span>已阅读</li>

                    </ul>
                </div>
            </div>
        </div>
    </main>
    <aside class="r_box" >
        <div class="about_me">
            <h2>博主简介</h2>
            <ul>
                <i><img src="/showtime/4.jpg" tppabs="http://showtime.yangqq.com/skin/show/images/4.jpg"></i>
                <p><strong>故乡</strong>，一个80后草根女站长！09年入行。一直潜心研究web前端技术，一边工作一边积累经验，分享一些个人博客模板，以及SEO优化等心得。</p>
            </ul>
        </div>
        <div class="wdxc">
            <h2>
                图文精选
            </h2>
            <ul>
                <li>
                    <a href="/showtime/25.html" tppabs="http://showtime.yangqq.com/study/biji/25.html"
                       title="【匆匆那些年】总结个人博客经历的这四年…" target="_blank">
                        <img src="/showtime/a465dddcbbcce5f7d73e1ea7fdc48b11.jpg" tppabs="http://showtime.yangqq.com/d/file/p/2018/08-04/a465dddcbbcce5f7d73e1ea7fdc48b11.jpg">
                    </a>
                </li>
                <li>
                    <a href="/showtime/27.html" tppabs="http://showtime.yangqq.com/study/biji/27.html"
                       title="帝国cms常用标签调用方法总结（不得不收藏哦）" target="_blank">
                        <img src="/showtime/a0b65d3d8160f90f6556c4dfa3a85a59-1.jpg" tppabs="http://www.yangqq.com/d/file/jstt/bj/2014-10-18/a0b65d3d8160f90f6556c4dfa3a85a59.jpg">
                    </a>
                </li>
            </ul>
        </div>

        <div class="tuijian">
            <h2 id="tab">
                <a href="/showtime/#" class="current">
                    最新文章
                </a>
                <a href="/showtime/#">
                    点击排行
                </a>
            </h2>
            <div id="content">
                <ul style="display:block;">
                    <li>
                        <a href="/showtime/1.html" tppabs="http://showtime.yangqq.com/study/web/1.html"
                           title="个人博客模板《show time》蓝色版" target="_blank">
                            个人博客模板《show time》蓝色版
                        </a>
                    </li>
                    <li>
                        <a href="/showtime/59.html" tppabs="http://showtime.yangqq.com/about/wall/2018-08-04/59.html"
                           title="我是怎么评价自己的？" target="_blank">
                            我是怎么评价自己的？
                        </a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="/showtime/11.html" tppabs="http://showtime.yangqq.com/life/11.html"
                           title="我是怎么评价自己的？" target="_blank">
                            我是怎么评价自己的？
                        </a>
                    </li>
                    <li>
                        <a href="/showtime/66.html" tppabs="http://showtime.yangqq.com/about/wall/2018-08-04/66.html"
                           title="抄袭门过后——丢掉心结，重拾自己" target="_blank">
                            抄袭门过后——丢掉心结，重拾自己
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="fenlei">
            <h2>友情链接</h2>
            <ul>
                <li><a href="javascript:if(confirm(%27http://www.yangqq.com/  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://www.yangqq.com/%27" tppabs="http://www.yangqq.com/" title="故乡个人博客" target="_blank">故乡个人博客</a></li>        </ul>
        </div>
        <div class="guanzhu">
            <h2>关注我 么么哒</h2>
            <ul>
                <img src="/showtime/wx.jpg" tppabs="http://showtime.yangqq.com/skin/show/images/wx.jpg">
            </ul>
        </div>
    </aside>
</article>
@stop



