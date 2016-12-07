@extends('layout.home')
@section('content')
    <div class="container" style="width:100%;height:200px;background-image: url(/home/img/1.jpg)">
        <a href="http://baidu.com"><img src="{{ asset('/home/img/bj.png') }}" style="float: right;margin-top:10px;width: 30px;" alt=""></a>
            <img style="padding-top: 7%;padding-left:30px;text-align: center;margin: 0 auto" src="{{ asset('home/img/tx.png') }}" class="img-responsive" alt="">
            <h4 class="text-center" style="color: #fff">用户001</h4>
            <p style="color:#fff;text-align: center ;margin: 0 auto">身高178cm体重55kg&nbsp;28岁 偏胖 正常</p>
    </div>
    <div class="container">
        <ul class="list-group center-block" style="margin-top: 20px;">
            <li class="list-group-item" style="padding-left: 5%"><span class="glyphicon glyphicon-time"></span> &nbsp;我的预约</li>
            <li class="list-group-item" style="padding-left: 5%"><span class="glyphicon glyphicon-heart"></span> &nbsp;我的喜欢</li>
            <li class="list-group-item" style="padding-left: 5%"><span class="glyphicon glyphicon-bell"></span> &nbsp;每月免签</li>
        </ul>
        <ul class="list-group center-block" style="margin-top: 20px;">
            <li class="list-group-item" style="padding-left: 5%"><span class="glyphicon glyphicon-question-sign"></span> &nbsp;常见问题</li>
            <li class="list-group-item" style="padding-left: 5%"><span class="glyphicon glyphicon-earphone"></span> &nbsp;客服电话
                <a href="tel:15980116983"><em style="float:right; color: red">15980116983</em></a></li>
            <li class="list-group-item" style="padding-left: 5%"><span class="glyphicon glyphicon-info-sign"></span> &nbsp;关于我们</li>
        </ul>
    </div>
    @endsection