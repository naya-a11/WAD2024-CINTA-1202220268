<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Isi Data Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #FF69B4; /* Warna pink sebagai warna dasar */
            color: #fff; /* Warna font putih */
        }

        .form-container {
            background-color: #fff;
            border: 2px solid #FF69B4; /* Border pink */
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            color: #000; /* Warna teks di dalam form menjadi hitam */
        }

        h2 {
            color: #FF69B4; /* Warna judul pink */
        }

        .form-control {
            border: 2px solid #FF1493; /* Border pink lebih gelap */
            border-radius: 10px;
        }

        .form-control:focus {
            border-color: #FF1493;
            box-shadow: 0 0 10px #FFB6C1;
        }

        .btn-primary {
            background-color: #FF69B4; /* Tombol pink */
            border-color: #FF69B4;
            color: #fff;
        }

        .btn-primary:hover {
            background-color: #FF1493;
            border-color: #FF1493;
        }

        .btn-warning {
            background-color: #FF9999; /* Tombol kembali warna pink muda */
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
            <h2 class="text-center mb-4">Isi Data Dosen</h2>
            <form action="{{ route('dosen.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="kode_dosen" class="form-label">Kode Dosen</label>
                    <input type="text" name="kode_dosen" id="kode_dosen" class="form-control" placeholder="Masukkan Kode Dosen" required>
                </div>
                <div class="mb-3">
                    <label for="nama_dosen" class="form-label">Nama Dosen</label>
                    <input type="text" name="nama_dosen" id="nama_dosen" class="form-control" placeholder="Masukkan Nama Dosen" required>
                </div>
                <div class="mb-3">
                    <label for="nip" class="form-label">NIP</label>
                    <input type="text" name="nip" id="nip" class="form-control" placeholder="Masukkan NIP Dosen" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan Email Dosen" required>
                </div>
                <div class="mb-3">
                    <label for="no_telepon" class="form-label">No Telepon</label>
                    <input type="text" name="no_telepon" id="no_telepon" class="form-control" placeholder="Masukkan No Telepon Dosen" required>
                </div>
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('dosen.index') }}" class="btn btn-warning">Kembali</a>
                </div>
            </form>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>