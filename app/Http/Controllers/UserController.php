<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Symfony\Component\HttpFoundation\Response as RESPONSE;
use Throwable;

class UserController extends Controller
{
    public function index(Request $request)
    {

        try {
            $response = [
                'success' => true,
                'data' => User::paginate(50)
            ];

            return response()->json($response, RESPONSE::HTTP_OK);
        } catch (Throwable $th) {
            $response = [
                'success' => false,
                'data' => null,
                'message' => $th->getMessage()
            ];

            return response()->json($response, $th->getCode());
        }
    }
}
