<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceAttributeResponseBody\items;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceAttributeResponseBody\items\DBInstanceAttribute\extra;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceAttributeResponseBody\items\DBInstanceAttribute\readOnlyDBInstanceIds;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceAttributeResponseBody\items\DBInstanceAttribute\slaveZones;
use AlibabaCloud\Tea\Model;

class DBInstanceAttribute extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $incrementSourceDBInstanceId;

    /**
     * @var string
     */
    public $maintainTime;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $availabilityValue;

    /**
     * @var string
     */
    public $engineVersion;

    /**
     * @var string
     */
    public $dedicatedHostGroupId;

    /**
     * @var string
     */
    public $connectionString;

    /**
     * @var string
     */
    public $superPermissionMode;

    /**
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @var string
     */
    public $masterInstanceId;

    /**
     * @var string
     */
    public $autoUpgradeMinorVersion;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var int
     */
    public $accountMaxQuantity;

    /**
     * @var string
     */
    public $masterZone;

    /**
     * @var string
     */
    public $guardDBInstanceId;

    /**
     * @var int
     */
    public $DBInstanceStorage;

    /**
     * @var string
     */
    public $timeZone;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var int
     */
    public $maxConnections;

    /**
     * @var string
     */
    public $tempDBInstanceId;

    /**
     * @var int
     */
    public $DBInstanceMemory;

    /**
     * @var string
     */
    public $DBInstanceStorageType;

    /**
     * @var string
     */
    public $advancedFeatures;

    /**
     * @var string
     */
    public $port;

    /**
     * @var string
     */
    public $connectionMode;

    /**
     * @var string
     */
    public $consoleVersion;

    /**
     * @var extra
     */
    public $extra;

    /**
     * @var string
     */
    public $lockMode;

    /**
     * @var string
     */
    public $vpcCloudInstanceId;

    /**
     * @var string
     */
    public $collation;

    /**
     * @var int
     */
    public $maxIOPS;

    /**
     * @var string
     */
    public $securityIPMode;

    /**
     * @var string
     */
    public $DBInstanceClassType;

    /**
     * @var int
     */
    public $proxyType;

    /**
     * @var string
     */
    public $currentKernelVersion;

    /**
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @var string
     */
    public $DBInstanceCPU;

    /**
     * @var string
     */
    public $DBInstanceNetType;

    /**
     * @var string
     */
    public $DBInstanceType;

    /**
     * @var string
     */
    public $lockReason;

    /**
     * @var string
     */
    public $DBInstanceStatus;

    /**
     * @var int
     */
    public $DBMaxQuantity;

    /**
     * @var readOnlyDBInstanceIds
     */
    public $readOnlyDBInstanceIds;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $readonlyInstanceSQLDelayedTime;

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
    public $category;

    /**
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var slaveZones
     */
    public $slaveZones;
    protected $_name = [
        'creationTime'                   => 'CreationTime',
        'vpcId'                          => 'VpcId',
        'incrementSourceDBInstanceId'    => 'IncrementSourceDBInstanceId',
        'maintainTime'                   => 'MaintainTime',
        'payType'                        => 'PayType',
        'availabilityValue'              => 'AvailabilityValue',
        'engineVersion'                  => 'EngineVersion',
        'dedicatedHostGroupId'           => 'DedicatedHostGroupId',
        'connectionString'               => 'ConnectionString',
        'superPermissionMode'            => 'SuperPermissionMode',
        'instanceNetworkType'            => 'InstanceNetworkType',
        'masterInstanceId'               => 'MasterInstanceId',
        'autoUpgradeMinorVersion'        => 'AutoUpgradeMinorVersion',
        'expireTime'                     => 'ExpireTime',
        'accountMaxQuantity'             => 'AccountMaxQuantity',
        'masterZone'                     => 'MasterZone',
        'guardDBInstanceId'              => 'GuardDBInstanceId',
        'DBInstanceStorage'              => 'DBInstanceStorage',
        'timeZone'                       => 'TimeZone',
        'zoneId'                         => 'ZoneId',
        'DBInstanceId'                   => 'DBInstanceId',
        'maxConnections'                 => 'MaxConnections',
        'tempDBInstanceId'               => 'TempDBInstanceId',
        'DBInstanceMemory'               => 'DBInstanceMemory',
        'DBInstanceStorageType'          => 'DBInstanceStorageType',
        'advancedFeatures'               => 'AdvancedFeatures',
        'port'                           => 'Port',
        'connectionMode'                 => 'ConnectionMode',
        'consoleVersion'                 => 'ConsoleVersion',
        'extra'                          => 'Extra',
        'lockMode'                       => 'LockMode',
        'vpcCloudInstanceId'             => 'VpcCloudInstanceId',
        'collation'                      => 'Collation',
        'maxIOPS'                        => 'MaxIOPS',
        'securityIPMode'                 => 'SecurityIPMode',
        'DBInstanceClassType'            => 'DBInstanceClassType',
        'proxyType'                      => 'ProxyType',
        'currentKernelVersion'           => 'CurrentKernelVersion',
        'DBInstanceDescription'          => 'DBInstanceDescription',
        'DBInstanceCPU'                  => 'DBInstanceCPU',
        'DBInstanceNetType'              => 'DBInstanceNetType',
        'DBInstanceType'                 => 'DBInstanceType',
        'lockReason'                     => 'LockReason',
        'DBInstanceStatus'               => 'DBInstanceStatus',
        'DBMaxQuantity'                  => 'DBMaxQuantity',
        'readOnlyDBInstanceIds'          => 'ReadOnlyDBInstanceIds',
        'regionId'                       => 'RegionId',
        'readonlyInstanceSQLDelayedTime' => 'ReadonlyInstanceSQLDelayedTime',
        'vSwitchId'                      => 'VSwitchId',
        'resourceGroupId'                => 'ResourceGroupId',
        'category'                       => 'Category',
        'DBInstanceClass'                => 'DBInstanceClass',
        'engine'                         => 'Engine',
        'slaveZones'                     => 'SlaveZones',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->incrementSourceDBInstanceId) {
            $res['IncrementSourceDBInstanceId'] = $this->incrementSourceDBInstanceId;
        }
        if (null !== $this->maintainTime) {
            $res['MaintainTime'] = $this->maintainTime;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->availabilityValue) {
            $res['AvailabilityValue'] = $this->availabilityValue;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->dedicatedHostGroupId) {
            $res['DedicatedHostGroupId'] = $this->dedicatedHostGroupId;
        }
        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }
        if (null !== $this->superPermissionMode) {
            $res['SuperPermissionMode'] = $this->superPermissionMode;
        }
        if (null !== $this->instanceNetworkType) {
            $res['InstanceNetworkType'] = $this->instanceNetworkType;
        }
        if (null !== $this->masterInstanceId) {
            $res['MasterInstanceId'] = $this->masterInstanceId;
        }
        if (null !== $this->autoUpgradeMinorVersion) {
            $res['AutoUpgradeMinorVersion'] = $this->autoUpgradeMinorVersion;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->accountMaxQuantity) {
            $res['AccountMaxQuantity'] = $this->accountMaxQuantity;
        }
        if (null !== $this->masterZone) {
            $res['MasterZone'] = $this->masterZone;
        }
        if (null !== $this->guardDBInstanceId) {
            $res['GuardDBInstanceId'] = $this->guardDBInstanceId;
        }
        if (null !== $this->DBInstanceStorage) {
            $res['DBInstanceStorage'] = $this->DBInstanceStorage;
        }
        if (null !== $this->timeZone) {
            $res['TimeZone'] = $this->timeZone;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->maxConnections) {
            $res['MaxConnections'] = $this->maxConnections;
        }
        if (null !== $this->tempDBInstanceId) {
            $res['TempDBInstanceId'] = $this->tempDBInstanceId;
        }
        if (null !== $this->DBInstanceMemory) {
            $res['DBInstanceMemory'] = $this->DBInstanceMemory;
        }
        if (null !== $this->DBInstanceStorageType) {
            $res['DBInstanceStorageType'] = $this->DBInstanceStorageType;
        }
        if (null !== $this->advancedFeatures) {
            $res['AdvancedFeatures'] = $this->advancedFeatures;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->connectionMode) {
            $res['ConnectionMode'] = $this->connectionMode;
        }
        if (null !== $this->consoleVersion) {
            $res['ConsoleVersion'] = $this->consoleVersion;
        }
        if (null !== $this->extra) {
            $res['Extra'] = null !== $this->extra ? $this->extra->toMap() : null;
        }
        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }
        if (null !== $this->vpcCloudInstanceId) {
            $res['VpcCloudInstanceId'] = $this->vpcCloudInstanceId;
        }
        if (null !== $this->collation) {
            $res['Collation'] = $this->collation;
        }
        if (null !== $this->maxIOPS) {
            $res['MaxIOPS'] = $this->maxIOPS;
        }
        if (null !== $this->securityIPMode) {
            $res['SecurityIPMode'] = $this->securityIPMode;
        }
        if (null !== $this->DBInstanceClassType) {
            $res['DBInstanceClassType'] = $this->DBInstanceClassType;
        }
        if (null !== $this->proxyType) {
            $res['ProxyType'] = $this->proxyType;
        }
        if (null !== $this->currentKernelVersion) {
            $res['CurrentKernelVersion'] = $this->currentKernelVersion;
        }
        if (null !== $this->DBInstanceDescription) {
            $res['DBInstanceDescription'] = $this->DBInstanceDescription;
        }
        if (null !== $this->DBInstanceCPU) {
            $res['DBInstanceCPU'] = $this->DBInstanceCPU;
        }
        if (null !== $this->DBInstanceNetType) {
            $res['DBInstanceNetType'] = $this->DBInstanceNetType;
        }
        if (null !== $this->DBInstanceType) {
            $res['DBInstanceType'] = $this->DBInstanceType;
        }
        if (null !== $this->lockReason) {
            $res['LockReason'] = $this->lockReason;
        }
        if (null !== $this->DBInstanceStatus) {
            $res['DBInstanceStatus'] = $this->DBInstanceStatus;
        }
        if (null !== $this->DBMaxQuantity) {
            $res['DBMaxQuantity'] = $this->DBMaxQuantity;
        }
        if (null !== $this->readOnlyDBInstanceIds) {
            $res['ReadOnlyDBInstanceIds'] = null !== $this->readOnlyDBInstanceIds ? $this->readOnlyDBInstanceIds->toMap() : null;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->readonlyInstanceSQLDelayedTime) {
            $res['ReadonlyInstanceSQLDelayedTime'] = $this->readonlyInstanceSQLDelayedTime;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->DBInstanceClass) {
            $res['DBInstanceClass'] = $this->DBInstanceClass;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->slaveZones) {
            $res['SlaveZones'] = null !== $this->slaveZones ? $this->slaveZones->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBInstanceAttribute
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['IncrementSourceDBInstanceId'])) {
            $model->incrementSourceDBInstanceId = $map['IncrementSourceDBInstanceId'];
        }
        if (isset($map['MaintainTime'])) {
            $model->maintainTime = $map['MaintainTime'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['AvailabilityValue'])) {
            $model->availabilityValue = $map['AvailabilityValue'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['DedicatedHostGroupId'])) {
            $model->dedicatedHostGroupId = $map['DedicatedHostGroupId'];
        }
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }
        if (isset($map['SuperPermissionMode'])) {
            $model->superPermissionMode = $map['SuperPermissionMode'];
        }
        if (isset($map['InstanceNetworkType'])) {
            $model->instanceNetworkType = $map['InstanceNetworkType'];
        }
        if (isset($map['MasterInstanceId'])) {
            $model->masterInstanceId = $map['MasterInstanceId'];
        }
        if (isset($map['AutoUpgradeMinorVersion'])) {
            $model->autoUpgradeMinorVersion = $map['AutoUpgradeMinorVersion'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['AccountMaxQuantity'])) {
            $model->accountMaxQuantity = $map['AccountMaxQuantity'];
        }
        if (isset($map['MasterZone'])) {
            $model->masterZone = $map['MasterZone'];
        }
        if (isset($map['GuardDBInstanceId'])) {
            $model->guardDBInstanceId = $map['GuardDBInstanceId'];
        }
        if (isset($map['DBInstanceStorage'])) {
            $model->DBInstanceStorage = $map['DBInstanceStorage'];
        }
        if (isset($map['TimeZone'])) {
            $model->timeZone = $map['TimeZone'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['MaxConnections'])) {
            $model->maxConnections = $map['MaxConnections'];
        }
        if (isset($map['TempDBInstanceId'])) {
            $model->tempDBInstanceId = $map['TempDBInstanceId'];
        }
        if (isset($map['DBInstanceMemory'])) {
            $model->DBInstanceMemory = $map['DBInstanceMemory'];
        }
        if (isset($map['DBInstanceStorageType'])) {
            $model->DBInstanceStorageType = $map['DBInstanceStorageType'];
        }
        if (isset($map['AdvancedFeatures'])) {
            $model->advancedFeatures = $map['AdvancedFeatures'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['ConnectionMode'])) {
            $model->connectionMode = $map['ConnectionMode'];
        }
        if (isset($map['ConsoleVersion'])) {
            $model->consoleVersion = $map['ConsoleVersion'];
        }
        if (isset($map['Extra'])) {
            $model->extra = extra::fromMap($map['Extra']);
        }
        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }
        if (isset($map['VpcCloudInstanceId'])) {
            $model->vpcCloudInstanceId = $map['VpcCloudInstanceId'];
        }
        if (isset($map['Collation'])) {
            $model->collation = $map['Collation'];
        }
        if (isset($map['MaxIOPS'])) {
            $model->maxIOPS = $map['MaxIOPS'];
        }
        if (isset($map['SecurityIPMode'])) {
            $model->securityIPMode = $map['SecurityIPMode'];
        }
        if (isset($map['DBInstanceClassType'])) {
            $model->DBInstanceClassType = $map['DBInstanceClassType'];
        }
        if (isset($map['ProxyType'])) {
            $model->proxyType = $map['ProxyType'];
        }
        if (isset($map['CurrentKernelVersion'])) {
            $model->currentKernelVersion = $map['CurrentKernelVersion'];
        }
        if (isset($map['DBInstanceDescription'])) {
            $model->DBInstanceDescription = $map['DBInstanceDescription'];
        }
        if (isset($map['DBInstanceCPU'])) {
            $model->DBInstanceCPU = $map['DBInstanceCPU'];
        }
        if (isset($map['DBInstanceNetType'])) {
            $model->DBInstanceNetType = $map['DBInstanceNetType'];
        }
        if (isset($map['DBInstanceType'])) {
            $model->DBInstanceType = $map['DBInstanceType'];
        }
        if (isset($map['LockReason'])) {
            $model->lockReason = $map['LockReason'];
        }
        if (isset($map['DBInstanceStatus'])) {
            $model->DBInstanceStatus = $map['DBInstanceStatus'];
        }
        if (isset($map['DBMaxQuantity'])) {
            $model->DBMaxQuantity = $map['DBMaxQuantity'];
        }
        if (isset($map['ReadOnlyDBInstanceIds'])) {
            $model->readOnlyDBInstanceIds = readOnlyDBInstanceIds::fromMap($map['ReadOnlyDBInstanceIds']);
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ReadonlyInstanceSQLDelayedTime'])) {
            $model->readonlyInstanceSQLDelayedTime = $map['ReadonlyInstanceSQLDelayedTime'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['DBInstanceClass'])) {
            $model->DBInstanceClass = $map['DBInstanceClass'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['SlaveZones'])) {
            $model->slaveZones = slaveZones::fromMap($map['SlaveZones']);
        }

        return $model;
    }
}
