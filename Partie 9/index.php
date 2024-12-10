<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f9;
        color: #333;
        margin: 0;
        padding: 20px;
        line-height: 1.6;
    }

    p {
        font-size: 18px;
        margin: 15px 0;
        font-family: 'Courier New', monospace;
        background-color: #eaeaea;
        padding: 5px 10px;
        border-radius: 4px;
    }
</style>

<body>

    <p> EXO 1</p>

    <?php echo date('d/m/Y'); ?>

    <p> EXO 2</p>

    <?php echo date('d-m-Y'); ?>

    <p> EXO 3</p>

    <?php
    $dateActuelle = date('l F Y');

    echo $dateActuelle;

    ?>

    <p> EXO 3 bis</p>

    <?php

    $dateNow = new DateTimeImmutable();
    $dateFormatter = new IntlDateFormatter('fr_FR');
    $dateFormatter->setPattern('EEEE d LLLL yyyy');

    echo $dateFormatter->format($dateNow);

    ?>

    <p> EXO 4 </p>

    <?php

    $now = time();
    $mardi2Aout = strtotime("2016/08/02");

    echo "Timestamp du jour : " . $now . "<br> VS timestamp du mardi 2 août 2016 à 15h : " . $mardi2Aout;

    ?>

    <p> EXO 5 </p>

    <?php

    $now = new DateTimeImmutable();
    $target = new DateTimeImmutable('2016-05-16');

    $interval = $target->diff($now);
    echo $interval->format('%R%a jours');

    ?>

    <p> EXO 6 </p>

    <?php

    echo cal_days_in_month(CAL_GREGORIAN, 2, 2016);

    ?>

    <p> EXO 7 </p>

    <?php

    $daysLater20 = date('l d F Y', strtotime('+20 days'));
    echo $daysLater20 ;

    ?>

    <p> EXO 8 </p>

    <?php

    $daysBefore22 = date('l d F Y', strtotime('-22 days'));
    echo $daysBefore22 ;

    ?>



    <?php

    // $dateForTimeStamp = DateTimeImmutable::createFromFormat('d-m-Y', '02-05-1998');

    // var_dump($dateForTimeStamp->getTimestamp());

    ?>

</body>

</html>