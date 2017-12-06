@extends('admin.index')

@section('biaoti')
<h1 class="page-head-line">会员添加</h1>
@endsection

@section('section')
<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
	<div class="panel panel-danger">
		<div class="panel-heading">
		   SINGUP FORM
		</div>
		<div class="panel-body">
		    <form role="form" action="/user" method="post" enctype="multipart/form-data">
		        <div class="form-group">
                    <label>邮箱地址</label>
                    <input class="form-control" type="text" name="email">
                </div>
                <div class="form-group">
                    <label>用户名</label>
                    <input class="form-control" type="text" name="name">
                </div>
		        <div class="form-group">
                    <label>密码</label>
                    <input class="form-control" type="password" name="password">
                </div>
		        <div class="form-group">
                    <label>确认密码</label>
                    <input class="form-control" type="password" name="rpassword">
                </div>
		        <div class="form-group">
                    <label>上传头像</label>
                    <input style="border:none;" type="file" name="file">
                </div>
                {{csrf_field()}}
		        <button type="submit" class="btn btn-success btn-md col-md-offset-4">添加</button>
		        <button type="reset" class="btn btn-danger">重置</button>
		    </form>
		</div>
	</div>
</div>
@endsection