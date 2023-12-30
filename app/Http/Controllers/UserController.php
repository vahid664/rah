<?php

namespace App\Http\Controllers;

use App\Models\User;
// use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;

class UserController extends Controller
{

    public function store(StoreUserRequest $request)
    {
        // $validated = $request->validated();

        $user = User::create([
            "name"     => $request->name,
            "email"    => $request->email,
            "mobile"   => $request->mobile,
            "password" => bcrypt($request->password),
        ]);
        return response()->json(['id' => $user->id], 201);
    }
}
