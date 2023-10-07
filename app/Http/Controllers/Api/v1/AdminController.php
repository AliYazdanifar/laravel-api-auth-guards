<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:web');
        $this->middleware('guest:admin');
    }

    public function index()
    {
        dd('dd');
    }

    public function me(Request $request)
    {
        return $request->user();
    }

    public function login(LoginRequest $request)
    {
        $request->authenticate();
        dd($request->user());
        $token = Auth::user()->createToken('API');
        return response()->json([
            "token" => $token->plainTextToken,
        ]);
    }

}
