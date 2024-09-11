<?php

    date_default_timezone_set("America/Chicago");
    
    $todaysDate = date("M-d-Y h:i");

    function todaysDate() {
        global $todaysDate;
        echo("Todays date is " . $todaysDate);
    }

    function calculateFutureDate($daysToAdd = 0) {
        global $todaysDate;
        $futureDate = date("Y-m-d: D", strtotime($todaysDate . "+ $daysToAdd days"));
        return($futureDate);
    }

    ?>