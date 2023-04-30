<!-- header.php -->

<!-- include variables and functions -->
<?php
    include_once('mysql.php');
    include_once('variables.php');
    include_once('functions.php');
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo($rootUrl). 'index.php'; ?>">Recipes Website </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo($rootUrl). 'index.php'; ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo($rootUrl). 'contact.php'; ?>">Contact</a>
                </li>
                <?php if(isset($loggedUser)) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo($rootUrl). 'recipes/create.php'; ?>">Add a recipe</a>
                    </li>
                <?php endif; ?>
            </ul>
            <?php if (isset($_SESSION['LOGGED_USER']) || isset($_COOKIE['LOGGED_USER'])) : ?>
                <form action="" method="post">
                    <button type="submit" name="logout" class="btn btn-secondary">Logout</button>
                </form>
            <?php endif; ?>
            <?php else: ?>
                <button class="btn btn-outline-success me-2" type="button" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
            <?php endif; ?>
        </div>
    </div>
</nav>
