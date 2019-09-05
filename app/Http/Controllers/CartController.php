<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Article;

class CartController extends Controller
{
    public function index(){
        $session_id=Session::get('session_id');

if(!$session_id){
    generateSessionID();
}
     return view('shop.cart',compact('session_id'));
    }



//ADD ITEM TO CART
public function store(Request $request)
{
    return response()->json(['success'=>'Data is successfully added']);
       $grocery = new Article();
       $grocery->id = $request->id ;
       $grocery->quantity = $request->quantity;


       $grocery->save();
       return response()->json(['success'=>'Data is successfully added']);
}
}