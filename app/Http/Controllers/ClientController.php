<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MiddlewareService;

class ClientController extends Controller
{
    protected $middlewareService;

    public function __construct(MiddlewareService $middlewareService)
    {
        $this->middlewareService = $middlewareService;
    }

    public function handleRequest(Request $request)
    {
        try {
            // Forward request data to Middleware Microservice
            $response = $this->middlewareService->processRequest($request->all());

            return response()->json([
                'status' => 'success',
                'data' => $response,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }
}
