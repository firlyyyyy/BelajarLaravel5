<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Belajar CRUD</title>
</head>

<body class="p-6 bg-gray-100 font-sans text-gray-700">
    <h2 class="text-center text-2xl font-bold text-gray-800 mb-4">Belajar CRUD</h2>
    <h3 class="text-center text-xl font-semibold text-gray-700 mb-6">Data Pegawai</h3>

    <a href="/pegawai/tambah"
        class="inline-block mb-6 px-4 py-2 text-white bg-green-500 hover:bg-green-600 rounded transition duration-300 text-sm">
        + Tambah Pegawai
    </a>

    <form action="/pegawai/cari" method="GET" class="flex justify-center mb-6">
        <input type="text" name="cari" placeholder="Cari Pegawai..." value="{{ old('cari') }}"
            class="px-4 py-2 w-72 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:border-blue-300 mr-4">
        <input type="submit" value="CARI"
            class="px-4 py-2 text-white bg-blue-500 hover:bg-blue-600 rounded-md transition duration-300 cursor-pointer">
    </form>

    @if (isset($cari) && $cari != '')
        <div class="mb-6 flex ml-28">
            <a href="/pegawai"
                class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition duration-300">
                Kembali
            </a>
        </div>
    @endif

    <div class="overflow-x-auto">
        <table class="table-auto w-full max-w-6xl mx-auto bg-white shadow-md rounded-lg">
            <thead class="bg-blue-500 text-white">
                <tr>
                    <th class="px-6 py-3 text-left">No</th>
                    <th class="px-6 py-3 text-left">Nama</th>
                    <th class="px-6 py-3 text-left">Jabatan</th>
                    <th class="px-6 py-3 text-left">Umur</th>
                    <th class="px-6 py-3 text-left">Alamat</th>
                    <th class="px-6 py-3 text-left">Opsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pegawai as $pegawai)
                    <tr class="border-b hover:bg-gray-100">
                        <td class="px-6 py-4 text-center">{{ $pegawai->pegawai_id }}</td>
                        <td class="px-6 py-4">{{ $pegawai->pegawai_nama }}</td>
                        <td class="px-6 py-4">{{ $pegawai->pegawai_jabatan }}</td>
                        <td class="px-6 py-4 text-center">{{ $pegawai->pegawai_umur }}</td>
                        <td class="px-6 py-4">{{ $pegawai->pegawai_alamat }}</td>
                        <td class="px-6 py-4">
                            <div class="flex space-x-2">
                                <a href="/pegawai/edit/{{ $pegawai->pegawai_id }}"
                                    class="px-3 py-1 bg-blue-500 text-white rounded hover:bg-blue-600 transition duration-300">Edit</a>
                                <a href="/pegawai/hapus/{{ $pegawai->pegawai_id }}"
                                    class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600 transition duration-300">Hapus</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
