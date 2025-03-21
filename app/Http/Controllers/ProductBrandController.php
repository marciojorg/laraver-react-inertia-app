<?php

namespace App\Http\Controllers;

use App\Models\ProductBrand;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductBrandRequest;
use App\Http\Requests\UpdateProductBrandRequest;
use App\Http\Resources\ProductBrandResource;

class ProductBrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $query = ProductBrand::query();
        $productBrands = $query->paginate(10);
        return inertia('ProductBrand/Index', [
            'productBrands' => ProductBrandResource::collection($productBrands),
        ]);    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductBrandRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductBrand $productBrand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductBrand $productBrand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductBrandRequest $request, ProductBrand $productBrand)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductBrand $productBrand)
    {
        //
    }
}
