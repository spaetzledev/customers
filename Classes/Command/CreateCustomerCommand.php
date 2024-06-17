<?php

declare(strict_types=1);

namespace SpaetzleDev\Customers\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

final class CreateCustomerCommand extends Command
{
    protected function configure(): void
    {
        $this->setHelp('This command does nothing. It always succeeds.');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        // Do awesome stuff
        /**
         * todo: add parameter for:
         * - name
         * - email
         * - website name
         */
            

        return Command::SUCCESS;
    }
}
