@extends('admin.index')

@section('biaoti')
<h1 class="page-head-line">文章添加</h1>
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
                    <label>文章标题</label>
                    <input class="form-control" type="text" name="title">
                </div>
		        <div class="form-group">
                    <label>文章头图</label>
                    <input style="border:none;" type="file" name="file">
                </div>
                <div class="form-group">
                    <label>文章内容</label>
                    <script class="form-control" type="text/plain" name="cons"></script>
                </div>
                {{csrf_field()}}
		        <button type="submit" class="btn btn-success btn-md col-md-offset-4">添加</button>
		        <button type="reset" class="btn btn-danger">重置</button>
		    </form>
		</div>
	</div>
</div>
@endsection