<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Bootstrap 101 Template</title>

    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<ul class="nav nav-tabs " style="padding-left: 33%">
    <li class="active"><a href="#">分类</a></li>
    <li><a href="#">衣物</a></li>
    <li><a href="#">鞋子</a></li>
    <li><a href="#">电子类设备</a></li>
    <li><a href="#">日常用品</a></li>
    <li><a href="#">游戏交易市场</a></li>
</ul>
<div id="myCarousel" class="carousel slide" align="center" >
    <!-- 轮播（Carousel）指标 -->
    <ol class="carousel-indicators" >
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- 轮播（Carousel）项目 -->
    <div class="carousel-inner" align="center">
        <div class="item active">

            <a href="#">
                <img src="20161123_165402.jpg" alt="First slide"  width="40%" height="200px"></a>
        </div>
        <div class="item">
            <a href="#">
                <img src="20161123_165402.jpg" alt="Second slide" width="40%" height="200px"></a>
        </div>
        <div class="item">
            <a href="#">
                <img src="20161123_165402.jpg" alt="Third slide" width="40%" height="200px"></a>
        </div>

    </div>
</div>


<div style="text-align:center;">
    <input type="button" class="btn start-slide" value="Start">
    <input type="button" class="btn pause-slide" value="Pause">
    <input type="button" class="btn prev-slide" value="Previous Slide">
    <input type="button" class="btn next-slide" value="Next Slide">
    <input type="button" class="btn slide-one" value="Slide 1">
    <input type="button" class="btn slide-two" value="Slide 2">
    <input type="button" class="btn slide-three" value="Slide 3">
</div>
<script>
    $(function(){
        // 初始化轮播
        $(".start-slide").click(function(){
            $("#myCarousel").carousel('cycle');
        });
        // 停止轮播
        $(".pause-slide").click(function(){
            $("#myCarousel").carousel('pause');
        });
        // 循环轮播到上一个项目
        $(".prev-slide").click(function(){
            $("#myCarousel").carousel('prev');
        });
        // 循环轮播到下一个项目
        $(".next-slide").click(function(){
            $("#myCarousel").carousel('next');
        });
        // 循环轮播到某个特定的帧
        $(".slide-one").click(function(){
            $("#myCarousel").carousel(0);
        });
        $(".slide-two").click(function(){
            $("#myCarousel").carousel(1);
        });
        $(".slide-three").click(function(){
            $("#myCarousel").carousel(2);
        });
    });
</script>

<!-- 新 Bootstrap 核心 CSS 文件 -->
<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

<!-- 可选的Bootstrap主题文件（一般不使用） -->
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"></script>


</body>
</html>