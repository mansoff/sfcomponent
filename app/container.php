<?php

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

$container = new ContainerBuilder();

$container->register('console', Symfony\Component\Console\Application::class);

$container->register('console', Symfony\Component\Console\Application::class)
    ->addMethodCall('add', [new Reference('hello_world.command')]);

//new \ExampleBundle\Command\ExampleCommand();
$container->register('hello_world.command', \ExampleBundle\Command\ExampleCommand::class)
    ->addArgument('hello_world.command');

return $container;
