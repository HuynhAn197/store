<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategroyController extends Controller
{
    public function create(){
        return view('category.add');
    }

    public function index(){
        return view('category.index');
    }

}
