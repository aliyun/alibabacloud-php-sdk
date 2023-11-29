<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceResponseBody;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceResponseBody\instance\dataDiskAutoScaleConfig;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceResponseBody\instance\resource;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceResponseBody\instance\tenantCreatable;
use AlibabaCloud\Tea\Model;

class instance extends Model
{
    /**
     * @description The operation that you want to perform. <br>Set the value to **DescribeInstance**.
     *
     * @example true
     *
     * @var bool
     */
    public $autoRenewal;

    /**
     * @description Example 1
     *
     * @example true
     *
     * @var bool
     */
    public $autoUpgradeObVersion;

    /**
     * @var string[]
     */
    public $availableZones;

    /**
     * @example X86
     *
     * @var string
     */
    public $cpuArchitecture;

    /**
     * @description Indicates whether the log disk specifications can be upgraded.
     *
     * @example 2021-10-19T07:13:41Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @var bool
     */
    public $dataDiskAutoScale;

    /**
     * @var dataDiskAutoScaleConfig
     */
    public $dataDiskAutoScaleConfig;

    /**
     * @description The total number of CPU cores of the cluster.
     *
     * @example 02:00
     *
     * @var string
     */
    public $dataMergeTime;

    /**
     * @description Alibaba Cloud CLI
     *
     * @example 1-1-1
     *
     * @var string
     */
    public $deployMode;

    /**
     * @description It is an online CLI tool that allows you to quickly retrieve and debug APIs. It can dynamically generate executable SDK code samples.
     *
     * @example multiple
     *
     * @var string
     */
    public $deployType;

    /**
     * @description The total storage space of the cluster, in GB.
     *
     * @example cloud_essd_pl1
     *
     * @var string
     */
    public $diskType;

    /**
     * @var bool
     */
    public $enableIsolationOptimization;

    /**
     * @var bool
     */
    public $enableProxyService;

    /**
     * @example false
     *
     * @var bool
     */
    public $enableUpgradeLogDisk;

    /**
     * @description The information of the OceanBase cluster.
     *
     * @example 2021-10-17T16:00:00Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @var bool
     */
    public $inTempCapacityStatus;

    /**
     * @description The detailed information of the OBServer version.
     *
     * @example 14C70G
     *
     * @var string
     */
    public $instanceClass;

    /**
     * @description The information about the log disk space of the cluster.
     *
     * @example ob317v4uif****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Indicates whether automatic upgrade of the OBServer version is enabled.
     *
     * @example ob4test
     *
     * @var string
     */
    public $instanceName;

    /**
     * @example NORMAL
     *
     * @var string
     */
    public $instanceRole;

    /**
     * @example true
     *
     * @var bool
     */
    public $isLatestObVersion;

    /**
     * @description The information about the CPU resources of the cluster.
     *
     * @example true
     *
     * @var bool
     */
    public $isTrustEcs;

    /**
     * @var bool
     */
    public $isolationOptimization;

    /**
     * @description The time when the major compaction of cluster data is performed.
     *
     * @example 19:00Z-20:00Z
     *
     * @var string
     */
    public $maintainTime;

    /**
     * @example 6
     *
     * @var string
     */
    public $nodeNum;

    /**
     * @example 2.2.77-20210526202046
     *
     * @var string
     */
    public $obRpmVersion;

    /**
     * @description The list of zones.
     *
     * @example PREPAY
     *
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $proxyClusterId;

    /**
     * @var string
     */
    public $proxyServiceStatus;

    /**
     * @var string
     */
    public $replicaMode;

    /**
     * @description The size of used memory in the cluster, in GB.
     *
     * @var resource
     */
    public $resource;

    /**
     * @description Indicates whether the OBServer version is the latest.
     *
     * @example Indicates whether the OBServer version is the latest.
     *
     * @var string
     */
    public $series;

    /**
     * @description The information about cluster resources.
     *
     * @example ONLINE
     *
     * @var string
     */
    public $status;

    /**
     * @var tenantCreatable
     */
    public $tenantCreatable;

    /**
     * @description You can call this operation to query the detailed information of an OceanBase cluster.
     *
     * @example 2.2.77
     *
     * @var string
     */
    public $version;

