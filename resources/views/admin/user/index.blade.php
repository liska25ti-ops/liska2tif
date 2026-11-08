@extends('layouts.app') {{-- <-- SESUAIKAN DENGAN BARIS 1 PELANGGAN --}}

@section('content') {{-- <-- SESUAIKAN DENGAN BARIS SECTION PELANGGAN --}}
<div class="py-4">
    <div class="d-flex justify-content-between w-100 flex-wrap mb-3">
        <div>
            <h1 class="h4">Data User</h1>
            <p class="mb-0">List data seluruh user</p>
        </div>
        <div>
            <a href="{{ route('users.create') }}" class="btn btn-success text-white">Tambah User</a>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="card border-0 shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-centered table-nowrap mb-0 rounded">
                    <thead class="thead-light">
                        <tr>
                            <th class="border-0">NAME</th>
                            <th class="border-0">EMAIL</th>
                            <th class="border-0">PASSWORD</th>
                            <th class="border-0">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td class="fw-bold">{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td class="text-truncate" style="max-width: 150px;">{{ $user->password }}</td>
                            <td>
                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus user ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection