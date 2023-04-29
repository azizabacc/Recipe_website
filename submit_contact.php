<?php
if (
    (!isset($_GET['email']) || !filter_var($_GET['email'], FILTER_VALIDATE_EMAIL))
    || (!isset($_GET['message']) || empty($_GET['message']))
    )
{
	echo('You need a valid email and message to submit the form.');
    return;
}
?>
<h1>Welcome !</h1>
        
<div class="card">
    
    <div class="card-body">
        <h5 class="card-title">Reminder of your information</h5>
        <p class="card-text"><b>Email</b> : <?php echo $_GET['email']; ?></p>
        <p class="card-text"><b>Message</b> : <?php echo $_GET['textarea']; ?></p>
    </div>
</div>