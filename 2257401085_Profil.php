<?php
/**
 *  NIM : 2257401085
 *  Nama : Lisa Amanda
 *  Kelas : MI22A
 */
?>

<head>
        <style>
            body {
                font-family: Arial, sans-serif;
                padding: 30px;
            }
            .form-container {
                width: 400px;
                margin: auto;
                border: 1px solid #ccc;
                padding: 20px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            .form-container h2 {
                text-align: left;
            }
            .form-container input {
                display: block;
                width: calc(100% - 20px);
                margin: 10px 0;
                padding: 10px;
            }
            .form-container button {
                background-color: green;
                color: white;
                padding: 10px;
                border: none;
                cursor: pointer;
                width: 30%;
            }
            .result-container {
                width: 400px;
                margin: 20px auto;
                border: 1px solid #000;
                padding: 20px;
            }
            
        </style>
</head>



    <body>

        <?php
            include 'index.php';
        ?>

        <div class="form-container">
            <form id="profileForm">
                <label for="nim">NIM</label>
                <input type="text" id="nim" name="nim" required>
                
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" required>
                
                <label for="kelas">Kelas</label>
                <input type="text" id="kelas" name="kelas" required>
                
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
                
                <label for="nomorHp">Nomor HP</label>
                <input type="text" id="nomorHp" name="nomorHp" required>
                
                <button type="submit">Simpan</button>
            </form>
        </div>

        <div class="result-container" id="result" style="display:none;">
            <p><strong>NIM</strong> <span id="resultNim"></span></p>
            <p><strong>Nama</strong> <span id="resultNama"></span></p>
            <p><strong>Kelas</strong> <span id="resultKelas"></span></p>
            <p><strong>Email</strong> <span id="resultEmail"></span></p>
            <p><strong>Nomor Handphone</strong> <span id="resultNomorHp"></span></p>
        </div>

        <script>
            document.getElementById('profileForm').addEventListener('submit', function(event) {
                event.preventDefault();
                
                var nim = document.getElementById('nim').value;
                var nama = document.getElementById('nama').value;
                var kelas = document.getElementById('kelas').value;
                var email = document.getElementById('email').value;
                var nomorHp = document.getElementById('nomorHp').value;
                
                document.getElementById('resultNim').textContent = nim;
                document.getElementById('resultNama').textContent = nama;
                document.getElementById('resultKelas').textContent = kelas;
                document.getElementById('resultEmail').textContent = email;
                document.getElementById('resultNomorHp').textContent = nomorHp;
                
                document.getElementById('result').style.display = 'block';
            });
        </script>

    </body>

