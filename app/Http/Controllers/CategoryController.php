<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class CategoryController extends Controller
{
    public function index() {

        $records = DB::table('categories')->get();

        return view('categoryIndex')->with('records', $records);
    }
    
    public function create() {
        return view('categoryCreate');
    }
}
