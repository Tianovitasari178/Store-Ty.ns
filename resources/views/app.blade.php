<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Toko Baju')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Jika menggunakan file CSS -->
    <style>
        /* Global Styles */
        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f7f6;
            color: #333;
        }

        header {
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        nav {
            display: flex;
            justify-content: center;
            padding: 20px 0;
        }

        nav a {
            color: #333;
            margin: 0 20px;
            text-decoration: none;
            font-weight: 500;
            font-size: 16px;
        }

        nav a:hover {
            color: #007bff;
        }

        /* Hero Section */
        .hero {
            background-image: url('a837a7bf5c0ca90a779ba63c44c035a3.jpg'); /**/
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 120px 20px;
            position: relative;
            height: 70vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .hero p {
            font-size: 1.25rem;
            font-weight: 300;
        }

        .hero-overlay {
            background: rgba(0, 0, 0, 0.5);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        /* Section Penjelasan */
        .section {
            padding: 60px 20px;
            text-align: center;
        }

        .section h2 {
            font-size: 2.5rem;
            color: #333;
            margin-bottom: 20px;
        }

        .section p {
            font-size: 1.1rem;
            color: #555;
            margin-bottom: 40px;
        }

        .section div {
            display: flex;
            justify-content: center;
            gap: 50px;
            flex-wrap: wrap;
        }

        .section div h3 {
            font-size: 1.5rem;
            font-weight: 600;
            color: #333;
        }

        .section div p {
            font-size: 1rem;
            color: #777;
            text-align: center;
        }

        /* Footer */
        footer {
            background-color: #fff;
            text-align: center;
            padding: 20px 0;
            box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }

        footer p {
            color: #777;
            font-size: 0.9rem;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }

            .section div {
                flex-direction: column;
                gap: 30px;
            }

            .section div h3 {
                font-size: 1.2rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('profile') }}">Profile</a>
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('contact') }}">Contact</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2025 Ty.ns Store. All rights reserved.</p>
    </footer>
</body>
</html>
