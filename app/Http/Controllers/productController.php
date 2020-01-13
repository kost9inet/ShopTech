<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    public function index(Request $request)
    {
        //здеcь должна возвращаться вьюха, страница то есть
        //например
       return view('product');
       // dd('типа страница');
    }
}