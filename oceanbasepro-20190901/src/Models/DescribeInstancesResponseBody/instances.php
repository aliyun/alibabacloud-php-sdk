<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstancesResponseBody;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstancesResponseBody\instances\dataDiskAutoScaleConfig;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstancesResponseBody\instances\resource;
use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @description The information about the zone in which the cluster is deployed.
     *
     * @var string[]
     */
    public $availableZones;

    /**
     * @description The product code of the OceanBase cluster.
     * - oceanbase_obpre_public_intl: indicates an OceanBase cluster that is billed based on the subscription plan and that is deployed in an international site.
     * @example oceanbase_oceanbasepost_public_cn
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @description The number of CPU cores of the cluster.
     *
     * @example 14
     *
     * @var int
     */
    public $cpu;

    /**
     * @description The CPU architecture of the cluster.
     *
     * @example X86_64, AARCH64
     *
     * @var string
     */
    public $cpuArchitecture;

    /**
     * @description The time in UTC when the cluster was created.
     *
     * @example 2021-10-19T07:13:41Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description Specifies parameters for the automatic scaling of the data disk.
     *
     * @var dataDiskAutoScaleConfig
     */
    public $dataDiskAutoScaleConfig;

    /**
     * @description The data replica distribution mode of the cluster. The value is in the n-n-n format, where n is the number of OBServer nodes in each IDC.
     *
     * @example 1-1-1
     *
     * @var string
     */
    public $deployMode;

    /**
     * @description The deployment type of the cluster. Valid values:
     * - dual: dual-IDC deployment
     * @example multiple
     *
     * @var string
     */
    public $deployType;

    /**
     * @description The size of the storage space, in GB.
     *
     * @example 200
     *
     * @var string
     */
    public $diskSize;

    /**
     * @description The type of the storage disk where the cluster is deployed.
     * The default value is cloud_essd_pl1, which indicates an ESSD cloud disk.
     * @example cloud_essd_pl1
     *
     * @var string
     */
    public $diskType;

    /**
     * @description Indicates whether the cluster supports read-only replicas.
     *
     * @example yes
     *
     * @var bool
     */
    public $enableReadOnlyReplicaManagement;

    /**
     * @description Indicates whether new nodes can be added.
     *
     * @example true
     *
     * @var bool
     */
    public $enableUpgradeNodes;

    /**
     * @description The time elapsed since the expiration of the cluster, in seconds.
     * > In subscription mode, if the cluster has not expired, this parameter indicates the remaining validity period of the cluster. If the cluster has expired, this parameter indicates the time elapsed since the expiration.
     * @example 2606682
     *
     * @var int
     */
    public $expireSeconds;

    /**
     * @description The time in UTC when the cluster expires.
     * > This parameter is valid only for subscription instances.
     * @example 2021-10-17T16:00:00Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description Specifies whether to indicate the temporary status of the capacity.
     *
     * @example false
     *
     * @var bool
     */
    public $inTempCapacityStatus;

    /**
     * @description The specifications of the cluster.  You can specify one of the following four plans:
     * - 62C400G: indicates 62 CPU cores and 400 GB of memory.
     * @example 14C70G
     *
     * @var string
     */
    public $instanceClass;

    /**
     * @description The ID of the OceanBase cluster.
     *
     * @example ob317v4uif****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the OceanBase cluster.
     *
     * @example ob4test
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The role of the instance.
     *
     * @example NORMAL
     *
     * @var string
     */
    public $instanceRole;

    /**
     * @description The instance type.
     * - mtenant_serverless: indicates a serverless instance in MySQL mode.
     * @example CLUSTER
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The time period in UTC for the daily routine maintenance of the cluster.
     *
     * @example 2021-10-19T07:13:41Z
     *
     * @var string
     */
    public $maintainTime;

    /**
     * @description The memory size of the instance, in GB.
     *
     * @example 70
     *
     * @var int
     */
    public $mem;

    /**
     * @description The billing method for the OceanBase cluster. Valid values:
     * - POSTPAY: the pay-as-you-go billing method.
     * @example PREPAY
     *
     * @var string
     */
    public $payType;

    /**
     * @description The information about cluster resources.
     *
     * @var resource
     */
    public $resource;

    /**
     * @description The ID of the resource group.
     *
     * @example group1
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The series of the OceanBase cluster. Valid values:
     * - BASIC: the basic edition.
     * @example NORMAL
     *
     * @var string
     */
    public $series;

    /**
     * @var string
     */
    public $specType;

    /**
     * @description The status of the cluster. Valid values:
     * > Generally, the cluster is in the ONLINE state.
     * @example ONLINE
     *
     * @var string
     */
    public $state;

    /**
     * @description The size of used storage space of the cluster, in GB.
     *
     * @example 20
     *
     * @var int
     */
    public $usedDiskSize;

    /**
     * @description The OBServer version.
     *
     * @example 2.2.77
     *
     * @var string
     */
    public $version;

    /**
     * @description vpcId
     *
     * @example vpc-8vb8qjrixzovjpy******
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'availableZones'                  => 'AvailableZones',
        'commodityCode'                   => 'CommodityCode',
        'cpu'                             => 'Cpu',
        'cpuArchitecture'                 => 'CpuArchitecture',
        'createTime'                      => 'CreateTime',
        'dataDiskAutoScaleConfig'         => 'DataDiskAutoScaleConfig',
        'deployMode'                      => 'DeployMode',
        'deployType'                      => 'DeployType',
        'diskSize'                        => 'DiskSize',
        'diskType'                        => 'DiskType',
        'enableReadOnlyReplicaManagement' => 'EnableReadOnlyReplicaManagement',
        'enableUpgradeNodes'              => 'EnableUpgradeNodes',
        'expireSeconds'                   => 'ExpireSeconds',
        'expireTime'                      => 'ExpireTime',
        'inTempCapacityStatus'            => 'InTempCapacityStatus',
        'instanceClass'                   => 'InstanceClass',
        'instanceId'                      => 'InstanceId',
        'instanceName'                    => 'InstanceName',
        'instanceRole'                    => 'InstanceRole',
        'instanceType'                    => 'InstanceType',
        'maintainTime'                    => 'MaintainTime',
        'mem'                             => 'Mem',
        'payType'                         => 'PayType',
        'resource'                        => 'Resource',
        'resourceGroupId'                 => 'ResourceGroupId',
        'series'                          => 'Series',
        'specType'                        => 'SpecType',
        'state'                           => 'State',
        'usedDiskSize'                    => 'UsedDiskSize',
        'version'                         => 'Version',
        'vpcId'                           => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableZones) {
            $res['AvailableZones'] = $this->availableZones;
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
            $res['DataDiskAutoScaleConfig'] = null !== $this->dataDiskAutoScaleConfig ? $this->dataDiskAutoScaleConfig->toMap() : null;
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
        if (null !== $this->maintainTime) {
            $res['MaintainTime'] = $this->maintainTime;
        }
        if (null !== $this->mem) {
            $res['Mem'] = $this->mem;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->resource) {
            $res['Resource'] = null !== $this->resource ? $this->resource->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return instances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableZones'])) {
            if (!empty($map['AvailableZones'])) {
                $model->availableZones = $map['AvailableZones'];
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
        if (isset($map['MaintainTime'])) {
            $model->maintainTime = $map['MaintainTime'];
        }
        if (isset($map['Mem'])) {
            $model->mem = $map['Mem'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
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
