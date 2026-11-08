<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    public function create()
    {
        return view('admin.user.create');
    }

public function store(Request $request)
{
    // Validasi sesuai modul (nama max 100, email unik, password min 8 & konfirmasi)
    $request->validate([
        'name'     => 'required|string|max:100',
        'email'    => 'required|email|unique:users,email',
        'password' => 'required|string|min:8|confirmed',
    ]);

    User::create([
        'name'     => $request->name,
        'email'    => $request->email,
        'password' => Hash::make($request->password),
    ]);

    return redirect()->route('users.index')->with('success', 'User berhasil ditambahkan!');
}

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.edit', compact('user'));
    }

public function update(Request $request, $id)
{
    $user = User::findOrFail($id);

    // Validasi edit (password nullable agar tidak wajib diisi jika tidak ingin diubah)
    $request->validate([
        'name'     => 'required|string|max:100',
        'email'    => 'required|email|unique:users,email,' . $id,
        'password' => 'nullable|string|min:8|confirmed',
    ]);

    $data = [
        'name'  => $request->name,
        'email' => $request->email,
    ];

    if ($request->filled('password')) {
        $data['password'] = Hash::make($request->password);
    }

    $user->update($data);

    return redirect()->route('users.index')->with('success', 'User berhasil diperbarui!');
}

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users.index')->with('success', 'User berhasil dihapus!');
    }
}