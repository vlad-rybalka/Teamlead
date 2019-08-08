<?php 
function __autoload( $className ) 
{
    require_once( "$className.php" );
}

$T70 = new Teamlead();

$T1000 = new HR();
$T1001 = new Manager();

$T70->attach($T1000);
$T70->attach($T1001);

$juniorWork = [0,0,1,1,1,0,0,1,0,1,1,1,1,1,1,1,1,1,1,0,0,0,0,0,0,0,0,0];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
    <style type="text/css">
        .box{ 
            float: left;
        }
        .junior-work{
            width: 40px;
        }
        .teamlead-moods{
            width: 360px;
        }
        .observers{
            width: 250px;
        }
    </style>
</head>
<body>
    Initial state -  <?=$T70->message() ."<br/><br/>"?>
    <div class="box junior-work">
        <?php
            foreach($juniorWork as $signal){
                echo $signal ."<br/>";
            }
        ?>
    </div>
    <div class="box teamlead-moods">
        <?php
            foreach($juniorWork as $signal){
                $T70->changeState($signal);
                echo $T70->message()."<br/>";
            }
        ?>
    </div>
    <div class="box observers">
        HR: count of reprimand - <?=$T1000->getCountReprimand() ."<br/>"?>
        Manager: count of compliments - <?=$T1001->getCountCompliments() ."<br/>"?>
    </div>
</body>
</html>







