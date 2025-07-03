<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getInfos(Request $request, $user_id)
    {
        $user = User::find($user_id);

        return response()->json($user);
    }
}
