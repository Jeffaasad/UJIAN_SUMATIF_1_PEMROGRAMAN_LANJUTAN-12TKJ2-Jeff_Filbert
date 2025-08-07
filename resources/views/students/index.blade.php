<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Siswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-purple-100 via-blue-50 to-cyan-100 min-h-screen">
    <div class="py-12">
        <h1 class="text-3xl font-bold text-center mb-10 text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-blue-600">Daftar Siswa</h1>
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">
            @foreach($students as $student)
            <div class="bg-white/90 rounded-xl shadow-xl flex items-center gap-6 p-6 border border-blue-100 hover:shadow-2xl transition">
                <div class="bg-gradient-to-br from-purple-300 via-blue-200 to-cyan-200 p-1 rounded-full">
                    <img src="{{ $student['foto'] }}" alt="Foto {{ $student['nama'] }}" class="w-20 h-20 rounded-full object-cover border-4 border-white shadow">
                </div>
                <div class="flex-1">
                    <div class="font-bold text-xl text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-blue-600">{{ $student['nama'] }}</div>
                    <div class="text-blue-700 text-sm mb-1">{{ $student['username'] }}</div>
                    <div class="text-gray-600 text-sm mb-2">{{ $student['deskripsi'] }}</div>
                    <a href="{{ url('/students/'.$student['id']) }}" class="inline-block mt-2 px-4 py-1 rounded-full bg-gradient-to-r from-purple-400 to-blue-400 text-white text-sm font-semibold shadow hover:from-purple-500 hover:to-blue-500 transition">Lihat Detail</a>
                </div>
            </div>
            @endforeach
        </div>
</body>
</html>