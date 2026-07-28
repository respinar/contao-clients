<?php

declare(strict_types=1);

/*
 * This file is part of Contao Clients.
 *
 * (c) Hamid Peywasti 2024 <hamid@respinar.com>
 *
 * @license MIT
 */

namespace Respinar\ClientsBundle\EventListener\DataContainer;

use Contao\CoreBundle\DependencyInjection\Attribute\AsCallback;
use Contao\DataContainer;
use Contao\Image;
use Contao\StringUtil;

#[AsCallback('tl_company_client', 'list.label.label_callback')]
class CompanyClientLabelCallbackListener
{
    public function __invoke(array $row, string $label, DataContainer $dc, array $args): array
    {
        if ($row['logo']) {
            $uuid = StringUtil::binToUuid($row['logo']);
            $logo = Image::getHtml($uuid, '', 'style="max-height:32px;max-width:50px;vertical-align:middle;margin-right:8px;"');
            $args[0] = $logo . ' ' . $args[0];
        }

        return $args;
    }
}
