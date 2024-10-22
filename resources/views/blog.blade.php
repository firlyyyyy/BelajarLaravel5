<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Nama: {{ $nama }}</h1>
    <h1>kelas: {{ $kelas }}</h1>
    <ul>
        @foreach ($mapel as $mapel)
            <li>
                {{ $mapel }}
            </li>
        @endforeach
    </ul>
</body>
</html>