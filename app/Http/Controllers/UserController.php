<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        // return view('user.index');
        $name = "lisi";
        $password = "password";
        // return view('user.index',['name'=>$name,'password'=>$password]);
        // return view('user.index',compact('name','password'));
        $data = ['name' => $name,'password' => $password];
        $html = '<a href="https://www.baidu.com/">百度</a>';
        return view('user.index',compact('data','html'));
    }
}
