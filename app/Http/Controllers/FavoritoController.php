<?php

namespace App\Http\Controllers;

use App\Models\Favorito;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FavoritoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Favorito $favorito)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Favorito $favorito)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Favorito $favorito)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Favorito $favorito)
    {
        //
    }

    public function toggleFavorito(Request $request)
    {
        $request->validate([
            'pokemon_id' => 'required|integer',
        ]);

        $user = auth()->user();

        $favorito = Favorito::query()
            ->where('user_id', $user->id)
            ->where('pokemon_id', $request->get('pokemon_id'))
            ->first();

        if ($favorito) {
            $favorito->delete();

            return response()->json(['mensagem' => 'Pokémon removido dos favoritos!']);
        }

        $favoritoCriado = Favorito::create([
            'user_id' => $user->id,
            'pokemon_id' => $request->get('pokemon_id')
        ]);

        return response()->json(['data' => $favoritoCriado, 'mensagem' => 'Pokémon favoritado com sucesso!'], 201);
    }
}
