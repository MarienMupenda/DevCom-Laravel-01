<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDemandeRequest;
use App\Models\Demande;

class DemandeControler extends Controller
{

    public function index()
    {
        $demandes = Demande::all();


        return view('welcome', compact('demandes'));
    }

    public function enregistrer(StoreDemandeRequest $request)
    {
        $demande = Demande::create($request->validated());

        return redirect()->route('welcome');
    }
}
