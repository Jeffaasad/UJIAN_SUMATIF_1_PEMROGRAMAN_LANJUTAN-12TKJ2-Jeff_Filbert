{{-- filepath: resources/views/students/show.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profil Siswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white rounded-2xl shadow-lg p-10 w-full max-w-xl flex flex-col items-center">
        <img src="{{ $student['foto'] }}" alt="Foto {{ $student['nama'] }}" class="w-32 h-32 rounded-full object-cover mb-4 border-4 border-blue-200">
        <div class="text-gray-400 text-sm mb-1">@{{ $student['username'] }}</div>
        <div class="font-bold text-2xl text-gray-800 mb-1 flex items-center gap-2">
            {{ $student['nama'] }}
            <span>✏️</span>
        </div>
        <div class="text-gray-600 mb-2">{{ $student['kelas'] }} | {{ $student['hobi'] }}</div>
        <div class="text-gray-700 text-center mb-6">{{ $student['deskripsi'] }}</div>
        <div class="flex gap-4">
            <a href="{{ url('/students/'.$student['id'].'/edit') }}" class="px-6 py-2 rounded-lg bg-blue-500 text-white font-semibold hover:bg-blue-600 transition">Edit Profile</a>
            <a href="{{ url('/students/'.$student['id'].'/delete') }}" class="px-6 py-2 rounded-lg bg-red-400 text-white font-semibold hover:bg-red-500 transition">Delete Account</a>
        </div>
        <a href="{{ url('/students') }}" class="mt-8 text-blue-600 hover:underline text-sm">← Kembali ke Daftar Siswa</a>
    </div>
</body>
</html>