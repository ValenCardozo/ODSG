<?php

namespace App\Providers;

use App\Libraries\Formatter;
use Illuminate\Contracts\Events\Logger;

class FileLogger
{
    public static function log(string $message): void
    {
    	echo $message;
    }
}
