<?php
    echo "<link rel='stylesheet' type='text/css' href='CSS/mainCSS.css'>";
    echo "<div id=mainDiv>";
        getVariablesForCalendar(3, 2017);
    echo "</div>";
    
function getVariablesForCalendar($Month, $Year) {
    $JulianDay = gregoriantojd($Month, 1, $Year);
    $FirstDay = jddayofweek($JulianDay);
    $NumDays = cal_days_in_month(CAL_GREGORIAN, $Month, $Year);
    echo "<p id=header>" . jdmonthname($JulianDay, 1) . " " . $Year . "</p>";
    CreateCalendar($FirstDay, $NumDays);
}

function CreateCalendar($StartDay, $Days) {
    echo "<table>";
    echo "<tr>";
    for ($i = 0; $i < $StartDay; $i++) {
        echo "<td>" . " " . "</td>";
    }
    $CurrentDay = $StartDay;
    for($i = 1; $i < $Days; $i++) {
        echo "<td>" . $i . "</td>";
        $CurrentDay++;
        if($CurrentDay % 7 == 0) {
            echo "</tr>" . "<tr>";
        }
    }
    echo "</tr>";
    echo "</table>";
}

