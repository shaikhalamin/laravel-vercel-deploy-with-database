<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Symfony\Component\HttpFoundation\Response as RESPONSE;

class UserController extends Controller
{
    public function index(Request $request)
    {
       
        $response = [
            'success' => true,
            'data' => User::paginate(50)
        ];

        return response()->json($response, RESPONSE::HTTP_OK);
    }
}
