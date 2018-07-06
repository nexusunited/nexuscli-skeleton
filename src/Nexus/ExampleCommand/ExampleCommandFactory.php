<?php


namespace Nexus\ExampleCommand;


use Nexus\ExampleCommand\Business\Example\StringPrinter;
use Nexus\ExampleCommand\Business\Example\StringPrinterInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Xervice\Core\Factory\AbstractFactory;

/**
 * @method \Nexus\ExampleCommand\ExampleCommandConfig getConfig()
 */
class ExampleCommandFactory extends AbstractFactory
{
    /**
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     *
     * @return \Nexus\ExampleCommand\Business\Example\StringPrinterInterface
     * @throws \Xervice\Config\Exception\ConfigNotFound
     */
    public function createStringPrinter(OutputInterface $output) : StringPrinterInterface
    {
        return new StringPrinter(
            $output,
            $this->getConfig()->getStringToPrint()
        );
    }

    /**
     * @return array
     */
    public function getCommandList() : array
    {
        return $this->getDependency(ExampleCommandDependencyProvider::COMMAND_LIST);
    }
}