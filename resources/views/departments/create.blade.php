<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Department | Sistem Kepegawaian</title>

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
            max-width: 760px;
            margin: 0 auto;
            padding: 36px 24px;
        }

        .page-header {
            margin-bottom: 24px;
        }

        .page-header h1 {
            color: #1f355e;
            font-size: 28px;
            margin-bottom: 7px;
        }

        .page-header p {
            color: #6b7280;
            font-size: 14px;
        }

        .form-card {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 14px;
            padding: 28px;
            box-shadow: 0 6px 18px rgba(15, 23, 42, 0.05);
        }

        .form-group {
            margin-bottom: 22px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #374151;
            font-size: 14px;
            font-weight: 600;
        }

        .form-group input {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            outline: none;
            font-size: 14px;
            color: #1f2937;
            transition: 0.2s;
        }

        .form-group input:focus {
            border-color: #1f355e;
            box-shadow: 0 0 0 3px rgba(31, 53, 94, 0.08);
        }

        .error {
            margin-bottom: 20px;
            padding: 12px 14px;
            border-radius: 8px;
            background: #fef2f2;
            border: 1px solid #fecaca;
            color: #b91c1c;
            font-size: 13px;
        }

        .error ul {
            padding-left: 18px;
        }

        .form-actions {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            margin-top: 8px;
        }

        .button {
            display: inline-block;
            border: none;
            border-radius: 8px;
            padding: 11px 17px;
            font-size: 14px;
            font-weight: 600;
            text-decoration: none;
            cursor: pointer;
        }

        .button-secondary {
            background: #f3f4f6;
            color: #374151;
        }

        .button-secondary:hover {
            background: #e5e7eb;
        }

        .button-primary {
            background: #1f355e;
            color: #ffffff;
        }

        .button-primary:hover {
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

        <div class="page-header">
            <h1>Tambah Department</h1>

            <p>
                Tambahkan department baru ke dalam sistem.
            </p>
        </div>

        <div class="form-card">

            @if ($errors->any())
                <div class="error">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('departments.store') }}">
                @csrf

                <div class="form-group">

                    <label for="name">
                        Nama Department
                    </label>

                    <input
                        type="text"
                        id="name"
                        name="name"
                        value="{{ old('name') }}"
                        placeholder="Contoh: Teknologi Informasi"
                        required
                        autofocus
                    >

                </div>

                <div class="form-actions">

                    <a
                        href="{{ route('departments.index') }}"
                        class="button button-secondary"
                    >
                        Batal
                    </a>

                    <button
                        type="submit"
                        class="button button-primary"
                    >
                        Simpan Department
                    </button>

                </div>

            </form>

        </div>

    </main>

</body>
</html>