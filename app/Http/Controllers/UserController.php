<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Exception;

class UserController extends Controller
{
    public function index()
    {
        try {
            return User::all();
        } catch (Exception $e) {
            return response()->json([
                "success" => false,
                "message" => $e->getMessage(),
            ], 500);
        }
    }

    public function store(UserRequest $request)
    {
        try {
            $user = new User($request->validated());

            if($user->save() ){
                return response()->json([
                    "success" => true,
                    "message" => "User Created.",
                    "data" => $user
                ], 201);
            }

            return response()->json([
                "success" => false,
                "message" => "User could not created.",
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                "success" => false,
                "message" => $e->getMessage(),
            ], 500);
        }
    }
}
