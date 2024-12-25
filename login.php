<?php
include('partials/header.php');
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === TRUE) {
    header("Location: success.php");
    exit;
}
include "db.php";
$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // التحقق من البيانات المدخلة
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    $sql = "SELECT * FROM user WHERE email ='$email' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) === 1) {
        $user = mysqli_fetch_assoc($result);
        if (password_verify($password, $user['password'])) {

            $_SESSION['logged_in'] = TRUE;
            $_SESSION['username'] = $user['username'];
            header("Location: success.php");
            exit;
        } else {
            $error = "Invalid email or password";
        }
    } else {
        $error = "Invalid email or password";
    }
    mysqli_close($conn);
}


?>

<link rel="stylesheet" href="main.css">
<form method="POST">
    <label for="username">Email:</label><br>
    <input type="email" name="email" id="email" required><br>
    <label for="password">Password:</label><br>
    <input type="password" name="password" id="password" required><br>
    <input type="submit" value="Login">
    <a href="register.php">Register</a>
    <p style="color: red;"><?php echo $error; ?></p>

</form>

</body>

</html>