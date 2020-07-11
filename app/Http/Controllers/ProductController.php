<?php

namespace App\Http\Controllers;
use App\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
    	if(request()->categories){
            $products=Product::with('categories')->whereHas('categories',function($query){
                $query->where('slug',request()->categories);
            })->orderBy('created_at','DESC')->paginate(6);
        }else{
        $products = Product::with('categories')->orderBy('created_at','DESC')->paginate(6);
        }
        return view('products.index')->with('products', $products);
    }
    public function show($slug){
        $product = Product::where('slug',$slug)->firstOrFail();
        $stock = $product->stock==0 ? 'Indisponible' : 'Disponible';
        return view('products.show',[
            'product'=>$product,
            'stock'=>$stock 
        ]);

    }
    public function search(){
     $q = request()->input('q');
        $products =  Product::where('title','LIKE' , "%$q%")
        ->orWhere('description', 'LIKE' , "%$q%")
        ->paginate(6);
    return view('products.search')->with('products',$products);   
    }
}
