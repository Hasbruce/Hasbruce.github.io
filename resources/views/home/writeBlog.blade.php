@extends('layout.header')
@section('content')
<!-- Preloader -->
<header class="header-navigation" id="header">
    <nav>
        <div class="logo"><a href="#">故乡个人博客</a></div>
        <h2 id="mnavh"><span class="navicon"></span></h2>
        <ul id="starlist">
            <li><a href="/" tppabs="http://www.17sucai.com/preview/385871/2018-09-17/bolg2/index.html">首页</a></li>
            <li><a href="/home/writeBlog" tppabs="http://www.17sucai.com/preview/385871/2018-09-17/bolg2/write-article.html">写博客</a></li>
            <li><a href="/home/share" tppabs="http://www.17sucai.com/preview/385871/2018-09-17/bolg2/share.html">模板分享</a></li>
            <li><a href="/home/list" tppabs="http://www.17sucai.com/preview/385871/2018-09-17/bolg2/list.html">博客日记</a></li>
            <li class="menu"><a href="/home/fengmain" tppabs="http://www.17sucai.com/preview/385871/2018-09-17/bolg2/fengmian.html">学无止境</a>
                <ul class="sub">
                    <li><a href="#">慢生活</a></li>
                    <li><a href="#">美文欣赏</a></li>
                </ul>
            </li>
            <li><a href="/home/time" tppabs="http://www.17sucai.com/preview/385871/2018-09-17/bolg2/time.html">时间轴</a></li>

            <li><a href="/home/perInfo" tppabs="http://www.17sucai.com/preview/385871/2018-09-17/bolg2/about.html">关于我</a></li>
        </ul>
        <div class="searchbox">
            <div id="search_bar" class="search_bar">
                <form  id="searchform" action="" method="post" name="searchform">
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
    <form>
        <input name="mdMaterial" id="id_input_md" type="hidden">
        <input name="htmlMaterial" id="id_input_html" type="hidden">
        <input name="description" id="id_input_article_description" type="hidden">
        <input name="rawTags" id="id_input_article_tags" type="hidden">
        <div class="row">
            <div class="col-sm-12">
                <div class="input-group">
                    <div class="row">
                        <div class="col-md-12"></div>
                    </div>
                    <input name="title" type="text" class="form-control" placeholder="标题">
                    <div class="row">
                        <div class="col-md-12"></div>
                    </div>
                    <span class="input-group-btn">
                        <button id="id_btn_blog_submit" class="btn btn-primary" type="button">提交</button>
                    </span>
                </div>
            </div>
        </div>
    </form>
    <div id="test-editormd" th:fragment="test-editormd">
        <textarea style="display:none;">### Bootstrap 兼容测试</textarea>
    </div>
</article>
<!--引入底部-->

<a href="#" class="cd-top">Top</a>
</body>

<!-- Latest compiled and minified JavaScript -->
<script src="/17cai/bootstrap.min.js" tppabs="http://www.17sucai.com/preview/385871/2018-09-17/bolg2/editor/tests/js/bootstrap.min.js"></script>
<script src="/17cai/editormd.js" tppabs="http://www.17sucai.com/preview/385871/2018-09-17/bolg2/editor/editormd.js"></script>
<script type="text/javascript">
    var testEditor;

    $(function() {
        $.get("test.md"/*tpa=http://www.17sucai.com/preview/385871/2018-09-17/bolg2/editor/examples/test.md*/, function(md){
            testEditor = editormd("test-editormd", {
                width: "100%",
                height: 740,
                path : 'editor/lib/',
                markdown : md,
                codeFold : true,
                saveHTMLToTextarea : true,
                searchReplace : true,
                htmlDecode : "style,script,iframe|on*",
                emoji : true,
                taskList : true,
                tocm: true,                     // Using [TOCM]
                tex : true,                   // 开启科学公式TeX语言支持，默认关闭
                flowChart : true,             // 开启流程图支持，默认关闭
                sequenceDiagram : true,       // 开启时序/序列图支持，默认关闭,
                imageUpload : true,
                imageFormats : ["jpg", "jpeg", "gif", "png", "bmp", "webp"],
                //imageUploadURL : "../examples/php/upload.php",
                onload : function() {
                    console.log('onload', this);
                }
            });
        });
    });
</script>
</html>

@stop
