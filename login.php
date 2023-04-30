<?php

// Form validation
if (isset($_POST['email']) &&  isset($_POST['password'])) {
    foreach ($users as $user) {
        // user found !
        if (
            $user['email'] === $_POST['email'] &&
            $user['password'] === $_POST['password']
        ) {
            $loggedUser = [
                'email' => $user['email'],
            ];
                        /**
             * Cookie that expires in one year
             */
            setcookie(
                'LOGGED_USER',
                $loggedUser['email'],
                [
                    'expires' => time() + 365*24*3600,
                    'secure' => true,
                    'httponly' => true,
                ]
            );
            // registration of the user's email in session
            $_SESSION['LOGGED_USER'] = $loggedUser['email'];
        } else {
            $errorMessage = sprintf('The information sent does not allow you to be identified: (%s / %s)',
                $_POST['email'],
                $_POST['password']
            );
        }
    }
}

// If the cookie is present
if (isset($_COOKIE['LOGGED_USER'])) {
    $loggedUser = [
        'email' => $_COOKIE['LOGGED_USER'],
    ];
}

if (isset($_SESSION['LOGGED_USER'])) {
    $loggedUser = [
        'email' => $_SESSION['LOGGED_USER'],
    ];
}
?>
<!-- If user is not identified, the form is displayed -->
<?php if(!isset($loggedUser)): ?>
<form action="index.php" method="post">
    <!-- if an error message is displayed -->
    <?php if(isset($errorMessage)) : ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $errorMessage; ?>
        </div>
    <?php endif; ?>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="email-help" placeholder="you@exemple.com">
        <div id="email-help" class="form-text">The email used when creating an account.</div>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<!-- 
    If user is well connected, a success message is displayed
-->
<?php else: ?>
    <div class="alert alert-success" role="alert">

        <!-- Souhaiter la bienvenue -->
        Hello and welcome to the site <?php echo($loggedUser['email']); ?>
    </div>
<?php endif; ?>