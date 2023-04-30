<?php
session_start();
if (
    (!isset($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
    || (!isset($_POST['textarea']) || empty($_POST['textarea']))
    )
{
	echo('You need a valid email and message to submit the form.');
    return;
}
?>
<?php
// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['screenshot']) && $_FILES['screenshot']['error'] == 0)
{
    // Testons si le fichier n'est pas trop gros
    if ($_FILES['screenshot']['size'] <= 1000000)
    {
            // Testons si l'extension est autorisée
            $fileInfo = pathinfo($_FILES['screenshot']['name']);
            $extension = $fileInfo['extension'];
            $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png'];
            if (in_array($extension, $allowedExtensions))
            {
                    // On peut valider le fichier et le stocker définitivement
                    move_uploaded_file($_FILES['screenshot']['tmp_name'], 'uploads/' . basename($_FILES['screenshot']['name']));
                    echo "The shipment was successful !";
            }
    }
}
?>
<h1>Welcome !</h1>
        
<div class="card">
    
    <div class="card-body">
        <h5 class="card-title">Reminder of your information</h5>
        <p class="card-text"><b>Email</b> : <?php echo $_POST['email']; ?></p>
        <p class="card-text"><b>Message</b> : <?php echo $_POST['textarea']; ?></p>
    </div>
</div>