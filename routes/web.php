<?php
use App\UserInput;
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
//    $userInputs = UserInput::all(); 
//     return view('homepage',compact('userInputs'));
    return redirect('home');
});

Route::get('ewdvuewvdi217891', function () {
//    $userInputs = UserInput::all(); 
//     return view('homepage',compact('userInputs'));
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    // $exitCode = Composer::call('require guzzlehttp/guzzle');

    // composer require guzzlehttp/guzzle    // $exitCode = Artisan::call('migrate');
    // $exitCode = Artisan::call('key:generate');
    $exitCode = Artisan::call('migrate');

    $nn = Composer::call('dump-autoload');
    // $nn = Composer::call('dump-autoload -o');
    
    return 'changes commited';

});


Auth::routes();

//home router
Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin-a-cf', function(){
    return view('inc.sys.admin.index');
});

Route::get('contact', 'ContactController@view');

Route::get('edit', 'ContactController@edit');

Auth::routes();