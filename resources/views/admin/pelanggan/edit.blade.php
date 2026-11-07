<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Volt - Edit Pelanggan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link type="text/css" href="{{ asset('assets-admin/css/volt.css') }}" rel="stylesheet">
</head>

<body>
    <main class="content">
        <div class="py-4">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item"><a href="#">Pelanggan</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Pelanggan</li>
                </ol>
            </nav>
            <div class="d-flex justify-content-between w-100 flex-wrap">
                <div class="mb-3 mb-lg-0">
                    <h1 class="h4">Edit Pelanggan</h1>
                    <p class="mb-0">Form untuk memperbaharui data pelanggan.</p>
                </div>
                <div>
                    <a href="{{ route('pelanggan.index') }}" class="btn btn-gray-800">Kembali</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-4">
                <div class="card border-0 shadow components-section">
                    <div class="card-body">
                        <!-- Form Menggunakan Method PUT -->
                        <form action="{{ route('pelanggan.update', $pelanggan->pelanggan_id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            
                            <div class="row mb-4">
                                <div class="col-lg-4 col-sm-6">
                                    <div class="mb-3">
                                        <label for="first_name">First name</label>
                                        <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name', $pelanggan->first_name) }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="last_name">Last name</label>
                                        <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name', $pelanggan->last_name) }}" required>
                                    </div>
                                </div>
                                
                                <div class="col-lg-4 col-sm-6">
                                    <div class="mb-3">
                                        <label for="birthday">Birthday</label>
                                        <input type="date" class="form-control" id="birthday" name="birthday" value="{{ old('birthday', $pelanggan->birthday) }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="gender">Gender</label>
                                        <select class="form-select" id="gender" name="gender">
                                            <option value="">-- Pilih --</option>
                                            <option value="Male" {{ old('gender', $pelanggan->gender) == 'Male' ? 'selected' : '' }}>Male</option>
                                            <option value="Female" {{ old('gender', $pelanggan->gender) == 'Female' ? 'selected' : '' }}>Female</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-lg-4 col-sm-6">
                                    <div class="mb-3">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $pelanggan->email) }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="phone">Phone</label>
                                        <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', $pelanggan->phone) }}">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mt-3">
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                <a href="{{ route('pelanggan.index') }}" class="btn btn-outline-gray-500 ms-2">Batal</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="{{ asset('assets-admin/vendor/@popperjs/core/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets-admin/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets-admin/js/volt.js') }}"></script>
</body>

</html>