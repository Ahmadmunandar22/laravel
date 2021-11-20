<?php

use App\Http\Controllers\UserController;
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
    return view('welcome');
});
Route::get('ambil', function () {
    return view('blog');
});
Route::get('pegawai','App\Http\controllers\pegawai@index');
Route::get('pegawai/blog','App\Http\controllers\pegawai@blog');

Route::get('/coba-routing/{nama?}', function ($namanya = "jong koding") {
    return 'ini adalah hasil percobaan routing ' . $namanya;
});

Route::get('/users', [UserController::class, 'index'])->name('list-user');


Route::middleware(['auth'])->group(function (){
    //route ini menggnakan middleware auth
    Route::get('users', [UserController::class, 'index'])->name('list-user');

    //Route ini dan selanjutnya juga akan menggunakan middleware auth
    Route::get('/users/profile', function(){
    });
});


// Route::prefix(['user'])->group(function (){
//     //URI route akan otomatis diawali user/..
//     Route::get('/', [UserController::class, 'index'])
//         ->name('list-user'); //pemanggilan route name akan menjadi user.list-user


//     Route::get('/profile', function(){
//     });
// });
Route::get('/halo', function () {
    return view('halo', [
        "name" => "Jong Koding",
        "array" => ['aku', 'ikut', 'jong koding']
    ]);
});
Route::get('parent', function(){
    return view('parent', ["isExist"=>false]);
});