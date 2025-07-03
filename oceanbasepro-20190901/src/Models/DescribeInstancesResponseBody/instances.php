<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstancesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstancesResponseBody\instances\dataDiskAutoScaleConfig;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstancesResponseBody\instances\migrationInfo;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstancesResponseBody\instances\resource;

class instances extends Model
{
    /**
     * @var string[]
     */
    public $availableZones;

    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var string
     */
    public $cpuArchitecture;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var dataDiskAutoScaleConfig
     */
    public $dataDiskAutoScaleConfig;

    /**
     * @var string
     */
    public $deployMode;

    /**
     * @var string
     */
    public $deployType;

    /**
     * @var int
     */
    public $diskSize;

    /**
     * @var string
     */
    public $diskType;

    /**
     * @var bool
     */
    public $enableReadOnlyReplicaManagement;

    /**
     * @var bool
     */
    public $enableUpgradeNodes;

    /**
     * @var int
     */
    public $expireSeconds;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var bool
     */
    public $inTempCapacityStatus;

    /**
     * @var string
     */
    public $instanceClass;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $instanceRole;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var int
     */
    public $iops;

    /**
     * @var string
     */
    public $maintainTime;

    /**
     * @var int
     */
    public $mem;

    /**
     * @var bool
     */
    public $migratable;

    /**
     * @var migrationInfo
     */
    public $migrationInfo;

    /**
     * @var string
     */
    public $obRpmVersion;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $replicaMode;

    /**
     * @var resource
     */
    public $resource;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $series;

    /**
     * @var string
     */
    public $specType;

    /**
     * @var string
     */
    public $state;

    /**
     * @var int
     */
    public $usedDiskSize;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'availableZones' => 'AvailableZones',
        'commodityCode' => 'CommodityCode',
        'cpu' => 'Cpu',
        'cpuArchitecture' => 'CpuArchitecture',
        'createTime' => 'CreateTime',
        'dataDiskAutoScaleConfig' => 'DataDiskAutoScaleConfig',
        'deployMode' => 'DeployMode',
        'deployType' => 'DeployType',
        'diskSize' => 'DiskSize',
        'diskType' => 'DiskType',
        'enableReadOnlyReplicaManagement' => 'EnableReadOnlyReplicaManagement',
        'enableUpgradeNodes' => 'EnableUpgradeNodes',
        'expireSeconds' => 'ExpireSeconds',
        'expireTime' => 'ExpireTime',
        'inTempCapacityStatus' => 'InTempCapacityStatus',
        'instanceClass' => 'InstanceClass',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'instanceRole' => 'InstanceRole',
        'instanceType' => 'InstanceType',
        'iops' => 'Iops',
        'maintainTime' => 'MaintainTime',
        'mem' => 'Mem',
        'migratable' => 'Migratable',
        'migrationInfo' => 'MigrationInfo',
        'obRpmVersion' => 'ObRpmVersion',
        'payType' => 'PayType',
        'replicaMode' => 'ReplicaMode',
        'resource' => 'Resource',
        'resourceGroupId' => 'ResourceGroupId',
        'series' => 'Series',
        'specType' => 'SpecType',
        'state' => 'State',
        'usedDiskSize' => 'UsedDiskSize',
        'version' => 'Version',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        if (\is_array($this->availableZones)) {
            Model::validateArray($this->availableZones);
        }
        if (null !== $this->dataDiskAutoScaleConfig) {
            $this->dataDiskAutoScaleConfig->validate();
        }
        if (null !== $this->migrationInfo) {
            $this->migrationInfo->validate();
        }
        if (null !== $this->resource) {
            $this->resource->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availableZones) {
            if (\is_array($this->availableZones)) {
                $res['AvailableZones'] = [];
                $n1 = 0;
                foreach ($this->availableZones as $item1) {
                    $res['AvailableZones'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }

        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }

        if (null !== $this->cpuArchitecture) {
            $res['CpuArchitecture'] = $this->cpuArchitecture;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->dataDiskAutoScaleConfig) {
            $res['DataDiskAutoScaleConfig'] = null !== $this->dataDiskAutoScaleConfig ? $this->dataDiskAutoScaleConfig->toArray($noStream) : $this->dataDiskAutoScaleConfig;
        }

        if (null !== $this->deployMode) {
            $res['DeployMode'] = $this->deployMode;
        }

        if (null !== $this->deployType) {
            $res['DeployType'] = $this->deployType;
        }

        if (null !== $this->diskSize) {
            $res['DiskSize'] = $this->diskSize;
        }

        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }

        if (null !== $this->enableReadOnlyReplicaManagement) {
            $res['EnableReadOnlyReplicaManagement'] = $this->enableReadOnlyReplicaManagement;
        }

        if (null !== $this->enableUpgradeNodes) {
            $res['EnableUpgradeNodes'] = $this->enableUpgradeNodes;
        }

        if (null !== $this->expireSeconds) {
            $res['ExpireSeconds'] = $this->expireSeconds;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->inTempCapacityStatus) {
            $res['InTempCapacityStatus'] = $this->inTempCapacityStatus;
        }

        if (null !== $this->instanceClass) {
            $res['InstanceClass'] = $this->instanceClass;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->instanceRole) {
            $res['InstanceRole'] = $this->instanceRole;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->iops) {
            $res['Iops'] = $this->iops;
        }

        if (null !== $this->maintainTime) {
            $res['MaintainTime'] = $this->maintainTime;
        }

        if (null !== $this->mem) {
            $res['Mem'] = $this->mem;
        }

        if (null !== $this->migratable) {
            $res['Migratable'] = $this->migratable;
        }

        if (null !== $this->migrationInfo) {
            $res['MigrationInfo'] = null !== $this->migrationInfo ? $this->migrationInfo->toArray($noStream) : $this->migrationInfo;
        }

        if (null !== $this->obRpmVersion) {
            $res['ObRpmVersion'] = $this->obRpmVersion;
        }

        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }

