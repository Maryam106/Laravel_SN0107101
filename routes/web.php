<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeControl;
use App\Http\Controllers\adminControl;
use App\Http\Controllers\superControl;
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

//Route::get('/', function () {
  //  return view('welcome');
//});
Route::get('/', [homeControl::class,"index"]);
Route::get('/redirect', [homeControl::class,"redirectFunct"]);
Route::get('/users', [adminControl::class,"listOut"]);
Route::get('/assign', function () {
    return view('admin.assign');
});
Route::POST("/add", [adminControl::class,'addData']);



Route::get('/u', [superControl::class,"view"]);
Route::get('/slist', [superControl::class,"listOut"]);
Route::get('/sview', function () {
  return view('supervisor.update');
});
Route::POST('/edit',[superControl::class,'updateData']);
Route::get('upd/{yy}', [superControl::class,'showData']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
