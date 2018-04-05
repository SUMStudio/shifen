<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Bootstrap 101 Template</title>
    <!-- Bootstrap -->
    <link href="http://cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="external nofollow stylesheet" >
    <link href="http://cdn.bootcss.com/bootstrap/3.3.6/js/bootstrap.min.js" rel="external nofollow stylesheet" >
    <style>
        .TOTAL{
            position: relative;
            font-family:"楷体";
            text-align: center;
            padding-top: 20%;
            padding-bottom: 0;
        }
        .me{
            position: relative;
            font-family:"楷体";
            text-align: center;
            padding: 1%;
        }
        .then{
            width:100%; height:35px; line-height:35px; position:fixed; bottom:0px; left:0px; font-size:14px; color:#000; text-align:center;
        }
    </style>







</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">欢迎</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">信息爬取</a></li>
                <li><a href="{{ route("carpoolingIndex") }}">拼车出行</a></li>
                <li><a href="{{ route("marketTrade") }}">二手市场</a></li>
                <li><a href="#">常用网站</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>



<div class="starter-template">
    <h1 class="TOTAL">拾纷</h1>
    <p class="me">欢迎来到这个页面<br> 在这里，你将享受最精致的服务，有最好的体验</p>
</div>
<address class="then">
    326922943@qq.com
</address>
<!-- 新 Bootstrap 核心 CSS 文件 -->
<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

<!-- 可选的Bootstrap主题文件（一般不使用） -->
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"></script>

<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>
