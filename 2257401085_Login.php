<?php
/**
 *  NIM : 2257401085
 *  Nama : Lisa Amanda
 *  Kelas : MI22A
 */
?>

<head>
    <title>Login</title>
</head>

<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 30px;
        }
        .container{
            max-width: 360px;
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
        input[type=text], input[type="password"]{
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            background-color: #2549eb;
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

<body>
    <?php
        include 'index.php';
    ?>
    <div class="container">
        <h2>Login</h2>
        <form id="loginForm">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Username"><br><br>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Password"><br><br>
            <button type="button" onclick="login()">Login</button>
        </form>
        <p id="message"></p>
    </div>

    <script>
        function login() {
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;
            const message = document.getElementById('message');

            if (username === 'admin' && password === 'admin') {
                message.style.color = 'green';
                message.textContent = 'Login Berhasil';
            } else {
                message.style.color = 'red';
                message.textContent = 'Username/Password tidak sesuai';
            }
        }
    </script>
</body>
</html>
