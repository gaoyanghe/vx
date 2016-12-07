@extends('layout.home')
@section('content')
    <h2 class="text-center" style="padding:20px 0px; border: 1px solid #000;"><strong>个人信息</strong></h2>
    <div class="container">
        <ul class="list-group center-block" style="margin-top: 20px;">
            <li class="list-group-item" style="padding-left: 5%">头像</li>
            <li class="list-group-item" style="padding-left: 5%">昵称 <em style="float:right; color: #8eb4cb">爱美男士</em></li>
            <li class="list-group-item" style="padding-left: 5%">基本信息 <em style="float:right; color: #8eb4cb">爱美男士</em></li>
        </ul>
        <ul class="list-group center-block" style="margin-top: 20px;">
            <li class="list-group-item" style="padding-left: 5%">身材困扰</li>
            <li class="list-group-item" style="padding-left: 5%">风格偏好</li>
            <li class="list-group-item" style="padding-left: 5%">全身照</li>
        </ul>
    </div>
    @endsection