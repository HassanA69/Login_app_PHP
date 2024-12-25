<?php
include "db.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $confirm_password = mysqli_real_escape_string($conn, $_POST["confirm_password"]);
    if ($password !== $confirm_password) {
        $error = "Password does not match";
    } else {
        $sql = "SELECT * FROM user WHERE username = '$username' LIMIT 1";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $error = "Username already exists";
        } else {
            $password = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO user (username, password, email) VALUES('$username','$password','$email')";
            if (mysqli_query($conn, $sql)) {
                $error = "User created successfully";
            } else {
                $error = "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
    }
}
?>
<?php include('partials/header.php'); ?>
<form method="POST">
    <label for="email">Email:</label><br>
    <input type="email" name="email" id="email" required><br>
    <label for="username">Username:</label><br>
    <input type="text" name="username" id="username" required><br>
    <label for="password">Password:</label><br>
    <input type="password" name="password" id="password" required><br>
    <label for="confirm_password">Confirm Password:</label><br>
    <input type="password" name="confirm_password" id="confirm_password" required><br>
    <input type="submit" value="Register">
    <a href="login.php">Login</a>
    <?php if (!empty($error) && $error !== "User created successfully") : ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
</form>
<?php include('partials/footer.php'); ?>
<?php mysqli_close($conn); ?>