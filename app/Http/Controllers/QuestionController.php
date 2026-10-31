<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
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
        // 1. Validasi Input Form
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'pertanyaan' => 'required',
        ]);

        // 2. Format Teks Pesan dengan Tag <strong> agar Cetak Tebal
        $pesan = "Terimakasih <strong>{$request->nama}</strong>! Pertanyaan ini: <strong>{$request->pertanyaan}</strong> akan segera direspon melalui email <strong>{$request->email}</strong>";

        // 3. Redirect Kembali ke Halaman Form Membawa Session Flash Data 'info'
        return redirect()->back()->with('info', $pesan);
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}