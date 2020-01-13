<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homesController extends Controller
{
    public function index(Request $request)
    {
        //здеcь должна возвращаться вьюха, страница то есть
        //например
        return view('welcome');
       // dd('типа страница');
    }
}