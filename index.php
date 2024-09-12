<?php 
    include "functions.php";

    //todaysDate();

    
    echo("<br />");

    $invDate = (function() {
        if (isset($_GET['invoiceDate']) && !empty($_GET['invoiceDate'])) {
            return $_GET['invoiceDate'];
        }
    });

    $expDate = (function() {
        if (isset($_GET['expirationDate']) && !empty($_GET['expirationDate'])) {
            return $_GET['expirationDate'];
        }
    });

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

            include "form.php";

            echo("<div class='enteredInfo'>");
                echo "The contract " . dateCalculation($invDate(), $expDate());
                echo "<br />" . dateCalc($invDate(), $expDate());
            echo("</div><br />");
        ?>

        </div>

        <?php include "foot.php" ?>
    </body>
</html>