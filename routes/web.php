<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return 'get';
// });
// Route::post('/', function () {
//     return 'post';
// });
// Route::delete('/', function () {
//     return 'delete';
// });
// Route::put('/', function () {
//     return 'put';
// });
// Route::match(['get','post'],'/', function () {
//     return 'match';
// });
// Route::any('/', function () {
//     return 'any';
// });
// Route::get('test/{id}', function ($id) {
//     dump($id);
// });
// Route::get('test/{id}', function ($id) {
//     dump($id);
// })->where(['id' => '\d+']);
// Route::get('test/{id?}', function (int $id = 0) {
//     dump($id);
// });
// Route::get('a', function () {
//     return '<a href="'.route('b').'">b</a>';
// })->name('a'); 
// Route::get('b', function () {
//     return '<a href="'.route('a').'">a</a>';
// })->name('b'); 
// Route::group(['prefix' => 'admin'],function(){

// });
// Route::get('admin/login',function(){
//     return 'login';
// });
// Route::get('admin/logout',function(){
//     return 'logout';
// });
// Route::get('admin/index',function(){
//     return 'index';
// });
// Route::get('admin/user',function(){
//     return 'user';
// });
// Route::get('demo/index','DemoController@index');
// Route::any('test','DemoController@index')->name('a.test');
// Route::group(['prefix' => 'admin','namespace'=>'Admin'],function(){
//     Route::get('login','LoginController@login');
//     Route::get('user/{id}','LoginController@user');
// });
// Route::get('user/index','UserController@index')->name('user.index');
Route::get('login','LoginController@index');
Route::post('login','LoginController@login')->name('login');