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
    // $result = DB::table('products')->min('price');

    // Find-out average Price
    // $result = DB::table('products')->avg('price');

    // Find-Out Sum
    // $result = DB::table('products')->sum('price');

    // Select Specific Columns from row
    // $result = DB::table('products')->select('title', 'price')->get();

    // Select Unique
    // $result = DB::table('products')->select('title')->distinct()->get();


    // Inner Join
    // $result = DB::table('products')
    // ->join('categories','products.category_id','=','categories.id')
    // ->join('brands', 'products.brand_id','=', 'brands.id')
    // ->get();


    
    // left Join
    //   $result = DB::table('products')
    //   ->leftJoin('categories', 'products.category_id', '=','categories.id')
    //   ->leftJoin('brands', 'products.brand_id', '=', 'brands.id')
    //  ->get();

    // right Join
    // $result = DB::table('products')
    //   ->rightJoin('categories', 'products.category_id', '=','categories.id')
    //   ->rightJoin('brands', 'products.brand_id', '=', 'brands.id')
    //  ->get();


    // cross join

    // $result = DB::table('products')->crossJoin('brands')->get();

    // Simple Pagination
    // $result = DB::table(table: 'products')->simplePaginate(3);

    // Custom Pagination
      // $perPage = 5;
      // $columns=["*"];
      // $pageName="items";

    $result = DB::table('products')->paginate(
        $perPage=5,
        $columns=["*"],
        $pageName="items"
    );


       return $result;
    }
}
