<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //

    public function commands(){
        \Artisan::call('config:clear');
        \Artisan::call('cache:clear');
        // $exitCode = Composer::call('require guzzlehttp/guzzle');
    
        // composer require guzzlehttp/guzzle    // $exitCode = Artisan::call('migrate');
        \Artisan::call('key:generate');
        \Artisan::call('migrate');
    }
}
