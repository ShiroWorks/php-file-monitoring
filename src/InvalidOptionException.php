<?php


namespace tc\fswatcher;


use Throwable;


class InvalidOptionException extends \Exception
{
    public function __construct($option, $className, $code = 0, Throwable $previous = null)
    {
        parent::__construct("The option \"$option\" is not supported on \"$className\"", $code, $previous);
    }
}
