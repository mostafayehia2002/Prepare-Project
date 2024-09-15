<?php

namespace App\Traits;
use Illuminate\Http\JsonResponse;

trait HttpResponse
{
    /**
     * Return validation error response.
     */

    public function returnValidationError($statusCode = 422, $error = 'Validation error'): JsonResponse
    {
        return response()->json([
            'isSuccess' => false,
            'status' => $statusCode,
            'error' =>  $error
        ], $statusCode)->header('Accept', 'application/json');
    }

    /**
     * Return general error message response.
     */
    public function returnErrorMessage($statusCode = 500, $error = 'An error occurred'): JsonResponse
    {
        return response()->json([
            'isSuccess' => false,
            'status' => $statusCode,
            'error' => $error,

        ], $statusCode)->header('Accept', 'application/json');
    }
    /**
     * Return success message response.
     */
    public function returnSuccessMessage($statusCode = 200, $message = 'success'): JsonResponse
    {
        return response()->json([
            'isSuccess' => true,
            'status' => $statusCode,
            'message' => $message
        ], $statusCode)->header('Accept', 'application/json');
    }
    /**
     * Return data response.
     */

    public function returnData($statusCode=200, $key = 'data', $value=[]): JsonResponse
    {
        return response()->json([
            'isSuccess' => true,
            'status' => $statusCode,
            $key => $value
        ], $statusCode)->header('Accept', 'application/json');
    }

    /**
     * Return paginated data response.
     */
    public function returnPaginatedData($statusCode =200 , $data=[]): JsonResponse
    {
        return response()->json([
            'isSuccess' => true,
            'status' => $statusCode,
            'data' => [
                'items' => $data->items(),
                'total' => $data->total(),
                'currentPage' => $data->currentPage(),
                'lastPage' => $data->lastPage(),
                'perPage' => $data->perPage(),
            ],
        ], $statusCode)->header('Accept', 'application/json');
    }
}

