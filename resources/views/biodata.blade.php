<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ini Biodata</title>
</head>
<body>
    
    <p> Tes view pertama </p>
    <p> Belajar controller </p>

    Hasil Passing Data: {{$nama}}
    <br><br>
    Belajar Array:
    <ul>
        @foreach ($matkul as $mt)
        <li> {{$mt}} </li>
        @endforeach
    </ul>

</body>
</html>