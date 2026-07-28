<?php

declare(strict_types=1);

/*
 * This file is part of Contao Clients.
 *
 * (c) Hamid Peywasti 2026 <hamid@respinar.com>
 *
 * @license MIT
 */

namespace Respinar\ClientsBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class RespinarClientsBundle extends AbstractBundle
{
    public function loadExtension(array $config, ContainerConfigurator $containerConfigurator, ContainerBuilder $containerBuilder): void
    {
        $containerConfigurator->import('../config/services.yaml');
    }

    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
