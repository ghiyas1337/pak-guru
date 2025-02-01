<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $url = $_POST['url'];

    // Validasi URL
    if (!filter_var($url, FILTER_VALIDATE_URL)) {
        die("URL tidak valid. Silakan kembali dan masukkan URL yang benar.");
    }

    // Generate user dan password acak
    $user = 'user_' . rand(1000, 9999);
    $password = 'pass_' . rand(1000, 9999);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil</title>
    <meta http-equiv="refresh" content="10;url=<?php echo $url; ?>">
</head>
<body>
    <h1>Hasil</h1>
    <p>URL: <a href="<?php echo $url; ?>" target="_blank"><?php echo $url; ?></a></p>
    <p>User: <?php echo $user; ?></p>
    <p>Password: <?php echo $password; ?></p>
    <p>Anda akan diarahkan ke URL dalam 10 detik...</p>
</body>
</html>
<?php
} else {
    // Jika tidak ada data POST, redirect ke index.php
    header("Location: index.php");
    exit();
}
?>