<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;
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
    return view('welcome');
});


Route::post('/create-page', [TemplateController::class, 'create_page'])->name('create_page');

Route::get('view_page/{id}', [TemplateController::class, 'view_page'])->name('view_page');

Route::post('/update-page/{id}', [TemplateController::class, 'update_page'])->name('update_page');

Route::get('delete_page/{id}', [TemplateController::class, 'delete_page'])->name('delete_page'); 

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
