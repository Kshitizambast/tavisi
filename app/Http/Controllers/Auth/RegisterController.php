<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Models\User;

/**
 * 
 */
class RegisterController extends Controllers
{
	
	public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);
 
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
       
        $token = $user->createToken('LaravelAuthApp')->accessToken;
 
        return response()->json(['token' => $token], 200);
    }

}



 