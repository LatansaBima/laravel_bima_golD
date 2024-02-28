<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Pendaftaran</title>
</head>
<body>
    <h2>Form Pendaftaran Request by Form</h2>
    <form action="pendaftaran/proses" method="POST">
        {{ csrf_field() }}
        Nama :
        <input type="text" name="nama">
        <br />
        <br />
        Alamat :
        <input type="text" name="alamat">
        <br />
        <hr />
        <input type="submit" value="Simpan">
    </form>
</body>
</html>