<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Biodata Saya</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f7f7f7;
            padding: 40px;
        }

        .biodata-container {
            background: #fff;
            padding: 30px;
            max-width: 500px;
            margin: auto;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            text-align: center;
        }

        img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
            margin-bottom: 20px;
            border: 3px solid #4CAF50;
        }

        ul {
            list-style: none;
            padding: 0;
            text-align: left;
        }

        li {
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="biodata-container">
        <img src="{{ asset('images/' . $gambar) }}" alt="Foto Profil">
        <h1>Biodata Diri</h1>
        <ul>
            <li><strong>Nama:</strong> {{ $nama }}</li>
            <li><strong>Umur:</strong> {{ $umur }} tahun</li>
            <li><strong>Alamat:</strong> {{ $alamat }}</li>
            <li><strong>Email:</strong> {{ $email }}</li>
        </ul>
    </div>
</body>
</html>
