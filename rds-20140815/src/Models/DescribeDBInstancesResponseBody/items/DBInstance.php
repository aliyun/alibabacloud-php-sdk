<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesResponseBody\items;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesResponseBody\items\DBInstance\readOnlyDBInstanceIds;
use AlibabaCloud\Tea\Model;

class DBInstance extends Model
{
    /**
     * @description Indicates whether the buffer pool extension (BPE) feature is enabled. Valid values:
     *
     *   **1**
     *   **0**
     *
     * @example 0
     *
     * @var string
     */
    public $bpeEnabled;

    /**
     * @description Indicates whether the I/O burst feature is enabled. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $burstingEnabled;

    /**
     * @description The RDS edition of the instance. Valid values:
     *
     *   **Basic**: RDS Basic Edition
     *   **HighAvailability**: RDS High-availability Edition
     *   **Finance**: RDS Enterprise Edition
     *
     * >  This parameter is returned only when the **InstanceLevel** parameter is set to **1**.
     * @example Basic
     *
     * @var string
     */
    public $category;

    /**
     * @description A reserved parameter.
     *
     * @example false
     *
     * @var bool
     */
    public $coldDataEnabled;

    /**
     * @description The connection mode of the instance. Valid values:
     *
     *   **Standard**: standard mode
     *   **Safe**: database proxy mode
     *
     * @example Standard
     *
     * @var string
     */
    public $connectionMode;

    /**
     * @description The endpoint of the instance.
     *
     * @example rm-uf6wjk5xxxxxxx.mysql.rds.aliyuncs.com
     *
     * @var string
     */
    public $connectionString;

    /**
     * @description The creation time of the instance. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2018-11-05T11:26:02Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $DBInstanceCPU;

    /**
     * @description The instance type of the instance. For information, see [Primary ApsaraDB RDS instance types](~~26312~~).
     *
     * @example rds.mys2.small
     *
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @description The instance description.
     *
     * @example Test database
     *
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @description The instance ID.
     *
     * @example rm-uf6wjk5xxxxxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var int
     */
    public $DBInstanceMemory;

    /**
     * @description The type of the network connection to the instance. Valid values:
     *
     *   **Internet**
     *   **Intranet**
     *
     * @example Internet
     *
     * @var string
     */
    public $DBInstanceNetType;

    /**
     * @description The instance status. For more information, see [Instance statuses](~~26315~~).
     *
     * @example Running
     *
     * @var string
     */
    public $DBInstanceStatus;

    /**
     * @description The storage type of the instance.
     *
     * @example ModuleList.4.ModuleCode
     *
     * @var string
     */
    public $DBInstanceStorageType;

    /**
     * @description The role of the instance. Valid values:
     *
     *   **Primary**: primary instance
     *   **Readonly**: read-only instance
     *   **Guard**: disaster recovery instance
     *   **Temp**: temporary instance
     *
     * @example Primary
     *
     * @var string
     */
    public $DBInstanceType;

    /**
     * @description The ID of the dedicated cluster to which the instances belong.
     *
     * @example dhg-7a9xxxxxxxx
     *
     * @var string
     */
    public $dedicatedHostGroupId;

    /**
     * @description The name of the dedicated cluster to which the instance belongs.
     *
     * @example testhostgroup
     *
     * @var string
     */
    public $dedicatedHostGroupName;

    /**
     * @description The ID of the host on which the logger instance resides.
     *
     * @example dh-bpxxxx
     *
     * @var string
     */
    public $dedicatedHostIdForLog;

    /**
     * @description The ID of the host on which the primary instance resides.
     *
     * @example dh-bpxxxx
     *
     * @var string
     */
    public $dedicatedHostIdForMaster;

    /**
     * @description The ID of the host on which the secondary instance resides.
     *
     * @example dh-bpxxxx
     *
     * @var string
     */
    public $dedicatedHostIdForSlave;

    /**
     * @description The name of the host on which the logger instance resides.
     *
     * @example testlog
     *
     * @var string
     */
    public $dedicatedHostNameForLog;

