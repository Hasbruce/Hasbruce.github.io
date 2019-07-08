<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $name="故乡";
        return view('home.index',compact('name'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    //个人信息
    public function info()
    {
        $name="故乡";
        return view('home.info',compact('name'));
    }

    //写博客
    public function writeBlog()
    {
        $name="故乡";
        return view('home.writeBlog',compact('name'));
    }

    //图片集锦
    public function list()
    {
        $name="故乡";
        return view('home.list',compact('name'));
    }

    //慢生活
    public function slowlife()
    {
        $name="故乡";
        return view('home.slowlife',compact('name'));
    }

    //学无止境
    public function fengmain()
    {
        $name="故乡";
        return view('home.fengmain',compact('name'));
    }

    //时间轴
    public function time()
    {
        $name="故乡";
        return view('home.time',compact('name'));
    }

    //留言
    public function message()
    {
        $name="故乡";
        return view('home.message',compact('name'));
    }
}
