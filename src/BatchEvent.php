<?php

namespace tc\fswatcher;



class BatchEvent
{
    
    public $eventFiles = [];

    public function __construct($eventFiles)
    {
        $this->eventFiles = $eventFiles;
    }
}
