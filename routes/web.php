<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\relationship;
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


Route::get('/showdata',[relationship::class,'showdata']);

Route::get('/comments',[relationship::class,'showcomments']);

Route::get('/users',[relationship::class,'userdata']);

Route::get('/userdata',[relationship::class,'userdata1']);



// Route::get('/show',function (){
//     return view('relationship');
// });
