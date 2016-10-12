<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('hoclaravel',function(){
    echo "hello world";
});
Route::get('test','testcontroller@showinfo');
Route::get('ten/{name?}',function($name="son"){
    print "My name is $name";
})->where(['name'=>'[a-zA-Z]+']);
Route::get('testredir',['as'=>'redir',function(){
  print "redir to test";
}]);
Route::group(['prefix'=>'thucdon'],function(){
    Route::get('bunbo',function(){
      print "Bun bo ok";
    });
    Route::get('bunmam',function(){
      print "bun mam ok";
    });
});

Route::get('testviewfolder',function(){
  return view('layout.sub.test');
});
View::share('title','lap trinh laravel test viewshare');

Route::get('testviewshare',function(){
  return view('layout.sub.viewshare');
});
