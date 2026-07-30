<?php

declare(strict_types=1);

/*
 * This file is part of Contao Clients.
 *
 * (c) Hamid Peywasti
 *
 * @license MIT
 */

$GLOBALS['TL_LANG']['tl_company_client'] = [
    // Legends
    'title_legend' => 'Name and alias',
    'logo_legend' => 'Logo',
    'details_legend' => 'Details',
    'category_legend' => 'Categories',
    'publish_legend' => 'Publish settings',

    // Fields
    'pid' => ['Group', 'The client group this client belongs to.'],
    'name' => ['Name', 'Please enter the client/company name.'],
    'alias' => ['Alias', 'The alias is a unique reference that can be used instead of the numeric ID.'],
    'logo' => ['Logo', 'Please select a client logo.'],
    'website' => ['Website', 'Please enter an external website URL.'],
    'description' => ['Description', 'Please enter a description for this client.'],
    'industry' => ['Industry', 'Please enter the industry this client operates in.'],
    'location' => ['Location', 'Please enter the client location.'],
    'categories' => ['Categories', 'Please select one or more categories.'],
    'published' => ['Publish client', 'Make the client visible on the website.'],
    'start' => ['Show from', 'Do not show the client on the website before this date.'],
    'stop' => ['Show until', 'Do not show the client on the website after this date.'],

    // Operations
    'new' => ['New client', 'Create a new client'],
    'edit' => ['Edit client', 'Edit client ID %s'],
    'copy' => ['Duplicate client', 'Duplicate client ID %s'],
    'delete' => ['Delete client', 'Delete client ID %s'],
    'show' => ['Client details', 'Show details of client ID %s'],
    'toggle' => ['Publish/unpublish client', 'Publish/unpublish client ID %s'],

    // Global operations
    'all' => ['Edit multiple', 'Edit multiple clients at once'],
];
