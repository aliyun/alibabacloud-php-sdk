<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesResponseBody\items;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesResponseBody\items\DBInstance\readOnlyDBInstanceIds;
use AlibabaCloud\Tea\Model;

class DBInstance extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $DBInstanceType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $destroyTime;

    /**
     * @var string
     */
    public $DBInstanceStatus;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $DBInstanceNetType;

    /**
     * @var string
     */
    public $connectionMode;

    /**
     * @var string
     */
    public $lockMode;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $DBInstanceStorageType;

    /**
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @var string
     */
    public $vpcCloudInstanceId;

    /**
     * @var string
     */
    public $lockReason;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var bool
     */
    public $mutriORsignle;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $engineVersion;

    /**
     * @var string
     */
    public $guardDBInstanceId;

    /**
     * @var string
     */
    public $tempDBInstanceId;

    /**
     * @var string
     */
    public $masterInstanceId;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $autoUpgradeMinorVersion;

    /**
     * @var string
     */
    public $dedicatedHostGroupId;

    /**
     * @var string
     */
    public $dedicatedHostIdForMaster;

    /**
     * @var string
     */
    public $dedicatedHostIdForSlave;

    /**
     * @var string
     */
    public $dedicatedHostIdForLog;

    /**
     * @var string
     */
    public $dedicatedHostNameForMaster;

    /**
     * @var string
     */
    public $dedicatedHostNameForSlave;

    /**
     * @var string
     */
    public $dedicatedHostNameForLog;

    /**
     * @var string
     */
    public $dedicatedHostZoneIdForMaster;

    /**
     * @var string
     */
    public $dedicatedHostZoneIdForSlave;

    /**
     * @var string
     */
    public $dedicatedHostZoneIdForLog;

    /**
     * @var string
     */
    public $vpcName;

    /**
     * @var string
     */
    public $dedicatedHostGroupName;

    /**
     * @var readOnlyDBInstanceIds
     */
    public $readOnlyDBInstanceIds;
    protected $_name = [
        'DBInstanceId'                 => 'DBInstanceId',
        'DBInstanceDescription'        => 'DBInstanceDescription',
        'payType'                      => 'PayType',
        'DBInstanceType'               => 'DBInstanceType',
        'regionId'                     => 'RegionId',
        'expireTime'                   => 'ExpireTime',
        'destroyTime'                  => 'DestroyTime',
        'DBInstanceStatus'             => 'DBInstanceStatus',
        'engine'                       => 'Engine',
        'DBInstanceNetType'            => 'DBInstanceNetType',
        'connectionMode'               => 'ConnectionMode',
        'lockMode'                     => 'LockMode',
        'category'                     => 'Category',
        'DBInstanceStorageType'        => 'DBInstanceStorageType',
        'DBInstanceClass'              => 'DBInstanceClass',
        'instanceNetworkType'          => 'InstanceNetworkType',
        'vpcCloudInstanceId'           => 'VpcCloudInstanceId',
        'lockReason'                   => 'LockReason',
        'zoneId'                       => 'ZoneId',
        'mutriORsignle'                => 'MutriORsignle',
        'createTime'                   => 'CreateTime',
        'engineVersion'                => 'EngineVersion',
        'guardDBInstanceId'            => 'GuardDBInstanceId',
        'tempDBInstanceId'             => 'TempDBInstanceId',
        'masterInstanceId'             => 'MasterInstanceId',
        'vpcId'                        => 'VpcId',
        'vSwitchId'                    => 'VSwitchId',
        'resourceGroupId'              => 'ResourceGroupId',
        'autoUpgradeMinorVersion'      => 'AutoUpgradeMinorVersion',
        'dedicatedHostGroupId'         => 'DedicatedHostGroupId',
        'dedicatedHostIdForMaster'     => 'DedicatedHostIdForMaster',
        'dedicatedHostIdForSlave'      => 'DedicatedHostIdForSlave',
        'dedicatedHostIdForLog'        => 'DedicatedHostIdForLog',
        'dedicatedHostNameForMaster'   => 'DedicatedHostNameForMaster',
        'dedicatedHostNameForSlave'    => 'DedicatedHostNameForSlave',
        'dedicatedHostNameForLog'      => 'DedicatedHostNameForLog',
        'dedicatedHostZoneIdForMaster' => 'DedicatedHostZoneIdForMaster',
        'dedicatedHostZoneIdForSlave'  => 'DedicatedHostZoneIdForSlave',
        'dedicatedHostZoneIdForLog'    => 'DedicatedHostZoneIdForLog',
        'vpcName'                      => 'VpcName',
        'dedicatedHostGroupName'       => 'DedicatedHostGroupName',
        'readOnlyDBInstanceIds'        => 'ReadOnlyDBInstanceIds',
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
        if (null !== $this->DBInstanceDescription) {
            $res['DBInstanceDescription'] = $this->DBInstanceDescription;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->DBInstanceType) {
            $res['DBInstanceType'] = $this->DBInstanceType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->destroyTime) {
            $res['DestroyTime'] = $this->destroyTime;
        }
        if (null !== $this->DBInstanceStatus) {
            $res['DBInstanceStatus'] = $this->DBInstanceStatus;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->DBInstanceNetType) {
            $res['DBInstanceNetType'] = $this->DBInstanceNetType;
        }
        if (null !== $this->connectionMode) {
            $res['ConnectionMode'] = $this->connectionMode;
        }
        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->DBInstanceStorageType) {
            $res['DBInstanceStorageType'] = $this->DBInstanceStorageType;
        }
        if (null !== $this->DBInstanceClass) {
            $res['DBInstanceClass'] = $this->DBInstanceClass;
        }
        if (null !== $this->instanceNetworkType) {
            $res['InstanceNetworkType'] = $this->instanceNetworkType;
        }
        if (null !== $this->vpcCloudInstanceId) {
            $res['VpcCloudInstanceId'] = $this->vpcCloudInstanceId;
        }
        if (null !== $this->lockReason) {
            $res['LockReason'] = $this->lockReason;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->mutriORsignle) {
            $res['MutriORsignle'] = $this->mutriORsignle;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->guardDBInstanceId) {
            $res['GuardDBInstanceId'] = $this->guardDBInstanceId;
        }
        if (null !== $this->tempDBInstanceId) {
            $res['TempDBInstanceId'] = $this->tempDBInstanceId;
        }
        if (null !== $this->masterInstanceId) {
            $res['MasterInstanceId'] = $this->masterInstanceId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->autoUpgradeMinorVersion) {
            $res['AutoUpgradeMinorVersion'] = $this->autoUpgradeMinorVersion;
        }
        if (null !== $this->dedicatedHostGroupId) {
            $res['DedicatedHostGroupId'] = $this->dedicatedHostGroupId;
        }
        if (null !== $this->dedicatedHostIdForMaster) {
            $res['DedicatedHostIdForMaster'] = $this->dedicatedHostIdForMaster;
        }
        if (null !== $this->dedicatedHostIdForSlave) {
            $res['DedicatedHostIdForSlave'] = $this->dedicatedHostIdForSlave;
        }
        if (null !== $this->dedicatedHostIdForLog) {
            $res['DedicatedHostIdForLog'] = $this->dedicatedHostIdForLog;
        }
        if (null !== $this->dedicatedHostNameForMaster) {
            $res['DedicatedHostNameForMaster'] = $this->dedicatedHostNameForMaster;
        }
        if (null !== $this->dedicatedHostNameForSlave) {
            $res['DedicatedHostNameForSlave'] = $this->dedicatedHostNameForSlave;
        }
        if (null !== $this->dedicatedHostNameForLog) {
            $res['DedicatedHostNameForLog'] = $this->dedicatedHostNameForLog;
        }
        if (null !== $this->dedicatedHostZoneIdForMaster) {
            $res['DedicatedHostZoneIdForMaster'] = $this->dedicatedHostZoneIdForMaster;
        }
        if (null !== $this->dedicatedHostZoneIdForSlave) {
            $res['DedicatedHostZoneIdForSlave'] = $this->dedicatedHostZoneIdForSlave;
        }
        if (null !== $this->dedicatedHostZoneIdForLog) {
            $res['DedicatedHostZoneIdForLog'] = $this->dedicatedHostZoneIdForLog;
        }
        if (null !== $this->vpcName) {
            $res['VpcName'] = $this->vpcName;
        }
        if (null !== $this->dedicatedHostGroupName) {
            $res['DedicatedHostGroupName'] = $this->dedicatedHostGroupName;
        }
        if (null !== $this->readOnlyDBInstanceIds) {
            $res['ReadOnlyDBInstanceIds'] = null !== $this->readOnlyDBInstanceIds ? $this->readOnlyDBInstanceIds->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBInstanceDescription'])) {
            $model->DBInstanceDescription = $map['DBInstanceDescription'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['DBInstanceType'])) {
            $model->DBInstanceType = $map['DBInstanceType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['DestroyTime'])) {
            $model->destroyTime = $map['DestroyTime'];
        }
        if (isset($map['DBInstanceStatus'])) {
            $model->DBInstanceStatus = $map['DBInstanceStatus'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['DBInstanceNetType'])) {
            $model->DBInstanceNetType = $map['DBInstanceNetType'];
        }
        if (isset($map['ConnectionMode'])) {
            $model->connectionMode = $map['ConnectionMode'];
        }
        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['DBInstanceStorageType'])) {
            $model->DBInstanceStorageType = $map['DBInstanceStorageType'];
        }
        if (isset($map['DBInstanceClass'])) {
            $model->DBInstanceClass = $map['DBInstanceClass'];
        }
        if (isset($map['InstanceNetworkType'])) {
            $model->instanceNetworkType = $map['InstanceNetworkType'];
        }
        if (isset($map['VpcCloudInstanceId'])) {
            $model->vpcCloudInstanceId = $map['VpcCloudInstanceId'];
        }
        if (isset($map['LockReason'])) {
            $model->lockReason = $map['LockReason'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['MutriORsignle'])) {
            $model->mutriORsignle = $map['MutriORsignle'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['GuardDBInstanceId'])) {
            $model->guardDBInstanceId = $map['GuardDBInstanceId'];
        }
        if (isset($map['TempDBInstanceId'])) {
            $model->tempDBInstanceId = $map['TempDBInstanceId'];
        }
        if (isset($map['MasterInstanceId'])) {
            $model->masterInstanceId = $map['MasterInstanceId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['AutoUpgradeMinorVersion'])) {
            $model->autoUpgradeMinorVersion = $map['AutoUpgradeMinorVersion'];
        }
        if (isset($map['DedicatedHostGroupId'])) {
            $model->dedicatedHostGroupId = $map['DedicatedHostGroupId'];
        }
        if (isset($map['DedicatedHostIdForMaster'])) {
            $model->dedicatedHostIdForMaster = $map['DedicatedHostIdForMaster'];
        }
        if (isset($map['DedicatedHostIdForSlave'])) {
            $model->dedicatedHostIdForSlave = $map['DedicatedHostIdForSlave'];
        }
        if (isset($map['DedicatedHostIdForLog'])) {
            $model->dedicatedHostIdForLog = $map['DedicatedHostIdForLog'];
        }
        if (isset($map['DedicatedHostNameForMaster'])) {
            $model->dedicatedHostNameForMaster = $map['DedicatedHostNameForMaster'];
        }
        if (isset($map['DedicatedHostNameForSlave'])) {
            $model->dedicatedHostNameForSlave = $map['DedicatedHostNameForSlave'];
        }
        if (isset($map['DedicatedHostNameForLog'])) {
            $model->dedicatedHostNameForLog = $map['DedicatedHostNameForLog'];
        }
        if (isset($map['DedicatedHostZoneIdForMaster'])) {
            $model->dedicatedHostZoneIdForMaster = $map['DedicatedHostZoneIdForMaster'];
        }
        if (isset($map['DedicatedHostZoneIdForSlave'])) {
            $model->dedicatedHostZoneIdForSlave = $map['DedicatedHostZoneIdForSlave'];
        }
        if (isset($map['DedicatedHostZoneIdForLog'])) {
            $model->dedicatedHostZoneIdForLog = $map['DedicatedHostZoneIdForLog'];
        }
        if (isset($map['VpcName'])) {
            $model->vpcName = $map['VpcName'];
        }
        if (isset($map['DedicatedHostGroupName'])) {
            $model->dedicatedHostGroupName = $map['DedicatedHostGroupName'];
        }
        if (isset($map['ReadOnlyDBInstanceIds'])) {
            $model->readOnlyDBInstanceIds = readOnlyDBInstanceIds::fromMap($map['ReadOnlyDBInstanceIds']);
        }

        return $model;
    }
}
