<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View
    {
        $products = Product::latest()->paginate(10);
        return view('products.index', compact('products'));
    }

    public function create(): \Illuminate\Contracts\View\View
    {
        return view('products.create');
    }

    public function store(ProductRequest $request): \Illuminate\Http\RedirectResponse
    {
        Product::create($request->validated());
        return redirect()->route('products.index')->with('success', 'Created successfully');
    }

    public function show(Product $product): \Illuminate\Contracts\View\View
    {
        return view('products.show', compact('product'));
    }

    public function edit(Product $product): \Illuminate\Contracts\View\View
    {
        return view('products.edit', compact('product'));
    }

    public function update(ProductRequest $request, Product $product): \Illuminate\Http\RedirectResponse
    {
        $product->update($request->validated());
        return redirect()->route('products.index')->with('success', 'Updated successfully');
    }

    public function destroy(Product $product): \Illuminate\Http\RedirectResponse
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Deleted successfully');
    }
}
