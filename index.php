<?php
use tc\fswatcher\Event;
use tc\fswatcher\Watcher;

require __DIR__ . '/vendor/autoload.php';

$path = $argv[1];

$watcher = new Watcher($path, function ($event) {
    var_dump($event);
//    echo "File \"$event->file\" was $event->type".PHP_EOL;
});
$watcher->watch();
