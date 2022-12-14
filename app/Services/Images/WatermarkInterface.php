<?php

namespace App\Services\Images;

interface WatermarkInterface
{
    /**
     * Add watermark to image
     *
     * @param string $path
     * @return void
     */
    public function make(string $path) : void;
}
