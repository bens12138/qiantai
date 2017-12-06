<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use DB;
class HomeController extends Controller
{
    public function index()
    {
    	return view('home.index');
    }
    public function liebiao()
    {
    	return view('home.liebiao.liebiao');
    }
    public function xiangqing()
    {
    	return view('home.xiangqing.xiangqing');
    }
    public function login()
    {
    	return view('home.login.login');
    }
    public function register()
    {
    	return view('home.register.register');
    }
    public function signup(Request $request)
    {
        $code = $request->vcode;
        if(session('vcode') != $code){
            return back()->with('msg','验证码错误');
        }

        $data = $request->only(['phone','password']);
        $data['password'] = Hash::make($data['password']);

        if(DB::table('user')->insert($data)){
            return redirect('/index')->with('msg','注册成功');
        }else{
            return back()->with('msg','注册失败');
        }
    }

}
