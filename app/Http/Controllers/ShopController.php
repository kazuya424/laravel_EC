<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use App\Models\Cart;

use Illuminate\Support\Facades\Mail; //追記
use App\Mail\Thanks; //追記

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    //
    public function index()
    {
        $stocks = Stock::Paginate(6); //Eloquentでつなぐ
        return view('shop', compact('stocks')); //view(ここではshop.blade.phpのこと)を返すけど$stocksという変数も連れて行って。

    }

    public function myCart(Cart $cart) //Cartモデルの引数ももつ
    {

        $data = $cart->showCart();
        return view('mycart', $data);
    }

    public function addMycart(Request $request, Cart $cart)
    {

        $stock_id = $request->stock_id;

        $message = $cart->addCart($stock_id);

        $data = $cart->showCart();

        return view('mycart', $data)->with('message', $message);
    }

    public function deleteMyCart(Request $request, Cart $cart)
    {

        $stock_id = $request->stock_id;

        $message = $cart->deleteCart($stock_id);

        $data = $cart->showCart();

        return view('mycart', $data)->with('message', $message);
    }

    public function checkout(Cart $cart)
    {
        $cart->checkoutCart();
        Mail::to('test@example.com')->send(new Thanks); //追記
        return view('checkout');
    }
}
