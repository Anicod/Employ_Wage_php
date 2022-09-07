<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employ Wage</title>
</head>
<body>
    <table>
        
    </table>
    <?php
    define("wage_per_hour", 20);
    define("full_day_hour", 8);
    define("part_time_hour", 4);
    $numberOfDays = 1;
    $totalWorkingHour = 0;
    while($numberOfDays<20 && $totalWorkingHour<100){
        $isEmployStatus = rand(0, 2);
        switch($isEmployStatus){
            case 0:
                echo "<p>employ is present</p>";
                $dailyWages = wage_per_hour*full_day_hour*$numberOfDays;
                $totalWorkingHour = full_day_hour + $totalWorkingHour;
                echo "<p>daily wages for full day is $dailyWages</p>";
                $numberOfDays++;
                break;
            case 1:
                $partTimeWage = wage_per_hour*part_time_hour;
                $totalWorkingHour = part_time_hour + $totalWorkingHour;
                echo "<p>Part time wage is $partTimeWage</p>";
                break;
            default:
                echo "<p>employ is absent</p>";
                $wage = wage_per_hour*0;
        }

    }
    echo "<h3>employ wages for full time $dailyWages</h3>";
    echo "<h3>employ wages for part time $partTimeWage</h3>";
    echo "<h3>employ toatal wages for part time " . $partTimeWage + $dailyWages ."</h3>";
    echo "<h3>employ total working hour " . $totalWorkingHour - 8 ."hr</h3> ";
    echo "<h3>employ working for full time is $numberOfDays day</h3>";

    ?>
</body>
</html>
