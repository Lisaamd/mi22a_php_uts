<?php
/**
 *  NIM : 2257401085
 *  Nama : Lisa Amanda
 *  Kelas : MI22A
 */
?>

<?php
    include 'index.php';
?>

<head>
    <title>Loop</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }
        .container, .result {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 0px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0);
        }

        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type=text], input[type=input], input[type=date] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }

    
    </style>
</head>
<body>
    <div class="container">
        <h2>Form Perulangan</h2>
        <form action="" method="post">
            <label for="teks">Teks</label>
            <input type="text" id="teks" name="teks" required>
            <br><br>
            <label for="jumlah">Jumlah Perulangan</label>
            <input type="input" id="perulangan" name="perulangan" required>
            <br><br>
            <button type="submit">Cetak</button>
        </form>
    </div>
</body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jumlah = isset($_POST['perulangan']) ? (int)$_POST['perulangan'] : 0;
    echo "<div class='result'>";
    for ($i = 1; $i <= $jumlah; $i++) {
        echo $i. " Hello World<br>";
    }
    echo "</div>";
}
?>
</html>