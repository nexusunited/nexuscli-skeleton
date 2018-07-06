<?php


namespace Nexus\ExampleCommand;


use Nexus\ExampleCommand\Communication\ExampleCommand;
use Xervice\Core\Dependency\DependencyProviderInterface;
use Xervice\Core\Dependency\Provider\AbstractProvider;

/**
 * @method \Xervice\Core\Locator\Locator getLocator()
 */
class ExampleCommandDependencyProvider extends AbstractProvider
{
    const COMMAND_LIST = 'command.list';

    /**
     * @param \Xervice\Core\Dependency\DependencyProviderInterface $container
     */
    public function handleDependencies(DependencyProviderInterface $container)
    {
        $container[self::COMMAND_LIST] = function (DependencyProviderInterface $container) {
            return $this->getCommandList();
        };
    }

    /**
     * @return array
     */
    protected function getCommandList()
    {
        return [
            new ExampleCommand()
        ];
    }
}