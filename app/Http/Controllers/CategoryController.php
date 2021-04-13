<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class CategoryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index(): JsonResponse
    {

        return response()->json(['status' => true]);
    }



    //
}
