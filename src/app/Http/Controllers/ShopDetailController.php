<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopDetailController extends Controller
{
    public function detail($shopId){
        $id = $shopId;
        $shop = Shop::where('id',$id);
        return view('detail',['id' => $id,'shop' => $shop]);
    }
}