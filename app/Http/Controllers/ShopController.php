<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    public function home()
    {



        return view('shop.index');
    }

    //SHOW ALL THE PRODUCTS AVAILABLE IN THE SHOP
    public function index()
    {
        $all_products = DB::table('products')->get();

        return view('shop.products', compact('all_products'));
    }

    //SHOW THE DETAILS OF A SPECIFIC PRODUCT
public function show($slug){
    $single_product=DB::table('products')->where('slug',$slug)->first();

    return view('shop.product-details',compact('single_product'));
}






    public function checkout()
    {
        return view('shop.checkout');
    }
}
