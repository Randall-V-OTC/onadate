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

    function dateCalculation($date1, $date2) {

        $days = (60*60*24); // this is a single day in seconds
        $months = ($days*30); // same as above except 30 days to make a month (roughly)
        $years = ($days*365); // 365 days in a year

        // **** side note. everything has to be absolute value or it won't calculate right when the expiration date is prior to the invoice date

        // find the difference between the two
        $dateDiff = abs(strtotime($date2) - strtotime($date1));

        // take the difference and divide by how many seconds are in a year (60 per minute, 60 min per hour, 24 hours in a day, 365 days in a year)
        $dateY = abs(floor($dateDiff / $years));

        // now divide to get the months
        $dateM = abs(floor(($dateDiff - $dateY * $years) / $months));

        // and then divide the remaining time by days to get the days
        $dateD = abs(floor(($dateDiff - ($dateY * $years) - ($dateM * $months)) / $days));

        if (strtotime($date1) < strtotime($date2)) {
            return "will expire in $dateY years, $dateM months, and $dateD days.";
        } else {
            return "expired $dateY years, $dateM months, and $dateD days ago.";
        }
        
    }

    function dateCalc($date1, $date2) {
        $strDate1 = strtotime($date1);
        $strDate2 = strtotime($date2);
        
        // use the date_create() function for use in the date_diff() function
        $d1 = date_create($date1);
        $d2 = date_create($date2);

        // the date_diff() function is more precise when working with dates
        $diff = date_diff($d1, $d2);

        return "Difference using the date_create() function: " . $diff->y . " years, " . $diff->m . " months, and " . $diff->d . " days.";
    }

    ?>