<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Isi Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #FF69B4; /* Pink background */
            color: #fff; /* White font */
        }

        .form-container {
            background-color: #fff;
            border: 2px solid #FF69B4; /* Border pink */
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            color: #000;
        }

        h2 {
            color: #FF69B4; /* Pink title */
        }

        .form-control {
            border: 2px solid #FF1493; /* Dark pink border */
            border-radius: 10px;
        }

        .form-control:focus {
            border-color: #FF1493;
            box-shadow: 0 0 10px #FFB6C1;
        }

        .btn-primary {
            background-color: #FF69B4; /* Pink button */
            border-color: #FF69B4;
            color: #fff;
        }

        .btn-primary:hover {
            background-color: #FF1493;
            border-color: #FF1493;
        }

        .btn-warning {
            background-color: #FF9999; /* Light pink for back button */
            border-color: #FF9999;
            color: #fff;
        }

        .btn-warning:hover {
            background-color: #FF6666;
            border-color: #FF6666;
        }
    </style>
</head>
<body>
    <section class="container mt-5">
        <div class="form-container">
            <h2 class="text-center mb-4">Isi Data Mahasiswa</h2>
            <form action="{{ route('mahasiswa.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nim" class="form-label">NIM</label>
                    <input type="text" name="nim" id="nim" class="form-control" placeholder="Masukkan NIM Mahasiswa" required>
                </div>
                <div class="mb-3">
                    <label for="nama_mahasiswa" class="form-label">Nama Mahasiswa</label>
                    <input type="text" name="nama_mahasiswa" id="nama_mahasiswa" class="form-control" placeholder="Masukkan Nama Mahasiswa" required>
                </div>
                <div class="mb-3">
                    <label for="jurusan" class="form-label">Jurusan</label>
                    <input type="text" name="jurusan" id="jurusan" class="form-control" placeholder="Masukkan Jurusan Mahasiswa" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan Email Mahasiswa" required>
                </div>
                <div class="mb-3">
                    <label for="dosen_id" class="form-label">Dosen Pembimbing</label>
                    <select name="dosen_id" id="dosen_id" class="form-select" required>
                        <option value="" disabled selected>Pilih Dosen</option>
                        @foreach($dosens as $dosen)
                            <option value="{{ $dosen->id }}">{{ $dosen->kode_dosen }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('mahasiswa.index') }}" class="btn btn-warning">Kembali</a>
                </div>
            </form>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>