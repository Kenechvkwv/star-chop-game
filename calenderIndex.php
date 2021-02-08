<html>
<head>   
<link href="calendar.css" type="text/css" rel="stylesheet" />
<style type="text/css">
    body{
        background-image: url('media/index(28).jpg');
        background-position: center;
    }

    .cal {
        justify-content: center;
        position: relative;
        top:100px;
    }
    
</style>
</head>
<body>
<?php
include 'calendar.php';
 
$calendar = new Calendar(); ?>
 
<div class="cal"><?=$calendar->show();
?></div>

</body>
</html>    