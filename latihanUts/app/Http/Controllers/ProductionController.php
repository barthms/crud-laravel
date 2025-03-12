<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required|string|max:255',
            'description'=>'required|string',
            'image'=>'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);
        $simpanPath = $request->file('image')->store('images', 'public');

        Product::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'image'=>$simpanPath,
        ]);
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);
        $request->validate([
            'name'=>'required|string|max:100',
            'description'=>'required|string',
            'image'=>'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $simpanPath = $request->file('image')->store('images', 'public');
            $product->image = $simpanPath;
        }

        $product->name = $request->name;
        $product->description = $request->description;
        $product->save();

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index');
    }

}
