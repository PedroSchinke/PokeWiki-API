<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string',
            'email' => 'required|email|unique:users',
            'senha' => 'required|string',
        ]);

        User::create([
            'name' => $request->get('nome'),
            'email' => $request->get('email'),
            'password' => $request->get('senha')
        ]);

        return response()->json('Usuário criado com sucesso!');
    }
}
