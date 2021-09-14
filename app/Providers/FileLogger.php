<?php

namespace App\Providers;

use Illuminate\contracts\Events\Logger;

final class FileLogger implements Logger
{
	private 

    public function __construct(Formatter $formatter)
    {
        $this->formatter = $formatter;
    }

    public function log(string $message): void
    {
    	$formattedMessage = $this->formatter->formatt($message);

    	echo $formattedMessage;
    }
}
