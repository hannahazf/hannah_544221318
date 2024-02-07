<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return response()
     */
    public function index(): View
    {
        $product = product::latest()->paginate(2);

        return view('product.index',compact('product'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nama_produk' => 'required',
            'harga_beli' => 'required',
            'harga_jual' => 'required'
        ]);

        $input = $request->all();

        Product::create($input);

        return redirect()->route('product.index')
                        ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product): View
    {
        return view('product.edit',compact('product'));
    }

    public function show (Product $product) :View
    {
        return view ('products.show', compact('product'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product): RedirectResponse
    {
        $request->validate([
            'nama_produk' => 'required',
            'harga_beli' => 'required',
            'harga_jual' => 'required'
        ]);

        $input = $request->all();

        $product->update($input);

        return redirect()->route('product.index')
                        ->with('success','Product has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product): RedirectResponse
    {
        $product->delete();

        return redirect()->route('product.index')
                        ->with('success','Product has been deleted successfully.');
    }
}
