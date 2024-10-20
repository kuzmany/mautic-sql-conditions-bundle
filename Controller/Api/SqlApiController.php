<?php

namespace MauticPlugin\MauticSqlConditionsBundle\Controller\Api;

use Mautic\ApiBundle\Controller\CommonApiController;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;

/**
 * Class MauticSqlConditionsApiController 
 */
class SqlApiController extends CommonApiController
{
    /**
     * {@inheritdoc}
     */
    public function initialize(FilterControllerEvent $event)
    {
        $this->model           = $this->getModel('sqlConditions');
        $this->entityClass     = 'MauticPlugin\MauticSqlConditionsBundle\Entity\SqlCondition';
        $this->entityNameOne   = 'sqlCondition';
        $this->entityNameMulti = 'sqlConditions';

        parent::initialize($event);
    }
}
