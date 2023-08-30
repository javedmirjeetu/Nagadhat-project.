<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class PatternCount extends Command
{
    protected $signature = 'pattern:count {text} {pattern}';
    protected $description = 'Count the occurrences of a pattern in a text';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $text = $this->argument('text');
        $pattern = $this->argument('pattern');

        $count = substr_count($text, $pattern);

        $this->info("Pattern '$pattern' appears $count times in the text.");
    }
}
