<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceResponseBody;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceResponseBody\instance\dataDiskAutoScaleConfig;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceResponseBody\instance\readOnlyResource;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceResponseBody\instance\resource;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceResponseBody\instance\tenantCreatable;
use AlibabaCloud\Tea\Model;

class instance extends Model
{
    /**
     * @description Indicates whether the OceanBase Database Proxy (ODP) SQL firewall is supported.
     *
     * @example false
     *
     * @var bool
     */
    public $allowCreateProxySqlFirewallRule;

    /**
     * @description Indicates whether the maximum number of public connections can be modified.
     *
     * @example false
     *
     * @var bool
     */
    public $allowModifyInternetAddressConnectionLimit;

    /**
     * @description Indicates whether automatic renewal is enabled.
     *
     * This parameter is valid only for clusters whose billing methods are set to PREPAY.
     * @example true
     *
     * @var bool
     */
    public $autoRenewal;

    /**
     * @description Indicates whether automatic upgrade of the OBServer version is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $autoUpgradeObVersion;

    /**
     * @description The list of zones.
     *
     * @var string[]
     */
    public $availableZones;

    /**
     * @description The CPU architecture of the cluster.
     *
     * @example X86
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
     * @description Specifies whether to enable automatic scaling of the data disk.
     * > <br>This parameter is deprecated.
     * @example -
     *
     * @var bool
     */
    public $dataDiskAutoScale;

    /**
     * @description Specifies parameters for the automatic scaling of the data disk.
     *
     * @var dataDiskAutoScaleConfig
     */
    public $dataDiskAutoScaleConfig;

    /**
     * @description The time when the major compaction of cluster data is performed.
     *
     * @example 02:00
     *
     * @var string
     */
    public $dataMergeTime;

    /**
     * @description The data replica distribution mode of the cluster. Valid values:
     * > <br>The integer n represents the number of OBServer nodes in each IDC.
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
     * @description The type of the storage disk where the cluster is deployed.
     *
     * The default value is cloud_essd_pl1, which indicates an ESSD cloud disk.
     * @example cloud_essd_pl1
     *
     * @var string
     */
    public $diskType;

    /**
     * @description Specifies whether to enable isolation optimization.
     *
     * @example false
     *
     * @var bool
     */
    public $enableIsolationOptimization;

    /**
     * @description Specifies whether to enable the proxy service.
     * - false
     * @example true
     *
     * @var bool
     */
    public $enableProxyService;

    /**
     * @description Indicates whether read-only replicas are supported.
     *
     * @example true
     *
     * @var bool
     */
    public $enableReadOnlyReplica;

    /**
     * @description Indicates whether read-only replicas can be purchased for the cluster.
     *
     * @example false
     *
     * @var bool
     */
    public $enableReadOnlyReplicaManagement;

    /**
     * @description Indicates whether the log disk specifications can be upgraded.
     *
     * @example false
     *
     * @var bool
     */
    public $enableUpgradeLogDisk;

    /**
     * @description The maximum number of units of the proxy service in exclusive mode.
     *
     * @example 1
     *
     * @var int
     */
    public $exclusiveUnitNumLimit;

    /**
     * @description The time in UTC when the cluster expires.
     *
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
     * @description Indicates whether the OBServer version is the latest.
     *
     * @example true
     *
     * @var bool
     */
    public $isLatestObVersion;

    /**
     * @description Indicates whether trusted ECS instances are used.
     *
     * @example true
     *
     * @var bool
     */
    public $isTrustEcs;

    /**
     * @description Specifies whether to enable the control group feature.
     *
     * @example false
     *
     * @var bool
     */
    public $isolationOptimization;

    /**
     * @description The period in UTC for the daily routine maintenance of the cluster.
     *
     * @example 19:00Z-20:00Z
     *
     * @var string
     */
    public $maintainTime;

    /**
     * @description The number of nodes in the cluster. If the cluster is deployed in n-n-n mode, the number of nodes in the cluster equals n × 3.
     *
     * @example 6
     *
     * @var string
     */
    public $nodeNum;

    /**
     * @description The detailed information of the OBServer version.
     *
     * @example 2.2.77-20210526202046
     *
     * @var string
     */
    public $obRpmVersion;

    /**
     * @description The billing method of the OceanBase cluster. Valid values:
     * - POSTPAY: the pay-as-you-go billing method.
     * @example PREPAY
     *
     * @var string
     */
    public $payType;

    /**
     * @description The ID of the primary cluster.
     *
     * @example ob3h8ytroxxxxx
     *
     * @var string
     */
    public $primaryInstance;

    /**
     * @description The region of the primary cluster.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $primaryRegion;

    /**
     * @description The ID of the proxy cluster.
     * > This parameter returns a value only if you set the **EnableProxyService** parameter to true.
     * @example proxy-56****a6tg2o
     *
     * @var string
     */
    public $proxyClusterId;

