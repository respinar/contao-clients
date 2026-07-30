<?php

declare(strict_types=1);

/*
 * This file is part of Contao Clients.
 *
 * (c) Hamid Peywasti
 *
 * @license MIT
 */

$GLOBALS['TL_LANG']['tl_company_client_group'] = [
    // Legends
    'title_legend' => 'Title and alias',
    'protected_legend' => 'Access protection',

    // Fields
    'title' => ['Title', 'Please enter the group title.'],
    'alias' => ['Alias', 'The alias is a unique reference that can be used instead of the numeric ID.'],
    'protected' => ['Protect group', 'Show clients in this group to certain member groups only.'],

    // Operations
    'new' => ['New group', 'Create a new client group'],
    'edit' => ['Manage clients', 'Manage clients in group ID %s'],
    'editheader' => ['Edit group', 'Edit group ID %s'],
    'copy' => ['Duplicate group', 'Duplicate group ID %s'],
    'delete' => ['Delete group', 'Delete group ID %s'],
    'show' => ['Group details', 'Show details of group ID %s'],

    // Global operations
    'all' => ['Edit multiple', 'Edit multiple groups at once'],
];
