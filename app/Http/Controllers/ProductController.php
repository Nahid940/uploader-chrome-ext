<?php

namespace App\Http\Controllers;

use App\Service\ProductService;

class ProductController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function searchByCode($code, ProductService $productService)
    {
        $response = $productService->getProductInfo($code);
        return $this->success($response);
    }
}
