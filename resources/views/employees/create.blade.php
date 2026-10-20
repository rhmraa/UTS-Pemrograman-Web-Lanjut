<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Employee | Sistem Kepegawaian</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f6f8;
            color: #1f2937;
            min-height: 100vh;
        }

        .navbar {
            height: 70px;
            background: #1f355e;
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 32px;
        }

        .brand {
            font-size: 18px;
            font-weight: 700;
        }

        .navbar-right {
            display: flex;
            align-items: center;
            gap: 18px;
        }

        .user-name {
            font-size: 14px;
        }

        .logout-button {
            border: 1px solid rgba(255, 255, 255, 0.35);
            background: transparent;
            color: #ffffff;
            padding: 8px 14px;
            border-radius: 7px;
            cursor: pointer;
            font-size: 13px;
        }

        .logout-button:hover {
            background: rgba(255, 255, 255, 0.1);
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 36px 24px;
        }

        .page-title {
            margin-bottom: 24px;
        }

        .page-title h1 {
            color: #1f355e;
            font-size: 28px;
            margin-bottom: 7px;
        }

        .page-title p {
            color: #6b7280;
            font-size: 14px;
        }

        .form-card {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 14px;
            padding: 30px;
            box-shadow: 0 6px 18px rgba(15, 23, 42, 0.05);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            color: #374151;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .form-control {
            width: 100%;
            padding: 11px 13px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            font-size: 14px;
            color: #1f2937;
            background: #ffffff;
            outline: none;
        }

        .form-control:focus {
            border-color: #1f355e;
            box-shadow: 0 0 0 3px rgba(31, 53, 94, 0.08);
        }

        .error {
            margin-top: 6px;
            color: #b91c1c;
            font-size: 13px;
        }

        .form-actions {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            gap: 10px;
            margin-top: 28px;
        }

        .button {
            border: none;
            text-decoration: none;
            padding: 11px 17px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
        }

        .cancel-button {
            background: #f3f4f6;
            color: #4b5563;
        }

        .cancel-button:hover {
            background: #e5e7eb;
        }

        .save-button {
            background: #1f355e;
            color: #ffffff;
        }

        .save-button:hover {
            background: #172a4b;
        }

        @media (max-width: 768px) {
            .navbar {
                padding: 0 18px;
            }

            .user-name {
                display: none;
            }

            .container {
                padding: 28px 18px;
            }

            .form-card {
                padding: 22px;
            }

            .form-actions {
                flex-direction: column-reverse;
            }

            .button {
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>

<body>

    <header class="navbar">

        <div class="brand">
            Sistem Kepegawaian
        </div>

        <div class="navbar-right">

            <span class="user-name">
                {{ Auth::user()->name }}
            </span>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="logout-button">
                    Keluar
                </button>
            </form>

        </div>

    </header>

    <main class="container">

        <div class="page-title">
            <h1>Tambah Employee</h1>

            <p>
                Tambahkan data pegawai baru.
            </p>
        </div>

        <div class="form-card">

            <form method="POST" action="{{ route('employees.store') }}">

                @csrf

                <div class="form-group">

                    <label for="name">
                        Nama
                    </label>

                    <input
                        type="text"
                        id="name"
                        name="name"
                        class="form-control"
                        value="{{ old('name') }}"
                        placeholder="Masukkan nama pegawai"
                    >

                    @error('name')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                <div class="form-group">

                    <label for="department_id">
                        Department
                    </label>

                    <select
                        id="department_id"
                        name="department_id"
                        class="form-control"
                    >
                        <option value="">
                            -- Pilih Department --
                        </option>

                        @foreach ($departments as $department)

                            <option
                                value="{{ $department->id }}"
                                {{ old('department_id') == $department->id ? 'selected' : '' }}
                            >
                                {{ $department->name }}
                            </option>

                        @endforeach

                    </select>

                    @error('department_id')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                <div class="form-group">

                    <label for="position">
                        Jabatan
                    </label>

                    <input
                        type="text"
                        id="position"
                        name="position"
                        class="form-control"
                        value="{{ old('position') }}"
                        placeholder="Masukkan jabatan"
                    >

                    @error('position')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                <div class="form-group">

                    <label for="salary">
                        Gaji
                    </label>

                    <input
                        type="number"
                        id="salary"
                        name="salary"
                        class="form-control"
                        value="{{ old('salary') }}"
                        placeholder="Masukkan gaji"
                        min="1"
                        step="0.01"
                    >

                    @error('salary')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                <div class="form-group">

                    <label for="joined_at">
                        Tanggal Bergabung
                    </label>

                    <input
                        type="date"
                        id="joined_at"
                        name="joined_at"
                        class="form-control"
                        value="{{ old('joined_at') }}"
                    >

                    @error('joined_at')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                <div class="form-actions">

                    <a
                        href="{{ route('employees.index') }}"
                        class="button cancel-button"
                    >
                        Batal
                    </a>

                    <button
                        type="submit"
                        class="button save-button"
                    >
                        Simpan Employee
                    </button>

                </div>

            </form>

        </div>

    </main>

</body>
</html>