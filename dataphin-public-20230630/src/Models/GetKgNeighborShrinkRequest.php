<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;

class GetKgNeighborShrinkRequest extends Model
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
     * @var string
     */
    public $neighborsQueryShrink;

    /**
     * @var int
     */
    public $opTenantId;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'entityDataId' => 'EntityDataId',
        'entityType' => 'EntityType',
        'neighborsQueryShrink' => 'NeighborsQuery',
        'opTenantId' => 'OpTenantId',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
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

        if (null !== $this->neighborsQueryShrink) {
            $res['NeighborsQuery'] = $this->neighborsQueryShrink;
        }

        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
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
            $model->neighborsQueryShrink = $map['NeighborsQuery'];
        }

        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
