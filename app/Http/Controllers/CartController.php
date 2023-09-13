<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    public function add(Request $request){
		

		
			$product = Product::find($request->product_id);
		
			$price = $product->sale_price;
	
		Cart::add($product->id, $product->name, $price,$request->quantity )->associate('App\Models\Product');
		//session()->flash('errors', collect(['Please Check Length,Width,Height,Weight again of this product']));
	    return back()->with('success', 'Item has been added to cart!');
	}
    public function update(Request $request){
		Cart::update($request->product_id, array(
		'quantity' => array(
				  'relative' => false,
				  'value' => $request->quantity
			  ), 
		));
		return back()->with('success_msg', 'Item has been updated!');
	}
	public function destroy($id){
		Cart::remove($id);
		return back()->with('success_msg', 'Item has been removed!');
	}
}
