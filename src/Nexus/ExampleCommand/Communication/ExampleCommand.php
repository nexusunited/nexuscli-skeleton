<?php


namespace Nexus\ExampleCommand\Communication;


use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Xervice\Console\Command\AbstractCommand;

/**
 * @method \Nexus\ExampleCommand\ExampleCommandFacade getFacade()
 */
class ExampleCommand extends AbstractCommand
{
    protected function configure()
    {
        $this
            ->setName('example:command')
            ->setDescription('This is an example to print a string');
    }

    /**
     * @param \Symfony\Component\Console\Input\InputInterface $input
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     *
     * @return int|null|void
     * @throws \Core\Locator\Dynamic\ServiceNotParseable
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->getFacade()->executeExampleCommand($output);
    }

}