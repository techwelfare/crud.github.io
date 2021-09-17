<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class profile extends Controller
{
    //
    public function index()
    {
        //return DB::select('select * from user');
        return view('profile');
    }
}
