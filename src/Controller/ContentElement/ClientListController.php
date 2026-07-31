<?php

declare(strict_types=1);

/*
 * This file is part of Contao Clients.
 *
 * (c) Hamid Peywasti
 *
 * @license MIT
 */

namespace Respinar\ClientsBundle\Controller\ContentElement;

use Contao\ContentModel;
use Contao\CoreBundle\Controller\ContentElement\AbstractContentElementController;
use Contao\CoreBundle\DependencyInjection\Attribute\AsContentElement;
use Contao\CoreBundle\Twig\FragmentTemplate;
use Contao\FilesModel;
use Contao\StringUtil;
use Respinar\ClientsBundle\Model\CompanyClientModel;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

#[AsContentElement('client_list', category: 'includes')]
class ClientListController extends AbstractContentElementController
{
    protected function getResponse(FragmentTemplate $template, ContentModel $model, Request $request): Response
    {
        $clients = [];

        if (!empty($model->clientGroup)) {
            $clientCollection = CompanyClientModel::findBy(
                ['pid=?', 'published=1'],
                [$model->clientGroup],
                ['order' => 'name ASC']
            );

            if ($clientCollection !== null) {
                while ($clientCollection->next()) {
                    $client = $clientCollection->current();
                    $row = $client->row();

                    if (!empty($row['logo'])) {
                        $fileModel = FilesModel::findByUuid(StringUtil::binToUuid($row['logo']));
                        $row['logoPath'] = $fileModel?->path;
                    }

                    $clients[] = $row;
                }
            }
        }

        $template->set('clients', $clients);

        return $template->getResponse();
    }
}
