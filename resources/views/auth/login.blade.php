<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | Sistem Kepegawaian</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #eef1f5;
            color: #1f2937;
            min-height: 100vh;

            display: flex;
            align-items: center;
            justify-content: center;

            padding: 30px;
        }


        /* =========================
           LOGIN WRAPPER
        ========================= */

        .login-wrapper {
            width: 100%;
            max-width: 900px;
            min-height: 530px;

            background: #ffffff;

            border-radius: 20px;

            overflow: hidden;

            display: grid;
            grid-template-columns: 0.9fr 1.1fr;

            box-shadow:
                0 20px 50px rgba(15, 23, 42, 0.10);

            border: 1px solid #e1e6ed;
        }


        /* =========================
           LEFT PANEL
        ========================= */

        .login-info {
            position: relative;

            background: #1f355e;

            padding: 48px;

            color: #ffffff;

            display: flex;
            flex-direction: column;
            justify-content: space-between;

            overflow: hidden;
        }


        .login-info::before {
            content: "";

            position: absolute;

            width: 280px;
            height: 280px;

            right: -150px;
            top: -120px;

            border: 1px solid rgba(199, 165, 74, 0.35);

            border-radius: 50%;
        }


        .login-info::after {
            content: "";

            position: absolute;

            width: 180px;
            height: 180px;

            left: -110px;
            bottom: -100px;

            border: 1px solid rgba(255, 255, 255, 0.10);

            border-radius: 50%;
        }


        .info-content {
            position: relative;
            z-index: 2;
        }


        /* LOGO */

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;

            margin-bottom: 70px;
        }


        .brand-mark {
            width: 43px;
            height: 43px;

            border-radius: 11px;

            background: #c7a54a;
            color: #1f355e;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 17px;
            font-weight: 800;

            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.12);
        }


        .brand-name {
            font-size: 16px;
            font-weight: 700;
        }


        /* TEXT */

        .info-label {
            display: flex;
            align-items: center;
            gap: 8px;

            color: #dfc777;

            font-size: 10px;
            font-weight: 700;

            letter-spacing: 1.4px;

            margin-bottom: 13px;
        }


        .info-line {
            width: 22px;
            height: 1px;

            background: #c7a54a;
        }


        .info-title {
            font-size: 31px;
            line-height: 1.2;

            margin-bottom: 15px;
        }


        .info-description {
            color: rgba(255, 255, 255, 0.68);

            font-size: 13px;
            line-height: 1.7;

            max-width: 330px;
        }


        .info-footer {
            position: relative;
            z-index: 2;

            color: rgba(255, 255, 255, 0.45);

            font-size: 11px;
        }


        /* =========================
           RIGHT PANEL
        ========================= */

        .login-form-area {
            padding: 55px 58px;

            display: flex;
            flex-direction: column;
            justify-content: center;
        }


        .form-header {
            margin-bottom: 30px;
        }


        .form-header h2 {
            color: #1f355e;

            font-size: 25px;

            margin-bottom: 8px;
        }


        .form-header p {
            color: #8b95a5;

            font-size: 13px;
        }


        /* =========================
           ALERT
        ========================= */

        .alert {
            background: #fef2f2;

            color: #b91c1c;

            border: 1px solid #fecaca;

            border-radius: 9px;

            padding: 11px 13px;

            font-size: 12px;

            margin-bottom: 20px;
        }


        /* =========================
           FORM
        ========================= */

        .form-group {
            margin-bottom: 19px;
        }


        .form-label {
            display: block;

            color: #26364f;

            font-size: 12px;
            font-weight: 700;

            margin-bottom: 8px;
        }


        .input-wrapper {
            position: relative;
        }


        .input-icon {
            position: absolute;

            left: 14px;
            top: 50%;

            transform: translateY(-50%);

            width: 18px;

            color: #9aa4b2;

            font-size: 13px;

            text-align: center;
        }


        .form-input {
            width: 100%;

            height: 47px;

            border: 1px solid #d9dfe7;

            border-radius: 9px;

            background: #fafbfc;

            color: #1f2937;

            font-size: 13px;

            padding: 0 14px 0 43px;

            outline: none;

            transition: 0.2s ease;
        }


        .form-input::placeholder {
            color: #a4acb8;
        }


        .form-input:focus {
            background: #ffffff;

            border-color: #1f355e;

            box-shadow: 0 0 0 3px rgba(31, 53, 94, 0.08);
        }


        /* =========================
           BUTTON
        ========================= */

        .login-button {
            width: 100%;

            height: 47px;

            border: none;

            border-radius: 9px;

            background: #1f355e;

            color: #ffffff;

            font-size: 13px;
            font-weight: 700;

            cursor: pointer;

            margin-top: 5px;

            transition: 0.2s ease;

            box-shadow:
                0 7px 15px rgba(31, 53, 94, 0.15);
        }


        .login-button:hover {
            background: #172a4b;

            transform: translateY(-1px);

            box-shadow:
                0 9px 18px rgba(31, 53, 94, 0.20);
        }


        .login-button:active {
            transform: translateY(0);
        }


        /* =========================
           FOOTER
        ========================= */

        .form-footer {
            text-align: center;

            margin-top: 27px;

            padding-top: 20px;

            border-top: 1px solid #edf0f3;

            color: #a0a8b4;

            font-size: 11px;
        }


        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 760px) {

            body {
                padding: 18px;
            }


            .login-wrapper {
                max-width: 470px;

                grid-template-columns: 1fr;

                min-height: auto;
            }


            .login-info {
                min-height: 250px;

                padding: 30px;
            }


            .brand {
                margin-bottom: 40px;
            }


            .info-title {
                font-size: 25px;
            }


            .info-footer {
                display: none;
            }


            .login-form-area {
                padding: 38px 30px;
            }

        }


        @media (max-width: 450px) {

            body {
                padding: 12px;
            }


            .login-info {
                padding: 26px;
            }


            .login-form-area {
                padding: 32px 24px;
            }


            .info-title {
                font-size: 23px;
            }

        }

    </style>