        if (null !== $this->replicaMode) {
            $res['ReplicaMode'] = $this->replicaMode;
        }

        if (null !== $this->resource) {
            $res['Resource'] = null !== $this->resource ? $this->resource->toArray($noStream) : $this->resource;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->series) {
            $res['Series'] = $this->series;
        }

        if (null !== $this->specType) {
            $res['SpecType'] = $this->specType;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->usedDiskSize) {
            $res['UsedDiskSize'] = $this->usedDiskSize;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableZones'])) {
            if (!empty($map['AvailableZones'])) {
                $model->availableZones = [];
                $n1 = 0;
                foreach ($map['AvailableZones'] as $item1) {
                    $model->availableZones[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }

        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }

        if (isset($map['CpuArchitecture'])) {
            $model->cpuArchitecture = $map['CpuArchitecture'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DataDiskAutoScaleConfig'])) {
            $model->dataDiskAutoScaleConfig = dataDiskAutoScaleConfig::fromMap($map['DataDiskAutoScaleConfig']);
        }

        if (isset($map['DeployMode'])) {
            $model->deployMode = $map['DeployMode'];
        }

        if (isset($map['DeployType'])) {
            $model->deployType = $map['DeployType'];
        }

        if (isset($map['DiskSize'])) {
            $model->diskSize = $map['DiskSize'];
        }

        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }

        if (isset($map['EnableReadOnlyReplicaManagement'])) {
            $model->enableReadOnlyReplicaManagement = $map['EnableReadOnlyReplicaManagement'];
        }

        if (isset($map['EnableUpgradeNodes'])) {
            $model->enableUpgradeNodes = $map['EnableUpgradeNodes'];
        }

        if (isset($map['ExpireSeconds'])) {
            $model->expireSeconds = $map['ExpireSeconds'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['InTempCapacityStatus'])) {
            $model->inTempCapacityStatus = $map['InTempCapacityStatus'];
        }

        if (isset($map['InstanceClass'])) {
            $model->instanceClass = $map['InstanceClass'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['InstanceRole'])) {
            $model->instanceRole = $map['InstanceRole'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['Iops'])) {
            $model->iops = $map['Iops'];
        }

        if (isset($map['MaintainTime'])) {
            $model->maintainTime = $map['MaintainTime'];
        }

        if (isset($map['Mem'])) {
            $model->mem = $map['Mem'];
        }

        if (isset($map['Migratable'])) {
            $model->migratable = $map['Migratable'];
        }

        if (isset($map['MigrationInfo'])) {
            $model->migrationInfo = migrationInfo::fromMap($map['MigrationInfo']);
        }

        if (isset($map['ObRpmVersion'])) {
            $model->obRpmVersion = $map['ObRpmVersion'];
        }

        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }

        if (isset($map['ReplicaMode'])) {
            $model->replicaMode = $map['ReplicaMode'];
        }

        if (isset($map['Resource'])) {
            $model->resource = resource::fromMap($map['Resource']);
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Series'])) {
            $model->series = $map['Series'];
        }

        if (isset($map['SpecType'])) {
            $model->specType = $map['SpecType'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['UsedDiskSize'])) {
            $model->usedDiskSize = $map['UsedDiskSize'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
