<?php

namespace Astreya\SettingsTool\Commands;

use Astreya\SettingsTool\Logic\SettingsLogic;
use Illuminate\Console\Command;
use Request;
use Route;

class SyncCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'settings:sync';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Settings sync command';

    /**
     * Create a new command instance.
     *
     * @return void
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
        $logic = new SettingsLogic();
        $logic->manageSettings();
        return;
    }
}
