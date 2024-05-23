<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class MigrateDBInstanceRequest extends Model
{
    /**
     * @description The ID of the instance.
     *
     * This parameter is required.
     * @example rm-uf6wjk5******
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The dedicated cluster ID. You can call the DescribeDedicatedHostGroups operation to query the dedicated cluster ID.
     *
     * This parameter is required.
     * @example dhg-4n******
     *
     * @var string
     */
    public $dedicatedHostGroupId;

    /**
     * @description The time when you want the system to start the migration. Valid values:
     *
     *   **Immediately**: The system immediately starts the migration. This is the default value.
     *   **MaintainTime**: The system starts the migration during the specified maintenance window.
     *   **Specified**: The system starts the migration at the specified point in time.
     *
     * @example MaintainTime
     *
     * @var string
     */
    public $effectiveTime;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID. You can call the DescribeRegions operation to query the most recent region list.
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

    /**
     * @description The point in time when you want the system to start the migration. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     * > This parameter must be specified when you set **EffectiveTime** to **Specified**.
     * @example 2019-10-21T10:00:00Z
     *
     * @var string
     */
    public $specifiedTime;

    /**
     * @description The ID of the host to which you want to migrate the primary instance. You can call the DescribeDedicatedHosts operation to query the host ID.
     *
     * @example i-bp******
     *
     * @var string
     */
    public $targetDedicatedHostIdForMaster;

    /**
     * @description The ID of the host to which you want to migrate the secondary instance. You can call the DescribeDedicatedHosts operation to query the host ID.
     *
     * @example i-bp******
     *
     * @var string
     */
    public $targetDedicatedHostIdForSlave;

    /**
     * @description The zone ID of the secondary node.
     *
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneIdForFollower;

    /**
     * @description The zone ID of the logger instance.
     *
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $zoneIdForLog;
    protected $_name = [
        'DBInstanceId'                   => 'DBInstanceId',
        'dedicatedHostGroupId'           => 'DedicatedHostGroupId',
        'effectiveTime'                  => 'EffectiveTime',
        'ownerId'                        => 'OwnerId',
        'regionId'                       => 'RegionId',
        'resourceOwnerAccount'           => 'ResourceOwnerAccount',
        'resourceOwnerId'                => 'ResourceOwnerId',
        'specifiedTime'                  => 'SpecifiedTime',
        'targetDedicatedHostIdForMaster' => 'TargetDedicatedHostIdForMaster',
        'targetDedicatedHostIdForSlave'  => 'TargetDedicatedHostIdForSlave',
        'zoneIdForFollower'              => 'ZoneIdForFollower',
        'zoneIdForLog'                   => 'ZoneIdForLog',
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
        if (null !== $this->effectiveTime) {
            $res['EffectiveTime'] = $this->effectiveTime;
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
        if (null !== $this->specifiedTime) {
            $res['SpecifiedTime'] = $this->specifiedTime;
        }
        if (null !== $this->targetDedicatedHostIdForMaster) {
            $res['TargetDedicatedHostIdForMaster'] = $this->targetDedicatedHostIdForMaster;
        }
        if (null !== $this->targetDedicatedHostIdForSlave) {
            $res['TargetDedicatedHostIdForSlave'] = $this->targetDedicatedHostIdForSlave;
        }
        if (null !== $this->zoneIdForFollower) {
            $res['ZoneIdForFollower'] = $this->zoneIdForFollower;
        }
        if (null !== $this->zoneIdForLog) {
            $res['ZoneIdForLog'] = $this->zoneIdForLog;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MigrateDBInstanceRequest
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
        if (isset($map['EffectiveTime'])) {
            $model->effectiveTime = $map['EffectiveTime'];
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
        if (isset($map['SpecifiedTime'])) {
            $model->specifiedTime = $map['SpecifiedTime'];
        }
        if (isset($map['TargetDedicatedHostIdForMaster'])) {
            $model->targetDedicatedHostIdForMaster = $map['TargetDedicatedHostIdForMaster'];
        }
        if (isset($map['TargetDedicatedHostIdForSlave'])) {
            $model->targetDedicatedHostIdForSlave = $map['TargetDedicatedHostIdForSlave'];
        }
        if (isset($map['ZoneIdForFollower'])) {
            $model->zoneIdForFollower = $map['ZoneIdForFollower'];
        }
        if (isset($map['ZoneIdForLog'])) {
            $model->zoneIdForLog = $map['ZoneIdForLog'];
        }

        return $model;
    }
}
