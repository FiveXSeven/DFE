<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Apprenant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ApprenantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // RECUP DES DONNEES DEPUIS LA BASE DE DONNEE

        $apprenants = Apprenant::with('filiere')->get();
        // dd($apprenants);
        return view('user.index', [
            'apprenants' => $apprenants
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Storage::disk('public')->put('apprenant_image', $request->image);
        // dd('ok');
        // RECUPERATION DES DONNEES DU FORMULAIRE
        $data = $request->validate([
            'prenom' => 'required',
            'nom' => 'required',
            'filiere_id' => 'required'
        ]);

        $apprenant = Apprenant::create($data);

        // return redirect()->route(view('user.index'));
        return redirect()->route('user.index');



    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Apprenant $id)
    {
        return view('user.edit', [
            'apprenant' => $id
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Apprenant $id, Request $request)
    {
        // GESTION DE LA MISE A JOUR DES DONNEES
        // GESTION DE LA MISE A JOUR DES DONNEES

        $data = $request->validate([
            'prenom' => 'required',
            'nom' => 'required',
            'filiere_id' => 'required'
        ]);

        $id->update($data);

        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Apprenant $id)
    {
        $id->delete();

        return redirect()->route('user.index');

    }
}
