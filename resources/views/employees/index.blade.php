<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Data Employee | Sistem Kepegawaian</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f3f5f8;
            color: #1f2937;
            min-height: 100vh;
        }

        /* =========================
           NAVBAR
        ========================= */

        .navbar {
            min-height: 72px;
            background: #1f355e;
            color: #ffffff;
            display: flex;
            align-items: center;
            padding: 0 42px;
            box-shadow: 0 4px 18px rgba(15, 23, 42, 0.14);
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 11px;
            font-size: 18px;
            font-weight: 700;
            white-space: nowrap;
        }

        .brand-mark {
            width: 34px;
            height: 34px;
            border-radius: 9px;
            background: #c7a54a;
            color: #1f355e;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            font-weight: 800;
        }

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 4px;
            margin-left: auto;
            margin-right: 25px;
        }

        .nav-link {
            color: rgba(255, 255, 255, 0.75);
            text-decoration: none;
            padding: 10px 14px;
            border-radius: 8px;
            font-size: 13px;
            font-weight: 600;
            transition: 0.2s ease;
        }

        .nav-link:hover {
            color: #ffffff;
            background: rgba(255, 255, 255, 0.09);
        }

        .nav-link.active {
            color: #ffffff;
            background: rgba(255, 255, 255, 0.13);
            box-shadow: inset 0 -2px 0 #c7a54a;
        }

        .user-area {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .user-name {
            font-size: 13px;
            color: rgba(255, 255, 255, 0.9);
        }

        .logout-button {
            border: 1px solid rgba(255, 255, 255, 0.3);
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

        /* =========================
           CONTAINER
        ========================= */

        .container {
            max-width: 1180px;
            margin: 0 auto;
            padding: 34px 26px 50px;
        }

        /* =========================
           PAGE HEADER
        ========================= */

        .page-header {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 25px;
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

        .page-label {
            color: #c7a54a;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1.2px;
            margin-bottom: 7px;
        }

        .add-button {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: #1f355e;
            color: #ffffff;
            text-decoration: none;
            padding: 11px 17px;
            border-radius: 9px;
            font-size: 13px;
            font-weight: 600;
            box-shadow: 0 5px 12px rgba(31, 53, 94, 0.16);
            transition: 0.2s ease;
        }

        .add-button:hover {
            background: #172a4b;
            transform: translateY(-1px);
        }

        .plus {
            color: #dfc777;
            font-size: 17px;
            line-height: 1;
        }

        /* =========================
           ALERT
        ========================= */

        .alert {
            padding: 13px 16px;
            border-radius: 9px;
            margin-bottom: 20px;
            font-size: 13px;
        }

        .alert-success {
            background: #ecfdf3;
            color: #166534;
            border: 1px solid #bbf7d0;
        }

        .alert-error {
            background: #fef2f2;
            color: #b91c1c;
            border: 1px solid #fecaca;
        }

        /* =========================
           TABLE CARD
        ========================= */

        .table-card {
            background: #ffffff;
            border: 1px solid #e1e6ed;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 8px 24px rgba(15, 23, 42, 0.06);
        }

        .table-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 19px 22px;
            border-bottom: 1px solid #e8ebef;
        }

        .table-title {
            color: #1f355e;
            font-size: 15px;
            font-weight: 700;
        }

        .table-caption {
            color: #9aa4b2;
            font-size: 11px;
        }

        .table-wrapper {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead {
            background: #f7f8fa;
        }

        th {
            padding: 13px 16px;
            text-align: left;
            color: #667085;
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            white-space: nowrap;
            border-bottom: 1px solid #e4e7ec;
        }

        td {
            padding: 16px;
            border-bottom: 1px solid #edf0f3;
            font-size: 13px;
            vertical-align: middle;
        }

        tbody tr {
            transition: 0.15s ease;
        }

        tbody tr:hover {
            background: #fafbfc;
        }

        tbody tr:last-child td {
            border-bottom: none;
        }

        /* =========================
           TABLE CONTENT
        ========================= */

        .number {
            color: #98a2b3;
            font-size: 12px;
            font-weight: 600;
        }

        .employee-name {
            color: #1f355e;
            font-weight: 700;
        }

        .position {
            color: #475467;
        }

        .department-badge {
            display: inline-block;
            background: #eef2f7;
            color: #1f355e;
            padding: 6px 9px;
            border-radius: 7px;
            font-size: 11px;
            font-weight: 600;
        }

        .salary {
            color: #1f355e;
            font-weight: 700;
            white-space: nowrap;
        }

        .date {
            color: #667085;
            white-space: nowrap;
        }

        /* =========================
           ACTION
        ========================= */

        .action-wrapper {
            display: flex;
            align-items: center;
            gap: 7px;
        }

        .action-button {
            border: none;
            text-decoration: none;
            padding: 7px 11px;
            border-radius: 7px;
            font-size: 11px;
            font-weight: 700;
            cursor: pointer;
            display: inline-block;
            transition: 0.2s ease;
        }

        .edit-button {
            background: #eef2ff;
            color: #3730a3;
        }

        .edit-button:hover {
            background: #e0e7ff;
        }

        .delete-button {
            background: #fef2f2;
            color: #b91c1c;
        }

        .delete-button:hover {
            background: #fee2e2;
        }

        .delete-form {
            display: inline;
        }

        /* =========================
           EMPTY
        ========================= */

        .empty-state {
            padding: 55px 20px;
            text-align: center;
            color: #98a2b3;
            font-size: 13px;
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 900px) {

            .navbar {
                padding: 14px 20px;
                flex-wrap: wrap;
                gap: 10px;
            }

            .nav-menu {
                order: 3;
                width: 100%;
                margin: 0;
                overflow-x: auto;
            }

            .user-area {
                margin-left: auto;
            }

            .page-header {
                align-items: flex-start;
                flex-direction: column;
            }

            .add-button {
                width: 100%;
                justify-content: center;
            }
        }

        @media (max-width: 600px) {

            .container {
                padding: 24px 16px 40px;
            }

            .page-title h1 {
                font-size: 24px;
            }

            .user-name {
                display: none;
            }

            th,
            td {
                padding: 12px;
            }
        }

    </style>

</head>

<body>


    <!-- NAVBAR -->

    <header class="navbar">

        <div class="brand">

            <div class="brand-mark">
                SK
            </div>

            <span>
                Sistem Kepegawaian
            </span>

        </div>


        <nav class="nav-menu">

            <a
                href="{{ route('dashboard') }}"
                class="nav-link"
            >
                Dashboard
            </a>

            <a
                href="{{ route('departments.index') }}"
                class="nav-link"
            >
                Departments
            </a>

            <a
                href="{{ route('employees.index') }}"
                class="nav-link active"
            >
                Employees
            </a>

        </nav>


        <div class="user-area">

            <span class="user-name">
                {{ Auth::user()->name }}
            </span>

            <form method="POST" action="{{ route('logout') }}">

                @csrf

                <button
                    type="submit"
                    class="logout-button"
                >
                    Keluar
                </button>

            </form>

        </div>

    </header>


    <!-- CONTENT -->

    <main class="container">


        <div class="page-header">

            <div class="page-title">

                <div class="page-label">
                    DATA MASTER
                </div>

                <h1>
                    Data Employee
                </h1>

                <p>
                    Kelola data pegawai dan informasi department.
                </p>

            </div>


            <a
                href="{{ route('employees.create') }}"
                class="add-button"
            >

                <span class="plus">
                    +
                </span>

                Tambah Employee

            </a>

        </div>


        <!-- ALERT -->

        @if (session('success'))

            <div class="alert alert-success">
                {{ session('success') }}
            </div>

        @endif


        @if (session('error'))

            <div class="alert alert-error">
                {{ session('error') }}
            </div>

        @endif


        <!-- TABLE -->

        <div class="table-card">


            <div class="table-header">

                <div class="table-title">
                    Daftar Pegawai
                </div>

                <div class="table-caption">
                    {{ $employees->count() }} pegawai terdaftar
                </div>

            </div>


            <div class="table-wrapper">

                <table>

                    <thead>

                        <tr>

                            <th>
                                No
                            </th>

                            <th>
                                Nama
                            </th>

                            <th>
                                Department
                            </th>

                            <th>
                                Jabatan
                            </th>

                            <th>
                                Gaji
                            </th>

                            <th>
                                Tanggal Bergabung
                            </th>

                            <th>
                                Aksi
                            </th>

                        </tr>

                    </thead>


                    <tbody>

                        @forelse ($employees as $employee)

                            <tr>

                                <td class="number">
                                    {{ $loop->iteration }}
                                </td>


                                <td class="employee-name">
                                    {{ $employee->name }}
                                </td>


                                <td>

                                    <span class="department-badge">
                                        {{ $employee->department->name }}
                                    </span>

                                </td>


                                <td class="position">
                                    {{ $employee->position }}
                                </td>


                                <td class="salary">
                                    Rp {{ number_format($employee->salary, 0, ',', '.') }}
                                </td>


                                <td class="date">
                                    {{ $employee->joined_at->format('d/m/Y') }}
                                </td>


                                <td>

                                    <div class="action-wrapper">


                                        <a
                                            href="{{ route('employees.edit', $employee) }}"
                                            class="action-button edit-button"
                                        >
                                            Edit
                                        </a>


                                        <form
                                            method="POST"
                                            action="{{ route('employees.destroy', $employee) }}"
                                            class="delete-form"
                                            onsubmit="return confirm('Yakin ingin menghapus employee ini?')"
                                        >

                                            @csrf

                                            @method('DELETE')


                                            <button
                                                type="submit"
                                                class="action-button delete-button"
                                            >
                                                Hapus
                                            </button>

                                        </form>


                                    </div>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td
                                    colspan="7"
                                    class="empty-state"
                                >
                                    Belum ada data employee.
                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>


    </main>

</body>

</html>