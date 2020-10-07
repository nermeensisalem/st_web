<?php

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

Route::get('/test', function (){
    $name="nermeen";
    //dd($name);
} );

Route::get('/users/{id?}', function($userId){
    dd($userId);
});

Route::get('users/{id}/comments', function ($userId){
   dd("comments of user".$userId);
});

Route::get('users/{id?}/comments/{numOfCom}', function ($userId=1,$numOfCom){
    dd("user number". "".$userId." have "."".$numOfCom. " comments" );
});

Route::get('/google', function (){
//    return redirect()->Route('my_new_profile');

} );

Route::redirect('/google','https://www.google.com.ps');

Route::get('/new_profile', function (){
    $name="hi from  new profile";
    dd($name);
} )->name('my_new_profile');

Route::prefix('admin_store')->group(function (){

    Route::get('/dashborad', function (){

    } );

    Route::get('/products', function (){

    } );

    Route::get('/categories', function (){

    } );

    Route::prefix('users')->group(function (){
        Route::get('/profile', function (){

        } );

        Route::get('/reset_password', function (){

        } );
    });
});


Route::middleware(['checkip','auth '])->group(function (){
    Route::get('/dashborad', function (){
        echo "hi";
    } );
});
