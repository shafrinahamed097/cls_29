<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TestController extends Controller
{
    function test1()
    {
        
        // Selecting All Rows
       $result = DB::table('brands')->get();

       return $result;
    }
}
