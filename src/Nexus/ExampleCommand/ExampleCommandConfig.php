<?php


namespace Nexus\ExampleCommand;


use Xervice\Core\Config\AbstractConfig;

class ExampleCommandConfig extends AbstractConfig
{
    const EXAMPLE_STRING = 'example.string';

    /**
     * @return string
     * @throws \Xervice\Config\Exception\ConfigNotFound
     */
    public function getStringToPrint()
    {
        return $this->get(self::EXAMPLE_STRING, 'Hello World!');
    }
}