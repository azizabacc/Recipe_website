<?php
    include_once('./../config/mysql.php');
    include_once('./../config/user.php');
    include_once('./../variables.php');
?>

<form action="<?php echo($rootUrl . 'comments/post_create.php'); ?>" method="POST">
    <div class="mb-3 visually-hidden">
        <input class="form-control" type="text" name="recipe_id" value="<?php echo($recipe['recipe_id']); ?>" />
    </div>
    <div class="mb-3">
        <label for="review" class="form-label">Rate the recipe (from 1 to 5)</label>
        <input type="number" class="form-control" id="review" name="review" min="0" max="5" step="1" />
    </div>
    <div class="mb-3">
        <label for="comment" class="form-label">Post a comment</label>
        <textarea class="form-control" placeholder="Soyez respectueux/se, nous sommes humain(e)s." id="comment" name="comment"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
