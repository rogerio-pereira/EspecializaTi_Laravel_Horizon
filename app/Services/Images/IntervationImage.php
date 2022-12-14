<?php

namespace App\Services\Images;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class IntervationImage implements WatermarkInterface
{
    /**
     * Add watermark to image
     *
     * @param string $path
     * @return void
     */
    public function make(string $path) : void
    {
        $imageFullPath = Storage::path($path);
        $watermarkPath = public_path('default.png');

        Image::make($imageFullPath)
            ->insert($watermarkPath)
            ->save();
    }
}
