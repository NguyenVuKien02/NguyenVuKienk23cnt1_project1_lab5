<?php

use App\Http\Controllers\LoginController;
use Illuminate\Http\Request;
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
Route::get('/user',function(Request $request){
    return $request->fullUrl();
});
Route::get('/host-test',function(Request $request){
    $host=$request->host();
    $httpHost=$request->httpHost();
    $schemeAndHttpHost=$request->schemeAndHttpHost(); return "<h2> Host:".$host
    . "<h2> httpHost: ".$httpHost
    ."<h2> schemeAndHttpHost: ".$schemeAndHttpHost;
});
Route::get('/method-test',function(Request $request){
    $res=$request->method(); return	$res;
});
Route::get('/login',[LoginController::class,'index'])->name('login.index');
Route::post('/login',[LoginController::class,'loginSubmit'])->name('login.submit');
