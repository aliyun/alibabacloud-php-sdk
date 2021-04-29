<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class MigrateDBInstanceRequest extends Model
{
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
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $dedicatedHostGroupId;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $targetDedicatedHostIdForMaster;

    /**
     * @var string
     */
    public $targetDedicatedHostIdForSlave;

    /**
     * @var string
     */
    public $effectiveTime;

    /**
     * @var string
     */
    public $specifiedTime;

    /**
     * @var string
     */
    public $zoneIdForLog;

    /**
     * @var string
     */
    public $zoneIdForFollower;
    protected $_name = [
        'ownerId'                        => 'OwnerId',
        'resourceOwnerAccount'           => 'ResourceOwnerAccount',
        'resourceOwnerId'                => 'ResourceOwnerId',
        'regionId'                       => 'RegionId',
        'dedicatedHostGroupId'           => 'DedicatedHostGroupId',
        'DBInstanceId'                   => 'DBInstanceId',
        'targetDedicatedHostIdForMaster' => 'TargetDedicatedHostIdForMaster',
        'targetDedicatedHostIdForSlave'  => 'TargetDedicatedHostIdForSlave',
        'effectiveTime'                  => 'EffectiveTime',
        'specifiedTime'                  => 'SpecifiedTime',
        'zoneIdForLog'                   => 'ZoneIdForLog',
        'zoneIdForFollower'              => 'ZoneIdForFollower',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->dedicatedHostGroupId) {
            $res['DedicatedHostGroupId'] = $this->dedicatedHostGroupId;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->targetDedicatedHostIdForMaster) {
            $res['TargetDedicatedHostIdForMaster'] = $this->targetDedicatedHostIdForMaster;
        }
        if (null !== $this->targetDedicatedHostIdForSlave) {
            $res['TargetDedicatedHostIdForSlave'] = $this->targetDedicatedHostIdForSlave;
        }
        if (null !== $this->effectiveTime) {
            $res['EffectiveTime'] = $this->effectiveTime;
        }
        if (null !== $this->specifiedTime) {
            $res['SpecifiedTime'] = $this->specifiedTime;
        }
        if (null !== $this->zoneIdForLog) {
            $res['ZoneIdForLog'] = $this->zoneIdForLog;
        }
        if (null !== $this->zoneIdForFollower) {
            $res['ZoneIdForFollower'] = $this->zoneIdForFollower;
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
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['DedicatedHostGroupId'])) {
            $model->dedicatedHostGroupId = $map['DedicatedHostGroupId'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['TargetDedicatedHostIdForMaster'])) {
            $model->targetDedicatedHostIdForMaster = $map['TargetDedicatedHostIdForMaster'];
        }
        if (isset($map['TargetDedicatedHostIdForSlave'])) {
            $model->targetDedicatedHostIdForSlave = $map['TargetDedicatedHostIdForSlave'];
        }
        if (isset($map['EffectiveTime'])) {
            $model->effectiveTime = $map['EffectiveTime'];
        }
        if (isset($map['SpecifiedTime'])) {
            $model->specifiedTime = $map['SpecifiedTime'];
        }
        if (isset($map['ZoneIdForLog'])) {
            $model->zoneIdForLog = $map['ZoneIdForLog'];
        }
        if (isset($map['ZoneIdForFollower'])) {
            $model->zoneIdForFollower = $map['ZoneIdForFollower'];
        }

        return $model;
    }
}