    /**
     * @description The status of the proxy service.
     *
     * @example ONLINE
     *
     * @var string
     */
    public $proxyServiceStatus;

    /**
     * @description The information about cluster resources.
     *
     * @var readOnlyResource
     */
    public $readOnlyResource;

    /**
     * @description The number of full-featured replicas. Return value: 3 or 2.
     * An OceanBase cluster deployed in three-zone mode supports only three full-featured replicas. An OceanBase cluster deployed in two-zone mode supports only two full-featured replicas. An OceanBase cluster deployed in one single zone supports two or three full-featured replicas.
     * @example 2F1A
     *
     * @var string
     */
    public $replicaMode;

    /**
     * @description The information about cluster resources.
     *
     * @var resource
     */
    public $resource;

    /**
     * @description The series of the instance. Valid values:
     *
     * - history: History Database Cluster Edition
     * @example Normal
     *
     * @var string
     */
    public $series;

    /**
     * @description The maximum number of units of the proxy service in shared mode.
     *
     * @example 3
     *
     * @var int
     */
    public $sharedUnitNumLimit;

    /**
     * @description The specification type.
     *
     * @example dedicatedspec
     *
     * @var string
     */
    public $specType;

    /**
     * @description The status of the cluster. Valid values:
     * Generally, the cluster is in the ONLINE state.
     * @example ONLINE
     *
     * @var string
     */
    public $status;

    /**
     * @description Specifies whether a tenant can be created.
     *
     * @var tenantCreatable
     */
    public $tenantCreatable;

    /**
     * @description The unit specification of the proxy service.
     *
     * @example 2C4G
     *
     * @var string
     */
    public $unitSpec;

    /**
     * @description The version of OceanBase Database.
     *
     * @example 2.2.77
     *
     * @var string
     */
    public $version;

