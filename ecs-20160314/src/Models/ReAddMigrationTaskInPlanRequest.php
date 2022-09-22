<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\Tea\Model;

class ReAddMigrationTaskInPlanRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $migrationPlanId;

    /**
     * @var string
     */
    public $migrationTime;

    /**
     * @var string
     */
    public $networkMigrationType;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'instanceId'           => 'InstanceId',
        'migrationPlanId'      => 'MigrationPlanId',
        'migrationTime'        => 'MigrationTime',
        'networkMigrationType' => 'NetworkMigrationType',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->migrationPlanId) {
            $res['MigrationPlanId'] = $this->migrationPlanId;
        }
        if (null !== $this->migrationTime) {
            $res['MigrationTime'] = $this->migrationTime;
        }
        if (null !== $this->networkMigrationType) {
            $res['NetworkMigrationType'] = $this->networkMigrationType;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReAddMigrationTaskInPlanRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MigrationPlanId'])) {
            $model->migrationPlanId = $map['MigrationPlanId'];
        }
        if (isset($map['MigrationTime'])) {
            $model->migrationTime = $map['MigrationTime'];
        }
        if (isset($map['NetworkMigrationType'])) {
            $model->networkMigrationType = $map['NetworkMigrationType'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
