<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Department | Sistem Kepegawaian</title>

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
            height: 76px;
            background: #1f355e;
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 34px;
        }

        .brand {
            font-size: 20px;
            font-weight: 700;
        }

        .nav-right {
            display: flex;
            align-items: center;
            gap: 18px;
        }

        .admin-name {
            font-size: 14px;
        }

        .logout-button {
            padding: 9px 15px;
            border: 1px solid rgba(255, 255, 255, 0.35);
            border-radius: 8px;
            background: transparent;
            color: #ffffff;
            cursor: pointer;
        }

        .container {
            max-width: 800px;
            margin: 42px auto;
            padding: 0 24px;
        }

        .page-header {
            margin-bottom: 26px;
        }

        .page-header h1 {
            font-size: 30px;
            color: #1f355e;
            margin-bottom: 7px;
        }

        .page-header p {
            color: #64748b;
            font-size: 15px;
        }

        .card {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 16px;
            padding: 30px;
            box-shadow: 0 8px 24px rgba(15, 23, 42, 0.06);
        }

        .form-group {
            margin-bottom: 22px;
        }

        label {
            display: block;
            margin-bottom: 9px;
            font-size: 14px;
            font-weight: 600;
            color: #374151;
        }

        input {
            width: 100%;
            padding: 13px 14px;
            border: 1px solid #d1d5db;
            border-radius: 9px;
            font-size: 14px;
            outline: none;
        }

        input:focus {
            border-color: #1f355e;
            box-shadow: 0 0 0 3px rgba(31, 53, 94, 0.08);
        }

        .error {
            margin-bottom: 20px;
            padding: 12px 14px;
            border-radius: 9px;
            background: #fef2f2;
            border: 1px solid #fecaca;
            color: #b91c1c;
            font-size: 13px;
        }

        .error ul {
            padding-left: 18px;
        }

        .actions {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            margin-top: 28px;
        }

        .button {
            padding: 11px 18px;
            border-radius: 9px;
            font-size: 14px;
            font-weight: 600;
            text-decoration: none;
            cursor: pointer;
        }

        .button-cancel {
            background: #f3f4f6;
            color: #374151;
            border: none;
        }

        .button-save {
            background: #1f355e;
            color: #ffffff;
            border: none;
        }

        .button-save:hover {
            background: #172a4b;
        }
    </style>
</head>

<body>

<header class="navbar">
    <div class="brand">
        Sistem Kepegawaian
    </div>

    <div class="nav-right">
        <span class="admin-name">
            {{ auth()->user()->name }}
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
        <h1>Edit Department</h1>

        <p>
            Perbarui informasi department yang dipilih.
        </p>
    </div>

    <div class="card">

        @if ($errors->any())
            <div class="error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form
            method="POST"
            action="{{ route('departments.update', $department) }}"
        >
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">
                    Nama Department
                </label>

                <input
                    type="text"
                    id="name"
                    name="name"
                    value="{{ old('name', $department->name) }}"
                    required
                    autofocus
                >
            </div>

            <div class="actions">

                <a
                    href="{{ route('departments.index') }}"
                    class="button button-cancel"
                >
                    Batal
                </a>

                <button
                    type="submit"
                    class="button button-save"
                >
                    Simpan Perubahan
                </button>

            </div>
        </form>

    </div>

</main>

</body>
</html>