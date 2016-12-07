@extends('layout.home')
@section('content')
    <div id="myCarousel" class="carousel slide">
        <!-- 轮播（Carousel）指标 -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!-- 轮播（Carousel）项目 -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="{{ asset('/home/img/1.jpg') }}" alt="First slide">
            </div>
            <div class="item">
                <img src="{{ asset('/home/img/1.jpg') }}" alt="Second slide">
            </div>
            <div class="item">
                <img src="{{ asset('/home/img/1.jpg') }}" alt="Third slide">
            </div>
        </div>
        <script>
            $('.carousel').carousel({
                wrap:true,
                interval: 2000
            });
        </script>
        <!-- 轮播（Carousel）导航 -->
        <a class="carousel-control left" href="#myCarousel"
           data-slide="prev">&lsaquo;
        </a>
        <a class="carousel-control right" href="#myCarousel"
           data-slide="next">&rsaquo;
        </a>
    </div>

    <div class="container">
        <div class="center-block" style="width:95%;border: 1px solid #000000;margin-top:8%;padding-top: 5%;padding-bottom: 5%;">
            <a href="http://baidu.com">
            <h2 class="text-center"><strong>直接下单</strong></h2>
            <p class="lead text-center">无需选择搭配类别，简单快捷</p>
            </a>
        </div>
        <div class="center-block" style="width:95%;border: 1px solid #000000;margin-top:8%;padding-top: 5%;padding-bottom: 5%;">
            <a href="http://baidu.com">
            <h2 class="text-center"><strong>分类下单</strong></h2>
            <p class="lead text-center">根据类别发布定制信息，精准</p>
            </a>
        </div>
    </div>
    <div class="footernav container" >
        <div class="footerchild center-block">
            <a href=""><p class="text-center footerp" >定制</p></a>
        </div>
        <div class="footerchild">
            <a href=""><p class="text-center footerp">搭配师</p></a>
        </div>
        <div class="footerchild">
            <a href=""><p class="text-center footerp">我的</p></a>
        </div>
    </div>
    @endsection