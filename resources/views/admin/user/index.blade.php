@extends('admin.index')

@section('biaoti')
<h1 class="page-head-line">会员列表</h1>
@endsection

@section('section')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
       	<div class="table-responsive">
            <table class="table table-striped table-bordered table-hover text-center">
	            <thead>
	                <tr>
	                    <th class="text-center col-md-1">编号</th>
	                    <th class="text-center col-md-3">用户名</th>
	                    <th class="text-center col-md-3">邮箱</th>
	                    <th class="text-center col-md-2">头像</th>
	                    <th class="text-center col-md-1">状态</th>
	                    <th class="text-center col-md-2">操作</th>
	                </tr>
	            </thead>
	            <tbody>
	            	@if(count($user) > 0)
	            	@foreach($user as $k => $v)
	                <tr>
	                    <td>{{$v->id}}</td>
	                    <td>{{$v->name}}</td>
	                    <td>{{$v->email}}</td>
	                    <td><img src="{{$v->file}}" alt="1" height="20"></td>
	                    <td>{{$v->ztid}}</td>
	                    <td><a href="/user/{{$v->id}}/edit" class="btn btn-info btn-sm pull-left">修改</a>
	                    <form action="/user/{{$v->id}}" class="del" method="post">
	                    	{{method_field('DELETE')}}
	                    	{{csrf_field()}}
	                    	<button  class="btn btn-danger btn-sm">删除</button></td>
	                    	
	                    </form>
	                </tr>
	                @endforeach
	                @else
	                <tr><td colspan="6" class="text-center">暂无数据</td></tr>
	                @endif
	            </tbody>
            </table>
        </div>
        <div class="pull-right">
        		{{ $user->links() }}
        </div>
        
    </div>
</div>
@endsection

@section('js')
<script>
    $('.del').submit(function(){
    	var res = confirm("确定删除该用户吗?");
    	if(!res){
    		return false;
    	}
    });
</script>
@endsection




