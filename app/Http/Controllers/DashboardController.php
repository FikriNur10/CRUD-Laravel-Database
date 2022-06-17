<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ProductModel::all();
        return view('dash-product',compact(['data']),[
            'title'=>'Product']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dash-productadd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
   
        // dd($request->all());
        $data = ProductModel::create($request->all());
        if($request ->hasFile('photo_product')){
            $request -> file('photo_product') -> move('ada-photo-product/',$request -> file('photo_product') -> getClientOriginalName());
            $data -> photo_product = $request -> file('photo_product') -> getClientOriginalName();
            $data -> save();
        }
        return redirect()->route('dash-product')->with('success', 'Add Product Successfully!');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showHome()
    {
        $data = ProductModel::all();
        return view('product',compact(['data']),[
            'title'=>'Product']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($code_product)
    {
        $data = ProductModel::find($code_product);
        return view('product-edit',compact(['data']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $code_product)
    {
        $data = ProductModel::find($code_product);
        $data -> update($request->all());
        return redirect() -> route('dash-product')->with('success', 'Update Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($code_product)
    {
        $data = ProductModel::find($code_product);
        $data -> delete();

        return redirect()->route('dash-product')->with('success', 'Delete Successfully!');;
    }
}
