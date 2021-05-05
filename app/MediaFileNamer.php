<?php

namespace App;

use Spatie\MediaLibrary\Support\FileNamer\DefaultFileNamer;

class MediaFileNamer extends DefaultFileNamer
{
    public function originalFileName(string $fileName): string
    {
        return uniqid();
    }
}
