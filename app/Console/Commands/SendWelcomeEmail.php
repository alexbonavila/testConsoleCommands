<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SendWelcomeEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'abdeb:sendwlcomeemail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Aixo es una comanda de test';

    /**
     * Create a new command instance.
     *
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        dump('SendEmail');
    }
}
