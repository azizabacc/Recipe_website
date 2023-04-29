<?php

//new function to display enabled profils
function display_recipe(array $recipe) : string
{
    $recipe_content = '';

    if ($recipe['is_enabled']) {
        $recipe_content = '<article>';
        $recipe_content .= '<h3>' . $recipe['title'] . '</h3>';
        $recipe_content .= '<div>' . $recipe['recipe'] . '</div>';
        $recipe_content .= '<i>' . $recipe['author'] . '</i>';
        $recipe_content .= '</article>';
    }
    
    return $recipe;
}
// display the fullname and the age of the author xwith the email adress
function display_author(string $authorEmail, array $users) : string
{
    for ($i = 0; $i < count($users); $i++) {
        $author = $users[$i];
        if ($authorEmail === $author['email']) {
            return $author['full_name'] . '(' . $author['age'] . ' years old)';
        }
    }
}
//return all the recipes enabled
function get_recipes(array $recipes) : array
{
    $valid_recipes = [];

    foreach($recipes as $recipe) {
        if ($recipe['is_enabled']) {
            $valid_recipes[] = $recipe;
        }
    }

    return $valid_recipes;
}

?>