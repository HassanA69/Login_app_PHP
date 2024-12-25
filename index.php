<?php include('partials/header.php'); ?>

<div class="container">
    <h2>Welcome to our universe</h2>


    <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === TRUE) : ?>
        <p>
            <a href="success.php">Admin</a>
        </p>
        <p>
            <a href="logout.php">Logout</a>
        </p>
    <?php else : ?>
        <p>
            <a href="register.php">Register</a>
        </p>
        <p>
            <a href="login.php">Login</a>
        </p>
    <?php endif; ?>
</div>


</body>

</html>