<?php

use App\Http\Controllers\Site1Controller;
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
// perfix = function in laravel
Route::prefix('site1')->name('site.')->controller(Site1Controller::class)->group(function(){ // اختصارات لتصغير الكود 
    Route::get( 'index' , 'index')->name('index');// تسمية للمبرمج فقط داخل الاكواد
    Route::get('about us' ,'aboutus')->name('aboutus');
    Route::get('services' ,'services')->name('services');
    Route::get('contact us','contactus')->name('contactus');
});


Route::get('/' , function(){
    return view('master');
});
