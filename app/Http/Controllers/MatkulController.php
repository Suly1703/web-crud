<?php

namespace App\Http\Controllers;

use App\Models\Matkul;
use Illuminate\Http\Request;

class MatkulController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matkuls = Matkul::orderBy('created_at', 'DESC')->get();

        return view('pages.matkul.index', compact('matkuls'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.matkul.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Matkul::create($request->all());

        return redirect()->route('matkul.index')->with('success','Matkul added successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $matkul = Matkul::findOrFail($id);

        return view('pages.matkul.edit', compact('matkul'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $matkul = Matkul::findOrFail($id);

        $matkul->update($request->all());

        return redirect()->route('matkul.index')->with('success','Matkul updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $matkul = Matkul::findOrFail($id); 

        $matkul->delete();

        return redirect()->route('matkul.index')->with('success','Matkul deleted successfully');
    }
}
