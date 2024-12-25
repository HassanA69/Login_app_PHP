<nav>
    <ul>
        <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === TRUE) : ?>
            <li>
                <a href="success.php">Admin</a>
            </li>
            <li>
                <a href="logout.php">Logout</a>
            </li>
        <?php else : ?>
            <li>
                <a href="register.php">Register</a>
            </li>
            <li>
                <a href="login.php">Login</a>
            </li>
        <?php endif; ?>
    </ul>
</nav>