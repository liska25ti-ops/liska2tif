<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;
class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
public function index()
    {
        // Harus menggunakan $dataPelanggan agar cocok dengan @foreach($dataPelanggan as $item)
        $dataPelanggan = Pelanggan::all(); 
        return view('admin.pelanggan.index', compact('dataPelanggan'));
    }

    /**
     * Show the form for creating a new resource.
     */
public function create()
    {
        return view('admin.pelanggan.create');
    }

    /**
     * Store a newly created resource in storage.
     */

public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name'  => 'required|string|max:100',
            'email'      => 'required|email|unique:pelanggan,email',
            'gender'     => 'nullable|in:Male,Female',
            'birthday'   => 'nullable|date',
            'phone'      => 'nullable|string|max:20',
        ]);

        Pelanggan::create([
            'first_name' => $request->first_name,
            'last_name'  => $request->last_name,
            'birthday'   => $request->birthday,
            'gender'     => $request->gender,
            'email'      => $request->email,
            'phone'      => $request->phone,
        ]);

      return redirect()->route('pelanggan.index')->with('success', 'Data Pelanggan Berhasil Ditambahkan!');
    }



    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    $pelanggan = Pelanggan::findOrFail($id);
    return view('admin.pelanggan.edit', compact('pelanggan'));
}

    /**
     * Update the specified resource in storage.
     */
  public function update(Request $request, $id)
{
    $pelanggan = Pelanggan::findOrFail($id);

    $request->validate([
        'first_name' => 'required|string|max:100',
        'last_name'  => 'required|string|max:100',
        'email'      => 'required|email|unique:pelanggan,email,'.$id.',pelanggan_id',
        'gender'     => 'nullable|in:Male,Female',
        'birthday'   => 'nullable|date',
        'phone'      => 'nullable|string|max:20',
    ]);

    $pelanggan->update([
        'first_name' => $request->first_name,
        'last_name'  => $request->last_name,
        'birthday'   => $request->birthday,
        'gender'     => $request->gender,
        'email'      => $request->email,
        'phone'      => $request->phone,
    ]);

   return redirect()->route('pelanggan.index')->with('success', 'Perubahan Data Berhasil!');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    return redirect()->route('pelanggan.index')->with('success', 'Data Pelanggan Berhasil Dihapus!');
    }
}
