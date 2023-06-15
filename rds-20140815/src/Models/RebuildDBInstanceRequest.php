<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class RebuildDBInstanceRequest extends Model
{
    /**
     * @description The ID of the primary instance.
     *
     * @example rm-uf6wjk5xxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The ID of the dedicated cluster. You can call the [DescribeDedicatedHostGroups](~~141946~~) operation to query the IDs of dedicated clusters.
     *
     * @example dhg-4nxxxxxxx
     *
     * @var string
     */
    public $dedicatedHostGroupId;

    /**
     * @description The ID of the host on which the system rebuilds the secondary instance.
     *
     * >  If you do not specify this parameter, the system preferentially rebuilds the secondary instance on the original host on which the secondary instance resides. If the remaining storage space of the original host is insufficient, the system rebuilds the secondary instance on a host on which the primary instance does not reside. If no suitable hosts are found, the system reports an error that indicates insufficient storage space.
     * @example i-bpxxxxxxx
     *
     * @var string
     */
    public $dedicatedHostId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The role of the secondary instance that you want to rebuild. Valid values:
     *
     *   **FOLLOWER**: secondary instance
     *   **LOG**: logger instance
     *
     * @example FOLLOWER
     *
     * @var string
     */
    public $rebuildNodeType;

    /**
     * @description The region ID of the instance. You can call the [DescribeRegions](~~26243~~) operation to query the most recent region list.
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
        'DBInstanceId'         => 'DBInstanceId',
        'dedicatedHostGroupId' => 'DedicatedHostGroupId',
        'dedicatedHostId'      => 'DedicatedHostId',
        'ownerId'              => 'OwnerId',
        'rebuildNodeType'      => 'RebuildNodeType',
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
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->dedicatedHostGroupId) {
            $res['DedicatedHostGroupId'] = $this->dedicatedHostGroupId;
        }
        if (null !== $this->dedicatedHostId) {
            $res['DedicatedHostId'] = $this->dedicatedHostId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->rebuildNodeType) {
            $res['RebuildNodeType'] = $this->rebuildNodeType;
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
     * @return RebuildDBInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DedicatedHostGroupId'])) {
            $model->dedicatedHostGroupId = $map['DedicatedHostGroupId'];
        }
        if (isset($map['DedicatedHostId'])) {
            $model->dedicatedHostId = $map['DedicatedHostId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RebuildNodeType'])) {
            $model->rebuildNodeType = $map['RebuildNodeType'];
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
