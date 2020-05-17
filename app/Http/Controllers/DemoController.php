<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class DemoController extends Controller{
    public function index(Request $request){
        // dump($request->get('name'));

        // dump($request->only(['username','password']));

        // dump($request->except(['username']));

        // dump($request->header());

        // dump($request->file());

        // dump($request->route()->getname());

        // dump($request->ip());
        dump(get_class_methods($request));

    }
}