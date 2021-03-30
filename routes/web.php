<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MyinfoController;
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

//  Home Page
Route::get('/', [MainController::class,'mainPage']);

// Return myinfo page
Route::get('/myinfo', [MyinfoController::class ,'viewPage']);

// Return capitalized parameters
Route::get('/myinfo/{key}', [MyinfoController::class, 'parameterReturn']);

// Return Parameters
Route::get('req', [MyinfoController::class, "returnPara"]);

// Blogs
Route::get('blog', [BlogController::class, 'myblogs']);

// Single Blog
Route::get('single/{single}', [BlogController::class, 'singleBlog']);
