<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>403 - Akses Ditolak</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-md max-w-md text-center">
        <h1 class="text-6xl font-bold text-red-500 mb-4">403</h1>
        <h2 class="text-xl font-semibold text-gray-800 mb-2">Akses Ditolak!</h2>
        <p class="text-gray-600 mb-6">{{ $message ?? 'Maaf, Anda tidak memiliki izin untuk membuka halaman ini.' }}</p>
        <a href="/login" class="inline-block bg-indigo-600 text-white px-5 py-2 rounded-md hover:bg-indigo-700">
            Kembali
        </a>
    </div>
</body>
</html>