<?php

namespace App\Console;

use App\Console\Commands\TwitterStream;
use App\Console\Commands\Twitter;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        Twitter::class,
        TwitterStream::class
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('twitter')
            ->everyMinute();

//        $schedule->command('TwitterStream')
//            ->daily();

      //  $schedule->command('queue:restart')->hourly()
    }

    /**
     * Register the Closure based commands for the appli   cation.
     *
     * @return void
     */
    protected function commands()
    {
        require base_path('routes/console.php');
    }
}