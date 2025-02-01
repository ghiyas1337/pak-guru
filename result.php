<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }
        .container {
            text-align: center;
        }
        a {
            color: #28a745;
            text-decoration: none;
            font-size: 18px;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        if (isset($_GET['link'])) {
            $link = htmlspecialchars($_GET['link']);
            echo "<h1>Link yang Anda masukkan:</h1>";
            echo "<p><a href='$link' target='_blank'>$link</a></p>";
        } else {
            echo "<h1>Link tidak ditemukan!</h1>";
        }
        ?>
        <br>
        <a href="index.php">Kembali ke Input Link</a>
    </div>
</body>
</html>
