<?php 
    include "functions.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link href="css/styles.css" rel="stylesheet">
    </head>
    <body class="d-flex flex-column min-vh-100">
        <?php include "navbar.php" ?>
        
        <div class="page-contents">

        <?php

            todaysDate();
            echo("<br />");
            if (!empty($_GET['numDays'])) {
                echo($_GET['numDays'] . " days from now is: ");
                if (isset($_GET['numDays']))  {
                    echo(calculateFutureDate($_GET['numDays']));
                }
            } else {
                echo("Please select a number to calculate how many days in the future.");
            }

            include "form.php";
        ?>

        </div>

        <?php include "foot.php" ?>
    </body>
</html>