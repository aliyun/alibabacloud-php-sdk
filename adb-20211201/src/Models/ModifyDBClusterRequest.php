<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBClusterRequest extends Model
{
    /**
     * @description The reserved computing resources. Unit: ACUs. Valid values: 0 to 4096. The value must be in increments of 16 ACUs. Each ACU is equivalent to 1 core and 4 GB memory.
     *
     * >  This parameter must be specified with a unit.
     * @example 16ACU
     *
     * @var string
     */
    public $computeResource;

    /**
     * @description The ID of the AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *
     * >  You can call the [DescribeDBClusters](~~454250~~) operation to query the IDs of all AnalyticDB for MySQL Data Lakehouse Edition (V3.0) clusters within a region.
     * @example amv-bp1r053byu48p****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description Specifies whether to allocate all reserved computing resources to the user_default resource group. Valid values:
     *
     *   true (default)
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $enableDefaultResourcePool;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID of the cluster.
     *
     * >  You can call the [DescribeRegions](~~454314~~) operation to query the most recent region list.
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
     * @description The reserved storage resources. Unit: ACUs. Valid values: 0 to 2064. The value must be in increments of 24 ACUs. Each ACU is equivalent to 1 core and 4 GB memory.
     *
     * >  This parameter must be specified with a unit.
     * @example 24ACU
     *
     * @var string
     */
    public $storageResource;
    protected $_name = [
        'computeResource'           => 'ComputeResource',
        'DBClusterId'               => 'DBClusterId',
        'enableDefaultResourcePool' => 'EnableDefaultResourcePool',
        'ownerAccount'              => 'OwnerAccount',
        'ownerId'                   => 'OwnerId',
        'regionId'                  => 'RegionId',
        'resourceOwnerAccount'      => 'ResourceOwnerAccount',
        'storageResource'           => 'StorageResource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->computeResource) {
            $res['ComputeResource'] = $this->computeResource;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->enableDefaultResourcePool) {
            $res['EnableDefaultResourcePool'] = $this->enableDefaultResourcePool;
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
        if (null !== $this->storageResource) {
            $res['StorageResource'] = $this->storageResource;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDBClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComputeResource'])) {
            $model->computeResource = $map['ComputeResource'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['EnableDefaultResourcePool'])) {
            $model->enableDefaultResourcePool = $map['EnableDefaultResourcePool'];
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
        if (isset($map['StorageResource'])) {
            $model->storageResource = $map['StorageResource'];
        }

        return $model;
    }
}
