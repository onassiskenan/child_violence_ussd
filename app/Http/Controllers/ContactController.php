<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function view(){
        return view('contact');
    }
    public function edit(){
        $i='data';
        return view('contact.edit')->with('i', $i);
}

}
