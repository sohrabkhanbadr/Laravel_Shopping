<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productList()
    {
        $products = Product::all();

        return view('products', compact('products'));
    }

    public function productsDetails($id)
    {
        // $products = Product::table('products')->find($id);
        // $products = Product::find($id)->get();
        // // $products  = Product::where('id', $id)->first();
        // // var_dump($products);
        // return view('products', compact('products'));

                // get the shark
                // $product = Product::find($id);
                

                // $product = Product::where('products.id', $id)
                // ->join('product_store', 'products.id', '=', 'product_store.product_id')
                // ->join('stores', 'stores.id', '=', 'product_store.store_id')
                
                // // ->select('users.*', 'contacts.phone', 'orders.price')
                // ->get();

                $product = Product::find($id);
                // $product = Product::with('stores')->get();
                $stores = Product::find($id)->stores()->get();
                // dd(compact('product','stores'));
                // show the view and pass the shark to it
                return view('products2', compact('product','stores'));
        


    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
