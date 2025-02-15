<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    //

    function success($data, $message = "Success", $status = 200)
    {
        return response()->json([
            'status' => 'success',
            'message' => $message,
            'data' => $data,
        ], $status);
    }

    public function error($message = "No data found!",$status = 400)
    {
        return response()->json([
            'status' => 'error',
            'message' => $message,
            'data' => null,
        ], $status);
    }
}