    /**
     * @description The ID of the zone to which the instance belongs.
     * <props="intl">For more information about how to obtain the list of zones, see [DescribeZones](https://www.alibabacloud.com/help/en/apsaradb-for-oceanbase/latest/api-oceanbasepro-2019-09-01-describezones).
     * @var string[]
     */
    public $zones;
    protected $_name = [
        'allowCreateProxySqlFirewallRule'           => 'AllowCreateProxySqlFirewallRule',
        'allowModifyInternetAddressConnectionLimit' => 'AllowModifyInternetAddressConnectionLimit',
        'autoRenewal'                               => 'AutoRenewal',
        'autoUpgradeObVersion'                      => 'AutoUpgradeObVersion',
        'availableZones'                            => 'AvailableZones',
        'cpuArchitecture'                           => 'CpuArchitecture',
        'createTime'                                => 'CreateTime',
        'dataDiskAutoScale'                         => 'DataDiskAutoScale',
        'dataDiskAutoScaleConfig'                   => 'DataDiskAutoScaleConfig',
        'dataMergeTime'                             => 'DataMergeTime',
        'deployMode'                                => 'DeployMode',
        'deployType'                                => 'DeployType',
        'diskType'                                  => 'DiskType',
        'enableIsolationOptimization'               => 'EnableIsolationOptimization',
        'enableProxyService'                        => 'EnableProxyService',
        'enableReadOnlyReplica'                     => 'EnableReadOnlyReplica',
        'enableReadOnlyReplicaManagement'           => 'EnableReadOnlyReplicaManagement',
        'enableUpgradeLogDisk'                      => 'EnableUpgradeLogDisk',
        'exclusiveUnitNumLimit'                     => 'ExclusiveUnitNumLimit',
        'expireTime'                                => 'ExpireTime',
        'inTempCapacityStatus'                      => 'InTempCapacityStatus',
        'instanceClass'                             => 'InstanceClass',
        'instanceId'                                => 'InstanceId',
        'instanceName'                              => 'InstanceName',
        'instanceRole'                              => 'InstanceRole',
        'isLatestObVersion'                         => 'IsLatestObVersion',
        'isTrustEcs'                                => 'IsTrustEcs',
        'isolationOptimization'                     => 'IsolationOptimization',
        'maintainTime'                              => 'MaintainTime',
        'nodeNum'                                   => 'NodeNum',
        'obRpmVersion'                              => 'ObRpmVersion',
        'payType'                                   => 'PayType',
        'primaryInstance'                           => 'PrimaryInstance',
        'primaryRegion'                             => 'PrimaryRegion',
        'proxyClusterId'                            => 'ProxyClusterId',
        'proxyServiceStatus'                        => 'ProxyServiceStatus',
        'readOnlyResource'                          => 'ReadOnlyResource',
        'replicaMode'                               => 'ReplicaMode',
        'resource'                                  => 'Resource',
        'series'                                    => 'Series',
        'sharedUnitNumLimit'                        => 'SharedUnitNumLimit',
        'specType'                                  => 'SpecType',
        'status'                                    => 'Status',
        'tenantCreatable'                           => 'TenantCreatable',
        'unitSpec'                                  => 'UnitSpec',
        'version'                                   => 'Version',
        'zones'                                     => 'Zones',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowCreateProxySqlFirewallRule) {
            $res['AllowCreateProxySqlFirewallRule'] = $this->allowCreateProxySqlFirewallRule;
        }
        if (null !== $this->allowModifyInternetAddressConnectionLimit) {
            $res['AllowModifyInternetAddressConnectionLimit'] = $this->allowModifyInternetAddressConnectionLimit;
        }
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
        if (null !== $this->enableReadOnlyReplica) {
            $res['EnableReadOnlyReplica'] = $this->enableReadOnlyReplica;
        }
        if (null !== $this->enableReadOnlyReplicaManagement) {
            $res['EnableReadOnlyReplicaManagement'] = $this->enableReadOnlyReplicaManagement;
        }
        if (null !== $this->enableUpgradeLogDisk) {
            $res['EnableUpgradeLogDisk'] = $this->enableUpgradeLogDisk;
        }
        if (null !== $this->exclusiveUnitNumLimit) {
            $res['ExclusiveUnitNumLimit'] = $this->exclusiveUnitNumLimit;
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
        if (null !== $this->primaryInstance) {
            $res['PrimaryInstance'] = $this->primaryInstance;
        }
        if (null !== $this->primaryRegion) {
            $res['PrimaryRegion'] = $this->primaryRegion;
        }
        if (null !== $this->proxyClusterId) {
            $res['ProxyClusterId'] = $this->proxyClusterId;
        }
        if (null !== $this->proxyServiceStatus) {
            $res['ProxyServiceStatus'] = $this->proxyServiceStatus;
        }
        if (null !== $this->readOnlyResource) {
            $res['ReadOnlyResource'] = null !== $this->readOnlyResource ? $this->readOnlyResource->toMap() : null;
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
        if (null !== $this->sharedUnitNumLimit) {
            $res['SharedUnitNumLimit'] = $this->sharedUnitNumLimit;
        }
        if (null !== $this->specType) {
            $res['SpecType'] = $this->specType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tenantCreatable) {
            $res['TenantCreatable'] = null !== $this->tenantCreatable ? $this->tenantCreatable->toMap() : null;
        }
        if (null !== $this->unitSpec) {
            $res['UnitSpec'] = $this->unitSpec;
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
        if (isset($map['AllowCreateProxySqlFirewallRule'])) {
            $model->allowCreateProxySqlFirewallRule = $map['AllowCreateProxySqlFirewallRule'];
        }
        if (isset($map['AllowModifyInternetAddressConnectionLimit'])) {
            $model->allowModifyInternetAddressConnectionLimit = $map['AllowModifyInternetAddressConnectionLimit'];
        }
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
        if (isset($map['EnableReadOnlyReplica'])) {
            $model->enableReadOnlyReplica = $map['EnableReadOnlyReplica'];
        }
        if (isset($map['EnableReadOnlyReplicaManagement'])) {
            $model->enableReadOnlyReplicaManagement = $map['EnableReadOnlyReplicaManagement'];
        }
        if (isset($map['EnableUpgradeLogDisk'])) {
            $model->enableUpgradeLogDisk = $map['EnableUpgradeLogDisk'];
        }
        if (isset($map['ExclusiveUnitNumLimit'])) {
            $model->exclusiveUnitNumLimit = $map['ExclusiveUnitNumLimit'];
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
        if (isset($map['PrimaryInstance'])) {
            $model->primaryInstance = $map['PrimaryInstance'];
        }
        if (isset($map['PrimaryRegion'])) {
            $model->primaryRegion = $map['PrimaryRegion'];
        }
        if (isset($map['ProxyClusterId'])) {
            $model->proxyClusterId = $map['ProxyClusterId'];
        }
        if (isset($map['ProxyServiceStatus'])) {
            $model->proxyServiceStatus = $map['ProxyServiceStatus'];
        }
        if (isset($map['ReadOnlyResource'])) {
            $model->readOnlyResource = readOnlyResource::fromMap($map['ReadOnlyResource']);
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
        if (isset($map['SharedUnitNumLimit'])) {
            $model->sharedUnitNumLimit = $map['SharedUnitNumLimit'];
        }
        if (isset($map['SpecType'])) {
            $model->specType = $map['SpecType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TenantCreatable'])) {
            $model->tenantCreatable = tenantCreatable::fromMap($map['TenantCreatable']);
        }
        if (isset($map['UnitSpec'])) {
            $model->unitSpec = $map['UnitSpec'];
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
