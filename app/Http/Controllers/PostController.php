<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index() {

        $records = DB::table('posts')->get();

        return view('postIndex')->with('records', $records);
    }
}
