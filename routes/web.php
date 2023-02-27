<?php

use App\Http\Controllers\PageController;
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

// Pages
Route::get('/', ['as' => 'index','uses'=>'PageController@index']);
Route::get('/slug',['as'=>'slug','uses'=>'PageController@slug']);
Route::get('/shop',['as'=>'shop','uses'=>'PageController@shop']);
Route::get('/delivery',['as'=>'delivery','uses'=>'PageController@delivery']);
Route::get('/3d-panel',['as'=>'3d-panel','uses'=>'PageController@panel']);