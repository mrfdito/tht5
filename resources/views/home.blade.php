<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">
    <!-- Navbar -->
    <nav class="bg-blue-600 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-lg font-bold hover:underline">Home</a>
            <div>
                <a href="{{ route('about') }}" class="mx-2 hover:underline">About</a>
                <a href="{{ route('contact') }}" class="mx-2 hover:underline">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container mx-auto mt-8 text-center">
        <h1 class="text-4xl font-bold text-gray-800">Welcome to Home Page</h1>
        <p class="mt-4 text-gray-600">This is the landing page for your site.</p>
    </div>
</body>
</html>
