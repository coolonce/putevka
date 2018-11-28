<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        return view('pages.book');
    }
    public function edit($id){
        return view('pages.edit');
    }
}
