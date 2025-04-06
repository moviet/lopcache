<?php
namespace Moviet\Opcache\Commands;

use Illuminate\Console\Command;
use Moviet\Opcache\Opcode;

/**
 * Class ClearCommand
 * @package Moviet\Opcache\Commands
 */
class ClearCommand extends Command
{
    /** @var string The console command name. */
    protected $signature = 'opcache:clear';

    /** @var string The console command description. */
    protected $description = 'Resets the contents of the opcode cache';

    /** @return mixed Execute the console command. */
    public function handle()
    {
        if (Opcode::clear()) {
            $this->info('OPcache successfully reset ');
        } else {
            $this->error('An error occurred while reset opcache');
            exit(2);
        }
    }
}