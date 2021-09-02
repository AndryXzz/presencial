<?php

namespace App\Http\Controllers;

use App\productModel;
use Illuminate\Http\Request;


class ProductModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products =  ProductModel::all();
        // Log::debug('Reached this point');
        return view('products',['products'=>$products]);
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
     * @param  \App\productModel  $productModel
     * @return \Illuminate\Http\Response
     */
    public function show(productModel $productModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\productModel  $productModel
     * @return \Illuminate\Http\Response
     */
    public function edit(productModel $productModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\productModel  $productModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, productModel $productModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\productModel  $productModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(productModel $productModel)
    {
        //
    }
}