    /**
     * @var string[]
     */
    public $zones;
    protected $_name = [
        'autoRenewal'                 => 'AutoRenewal',
        'autoUpgradeObVersion'        => 'AutoUpgradeObVersion',
        'availableZones'              => 'AvailableZones',
        'cpuArchitecture'             => 'CpuArchitecture',
        'createTime'                  => 'CreateTime',
        'dataDiskAutoScale'           => 'DataDiskAutoScale',
        'dataDiskAutoScaleConfig'     => 'DataDiskAutoScaleConfig',
        'dataMergeTime'               => 'DataMergeTime',
        'deployMode'                  => 'DeployMode',
        'deployType'                  => 'DeployType',
        'diskType'                    => 'DiskType',
        'enableIsolationOptimization' => 'EnableIsolationOptimization',
        'enableProxyService'          => 'EnableProxyService',
        'enableUpgradeLogDisk'        => 'EnableUpgradeLogDisk',
        'expireTime'                  => 'ExpireTime',
        'inTempCapacityStatus'        => 'InTempCapacityStatus',
        'instanceClass'               => 'InstanceClass',
        'instanceId'                  => 'InstanceId',
        'instanceName'                => 'InstanceName',
        'instanceRole'                => 'InstanceRole',
        'isLatestObVersion'           => 'IsLatestObVersion',
        'isTrustEcs'                  => 'IsTrustEcs',
        'isolationOptimization'       => 'IsolationOptimization',
        'maintainTime'                => 'MaintainTime',
        'nodeNum'                     => 'NodeNum',
        'obRpmVersion'                => 'ObRpmVersion',
        'payType'                     => 'PayType',
        'proxyClusterId'              => 'ProxyClusterId',
        'proxyServiceStatus'          => 'ProxyServiceStatus',
        'replicaMode'                 => 'ReplicaMode',
        'resource'                    => 'Resource',
        'series'                      => 'Series',
        'status'                      => 'Status',
        'tenantCreatable'             => 'TenantCreatable',
        'version'                     => 'Version',
        'zones'                       => 'Zones',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRenewal) {
            $res['AutoRenewal'] = $this->autoRenewal;
        }
        if (null !== $this->autoUpgradeObVersion) {
            $res['AutoUpgradeObVersion'] = $this->autoUpgradeObVersion;
        }
        if (null !== $this->availableZones) {
            $res['AvailableZones'] = $this->availableZones;
        }
        if (null !== $this->cpuArchitecture) {
            $res['CpuArchitecture'] = $this->cpuArchitecture;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->dataDiskAutoScale) {
            $res['DataDiskAutoScale'] = $this->dataDiskAutoScale;
        }
        if (null !== $this->dataDiskAutoScaleConfig) {
            $res['DataDiskAutoScaleConfig'] = null !== $this->dataDiskAutoScaleConfig ? $this->dataDiskAutoScaleConfig->toMap() : null;
        }
        if (null !== $this->dataMergeTime) {
            $res['DataMergeTime'] = $this->dataMergeTime;
        }
        if (null !== $this->deployMode) {
            $res['DeployMode'] = $this->deployMode;
        }
        if (null !== $this->deployType) {
            $res['DeployType'] = $this->deployType;
        }
        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }
        if (null !== $this->enableIsolationOptimization) {
            $res['EnableIsolationOptimization'] = $this->enableIsolationOptimization;
        }
        if (null !== $this->enableProxyService) {
            $res['EnableProxyService'] = $this->enableProxyService;
        }
        if (null !== $this->enableUpgradeLogDisk) {
            $res['EnableUpgradeLogDisk'] = $this->enableUpgradeLogDisk;
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
        if (null !== $this->isLatestObVersion) {
            $res['IsLatestObVersion'] = $this->isLatestObVersion;
        }
        if (null !== $this->isTrustEcs) {
            $res['IsTrustEcs'] = $this->isTrustEcs;
        }
        if (null !== $this->isolationOptimization) {
            $res['IsolationOptimization'] = $this->isolationOptimization;
        }
        if (null !== $this->maintainTime) {
            $res['MaintainTime'] = $this->maintainTime;
        }
        if (null !== $this->nodeNum) {
            $res['NodeNum'] = $this->nodeNum;
        }
        if (null !== $this->obRpmVersion) {
            $res['ObRpmVersion'] = $this->obRpmVersion;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->proxyClusterId) {
            $res['ProxyClusterId'] = $this->proxyClusterId;
        }
        if (null !== $this->proxyServiceStatus) {
            $res['ProxyServiceStatus'] = $this->proxyServiceStatus;
        }
        if (null !== $this->replicaMode) {
            $res['ReplicaMode'] = $this->replicaMode;
        }
        if (null !== $this->resource) {
            $res['Resource'] = null !== $this->resource ? $this->resource->toMap() : null;
        }
        if (null !== $this->series) {
            $res['Series'] = $this->series;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tenantCreatable) {
            $res['TenantCreatable'] = null !== $this->tenantCreatable ? $this->tenantCreatable->toMap() : null;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->zones) {
            $res['Zones'] = $this->zones;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRenewal'])) {
            $model->autoRenewal = $map['AutoRenewal'];
        }
        if (isset($map['AutoUpgradeObVersion'])) {
            $model->autoUpgradeObVersion = $map['AutoUpgradeObVersion'];
        }
        if (isset($map['AvailableZones'])) {
            if (!empty($map['AvailableZones'])) {
                $model->availableZones = $map['AvailableZones'];
            }
        }
        if (isset($map['CpuArchitecture'])) {
            $model->cpuArchitecture = $map['CpuArchitecture'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DataDiskAutoScale'])) {
            $model->dataDiskAutoScale = $map['DataDiskAutoScale'];
        }
        if (isset($map['DataDiskAutoScaleConfig'])) {
            $model->dataDiskAutoScaleConfig = dataDiskAutoScaleConfig::fromMap($map['DataDiskAutoScaleConfig']);
        }
        if (isset($map['DataMergeTime'])) {
            $model->dataMergeTime = $map['DataMergeTime'];
        }
        if (isset($map['DeployMode'])) {
            $model->deployMode = $map['DeployMode'];
        }
        if (isset($map['DeployType'])) {
            $model->deployType = $map['DeployType'];
        }
        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }
        if (isset($map['EnableIsolationOptimization'])) {
            $model->enableIsolationOptimization = $map['EnableIsolationOptimization'];
        }
        if (isset($map['EnableProxyService'])) {
            $model->enableProxyService = $map['EnableProxyService'];
        }
        if (isset($map['EnableUpgradeLogDisk'])) {
            $model->enableUpgradeLogDisk = $map['EnableUpgradeLogDisk'];
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
        if (isset($map['IsLatestObVersion'])) {
            $model->isLatestObVersion = $map['IsLatestObVersion'];
        }
        if (isset($map['IsTrustEcs'])) {
            $model->isTrustEcs = $map['IsTrustEcs'];
        }
        if (isset($map['IsolationOptimization'])) {
            $model->isolationOptimization = $map['IsolationOptimization'];
        }
        if (isset($map['MaintainTime'])) {
            $model->maintainTime = $map['MaintainTime'];
        }
        if (isset($map['NodeNum'])) {
            $model->nodeNum = $map['NodeNum'];
        }
        if (isset($map['ObRpmVersion'])) {
            $model->obRpmVersion = $map['ObRpmVersion'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['ProxyClusterId'])) {
            $model->proxyClusterId = $map['ProxyClusterId'];
        }
        if (isset($map['ProxyServiceStatus'])) {
            $model->proxyServiceStatus = $map['ProxyServiceStatus'];
        }
        if (isset($map['ReplicaMode'])) {
            $model->replicaMode = $map['ReplicaMode'];
        }
        if (isset($map['Resource'])) {
            $model->resource = resource::fromMap($map['Resource']);
        }
        if (isset($map['Series'])) {
            $model->series = $map['Series'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TenantCreatable'])) {
            $model->tenantCreatable = tenantCreatable::fromMap($map['TenantCreatable']);
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['Zones'])) {
            if (!empty($map['Zones'])) {
                $model->zones = $map['Zones'];
            }
        }

        return $model;
    }
}
