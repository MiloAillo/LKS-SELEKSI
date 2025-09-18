<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccessController extends Controller
{
    function login(Request $request) {
        $validated = $request->validate([
            "id_card_number" => ['required', 'string'],
            "password" => ['required', 'string']
        ]);

        if(!Auth::attempt($request->only('id_card_number', 'password'))) {
            return response()->json(["message"=>"id card atau password salah"]);
        }

        $user = Auth::user();

        /** @var \App\Models\Society $user */
        $token = $user->createToken('id')->plainTextToken;

        return response()->json(["user"=>$user, "token"=>$token], 200);
    }

    function logout(Request $request) {
        $request->user()->currentAccessToken()->delete();
    }
}
