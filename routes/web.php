<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TbMClientController;
use App\Http\Controllers\TbMProjectController;

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
    return view('project');
});

Route::resource('client', TbMClientController::class);
Route::resource('project', TbMProjectController::class);


