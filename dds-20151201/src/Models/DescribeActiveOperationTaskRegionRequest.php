<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class DescribeActiveOperationTaskRegionRequest extends Model
{
    /**
     * @description Specifies whether to return the historical tasks. Default value: 0. Valid values:
     *
     * - 0: returns the current task.
     * - 1: returns the historical tasks.
     *
     * @example 0
     *
     * @var int
     */
    public $isHistory;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The type of the task. Valid values:
     *
     * - rds_apsaradb_ha: master-replica switchover
     * - rds_apsaradb_transfer: instance migration
     * - rds_apsaradb_upgrade: minor version update
     * - all: all types
     *
     * This parameter is required.
     *
     * @example rds_apsaradb_upgrade
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'isHistory' => 'IsHistory',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'taskType' => 'TaskType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->isHistory) {
            $res['IsHistory'] = $this->isHistory;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeActiveOperationTaskRegionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsHistory'])) {
            $model->isHistory = $map['IsHistory'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
