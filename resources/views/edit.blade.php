<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Belajar CRUD</title>
</head>

<body class="bg-gray-100 p-8">
    <div class="mt-14">

        <div class="max-w-lg mx-auto bg-white shadow-lg rounded-lg p-6">
            <h2 class="text-2xl font-bold text-gray-700 text-center mb-4">Edit Data</h2>
            <h3 class="text-xl text-gray-600 text-center mb-6">Data Pegawai</h3>

            <a href="/pegawai" class="text-blue-600 hover:text-blue-800 font-semibold inline-block mb-6">Kembali</a>

            @foreach ($pegawai as $p)
                <form action="/pegawai/update" method="post" class="space-y-4">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $p->pegawai_id }}">

                    <div>
                        <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                        <input type="text" id="nama" name="nama" required
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                            value="{{ $p->pegawai_nama }}">
                    </div>

                    <div>
                        <label for="jabatan" class="block text-sm font-medium text-gray-700">Jabatan</label>
                        <input type="text" id="jabatan" name="jabatan" required
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                            value="{{ $p->pegawai_jabatan }}">
                    </div>

                    <div>
                        <label for="umur" class="block text-sm font-medium text-gray-700">Umur</label>
                        <input type="number" id="umur" name="umur" required
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                            value="{{ $p->pegawai_umur }}">
                    </div>

                    <div>
                        <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
                        <textarea id="alamat" name="alamat" required
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">{{ $p->pegawai_alamat }}</textarea>
                    </div>

                    <div>
                        <input type="submit" value="Simpan Data"
                            class="w-full bg-blue-600 text-white font-bold py-2 px-4 rounded-md hover:bg-blue-700 transition duration-300 cursor-pointer">
                    </div>
                </form>
            @endforeach
        </div>
    </div>
</body>

</html>