    /**
     * @description The name of the host on which the primary instance resides.
     *
     * @example testmaster
     *
     * @var string
     */
    public $dedicatedHostNameForMaster;

    /**
     * @description The name of the host on which the secondary instance resides.
     *
     * @example testslave
     *
     * @var string
     */
    public $dedicatedHostNameForSlave;

    /**
     * @description The zone ID of the host on which the logger instance resides.
     *
     * @example cn-hangzhou-b
     *
     * @var string
     */
    public $dedicatedHostZoneIdForLog;

    /**
     * @description The zone ID of the host on which the primary instance resides.
     *
     * @example cn-hangzhou-c
     *
     * @var string
     */
    public $dedicatedHostZoneIdForMaster;

    /**
     * @description The zone ID of the host on which the secondary instance resides.
     *
     * @example cn-hangzhou-d
     *
     * @var string
     */
    public $dedicatedHostZoneIdForSlave;

    /**
     * @description Indicates whether the release protection feature is enabled for the instance. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $deletionProtection;

    /**
     * @description The time when the instance was destroyed. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2018-11-05T11:26:02Z
     *
     * @var string
     */
    public $destroyTime;

    /**
     * @description The database engine of the instance.
     *
     * @example MySQL
     *
     * @var string
     */
    public $engine;

    /**
     * @description The database engine version.
     *
     * @example 5.7
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description The expiration time of the instance. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * >  Pay-as-you-go instances never expire.
     * @example 2019-02-27T16:00:00Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description The name of the dedicated cluster to which the instance belongs. This parameter is returned only when the instance is created in an ApsaraDB MyBase cluster that runs MySQL on Standard Edition.
     *
     * @example TestGroup
     *
     * @var string
     */
    public $generalGroupName;

    /**
     * @description The ID of the disaster recovery instance. This parameter is returned only when the instance is a primary instance and has a disaster recovery instance attached.
     *
     * @example rm-uf64zsuxxxxxxxxxx
     *
     * @var string
     */
    public $guardDBInstanceId;

    /**
     * @description The network type of the instance. Valid values:
     *
     *   **Classic**
     *   **VPC**
     *
     * @example Classic
     *
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @description Whether IO acceleration is enabled. The value has the following meanings:
     *
     * - 0: not enabled
     * @example 0
     *
     * @var string
     */
    public $ioAccelerationEnabled;

    /**
     * @description The lock mode of the instance. Valid values:
     *
     *   **Unlock**: The instance is not locked.
     *   **ManualLock**: The instance is manually locked.
     *   **LockByExpiration**: The instance is automatically locked due to instance expiration.
     *   **LockByRestoration**: The instance is automatically locked before the instance is rolled back.
     *   **LockByDiskQuota**: The instance is automatically locked due to exhausted storage capacity.
     *   **Released**: The instance is released. After an instance is released, the instance cannot be unlocked. You can only restore the backup data of the instance to a new instance. This process requires a long period of time.
     *
     * @example Unlock
     *
     * @var string
     */
    public $lockMode;

    /**
     * @description The reason why the instance was locked.
     *
     * @example instance_expired
     *
     * @var string
     */
    public $lockReason;

    /**
     * @description The ID of the primary instance. If this parameter is null, the instance is a primary instance.
     *
     * @example rm-uf6wjk5xxxxxxxxxx
     *
     * @var string
     */
    public $masterInstanceId;

    /**
     * @description Indicates whether the multi-zone deployment method is used for the instance. Valid values:
     *
     *   **true**
     *   **false**
     *
     * >  If the multi-zone deployment method is used for the instance, the zone ID of the instance contains MAZ. Example: `cn-hangzhou-MAZ10(h,i)`.
     * @example true
     *
     * @var bool
     */
    public $mutriORsignle;

