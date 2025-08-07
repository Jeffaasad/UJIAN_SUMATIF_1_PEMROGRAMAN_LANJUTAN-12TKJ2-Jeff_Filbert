{{-- filepath: resources/views/students/edit.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-purple-100 via-blue-50 to-cyan-100 min-h-screen flex items-center justify-center">
    <div class="bg-white/90 rounded-2xl shadow-2xl p-10 w-full max-w-3xl flex flex-col md:flex-row items-center gap-10 border border-blue-100">
        <!-- Foto Profil -->
        <div class="flex flex-col items-center w-full md:w-1/3">
            <div class="bg-gradient-to-br from-purple-300 via-blue-200 to-cyan-200 p-1 rounded-full mb-4">
                <img id="preview" src="{{ $student['foto'] }}" alt="Foto {{ $student['nama'] }}" class="w-32 h-32 rounded-full object-cover border-4 border-white shadow-lg">
            </div>
            <label class="block w-full">
                <span class="sr-only">Choose profile photo</span>
                <input type="file" name="foto" accept="image/*" class="block w-full text-sm text-gray-700
                    file:mr-4 file:py-2 file:px-4
                    file:rounded-full file:border-0
                    file:text-sm file:font-semibold
                    file:bg-gradient-to-r file:from-purple-400 file:to-blue-400 file:text-white
                    hover:file:bg-blue-500
                    mt-2"
                    onchange="previewImage(event)">
            </label>
            <span class="text-xs text-blue-500 mt-1">*Kosongkan jika tidak ingin mengubah foto</span>
        </div>
        <!-- Form Edit -->
        <form action="{{ url('/students/'.$student['id'].'/update') }}" method="POST" enctype="multipart/form-data" class="w-full md:w-2/3 flex flex-col">
            @csrf
            <h2 class="font-bold text-2xl mb-6 text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-blue-600 text-center md:text-left">Edit Profile</h2>
            <div class="mb-4">
                <label class="block mb-1 font-semibold text-purple-700">Nama</label>
                <input type="text" name="nama" value="{{ $student['nama'] }}" class="w-full border border-blue-200 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-300" required>
            </div>
            <div class="mb-4">
                <label class="block mb-1 font-semibold text-purple-700">Username</label>
                <input type="text" name="username" value="{{ $student['username'] }}" class="w-full border border-blue-200 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-300" required>
            </div>
            <div class="mb-4">
                <label class="block mb-1 font-semibold text-purple-700">Kelas</label>
                <input type="text" name="kelas" value="{{ $student['kelas'] }}" class="w-full border border-blue-200 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-300" required>
            </div>
            <div class="mb-4">
                <label class="block mb-1 font-semibold text-purple-700">Hobi</label>
                <input type="text" name="hobi" value="{{ $student['hobi'] }}" class="w-full border border-blue-200 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-300" required>
            </div>
            <div class="mb-4">
                <label class="block mb-1 font-semibold text-purple-700">Deskripsi</label>
                <textarea name="deskripsi" class="w-full border border-blue-200 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-300" required>{{ $student['deskripsi'] }}</textarea>
            </div>
            <div class="flex gap-4 mt-4">
                <button type="submit" class="px-6 py-2 rounded-lg bg-gradient-to-r from-purple-500 to-blue-500 text-white font-semibold shadow-md hover:from-purple-600 hover:to-blue-600 transition">Simpan</button>
                <a href="{{ url('/students/'.$student['id']) }}" class="px-6 py-2 rounded-lg bg-gradient-to-r from-gray-200 to-blue-100 text-blue-700 font-semibold hover:from-blue-200 hover:to-purple-100 transition">Batal</a>
            </div>
        </form>
    </div>
    <script>
        // Preview foto sebelum upload
        function previewImage(event) {
            const reader = new FileReader();
            reader.onload = function(){
                document.getElementById('preview').src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
</body>
</html>