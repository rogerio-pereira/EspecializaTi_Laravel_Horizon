<?php

namespace App\Console\Commands;

use App\Services\Images\WatermarkInterface;
use Illuminate\Console\Command;

class WatermarkImagesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'watermark:users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add watermark to user image';

    public function __construct(
        protected WatermarkInterface $image
    )
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // $this->image()
        dd('test');

        return 0;
    }
}
