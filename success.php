<?php include "form.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Success</title>
</head>
<body>
    <div class="container">
    <?php 
        if (isset($_SESSION['success'])) {
            echo "<li class='text-center alert alert-success' role='alert' style='list-style: none;'>".$_SESSION['success']."</li>";
            unset($_SESSION['success']);
        }
    ?>
    </div>
</body>
</html>