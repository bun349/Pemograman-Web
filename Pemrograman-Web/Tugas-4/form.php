<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data</title>
    <style>

        *{
            color: #C5705D;
        }
        body {
            background-color: #DFD3C3;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #F8EDE3;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            width: 400px;
        }

        h2 {
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="date"],
        input[type="submit"],
        .radio-group {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            background-color: #FFF8E8;
        }

        input[type="submit"] {
            background-color: #C38154;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
            border: none;
        }

        input[type="submit"]:hover {
            background-color: #884A39;
        }

        .result {
            background-color: #FFF8E8;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 128, 0, 0.3);
            margin-top: 20px;
        }

    </style>
</head>

<body>

    <div class="container">
        <h2>Form Input Data</h2>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $npm = $_POST['npm'];
            $nama = strtoupper($_POST['nama']);
            $alamat = strtoupper($_POST['alamat']);
            $tempat_lahir = $_POST['tempat_lahir'];
            $tanggal_lahir = $_POST['tanggal_lahir'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $hobi = $_POST['hobi'];

            echo "<div class='result'>";
            echo "<h3>Hasil Input:</h3>";
            echo "NPM: $npm<br>";
            echo "Nama: $nama<br>";
            echo "Alamat: $alamat<br>";
            echo "Tempat Lahir: $tempat_lahir<br>";
            echo "Tanggal Lahir: $tanggal_lahir<br>";
            echo "Jenis Kelamin: $jenis_kelamin<br>";
            echo "Hobi: $hobi<br>";
            echo "</div>";
        } else {
        ?>

            <form method="POST" action="">
                <label for="npm">NPM:</label>
                <input type="text" id="npm" name="npm" required>

                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>

                <label for="alamat">Alamat:</label>
                <input type="text" id="alamat" name="alamat" required>

                <label for="tempat_lahir">Tempat Lahir:</label>
                <input type="text" id="tempat_lahir" name="tempat_lahir" required>

                <label for="tanggal_lahir">Tanggal Lahir:</label>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir" required><br>

                <label for="jenis_kelamin">Jenis Kelamin:</label>
                    <label><input type="radio" name="jenis_kelamin" value="Laki-laki" required> Laki-laki</label>
                    <label><input type="radio" name="jenis_kelamin" value="Perempuan" required> Perempuan</label><br>

                <label for="hobi">Hobi:</label>
                <input type="text" id="hobi" name="hobi">

                <input type="submit" value="Submit">
            </form>

        <?php
        }
        ?>

    </div>

</body>

</html>