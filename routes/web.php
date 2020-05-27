<?php

use App\people;
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
Route::group(['middleware' => 'login'], function (){



Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('/cashout', function () {
    return view('cashout');
})->name('cashout');


Route::get('/invite', function () {
    return view('invite');
})->name('invite');


Route::get('/help', function () {
    return view('help');
})->name('help');


Route::get('/promo', function () {
    return view('promo');
})->name('promo');

Route::get('/mediap', function () {
    return view('media');
})->name('media');

Route::get('/points/{point}/{url}', function ($point,$url) {

    
    $people = App\people::find($_SESSION["id"]);
    $people->earn += (float)$point ; 
    $people->save();
    if($url == 'join')
    return redirect('https://discord.com/invite/f94dR8W');
   else if($url == 'twitter')
    return redirect('https://twitter.com/intent/tweet?url=https%3A%2F%2Frbxadder.com%2F%23%2Fref%2FMwrYN&text=Hey%20Everyone%20you%20can%20get%20free%20Robux%20from%20this%20website!%20%40RbxAdderSite');
   else if($url == 'youtube')
    return redirect('https://www.youtube.com/channel/UCDQwUWrFXI7cuRIuNaEKrGg?sub_confirmation=1');
})->name('points');




route::get('logout',function(){
 
    session_destroy();
    return back();

})->name('logout');

});


route::get('login',function(){
    return view('login');

})->name('login');
route::resource('peoples','PeopleController');







Route::get('robux',function(){
  return  (int) now()->format("yhis")*13;
})->name('robux');