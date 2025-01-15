<?php

namespace App\Http\Controllers;

use App\Service\ProductService;
use Illuminate\Http\JsonResponse;

class ProductController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function searchByCode($code, ProductService $productService) : JsonResponse
    {
        $response = $productService->getProductInfo($code);
        return $response ? $this->success($response) : $this->error();
    }
}
