<?php

namespace App\Http\Controllers;

use App\Models\Grocery;
use Illuminate\Http\Request;

class GroceryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('grocery.grocerylist',['groceries'=>Grocery::all()]);
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
        $grocery = new Grocery;
        $grocery->itemname = $request->input('itemname');
        $grocery->category = $request->input('category');
        $grocery->quantity = $request->input('quantity');
        $grocery->save();

        return view('grocery.grocerylist',['groceries'=>Grocery::all()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Grocery  $grocery
     * @return \Illuminate\Http\Response
     */
    public function show(Grocery $grocery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Grocery  $grocery
     * @return \Illuminate\Http\Response
     */
    public function edit(Grocery $grocery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Grocery  $grocery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grocery $grocery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Grocery  $grocery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grocery $grocery)
    {
        //
    }
}
