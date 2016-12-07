@extends('home.index')
@section('content')
    <h2 class="text-center" style="padding:20px 0px; border: 1px solid #000;"><strong>直接下单</strong></h2>
<form action="" role="form">
    <div class="form-group text-center">
        <input type="text" placeholder="您的姓名" required>
        <label for="name" class="must">*</label>
    </div>
    <div class="form-group text-center">
        <input type="number"  placeholder="手机号码" required>
        <label for="name" class="must">*</label>
    </div>
    <div class="form-group">
        <textarea class="form-control" rows="3" placeholder="上门地址" required></textarea>
    </div>
    <div class="form-group text-center">
        <input type="number"  placeholder="简述要求" required>
        <label for="name" class="must">*</label>
    </div>
    <div class="form-group text-center">
        <input type="date" placeholder="时间" required>
        <input type="time" placeholder="时间" required>
        <label for="name" class="must">*</label>
    </div>
    <div class="form-group text-center">
        <input type="number"  placeholder="酬劳价格" required>
        <label for="name" class="must">*</label>
    </div>
    <button type="submit" class="btn btn-success center-block">提交</button>
</form>
@endsection