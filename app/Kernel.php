<?php

$date = new DateTime(null, new DateTimeZone('Europe/Berlin'));
$datetime = $date->format('Y-m-d H:i:s');

include 'app/controller/config.php';

include_once 'app/Globals.php';
if($DEBUG == 'true'){
    $whoops = new \Whoops\Run();
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler());
    $whoops->register();
}