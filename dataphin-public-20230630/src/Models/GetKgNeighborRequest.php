<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetKgNeighborRequest\neighborsQuery;

class GetKgNeighborRequest extends Model
{
    /**
     * @var string
     */
    public $entityDataId;

    /**
     * @var string
     */
    public $entityType;

    /**
     * @var neighborsQuery
     */
    public $neighborsQuery;

    /**
     * @var int
     */
    public $opTenantId;

    /**
     * @var string
     */
    public $opUserId;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'entityDataId' => 'EntityDataId',
        'entityType' => 'EntityType',
        'neighborsQuery' => 'NeighborsQuery',
        'opTenantId' => 'OpTenantId',
        'opUserId' => 'OpUserId',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (null !== $this->neighborsQuery) {
            $this->neighborsQuery->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->entityDataId) {
            $res['EntityDataId'] = $this->entityDataId;
        }

        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }

        if (null !== $this->neighborsQuery) {
            $res['NeighborsQuery'] = null !== $this->neighborsQuery ? $this->neighborsQuery->toArray($noStream) : $this->neighborsQuery;
        }

        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        if (null !== $this->opUserId) {
            $res['OpUserId'] = $this->opUserId;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EntityDataId'])) {
            $model->entityDataId = $map['EntityDataId'];
        }

        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }

        if (isset($map['NeighborsQuery'])) {
            $model->neighborsQuery = neighborsQuery::fromMap($map['NeighborsQuery']);
        }

        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        if (isset($map['OpUserId'])) {
            $model->opUserId = $map['OpUserId'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
