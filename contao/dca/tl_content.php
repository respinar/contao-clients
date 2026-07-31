<?php

/*
 * This file is part of Contao Clients.
 *
 * (c) Hamid Peywasti
 *
 * @license MIT
 */

// Add palette for client_list content element
$GLOBALS['TL_DCA']['tl_content']['palettes']['client_list'] = '{type_legend},type,headline;{client_legend},clientGroup;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID;{invisible_legend:hide},invisible,start,stop';

// Add clientGroup field
$GLOBALS['TL_DCA']['tl_content']['fields']['clientGroup'] = [
    'inputType'  => 'select',
    'foreignKey' => 'tl_company_client_group.title',
    'eval'       => ['mandatory' => true, 'chosen' => true, 'tl_class' => 'w50'],
    'sql'        => "int(10) unsigned NOT NULL default 0",
    'relation'   => ['type' => 'belongsTo', 'load' => 'lazy'],
];
