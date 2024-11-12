<?php
include "lib/koneksi.php";

$error = '';
$success = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $sql = "SELECT * FROM tb_user WHERE username = :username AND email = :email";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($result) {
        $error = 'Username atau email sudah terdaftar.';
    } else {
        $sql = "INSERT INTO tb_user (username, email) VALUES (:username, :email)";
        $stmt = $conn->prepare($sql);
    
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
    
    }
        if ($stmt->execute()) {
            header("Location: index.php");
        } else {
            $error = 'Terjadi kesalahan saat registrasi.';
        }
    }

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Sign Up</title>
</head>

<body>
    <?php if ($error): ?>
    <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
    <?php if ($success): ?>
    <p style="color: green;"><?php echo $success; ?></p>
    <?php endif; ?>
    <div class="container" style="width: 400px; margin-top: 75px;">
        <div class="row">

            <center>
                <h2>Form Sign Up</h2>
            </center>
            <form method="POST">
                <!-- Email input -->
                <div data-mdb-input-init class="form-outline mb-4" style="margin-top: 20px;>
                <label class="form-label" for="username">Username :</label>
                    <input type="text" id="username" name="username" class="form-control" />
                </div>
                <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="email">Email address : </label>
                    <input type="text" id="email" name="email" class="form-control" />
                </div>


                    <!-- Submit button -->
                    <center><button type="submit" data-mdb-button-init data-mdb-ripple-init
                        class="btn btn-primary btn-block mb-4">Sign
                        Up</button></center>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>
</body>

</html>