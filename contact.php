<!-- contact.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>recipe website - contact form</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="container">

<!-- header -->
    <?php include_once('includes/header.php'); ?>
    <!-- header -->

        <h1>Contactez nous</h1>
        <form>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="email-help">
                <div id="email-help" class="form-text">Your valid email address.</div>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Your message</label>
                <textarea class="form-control" placeholder="Exprimez vous" id="message" name="textarea"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <br />
    </div>

     <!-- footer -->
    <?php include_once('includes/footer.php'); ?>
    <!-- footer -->
</body>
</html>
