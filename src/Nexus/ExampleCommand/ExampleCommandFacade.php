<?php


namespace Nexus\ExampleCommand;


use Symfony\Component\Console\Output\OutputInterface;
use Xervice\Core\Facade\AbstractFacade;

/**
 * @method \Nexus\ExampleCommand\ExampleCommandFactory getFactory()
 * @method \Nexus\ExampleCommand\ExampleCommandConfig getConfig()
 */
class ExampleCommandFacade extends AbstractFacade
{
    /**
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     *
     * @throws \Xervice\Config\Exception\ConfigNotFound
     */
    public function executeExampleCommand(OutputInterface $output) : void
    {
        $this->getFactory()->createStringPrinter($output)->printString();
    }

    /**
     * @return array
     */
    public function getCommands() : array
    {
        return $this->getFactory()->getCommandList();
    }
}