<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $allCategories = ['C1', 'C2', 'C3'];
        return view('index', ['categories' => $allCategories]);
    }
}
