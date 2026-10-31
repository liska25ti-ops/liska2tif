<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pertanyaan</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .form-container {
            max-width: 600px;
            margin: 50px auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }
    </style>
</head>
<body>

<div class="container">
    <div class="form-container">
        <h3 class="mb-3">Form Pertanyaan</h3>

        {{-- Flash Data Alert (Muncul setelah submit form) --}}
      @if (session('info'))
        <div class="alert alert-info mb-4" style="background-color: #d1ecf1; border-color: #bee5eb; color: #0c5460;">
            {!! session('info') !!}
        </div>
    @endif

    <form action="{{ route('question.store') }}" method="POST">
        @csrf

            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama') }}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
            </div>

            <div class="mb-3">
                <label for="pertanyaan" class="form-label">Pertanyaan</label>
                <textarea name="pertanyaan" id="pertanyaan" rows="4" class="form-control" required>{{ old('pertanyaan') }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Kirim Pertanyaan</button>
        </form>
    </div>
</div>

</body>
</html>