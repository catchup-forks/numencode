<?php

namespace Numencode\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

class Bower extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:bower';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run Bower update for admin theme';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $command = "cd modules/Admin/Resources/assets/";
        $process = new Process($command);
        $process->run();

        $command = "bower update";
        $process = new Process($command);
        $process->run();

        $success = $process->isSuccessful() ? 'Bower update for the admin theme executed successfully.' : 'Error executing Bower update for the admin theme.';
        $output = $process->getOutput();

        $this->comment(strip_tags($success));
    }
}