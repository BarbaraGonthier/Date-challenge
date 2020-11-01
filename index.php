<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <?php

        $presentTime = new DateTime;
        $destinationTimeStamp = 1606813200;
        $destinationTime = (new DateTime)->setTimestamp($destinationTimeStamp);

        $interval = $presentTime->diff($destinationTime);

        ?>
        <p> <?= $destinationTime->format('M d Y a h:i'); ?> </p>
        <h2> Destination Time</h2>

        <p> <?= $presentTime->format('M d Y a h:i'); ?> </p>
        <h2> Present Time</h2>

        <p> <?= $interval->format('%Y year(s) %M month(s) %D day(s) %H hour(s) %I minute(s)'); ?> </p>
        <h2> Difference between those 2 periods</h2>

    </body>
</html>

