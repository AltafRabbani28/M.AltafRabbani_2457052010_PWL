<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Profile Mahasiswa</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f2f4f7;
            min-height: 100vh;

            display: flex;
            justify-content: center;
            align-items: center;
        }

        .profile {
            width: 400px;
            background: white;
            padding: 35px;
            border-radius: 20px;
            text-align: center;

            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        /* Foto Profil */
        .foto {
            margin-bottom: 20px;
        }

        .foto img {
            width: 140px;
            height: 140px;
            object-fit: cover;

            border-radius: 50%;
            border: 5px solid #e5e7eb;
        }

        /* Judul */
        h1 {
            font-size: 25px;
            margin-bottom: 25px;
            color: #222;
        }

        /* Data Mahasiswa */
        .data {
            display: flex;
            text-align: left;

            margin-bottom: 12px;
            padding: 14px;

            background: #f5f5f5;
            border-radius: 10px;
        }

        .label {
            width: 90px;
            font-weight: bold;
            color: #333;
        }

        .value {
            flex: 1;
            color: #555;
        }
    </style>
</head>

<body>

    <div class="profile">

        <div class="foto">
            <img src="{{ asset('images/gold.jpg') }}" alt="Foto Profil">
        </div>

       
        <h1>Profile Mahasiswa</h1>

       
        <div class="data">
            <div class="label">Nama</div>
            <div class="value">
                {{ $nama }}
            </div>
        </div>

        <div class="data">
            <div class="label">NPM</div>
            <div class="value">
                {{ $npm }}
            </div>
        </div>

        <div class="data">
            <div class="label">Kelas</div>
            <div class="value">
                {{ $kelas }}
            </div>
        </div>

    </div>

</body>
</html>