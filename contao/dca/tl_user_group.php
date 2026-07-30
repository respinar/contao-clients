<?php

declare(strict_types=1);

/*
 * This file is part of Contao Clients Bundle.
 *
 * (c) Hamid Peywasti
 *
 * @license MIT
 */

use Contao\CoreBundle\DataContainer\PaletteManipulator;
use Doctrine\DBAL\Platforms\AbstractMySQLPlatform;

// Extend the default palette
PaletteManipulator::create()
    ->addLegend('clients_legend', 'amg_legend', PaletteManipulator::POSITION_BEFORE)
    ->addField('clients', 'clients_legend', PaletteManipulator::POSITION_APPEND)
    ->applyToPalette('default', 'tl_user_group')
;

// Add fields to tl_user_group
$GLOBALS['TL_DCA']['tl_user_group']['fields']['clients'] =
[
    'label' => &$GLOBALS['TL_LANG']['tl_user']['clients'],
    'inputType' => 'checkbox',
    'foreignKey' => 'tl_company_client_group.title',
    'eval' => ['multiple' => true],
    'sql' => ['type' => 'blob', 'length' => AbstractMySQLPlatform::LENGTH_LIMIT_BLOB, 'notnull' => false],
    'relation' => ['type' => 'hasMany', 'load' => 'lazy'],
];
