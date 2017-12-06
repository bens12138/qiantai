<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = DB::table('user')->paginate(10);

        return view('/admin/user/index',['user'=>$user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/user/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $date = $request->only(['email','name','password']);
        $date['password'] = encrypt($date['password']);
        if($request->hasFile('file')){
            $suffix = $request->file('file')->extension();
            $name = uniqid('img').'.'.$suffix;
            $dir = './uploads/'.date('Y-m-d');
            $request->file('file')->move($dir,$name);
            $date['file'] = trim($dir.'/'.$name,'.');
        }

        if(DB::table('user')->insert($date)){
            return redirect('/user')->with('msg','添加成功 :)');
        }else{
            return back()->with('msg','添加失败 :(');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = DB::table('user')->where('id',$id)->first();
        return view('admin.user.edit',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $date = $request->only(['name','email']);
        if($request->hasFile('file')){
            $suffix = $request->file('file')->extension();
            $name = uniqid('img').'.'.$suffix;
            $dir = './uploads/'.date('Y-m-d');
            $request->file('file')->move($dir,$name);
            $date['file'] = trim($dir.'/'.$name,'.');
        }

        if(DB::table('user')->where('id',$id)->update($date)){
            return redirect('/user')->with('msg','更新成功 :)');
        }else{
            return back()->with('msg','更新失败 :(');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(DB::table('user')->where('id',$id)->delete()){
            return back()->with('msg','删除成功 :)');
        }else{
            return back()->with('msg','删除失败 :(');
        }
    }
}