</head>


<body>


    <div class="login-wrapper">


        <!-- =========================
             LEFT INFORMATION
        ========================= -->

        <section class="login-info">


            <div class="info-content">


                <div class="brand">

                    <div class="brand-mark">
                        SK
                    </div>

                    <div class="brand-name">
                        Sistem Kepegawaian
                    </div>

                </div>


                <div class="info-label">

                    <span class="info-line"></span>

                    ADMINISTRATION SYSTEM

                </div>


                <h1 class="info-title">
                    Kelola Data<br>
                    Kepegawaian
                </h1>


                <p class="info-description">
                    Sistem terintegrasi untuk mengelola
                    data department dan pegawai secara
                    terstruktur, aman, dan efisien.
                </p>


            </div>


            <div class="info-footer">
                Sistem Informasi Kepegawaian
            </div>


        </section>



        <!-- =========================
             LOGIN FORM
        ========================= -->

        <section class="login-form-area">


            <div class="form-header">

                <h2>
                    Selamat Datang
                </h2>

                <p>
                    Silakan masuk untuk mengakses sistem.
                </p>

            </div>


            @if ($errors->any())

                <div class="alert">

                    {{ $errors->first() }}

                </div>

            @endif


            <form
                method="POST"
                action="{{ url('/login') }}"
            >

                @csrf


                <!-- EMAIL -->

                <div class="form-group">

                    <label
                        for="email"
                        class="form-label"
                    >
                        Email
                    </label>


                    <div class="input-wrapper">

                        <span class="input-icon">
                            @
                        </span>


                        <input
                            type="email"
                            id="email"
                            name="email"
                            class="form-input"
                            placeholder="Masukkan email"
                            value="{{ old('email') }}"
                            required
                            autofocus
                        >

                    </div>

                </div>



                <!-- PASSWORD -->

                <div class="form-group">

                    <label
                        for="password"
                        class="form-label"
                    >
                        Password
                    </label>


                    <div class="input-wrapper">

                        <span class="input-icon">
                            •
                        </span>


                        <input
                            type="password"
                            id="password"
                            name="password"
                            class="form-input"
                            placeholder="Masukkan password"
                            required
                        >

                    </div>

                </div>



                <!-- BUTTON -->

                <button
                    type="submit"
                    class="login-button"
                >
                    Masuk ke Sistem
                </button>


            </form>


            <div class="form-footer">
                Sistem Informasi Kepegawaian
            </div>


        </section>


    </div>


</body>

</html>