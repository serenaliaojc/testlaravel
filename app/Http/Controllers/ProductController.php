<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	$this->validate($request,
    		[
    			'name' => 'required|min:3'
    		]);
    	/* 1 */
    	// dd($request->all());
    	// $product = new Product();
    	// $product->name = $request->name;
    	// $product->save();

    	/* 2 */
    	Product::create($request->all());
    	// names from the form match database
    	// for massive assignment

    	return redirect('products');
        // return "product added";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    	$product = Product::find($id);
    	// return $product;
        return view('products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit',compact('product'));
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
        $this->validate($request,
            [
                'name' => 'required|min:3'
            ]);
        $product = Product::find($id);
        $product->update($request->all());
        /* 1 */
        // dd($request->all());
        // $product = new Product();
        // $product->name = $request->name;
        // $product->save();

        /* 2 */
        // Product::create($request->all());
        // // names from the form match database
        // // for massive assignment

        return redirect('products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // return "product deleted";
        Product::find($id)->delete();
        return redirect('products');
    }
}
