<?php


namespace Nexus\ExampleCommand\Business\Example;


use Symfony\Component\Console\Output\OutputInterface;

class StringPrinter implements StringPrinterInterface
{
    /**
     * @var OutputInterface
     */
    private $output;

    /**
     * @var string
     */
    private $string;

    /**
     * StringPrinter constructor.
     *
     * @param OutputInterface $output
     * @param string $string
     */
    public function __construct(OutputInterface $output, string $string)
    {
        $this->output = $output;
        $this->string = $string;
    }


    /**
     * @param string $string
     */
    public function printString()
    {
        $this->output->writeln($this->string);
    }
}