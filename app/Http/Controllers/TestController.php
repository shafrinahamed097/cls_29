<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TestController extends Controller
{
    function test1()
    {
        
        // Selecting All Rows
    //    $result = DB::table('brands')->get();

    
    //Selecting First Rows
    // $result = DB::table('brands')->first();

    // Selecting  by ID
    // $result = DB::table('brands')->find(4);

    // Selecting Specific Column
    // $result = DB::table('brands')->pluck('brandName');

    
    // Row Count
    // $result = DB::table('products')->count();

    // Find-Out Max Price
    // $result = DB::table('products')->max('price');

    // Find-Out Min Price
    $result = DB::table('products')->min('price');

    // Find-out average Price
    $result = DB::table('products')->avg('price');

       return $result;
    }
}