    /**
     * @description The billing method of the instance. Valid values:
     *
     *   **Postpaid**: pay-as-you-go
     *   **Prepaid**: subscription
     *
     * @example Postpaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description The IDs of the read-only instances that are attached to the primary instance. This parameter is returned only when the instance is a primary instance.
     *
     * @var readOnlyDBInstanceIds
     */
    public $readOnlyDBInstanceIds;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resource group ID.
     *
     * @example rg-acfmyxxxxxxx
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Indicates whether the instance supports weight-based switchovers for high availability. This parameter is returned only when the instance is created in an ApsaraDB MyBase cluster that runs MySQL on Standard Edition. Valid values:
     *
     *   **100**: The instance supports weight-based switchovers for high availability.
     *   **0**: The instance does not support weight-based switchovers for high availability.
     *
     * @example 100
     *
     * @var int
     */
    public $switchWeight;

    /**
     * @description The ID of the temporary instance. This parameter is returned only when the instance is a primary instance and has a temporary instance attached.
     *
     * @example rm-uf64zsuxxxxxxxxxx
     *
     * @var string
     */
    public $tempDBInstanceId;

    /**
     * @description The information about the exception that is detected on the instance. This parameter is returned only when the instance is created in an ApsaraDB MyBase cluster that runs MySQL on Standard Edition.
     *
     * @example Run as expected.
     *
     * @var string
     */
    public $tips;

    /**
     * @description The severity of the exception that is detected on the instance. This parameter is returned only when the instance is created in an ApsaraDB MyBase cluster that runs MySQL on Standard Edition. Valid values:
     *
     *   **1**: The instance is normal.
     *   **2**: The specifications of the read-only instances do not match the specifications of the primary instance, and instance performance may be affected. You must adjust the specifications of these instances based on your business requirements.
     *
     * @example 1
     *
     * @var int
     */
    public $tipsLevel;

    /**
     * @description The vSwitch ID.
     *
     * @example vsw-uf6adz52c2pxxxxxxx
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the instance. This parameter is returned only when the instance resides in a VPC.
     *
     * @example rm-uf6wjk5xxxxxxx
     *
     * @var string
     */
    public $vpcCloudInstanceId;

    /**
     * @description The virtual private cloud (VPC) ID.
     *
     * @example vpc-uf6f7l4fg90xxxxxxx
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The VPC name.
     *
     * @example test-huadong
     *
     * @var string
     */
    public $vpcName;

