<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shop(){
        $user = auth()->user();
        $username = $user->name;
        /*$shops = Shop::all();
        for($i = 1;$i <= 20;$i++){
            $favorite[] = Favorite::where('user_id',$user->id)
            ->where('shop_id',$i)->exists();
        }*/
    return view('shop',['username' => $username/*,'shops' => $shops,'favorite' => $favorite*/]);
    }
    public function thanks(){
        return view ('thanks');
    }
}
