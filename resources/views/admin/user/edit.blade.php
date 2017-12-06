@extends('admin.index')

@section('biaoti')
<h1 class="page-head-line">用户修改</h1>
@endsection

@section('section')
<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
	<div class="panel panel-danger">
		<div class="panel-heading">
		   SINGUP FORM
		</div>
		<div class="panel-body">
		    <form role="form" action="/user/{{$user->id}}" method="post" enctype="multipart/form-data">
		        <div class="form-group">
                    <label>邮箱地址</label>
                    <input class="form-control" type="text" name="email" value="{{$user->email}}">
                </div>
                <div class="form-group">
                    <label>用户名</label>
                    <input class="form-control" type="text" name="name" value="{{$user->name}}">
                </div>
		        <div class="form-group">
                    <img src="{{$user->file}}" width="200" alt=""><hr>
                    <label>上传头像</label>
                    <input style="border:none;" type="file" name="file">
                </div>
                {{csrf_field()}}
                {{method_field('PUT')}}
		        <button type="submit" class="btn btn-success btn-md col-md-offset-4">修改</button>
		        <button type="reset" class="btn btn-danger">还原</button>
		    </form>
		</div>
	</div>
</div>
@endsection