    /**
     * @description The zone ID.
     *
     * @example cn-hangzhou-a
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'bpeEnabled'                   => 'BpeEnabled',
        'burstingEnabled'              => 'BurstingEnabled',
        'category'                     => 'Category',
        'coldDataEnabled'              => 'ColdDataEnabled',
        'connectionMode'               => 'ConnectionMode',
        'connectionString'             => 'ConnectionString',
        'createTime'                   => 'CreateTime',
        'DBInstanceCPU'                => 'DBInstanceCPU',
        'DBInstanceClass'              => 'DBInstanceClass',
        'DBInstanceDescription'        => 'DBInstanceDescription',
        'DBInstanceId'                 => 'DBInstanceId',
        'DBInstanceMemory'             => 'DBInstanceMemory',
        'DBInstanceNetType'            => 'DBInstanceNetType',
        'DBInstanceStatus'             => 'DBInstanceStatus',
        'DBInstanceStorageType'        => 'DBInstanceStorageType',
        'DBInstanceType'               => 'DBInstanceType',
        'dedicatedHostGroupId'         => 'DedicatedHostGroupId',
        'dedicatedHostGroupName'       => 'DedicatedHostGroupName',
        'dedicatedHostIdForLog'        => 'DedicatedHostIdForLog',
        'dedicatedHostIdForMaster'     => 'DedicatedHostIdForMaster',
        'dedicatedHostIdForSlave'      => 'DedicatedHostIdForSlave',
        'dedicatedHostNameForLog'      => 'DedicatedHostNameForLog',
        'dedicatedHostNameForMaster'   => 'DedicatedHostNameForMaster',
        'dedicatedHostNameForSlave'    => 'DedicatedHostNameForSlave',
        'dedicatedHostZoneIdForLog'    => 'DedicatedHostZoneIdForLog',
        'dedicatedHostZoneIdForMaster' => 'DedicatedHostZoneIdForMaster',
        'dedicatedHostZoneIdForSlave'  => 'DedicatedHostZoneIdForSlave',
        'deletionProtection'           => 'DeletionProtection',
        'destroyTime'                  => 'DestroyTime',
        'engine'                       => 'Engine',
        'engineVersion'                => 'EngineVersion',
        'expireTime'                   => 'ExpireTime',
        'generalGroupName'             => 'GeneralGroupName',
        'guardDBInstanceId'            => 'GuardDBInstanceId',
        'instanceNetworkType'          => 'InstanceNetworkType',
        'ioAccelerationEnabled'        => 'IoAccelerationEnabled',
        'lockMode'                     => 'LockMode',
        'lockReason'                   => 'LockReason',
        'masterInstanceId'             => 'MasterInstanceId',
        'mutriORsignle'                => 'MutriORsignle',
        'payType'                      => 'PayType',
        'readOnlyDBInstanceIds'        => 'ReadOnlyDBInstanceIds',
        'regionId'                     => 'RegionId',
        'resourceGroupId'              => 'ResourceGroupId',
        'switchWeight'                 => 'SwitchWeight',
        'tempDBInstanceId'             => 'TempDBInstanceId',
        'tips'                         => 'Tips',
        'tipsLevel'                    => 'TipsLevel',
        'vSwitchId'                    => 'VSwitchId',
        'vpcCloudInstanceId'           => 'VpcCloudInstanceId',
        'vpcId'                        => 'VpcId',
        'vpcName'                      => 'VpcName',
        'zoneId'                       => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bpeEnabled) {
            $res['BpeEnabled'] = $this->bpeEnabled;
        }
        if (null !== $this->burstingEnabled) {
            $res['BurstingEnabled'] = $this->burstingEnabled;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->coldDataEnabled) {
            $res['ColdDataEnabled'] = $this->coldDataEnabled;
        }
        if (null !== $this->connectionMode) {
            $res['ConnectionMode'] = $this->connectionMode;
        }
        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->DBInstanceCPU) {
            $res['DBInstanceCPU'] = $this->DBInstanceCPU;
        }
        if (null !== $this->DBInstanceClass) {
            $res['DBInstanceClass'] = $this->DBInstanceClass;
        }
        if (null !== $this->DBInstanceDescription) {
            $res['DBInstanceDescription'] = $this->DBInstanceDescription;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBInstanceMemory) {
            $res['DBInstanceMemory'] = $this->DBInstanceMemory;
        }
        if (null !== $this->DBInstanceNetType) {
            $res['DBInstanceNetType'] = $this->DBInstanceNetType;
        }
        if (null !== $this->DBInstanceStatus) {
            $res['DBInstanceStatus'] = $this->DBInstanceStatus;
        }
        if (null !== $this->DBInstanceStorageType) {
            $res['DBInstanceStorageType'] = $this->DBInstanceStorageType;
        }
        if (null !== $this->DBInstanceType) {
            $res['DBInstanceType'] = $this->DBInstanceType;
        }
        if (null !== $this->dedicatedHostGroupId) {
            $res['DedicatedHostGroupId'] = $this->dedicatedHostGroupId;
        }
        if (null !== $this->dedicatedHostGroupName) {
            $res['DedicatedHostGroupName'] = $this->dedicatedHostGroupName;
        }
        if (null !== $this->dedicatedHostIdForLog) {
            $res['DedicatedHostIdForLog'] = $this->dedicatedHostIdForLog;
        }
        if (null !== $this->dedicatedHostIdForMaster) {
            $res['DedicatedHostIdForMaster'] = $this->dedicatedHostIdForMaster;
        }
        if (null !== $this->dedicatedHostIdForSlave) {
            $res['DedicatedHostIdForSlave'] = $this->dedicatedHostIdForSlave;
        }
        if (null !== $this->dedicatedHostNameForLog) {
            $res['DedicatedHostNameForLog'] = $this->dedicatedHostNameForLog;
        }
        if (null !== $this->dedicatedHostNameForMaster) {
            $res['DedicatedHostNameForMaster'] = $this->dedicatedHostNameForMaster;
        }
        if (null !== $this->dedicatedHostNameForSlave) {
            $res['DedicatedHostNameForSlave'] = $this->dedicatedHostNameForSlave;
        }
        if (null !== $this->dedicatedHostZoneIdForLog) {
            $res['DedicatedHostZoneIdForLog'] = $this->dedicatedHostZoneIdForLog;
        }
        if (null !== $this->dedicatedHostZoneIdForMaster) {
            $res['DedicatedHostZoneIdForMaster'] = $this->dedicatedHostZoneIdForMaster;
        }
        if (null !== $this->dedicatedHostZoneIdForSlave) {
            $res['DedicatedHostZoneIdForSlave'] = $this->dedicatedHostZoneIdForSlave;
        }
        if (null !== $this->deletionProtection) {
            $res['DeletionProtection'] = $this->deletionProtection;
        }
        if (null !== $this->destroyTime) {
            $res['DestroyTime'] = $this->destroyTime;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->generalGroupName) {
            $res['GeneralGroupName'] = $this->generalGroupName;
        }
        if (null !== $this->guardDBInstanceId) {
            $res['GuardDBInstanceId'] = $this->guardDBInstanceId;
        }
        if (null !== $this->instanceNetworkType) {
            $res['InstanceNetworkType'] = $this->instanceNetworkType;
        }
        if (null !== $this->ioAccelerationEnabled) {
            $res['IoAccelerationEnabled'] = $this->ioAccelerationEnabled;
        }
        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }
        if (null !== $this->lockReason) {
            $res['LockReason'] = $this->lockReason;
        }
        if (null !== $this->masterInstanceId) {
            $res['MasterInstanceId'] = $this->masterInstanceId;
        }
        if (null !== $this->mutriORsignle) {
            $res['MutriORsignle'] = $this->mutriORsignle;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->readOnlyDBInstanceIds) {
            $res['ReadOnlyDBInstanceIds'] = null !== $this->readOnlyDBInstanceIds ? $this->readOnlyDBInstanceIds->toMap() : null;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->switchWeight) {
            $res['SwitchWeight'] = $this->switchWeight;
        }
        if (null !== $this->tempDBInstanceId) {
            $res['TempDBInstanceId'] = $this->tempDBInstanceId;
        }
        if (null !== $this->tips) {
            $res['Tips'] = $this->tips;
        }
        if (null !== $this->tipsLevel) {
            $res['TipsLevel'] = $this->tipsLevel;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcCloudInstanceId) {
            $res['VpcCloudInstanceId'] = $this->vpcCloudInstanceId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vpcName) {
            $res['VpcName'] = $this->vpcName;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['BpeEnabled'])) {
            $model->bpeEnabled = $map['BpeEnabled'];
        }
        if (isset($map['BurstingEnabled'])) {
            $model->burstingEnabled = $map['BurstingEnabled'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['ColdDataEnabled'])) {
            $model->coldDataEnabled = $map['ColdDataEnabled'];
        }
        if (isset($map['ConnectionMode'])) {
            $model->connectionMode = $map['ConnectionMode'];
        }
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DBInstanceCPU'])) {
            $model->DBInstanceCPU = $map['DBInstanceCPU'];
        }
        if (isset($map['DBInstanceClass'])) {
            $model->DBInstanceClass = $map['DBInstanceClass'];
        }
        if (isset($map['DBInstanceDescription'])) {
            $model->DBInstanceDescription = $map['DBInstanceDescription'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBInstanceMemory'])) {
            $model->DBInstanceMemory = $map['DBInstanceMemory'];
        }
        if (isset($map['DBInstanceNetType'])) {
            $model->DBInstanceNetType = $map['DBInstanceNetType'];
        }
        if (isset($map['DBInstanceStatus'])) {
            $model->DBInstanceStatus = $map['DBInstanceStatus'];
        }
        if (isset($map['DBInstanceStorageType'])) {
            $model->DBInstanceStorageType = $map['DBInstanceStorageType'];
        }
        if (isset($map['DBInstanceType'])) {
            $model->DBInstanceType = $map['DBInstanceType'];
        }
        if (isset($map['DedicatedHostGroupId'])) {
            $model->dedicatedHostGroupId = $map['DedicatedHostGroupId'];
        }
        if (isset($map['DedicatedHostGroupName'])) {
            $model->dedicatedHostGroupName = $map['DedicatedHostGroupName'];
        }
        if (isset($map['DedicatedHostIdForLog'])) {
            $model->dedicatedHostIdForLog = $map['DedicatedHostIdForLog'];
        }
        if (isset($map['DedicatedHostIdForMaster'])) {
            $model->dedicatedHostIdForMaster = $map['DedicatedHostIdForMaster'];
        }
        if (isset($map['DedicatedHostIdForSlave'])) {
            $model->dedicatedHostIdForSlave = $map['DedicatedHostIdForSlave'];
        }
        if (isset($map['DedicatedHostNameForLog'])) {
            $model->dedicatedHostNameForLog = $map['DedicatedHostNameForLog'];
        }
        if (isset($map['DedicatedHostNameForMaster'])) {
            $model->dedicatedHostNameForMaster = $map['DedicatedHostNameForMaster'];
        }
        if (isset($map['DedicatedHostNameForSlave'])) {
            $model->dedicatedHostNameForSlave = $map['DedicatedHostNameForSlave'];
        }
        if (isset($map['DedicatedHostZoneIdForLog'])) {
            $model->dedicatedHostZoneIdForLog = $map['DedicatedHostZoneIdForLog'];
        }
        if (isset($map['DedicatedHostZoneIdForMaster'])) {
            $model->dedicatedHostZoneIdForMaster = $map['DedicatedHostZoneIdForMaster'];
        }
        if (isset($map['DedicatedHostZoneIdForSlave'])) {
            $model->dedicatedHostZoneIdForSlave = $map['DedicatedHostZoneIdForSlave'];
        }
        if (isset($map['DeletionProtection'])) {
            $model->deletionProtection = $map['DeletionProtection'];
        }
        if (isset($map['DestroyTime'])) {
            $model->destroyTime = $map['DestroyTime'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['GeneralGroupName'])) {
            $model->generalGroupName = $map['GeneralGroupName'];
        }
        if (isset($map['GuardDBInstanceId'])) {
            $model->guardDBInstanceId = $map['GuardDBInstanceId'];
        }
        if (isset($map['InstanceNetworkType'])) {
            $model->instanceNetworkType = $map['InstanceNetworkType'];
        }
        if (isset($map['IoAccelerationEnabled'])) {
            $model->ioAccelerationEnabled = $map['IoAccelerationEnabled'];
        }
        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }
        if (isset($map['LockReason'])) {
            $model->lockReason = $map['LockReason'];
        }
        if (isset($map['MasterInstanceId'])) {
            $model->masterInstanceId = $map['MasterInstanceId'];
        }
        if (isset($map['MutriORsignle'])) {
            $model->mutriORsignle = $map['MutriORsignle'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['ReadOnlyDBInstanceIds'])) {
            $model->readOnlyDBInstanceIds = readOnlyDBInstanceIds::fromMap($map['ReadOnlyDBInstanceIds']);
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SwitchWeight'])) {
            $model->switchWeight = $map['SwitchWeight'];
        }
        if (isset($map['TempDBInstanceId'])) {
            $model->tempDBInstanceId = $map['TempDBInstanceId'];
        }
        if (isset($map['Tips'])) {
            $model->tips = $map['Tips'];
        }
        if (isset($map['TipsLevel'])) {
            $model->tipsLevel = $map['TipsLevel'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcCloudInstanceId'])) {
            $model->vpcCloudInstanceId = $map['VpcCloudInstanceId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VpcName'])) {
            $model->vpcName = $map['VpcName'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
