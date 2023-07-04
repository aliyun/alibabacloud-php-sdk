<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class AssociateGlobalAccelerationInstanceRequest extends Model
{
    /**
     * @description The ID of the backend server.
     *
     * @example i-saf23****
     *
     * @var string
     */
    public $backendServerId;

    /**
     * @description The region of the backend server. The region must belong to the service area of the GA instance.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $backendServerRegionId;

    /**
     * @description The backend server type. Valid values:
     *
     *   **EcsInstance** (default): ECS instance
     *   **SlbInstance**: SLB instance
     *
     * @example EcsInstance
     *
     * @var string
     */
    public $backendServerType;

    /**
     * @description The ID of the GA instance.
     *
     * @example ga-lsajj32****
     *
     * @var string
     */
    public $globalAccelerationInstanceId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID of the GA instance. You can call the [DescribeRegions](~~36063~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
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
        'backendServerId'              => 'BackendServerId',
        'backendServerRegionId'        => 'BackendServerRegionId',
        'backendServerType'            => 'BackendServerType',
        'globalAccelerationInstanceId' => 'GlobalAccelerationInstanceId',
        'ownerAccount'                 => 'OwnerAccount',
        'ownerId'                      => 'OwnerId',
        'regionId'                     => 'RegionId',
        'resourceOwnerAccount'         => 'ResourceOwnerAccount',
        'resourceOwnerId'              => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backendServerId) {
            $res['BackendServerId'] = $this->backendServerId;
        }
        if (null !== $this->backendServerRegionId) {
            $res['BackendServerRegionId'] = $this->backendServerRegionId;
        }
        if (null !== $this->backendServerType) {
            $res['BackendServerType'] = $this->backendServerType;
        }
        if (null !== $this->globalAccelerationInstanceId) {
            $res['GlobalAccelerationInstanceId'] = $this->globalAccelerationInstanceId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
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
     * @return AssociateGlobalAccelerationInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackendServerId'])) {
            $model->backendServerId = $map['BackendServerId'];
        }
        if (isset($map['BackendServerRegionId'])) {
            $model->backendServerRegionId = $map['BackendServerRegionId'];
        }
        if (isset($map['BackendServerType'])) {
            $model->backendServerType = $map['BackendServerType'];
        }
        if (isset($map['GlobalAccelerationInstanceId'])) {
            $model->globalAccelerationInstanceId = $map['GlobalAccelerationInstanceId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
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
