<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/ho', [App\Http\Controllers\TestController::class,'index']);

Route::get('/', function () {
    return redirect("/login");
});

//ホーム画面
Route::get('/tarukame_home', [App\Http\Controllers\kakeiboController::class,'kakeibo_home']);
//月別画面
Route::get('/tarukame_totalling', [App\Http\Controllers\kakeiboController::class,'kakeibo_list']);
//次の月を取得
Route::get('/tukibetu/{now_tuki}/{now_seireki}', [App\Http\Controllers\kakeiboController::class,'add_month']);
//前の月を取得
Route::get('/tukibetu_return/{now_tuki}/{now_seireki}', [App\Http\Controllers\kakeiboController::class,'return_month']);
//年別で取得
Route::get('/tarukame_nenbetu', [App\Http\Controllers\kakeiboController::class,'kakeibo_nenbetu']);
//次の年を取得
Route::get('/nenbetu/{now_seireki}', [App\Http\Controllers\kakeiboController::class,'add_year']);
//前の年を取得
Route::get('/nenbetu_return/{now_seireki}', [App\Http\Controllers\kakeiboController::class,'return_year']);
//月別画面でinputdataで検索する
Route::post('/data_search', [App\Http\Controllers\kakeiboController::class,'data_search']);
//年別画面で数値を自分で入力して検索する
Route::post('/data_search_seireki', [App\Http\Controllers\kakeiboController::class,'data_search_seireki']);



Route::get('/register_member/{user_name}', [App\Http\Controllers\kakeiboController::class,'touroku'])->middleware('auth');

Route::post('/data_register_mane', [App\Http\Controllers\kakeiboController::class,'register_mane']);

Route::get('edit_screen_kakeibo/{id}/{naiyou}/{sisyutu}/{syunyuu}/{nitizi}/{user_name}', [App\Http\Controllers\kakeiboController::class,'edit_screen_kakeibo'])->name('edit_screen_kakeibo/{id}/{naiyou}/{sisyutu}/{syunyuu}/{nitizi}');

Route::get('delete_kakeibo/{id}', [App\Http\Controllers\kakeiboController::class,'delete_kakeibo']);


Route::post('edit_screen_post_kakeibo/{id}', [App\Http\Controllers\kakeiboController::class,'edit_screen_post_kakeibo'])->name('edit_screen_post_kakeibo/{id}');


Route::post('/data_search_month_add', [App\Http\Controllers\kakeiboController::class,'data_search_month_add']);//次の月のデータを取得

Route::post('/data_search_month_lastmonth', [App\Http\Controllers\kakeiboController::class,'data_search_month_lastmonth']);//前の月のデータをデータを取得

Route::get('/tarukame_nenbetu_add', [App\Http\Controllers\kakeiboController::class,'kakeibo_nenbetu_add']);//今年のデータを取得

Route::post('/data_search_seireki_add', [App\Http\Controllers\kakeiboController::class,'kakeibo_nenbetu_add']);//次の年を取得

Route::post('/data_search_seireki_previous_year', [App\Http\Controllers\kakeiboController::class,'data_search_seireki_previous_year']);//前の年を取得
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
