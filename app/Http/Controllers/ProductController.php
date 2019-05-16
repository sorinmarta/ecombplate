<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
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
        /**
         * Validate Name and Value
         */
        $request->validate([
            'name' => 'required',
            'value' => 'required'
        ]);

        /**
         * Store the new product values
         */
        $product = new Product([
            'name' => $request->get('name'),
            'value' => $request->get('value'),
            'sale_value' => $request->get('sale_value'),
            'description' => $request->get('description'),
            'short_description' => $request->get('short_description'),
            'images' => $request->get('images')
        ]);

        $product->save();
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
        /**
         * Validate Name and Value
         */
        $request->validate([
            'name' => 'required',
            'value' => 'required'
        ]);

        /**
         * Update the current values of the product
         */
        $product = Product::find($id);
        $product->name = $request->get('name');
        $product->value = $request->get('value');
        $product->sale_value = $request->get('sale_value');
        $product->description = $request->get('description');
        $product->short_description = $request->get('short_description');
        $product->images = $request->get('images');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
    }
}
