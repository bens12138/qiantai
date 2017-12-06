@extends('layout.home')

@section('title')
<title>登录</title>
@endsection

@section('top')
@endsection

@section('section')
        <!-- 登录模块开始 -->
        <div class="row p30">
            <div class="col-lg-8">
                <!-- 左侧广告位 -->
                <img alt="" src="/h_assets/img/advertise/login-ban.gif" />
            </div>
            <div class="col-lg-4">
                <!-- 登录表单开始 -->
                <form role="form" class="login-form f14">
                    <div class="form-group">
                        <label for="username">邮箱/用户名/已验证手机</label>
                        <input type="text" class="form-control" id="username" placeholder="邮箱/用户名/已验证手机" />
                    </div>
                    <div class="form-group">
                        <label for="password">密码</label>
                        <input type="password" class="form-control" id="password" placeholder="密码" />
                    </div>
                    <div class="form-group">
                        <label for="vcode">验证码</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="vcode" placeholder="验证码">
                            <span class="input-group-addon" style="padding: 0 2px; cursor: pointer">
                                <img id="vcode_img" src="/handler/verify.ashx" data-src="/handler/verify.ashx" width="100" height="32" alt="验证码" title="点击切换验证码">
                            </span>
                        </div>
                    </div>
                    <div class="checkbox f12">
                        <label>
                            <input type="checkbox" />记住我</label>
                        <span class="pull-right"><a href="findme.aspx">忘记密码？</a>&nbsp;<a href="register.aspx">免费注册</a></span>
                    </div>
                    <button type="submit" class="btn btn-danger btn-block f16">登 录</button>
                    <div class="f12 pt10">
                        合作登录：<i class="icon-main icon-cooper ml10"></i><a class="blue-font" href="oauth.aspx?t=qq">QQ账号</a>
                    </div>
                </form>
                <!-- 登录表单结束 -->
            </div>
        </div>
        <!-- 登录模块结束 -->
@endsection

@section('bottom')
@endsection