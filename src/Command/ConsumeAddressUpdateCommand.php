<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Messenger\Worker;

class ConsumeMessagesCommand extends Command
{
    protected static $defaultName = 'app:consume-messages';

    private $worker;

    public function __construct(Worker $worker)
    {
        parent::__construct();
        $this->worker = $worker;
    }

    protected function configure()
    {
        $this->setDescription('Consume messages from the queue');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->worker->run();

        return Command::SUCCESS;
    }
}
