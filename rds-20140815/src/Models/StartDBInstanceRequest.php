<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class StartDBInstanceRequest extends Model
{
    /**
     * @description The ID of the instance. You can call the [DescribeDBInstances](~~26232~~) operation to query the ID of the instance.
     *
     * @example rm-bp****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The policy based on which the system migrates the data of the instance. Valid values:
     *
     *   **0**: the default value. The system preferentially upgrades or downgrades the instance without a migration. If the resources on the host on which the instance resides are insufficient, the system migrates the instance to another suitable host.
     *   **1**: The system upgrades or downgrades the instance without a migration. If the upgrade or downgrade is not supported, the system reports an error.
     *   **2**: The system migrates the data of the instance from the host on which the instance resides to another host. You must also specify the **DedicatedHostGroupId**, **TargetDedicatedHostIdForMaster**, and **TargetDedicatedHostIdForSlave** parameters. If you set the DBInstanceTransType parameter to 2, you cannot migrate the data of the instance to the host on which the instance resides. If you migrate the data of the instance to the host on which the instance resides, the migration fails.
     *
     * > Only the instances that are created in dedicated clusters are supported.
     * @example 0
     *
     * @var int
     */
    public $DBInstanceTransType;

    /**
     * @description The ID of the dedicated cluster. You can call the [DescribeDedicatedHostGroups](~~141946~~) operation to query the ID of the dedicated cluster.
     *
     * > Only the instances that are created in dedicated clusters are supported.
     * @example dhg-39****
     *
     * @var string
     */
    public $dedicatedHostGroupId;

    /**
     * @description The time at which you want the change to take effect. Valid values:
     *
     *   **Immediate**: The change immediately takes effect.
     *   **MaintainTime**: The change takes effect during the maintenance window that you specified. For more information, see [ModifyDBInstanceMaintainTime](~~26249~~).
     *   **SpecificTime**: The change takes effect at a specified point in time.
     *
     * > Only the instances that are created in dedicated clusters are supported.
     * @example Immediate
     *
     * @var string
     */
    public $effectiveTime;

    /**
     * @description The database engine version of the instance.
     *
     * > Only the instances that are created in dedicated clusters are supported.
     * @example 5.7
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @var int
     */
    public $ownerId;

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

    /**
     * @description The custom time at which you want the change to take effect. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * >
     *
     *   This parameter must be specified when you set the **EffectiveTime** parameter to **Specified**.
     *
     *   Only the instances that are created in dedicated clusters are supported.
     *
     * @example 2019-10-21T10:00:00Z
     *
     * @var string
     */
    public $specifiedTime;

    /**
     * @description The storage capacity of the instance. Valid values: **5 to 2000**. Unit: GB. If you do not specify this parameter, the storage capacity of the instance remains unchanged.
     *
     * > Only the instances that are created in dedicated clusters are supported.
     * @example 1000
     *
     * @var int
     */
    public $storage;

    /**
     * @description The instance type of the instance.
     *
     * > Only the instances that are created in dedicated clusters are supported.
     * @example rds.ebmhfc6.20xlarge
     *
     * @var string
     */
    public $targetDBInstanceClass;

    /**
     * @description The ID of the host on which the logger instance is created.
     *
     * >
     *
     *   This parameter is invalid.
     *
     * @example dh-bp****
     *
     * @var string
     */
    public $targetDedicatedHostIdForLog;

    /**
     * @description The ID of the host on which the primary instance is created.
     *
     * >
     *
     *   This parameter must be specified when you set the **DBInstanceTransType** parameter to **2**.
     *
     *   Only the instances that are created in dedicated clusters are supported.
     *
     * @example dh-bp****
     *
     * @var string
     */
    public $targetDedicatedHostIdForMaster;

    /**
     * @description The ID of the host on which the secondary instance is created.
     *
     * >
     *
     *   This parameter must be specified when you set the **DBInstanceTransType** parameter to **2**.
     *
     *   Only the instances that are created in dedicated clusters are supported.
     *
     * @example dh-bp****
     *
     * @var string
     */
    public $targetDedicatedHostIdForSlave;

    /**
     * @description The ID of the vSwitch.
     *
     * > Only the instances that are created in dedicated clusters are supported.
     * @example vsw-****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The zone ID of the instance.
     *
     * > Only the instances that are created in dedicated clusters are supported.
     * @example cn-hangzhou-a
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'DBInstanceId'                   => 'DBInstanceId',
        'DBInstanceTransType'            => 'DBInstanceTransType',
        'dedicatedHostGroupId'           => 'DedicatedHostGroupId',
        'effectiveTime'                  => 'EffectiveTime',
        'engineVersion'                  => 'EngineVersion',
        'ownerId'                        => 'OwnerId',
        'regionId'                       => 'RegionId',
        'resourceOwnerAccount'           => 'ResourceOwnerAccount',
        'resourceOwnerId'                => 'ResourceOwnerId',
        'specifiedTime'                  => 'SpecifiedTime',
        'storage'                        => 'Storage',
        'targetDBInstanceClass'          => 'TargetDBInstanceClass',
        'targetDedicatedHostIdForLog'    => 'TargetDedicatedHostIdForLog',
        'targetDedicatedHostIdForMaster' => 'TargetDedicatedHostIdForMaster',
        'targetDedicatedHostIdForSlave'  => 'TargetDedicatedHostIdForSlave',
        'vSwitchId'                      => 'VSwitchId',
        'zoneId'                         => 'ZoneId',
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
        if (null !== $this->DBInstanceTransType) {
            $res['DBInstanceTransType'] = $this->DBInstanceTransType;
        }
        if (null !== $this->dedicatedHostGroupId) {
            $res['DedicatedHostGroupId'] = $this->dedicatedHostGroupId;
        }
        if (null !== $this->effectiveTime) {
            $res['EffectiveTime'] = $this->effectiveTime;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
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
        if (null !== $this->storage) {
            $res['Storage'] = $this->storage;
        }
        if (null !== $this->targetDBInstanceClass) {
            $res['TargetDBInstanceClass'] = $this->targetDBInstanceClass;
        }
        if (null !== $this->targetDedicatedHostIdForLog) {
            $res['TargetDedicatedHostIdForLog'] = $this->targetDedicatedHostIdForLog;
        }
        if (null !== $this->targetDedicatedHostIdForMaster) {
            $res['TargetDedicatedHostIdForMaster'] = $this->targetDedicatedHostIdForMaster;
        }
        if (null !== $this->targetDedicatedHostIdForSlave) {
            $res['TargetDedicatedHostIdForSlave'] = $this->targetDedicatedHostIdForSlave;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartDBInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBInstanceTransType'])) {
            $model->DBInstanceTransType = $map['DBInstanceTransType'];
        }
        if (isset($map['DedicatedHostGroupId'])) {
            $model->dedicatedHostGroupId = $map['DedicatedHostGroupId'];
        }
        if (isset($map['EffectiveTime'])) {
            $model->effectiveTime = $map['EffectiveTime'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
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
        if (isset($map['Storage'])) {
            $model->storage = $map['Storage'];
        }
        if (isset($map['TargetDBInstanceClass'])) {
            $model->targetDBInstanceClass = $map['TargetDBInstanceClass'];
        }
        if (isset($map['TargetDedicatedHostIdForLog'])) {
            $model->targetDedicatedHostIdForLog = $map['TargetDedicatedHostIdForLog'];
        }
        if (isset($map['TargetDedicatedHostIdForMaster'])) {
            $model->targetDedicatedHostIdForMaster = $map['TargetDedicatedHostIdForMaster'];
        }
        if (isset($map['TargetDedicatedHostIdForSlave'])) {
            $model->targetDedicatedHostIdForSlave = $map['TargetDedicatedHostIdForSlave'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
