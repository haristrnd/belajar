<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
   public function login(Request $request)
{
  $credentials = $request->validate([
    'email'    => ['required', 'email'],
    'password' => ['required', 'string'],
  ]);

  $user = User::where('email', $credentials['email'])->first();
  $token = $user->createToken('auth_token')->plainTextToken;

  if (! $user || ! Hash::check($credentials['password'], $user->password)) {
    return response()->json([
      'success' => false,
      'message' => 'Email atau password salah.',
    ], 401);
  }

  return response()->json([
    'success' => true,
    'message' => 'Login berhasil.',
    'access_token'  => $token,
    'user'    => $user,
]);
}

}