<?php

namespace Fhsinchy\Inspire;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Http;

class Inspire
{
    public function justDoIt()
    {
        $output = Artisan::call('inspire');
        $fullQuote = Artisan::output();

        // Split the string at "- " to separate quote and author
        $parts = explode("- ", $fullQuote);

        // Clean up the quote and author
        $quote = trim($parts[0] ?? '');
        $author = trim($parts[1] ?? '');

        // Remove any \n characters
        $quote = str_replace("\n", '', $quote);
        $author = str_replace("\n", '', $author);
        return $quote . ' -' . $author;
    }
}
