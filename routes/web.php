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

Route::get('/', function () {
    $tasks = DB::table('tasks')->get();
    return view('welcome',compact('tasks'));
});

Route::get('task/{task}', function ($id) {
    $task = DB::table('tasks')->find($id);
    return view('about',compact('task'));
});

Route::get('about', function () {
    return view('about');
});