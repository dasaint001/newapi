<?php

namespace App\Http\Controllers;

use App\Model\Product;

use Illuminate\Http\Request;


class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
     
     $products = Product::all();

     return response()->json($products);

    }

     public function create(Request $request)
     {
         // Creation of new products
        $product = new Product;

        //New product body to be filled in order to create it.
       $product->name= $request->name;
       $product->email = $request->email;
       
       $product->save();

       return response()->json("Product Successfully Created!");
     }

     public function show($id)
     {
         // display all the avalaible products in the database
        $product = Product::find($id);

        return response()->json($product);
     }

     public function update(Request $request, $id)
     { 
         // effects changes made to the product at any point
        $product= Product::find($id);
        
        $product->name = $request->input('name');
        $product->email = $request->input('email');

        $product->save();

        return response()->json($product);
     }

     public function destroy($id)
     {
         // This makes deleting possible
        $product = Product::find($id);
        $product->delete();

         return response()->json('Product successfully deleted');
     }


    }