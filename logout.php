<?php
// If the user clicks on the "logout" button
if (isset($_POST['logout'])) {
    // Destroy the session and delete the cookie
    session_destroy();
    setcookie('LOGGED_USER', '', time() - 3600);
    // Reload the page to show the login form again
    header('Location: index.php');
} 
//If the user is logged in, show the logout button
 if (isset($_SESSION['LOGGED_USER']) || isset($_COOKIE['LOGGED_USER'])) : ?>
    <form action="" method="post">
        <button type="submit" name="logout" class="btn btn-secondary">Logout</button>
    </form>
<?php endif; ?>
