<?php

namespace App\Http\Controllers;

use App\Models\Utilisateurs;
use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function NewUtilisateur(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email',
            'sexe' => 'required',

        ]);
        $Utilisateur= new Utilisateurs();
        $Utilisateur->nom = $request->nom;
        $Utilisateur->prenom = $request->prenoms;
        $Utilisateur->email = $request->email;
        $Utilisateur->sexe = $request->programme;
        $Utilisateur->save();

        return redirect('/inscription')->with('status', 'Votre inscription a ete validee avec succes.');
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
    public function show(Utilisateurs $utilisateurs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Utilisateurs $utilisateurs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Utilisateurs $utilisateurs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Utilisateurs $utilisateurs)
    {
        //
    }
}
