<?php
date_default_timezone_set('Europe/Prague');
$timeperiod = date("a");
$hours = idate("g");
$minutes = idate("i");
$seconds = idate("s");
$hDeg = $hours * 30 + $minutes * (360 / 720);
$mDeg = $minutes * 6 + $seconds * (360 / 3600);
$sDeg = $seconds * 6;
$time = "$hours:$minutes:$seconds";
?>
<svg height='300' width='200'>
    <circle id="circle" style="stroke: #000; stroke-width: 2px; fill:#FFF" cx="100" cy="100" r="80"></circle>
    <line id="hourhand" style="stroke: #000; stroke-width: 7px" x1="100" y1="100" x2="100" y2="50"
          transform="rotate(<?=(int)$hDeg ?> 100 100)">
    </line>
    <line id="minutehand" style="stroke: #000; stroke-width: 3px" x1="100" y1="100" x2="100" y2="30"
          transform="rotate(<?=(int)$mDeg ?> 100 100)">
    </line>
    <line id="secondhand" style="stroke: #000; stroke-width: 1px" x1="100" y1="100" x2="100" y2="20"
          transform="rotate(<?=(int)$sDeg ?> 100 100)">
    </line>
    <?php
    for ($i = 1; $i <= 12; $i++) {
        echo '<line id="dial" style="stroke: #000; stroke-width: 2px" x1="100" y1="20" x2="100" y2="35" transform="rotate(' . $i * 360 / 12 . ' 100 100)"></line>';
    }
    for ($i = 1; $i <= 60; $i++) {
        echo '<line id="dial" style="stroke: #000; stroke-width: 1px" x1="100" y1="20" x2="100" y2="30" transform="rotate(' . $i * 360 / 60 . ' 100 100)"></line>';
    }
    ?>
    <text id="period" style="stroke: #00008B; stroke-width: 1px; z-index: 3;" x="90" y="145"><?= $timeperiod ?></text>
    <text id="period" style="stroke: #00008B; stroke-width: 1px; z-index: 3;" x="75" y="125"><?= $time ?></text>
</svg>
<?php echo date_default_timezone_get();?>