<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    public function index()
    {
        return Product::all();
    }

    public function store(Request $request)
    {
        Product::create($request->all());
    }

    public function show($id)
    {
        return Product::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $produto = Product::findOrFail($id);
        $produto->update($request->all()); 
    }

    public function destroy($id)
    {
        $produto = Product::findOrFail($id);
        $produto->delete();
    }
}
