<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard | Sistem Kepegawaian</title>

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
           HERO
        ========================= */

        .hero {
            position: relative;
            overflow: hidden;
            background: #1f355e;
            border-radius: 18px;
            padding: 30px 34px;
            margin-bottom: 28px;
            color: #ffffff;
            box-shadow: 0 12px 28px rgba(31, 53, 94, 0.15);
        }

        .hero::before {
            content: "";
            position: absolute;
            width: 220px;
            height: 220px;
            right: -85px;
            top: -125px;
            border: 1px solid rgba(199, 165, 74, 0.35);
            border-radius: 50%;
        }

        .hero::after {
            content: "";
            position: absolute;
            width: 130px;
            height: 130px;
            right: 90px;
            bottom: -100px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 50%;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-label {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #dfc777;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1.3px;
            margin-bottom: 10px;
        }

        .hero-label-line {
            width: 22px;
            height: 1px;
            background: #c7a54a;
        }

        .hero h1 {
            font-size: 29px;
            margin-bottom: 8px;
        }

        .hero p {
            max-width: 650px;
            color: rgba(255, 255, 255, 0.72);
            font-size: 14px;
            line-height: 1.6;
        }

        /* =========================
           SECTION
        ========================= */

        .section-header {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            margin-bottom: 13px;
        }

        .section-title {
            color: #1f355e;
            font-size: 17px;
            font-weight: 700;
        }

        .section-subtitle {
            color: #9aa4b2;
            font-size: 12px;
        }

        /* =========================
           STAT CARDS
        ========================= */

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 17px;
        }

        .stat-card {
            position: relative;
            display: block;
            background: #ffffff;
            border: 1px solid #e2e7ee;
            border-radius: 15px;
            padding: 21px;
            min-height: 148px;
            box-shadow: 0 6px 20px rgba(15, 23, 42, 0.05);
            text-decoration: none;
            cursor: pointer;
            transition: 0.25s ease;
            overflow: hidden;
        }

        .stat-card:hover {
            transform: translateY(-4px);
            border-color: #c7a54a;
            box-shadow: 0 12px 25px rgba(15, 23, 42, 0.09);
        }

        .stat-card::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 3px;
            background: #c7a54a;
            border-radius: 0 0 15px 15px;
        }

        .stat-top {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .stat-label {
            color: #687385;
            font-size: 13px;
        }

        .stat-icon {
            width: 38px;
            height: 38px;
            border-radius: 10px;
            background: #edf1f7;
            color: #1f355e;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 15px;
            font-weight: 700;
        }

        .stat-value {
            color: #1f355e;
            font-size: 30px;
            font-weight: 700;
            margin-top: 16px;
        }

        .stat-description {
            color: #9ba4b1;
            font-size: 12px;
            margin-top: 4px;
        }

        .stat-hint {
            position: absolute;
            right: 20px;
            bottom: 15px;
            color: #c7a54a;
            font-size: 11px;
            opacity: 0;
            transform: translateX(5px);
            transition: 0.2s ease;
        }

        .stat-card:hover .stat-hint {
            opacity: 1;
            transform: translateX(0);
        }

        /* =========================
           LOWER CONTENT
        ========================= */

        .lower-grid {
            display: grid;
            grid-template-columns: 1.45fr 1fr;
            gap: 18px;
            margin-top: 28px;
        }

        .panel {
            background: #ffffff;
            border: 1px solid #e2e7ee;
            border-radius: 15px;
            padding: 22px;
            box-shadow: 0 6px 20px rgba(15, 23, 42, 0.05);
        }

        .panel-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .panel-title {
            color: #1f355e;
            font-size: 16px;
            font-weight: 700;
        }

        .panel-caption {
            color: #9aa4b2;
            font-size: 11px;
        }

        /* =========================
           DEPARTMENT
        ========================= */

        .department-list {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .department-item {
            display: grid;
            grid-template-columns: 1fr auto;
            gap: 12px;
            align-items: center;
            padding: 8px;
            margin: -8px;
            border-radius: 10px;
            cursor: pointer;
            transition: 0.2s ease;
        }

        .department-item:hover {
            background: #fafbfc;
        }

        .department-item.selected {
            background: #fffdf6;
        }

        .department-info {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .department-number {
            width: 30px;
            height: 30px;
            border-radius: 8px;
            background: #eef2f7;
            color: #1f355e;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            font-weight: 700;
        }

        .department-name {
            color: #374151;
            font-size: 13px;
            font-weight: 600;
        }

        .employee-count {
            color: #1f355e;
            font-size: 12px;
            font-weight: 700;
        }

        .progress {
            grid-column: 1 / -1;
            height: 5px;
            background: #edf0f4;
            border-radius: 10px;
            overflow: hidden;
        }

        .progress-bar {
            width: 0;
            height: 100%;
            background: #c7a54a;
            border-radius: 10px;
            transition: width 0.8s ease;
        }

        .department-detail {
            display: none;
            margin-top: 18px;
            padding: 14px 16px;
            border-radius: 10px;
            background: #f7f8fa;
            border-left: 3px solid #c7a54a;
        }

        .department-detail.show {
            display: block;
        }

        .detail-title {
            color: #1f355e;
            font-size: 13px;
            font-weight: 700;
            margin-bottom: 4px;
        }

        .detail-text {
            color: #7b8492;
            font-size: 12px;
        }

        /* =========================
           QUICK ACCESS
        ========================= */

        .quick-list {
            display: flex;
            flex-direction: column;
            gap: 11px;
        }

        .quick-link {
            display: flex;
            align-items: center;
            gap: 13px;
            padding: 13px;
            border: 1px solid #e7ebf0;
            border-radius: 10px;
            text-decoration: none;
            transition: 0.2s ease;
        }

        .quick-link:hover {
            border-color: #c7a54a;
            background: #fffdf8;
            transform: translateX(3px);
        }

        .quick-icon {
            width: 38px;
            height: 38px;
            border-radius: 9px;
            background: #1f355e;
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 13px;
            font-weight: 700;
            flex-shrink: 0;
        }

        .quick-text {
            flex: 1;
        }

        .quick-text strong {
            display: block;
            color: #1f355e;
            font-size: 13px;
            margin-bottom: 3px;
        }

        .quick-text span {
            color: #9aa4b2;
            font-size: 11px;
        }

        .quick-arrow {
            color: #c7a54a;
            font-size: 17px;
        }

        .add-sign {
            color: #c7a54a;
            font-size: 16px;
            font-weight: 700;
            margin-left: 5px;
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

            .stats-grid {
                grid-template-columns: 1fr;
            }

            .lower-grid {
                grid-template-columns: 1fr;
            }

        }

        @media (max-width: 600px) {

            .container {
                padding: 24px 16px 40px;
            }

            .hero {
                padding: 25px 22px;
            }

            .hero h1 {
                font-size: 24px;
            }

            .user-name {
                display: none;
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
                class="nav-link active"
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
                class="nav-link"
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


    <main class="container">


        <!-- HERO -->

        <section class="hero">

            <div class="hero-content">

                <div class="hero-label">

                    <span class="hero-label-line"></span>

                    ADMINISTRATOR

                </div>


                <h1>
                    Dashboard Sistem Kepegawaian
                </h1>


                <p>
                    Kelola data departemen dan pegawai secara
                    terstruktur dalam satu sistem.
                </p>

            </div>

        </section>


        <!-- STATISTICS -->

        <div class="section-header">

            <div class="section-title">
                Ringkasan Sistem
            </div>

            <div class="section-subtitle">
                Data terkini
            </div>

        </div>


        <div class="stats-grid">


            <!-- TOTAL DEPARTMENT -->

            <a
                href="{{ route('departments.index') }}"
                class="stat-card"
            >

                <div class="stat-top">

                    <div class="stat-label">
                        Total Departemen
                    </div>

                    <div class="stat-icon">
                        D
                    </div>

                </div>


                <div
                    class="stat-value counter"
                    data-target="{{ $totalDepartments }}"
                >
                    0
                </div>


                <div class="stat-description">
                    Departemen terdaftar
                </div>


                <div class="stat-hint">
                    Lihat data →
                </div>

            </a>


            <!-- TOTAL EMPLOYEE -->

            <a
                href="{{ route('employees.index') }}"
                class="stat-card"
            >

                <div class="stat-top">

                    <div class="stat-label">
                        Total Pegawai
                    </div>

                    <div class="stat-icon">
                        P
                    </div>

                </div>


                <div
                    class="stat-value counter"
                    data-target="{{ $totalEmployees }}"
                >
                    0
                </div>


                <div class="stat-description">
                    Pegawai terdaftar
                </div>


                <div class="stat-hint">
                    Lihat data →
                </div>

            </a>


            <!-- STATUS -->

            <div class="stat-card">

                <div class="stat-top">

                    <div class="stat-label">
                        Status Sistem
                    </div>

                    <div class="stat-icon">
                        ✓
                    </div>

                </div>


                <div class="stat-value">
                    Aktif
                </div>


                <div class="stat-description">
                    Sistem berjalan dengan baik
                </div>


                <div class="stat-hint">
                    Sistem online
                </div>

            </div>


        </div>


        <!-- LOWER CONTENT -->

        <div class="lower-grid">


            <!-- DEPARTMENT SUMMARY -->

            <section class="panel">

                <div class="panel-header">

                    <div class="panel-title">
                        Distribusi Pegawai
                    </div>

                    <div class="panel-caption">
                        Per department
                    </div>

                </div>


                <div class="department-list">


                    @foreach ($departmentStats as $department)

                        @php

                            $percentage = $totalEmployees > 0
                                ? ($department->employees_count / $totalEmployees) * 100
                                : 0;

                        @endphp


                        <div
                            class="department-item"
                            data-name="{{ $department->name }}"
                            data-count="{{ $department->employees_count }}"
                            data-percentage="{{ $percentage }}"
                        >


                            <div class="department-info">

                                <div class="department-number">
                                    {{ $loop->iteration }}
                                </div>


                                <div class="department-name">
                                    {{ $department->name }}
                                </div>

                            </div>


                            <div class="employee-count">
                                {{ $department->employees_count }} pegawai
                            </div>


                            <div class="progress">

                                <div
                                    class="progress-bar"
                                    data-width="{{ $percentage }}"
                                ></div>

                            </div>


                        </div>


                    @endforeach


                </div>


                <!-- DETAIL DEPARTMENT -->

                <div
                    class="department-detail"
                    id="departmentDetail"
                >

                    <div
                        class="detail-title"
                        id="detailTitle"
                    >
                    </div>


                    <div
                        class="detail-text"
                        id="detailText"
                    >
                    </div>

                </div>


            </section>


            <!-- QUICK ACCESS -->

            <section class="panel">

                <div class="panel-header">

                    <div class="panel-title">
                        Akses Cepat
                    </div>

                    <div class="panel-caption">
                        Kelola data
                    </div>

                </div>


                <div class="quick-list">


                    <!-- DEPARTMENTS + -->

                    <a
                        href="{{ route('departments.index') }}"
                        class="quick-link"
                    >

                        <div class="quick-icon">
                            D
                        </div>


                        <div class="quick-text">

                            <strong>
                                Departments
                                <span class="add-sign">+</span>
                            </strong>

                            <span>
                                Kelola data department
                            </span>

                        </div>


                        <div class="quick-arrow">
                            →
                        </div>

                    </a>


                    <!-- EMPLOYEES + -->

                    <a
                        href="{{ route('employees.index') }}"
                        class="quick-link"
                    >

                        <div class="quick-icon">
                            P
                        </div>


                        <div class="quick-text">

                            <strong>
                                Employees
                                <span class="add-sign">+</span>
                            </strong>

                            <span>
                                Kelola data pegawai
                            </span>

                        </div>


                        <div class="quick-arrow">
                            →
                        </div>

                    </a>


                </div>

            </section>


        </div>


    </main>


    <script>

        document.addEventListener('DOMContentLoaded', function () {


            /* =========================
               COUNTER ANIMATION
            ========================= */

            const counters =
                document.querySelectorAll('.counter');


            counters.forEach(function (counter) {

                const target =
                    Number(counter.dataset.target) || 0;

                const duration = 700;

                const startTime =
                    performance.now();


                function updateCounter(currentTime) {

                    const progress =
                        Math.min(
                            (currentTime - startTime) / duration,
                            1
                        );


                    const current =
                        Math.floor(progress * target);


                    counter.textContent =
                        current;


                    if (progress < 1) {

                        requestAnimationFrame(
                            updateCounter
                        );

                    } else {

                        counter.textContent =
                            target;

                    }

                }


                requestAnimationFrame(
                    updateCounter
                );

            });


            /* =========================
               PROGRESS BAR ANIMATION
            ========================= */

            const progressBars =
                document.querySelectorAll('.progress-bar');


            setTimeout(function () {

                progressBars.forEach(function (bar) {

                    const width =
                        Number(bar.dataset.width) || 0;


                    bar.style.width =
                        Math.min(width, 100) + '%';

                });

            }, 150);


            /* =========================
               DEPARTMENT INTERACTION
            ========================= */

            const departmentItems =
                document.querySelectorAll(
                    '.department-item'
                );


            const detailBox =
                document.getElementById(
                    'departmentDetail'
                );


            const detailTitle =
                document.getElementById(
                    'detailTitle'
                );


            const detailText =
                document.getElementById(
                    'detailText'
                );


            departmentItems.forEach(function (item) {

                item.addEventListener(
                    'click',
                    function () {


                        departmentItems.forEach(
                            function (otherItem) {

                                otherItem.classList.remove(
                                    'selected'
                                );

                            }
                        );


                        item.classList.add(
                            'selected'
                        );


                        const name =
                            item.dataset.name;


                        const count =
                            Number(
                                item.dataset.count
                            ) || 0;


                        const percentage =
                            Number(
                                item.dataset.percentage
                            ) || 0;


                        detailTitle.textContent =
                            name;


                        detailText.textContent =
                            count +
                            ' pegawai terdaftar (' +
                            percentage.toFixed(1) +
                            '% dari seluruh pegawai).';


                        detailBox.classList.add(
                            'show'
                        );

                    }
                );

            });

        });

    </script>


</body>

</html>