<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>recipe website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  rel="stylesheet">
</head>

<body>
    <!-- header -->
    <?php include_once("includes/header.php");?>
    <!-- header -->

    <!-- include variables and functions -->
    <?php
    include_once('includes/variables.php');
    include_once('includes/functions.php');
    ?>
      <!-- main -->
    <div class="container">
        <h1>Recipes List</h1>
        <?php foreach(get_recipes($recipes) as $recipe) : ?>
            <article>
                <h3><?php echo($recipe['title']); ?></h3>
                <div><?php echo($recipe['recipe']); ?></div>
                <i><?php echo(display_author($recipe['author'], $users)); ?></i>
            </article>
        <?php endforeach ?>
    </div>   

    <!-- footer -->
<?php include_once("includes/footer.php");?>
    <!-- footer -->

</body>
</html>
