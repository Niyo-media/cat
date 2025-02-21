<?php

use Illuminate\Support\Facades\Route;

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
    return view('login_form');
});

Route::get('/project_form', function () {
    return view('project_form');
});
Route::get('/studentregister', function () {
    return view('studentregister');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/projects', function () {
    return view('projects');
});
Route::get('/project_view', function () {
    return view('project_view');
});
Route::get('/supervisor_form', function () {
    return view('supervisor_form');
});
Route::get('/hodhome', function () {
    return view('hodhome');
});
Route::get('/hodhome', function () {
    return view('hodhome');
});
