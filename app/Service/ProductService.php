<?php

namespace App\Service;

use App\Http\Resources\ProductResource;
use App\Models\Product;

class ProductService {


    public function getProductInfo($code) :mixed
    {
        $product = Product::where('code', $code)->first();
        return $product ? new ProductResource($product) : null;
    }

}
