<?php

/*
 * This file is part of Contao Clients.
 *
 * (c) Hamid Peywasti
 *
 * @license MIT
 */

use Respinar\ClientsBundle\Model\CompanyClientModel;

/*
 * Backend modules
 */
$GLOBALS['BE_MOD']['company']['company_clients'] = [
    'tables' => ['tl_company_client']
];

/*
 * Models
 */
$GLOBALS['TL_MODELS']['tl_company_client'] = CompanyClientModel::class;
