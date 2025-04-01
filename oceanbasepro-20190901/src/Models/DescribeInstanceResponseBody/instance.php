<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceResponseBody\instance\dataDiskAutoScaleConfig;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceResponseBody\instance\readOnlyResource;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceResponseBody\instance\resource;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceResponseBody\instance\tenantCreatable;

class instance extends Model
{
    /**
     * @var bool
     */
    public $allowCreateProxySqlFirewallRule;

    /**
     * @var bool
     */
    public $allowModifyInternetAddressConnectionLimit;

    /**
     * @var bool
     */
    public $autoRenewal;

    /**
     * @var bool
     */
    public $autoUpgradeObVersion;

    /**
     * @var string[]
     */
    public $availableZones;

    /**
     * @var string
     */
    public $cpuArchitecture;

    /**
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
     * @var string
     */
    public $dataMergeTime;

    /**
     * @var string
     */
    public $deployMode;

    /**
     * @var string
     */
    public $deployType;

    /**
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
     * @var bool
     */
    public $enableReadOnlyReplica;

    /**
     * @var bool
     */
    public $enableReadOnlyReplicaManagement;

    /**
     * @var bool
     */
    public $enableUpgradeLogDisk;

    /**
     * @var int
     */
    public $exclusiveUnitNumLimit;

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
     * @var bool
     */
    public $isLatestObVersion;

    /**
     * @var bool
     */
    public $isTrustEcs;

    /**
     * @var bool
     */
    public $isolationOptimization;

    /**
     * @var string
     */
    public $maintainTime;

    /**
     * @var string
     */
    public $nodeNum;

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
    public $primaryInstance;

    /**
     * @var string
     */
    public $primaryRegion;

    /**
     * @var string
     */
    public $proxyClusterId;

    /**
     * @var string
     */
    public $proxyServiceStatus;

    /**
     * @var readOnlyResource
     */
    public $readOnlyResource;

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
    public $series;

    /**
     * @var int
     */
    public $sharedUnitNumLimit;

    /**
     * @var string
     */
    public $specType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tenantCreatable
     */
    public $tenantCreatable;

    /**
     * @var string
     */
    public $unitSpec;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string[]
     */
    public $zones;
    protected $_name = [
        'allowCreateProxySqlFirewallRule' => 'AllowCreateProxySqlFirewallRule',
        'allowModifyInternetAddressConnectionLimit' => 'AllowModifyInternetAddressConnectionLimit',
        'autoRenewal' => 'AutoRenewal',
        'autoUpgradeObVersion' => 'AutoUpgradeObVersion',
        'availableZones' => 'AvailableZones',
        'cpuArchitecture' => 'CpuArchitecture',
        'createTime' => 'CreateTime',
        'dataDiskAutoScale' => 'DataDiskAutoScale',
        'dataDiskAutoScaleConfig' => 'DataDiskAutoScaleConfig',
        'dataMergeTime' => 'DataMergeTime',
        'deployMode' => 'DeployMode',
        'deployType' => 'DeployType',
        'diskType' => 'DiskType',
        'enableIsolationOptimization' => 'EnableIsolationOptimization',
        'enableProxyService' => 'EnableProxyService',
        'enableReadOnlyReplica' => 'EnableReadOnlyReplica',
        'enableReadOnlyReplicaManagement' => 'EnableReadOnlyReplicaManagement',
        'enableUpgradeLogDisk' => 'EnableUpgradeLogDisk',
        'exclusiveUnitNumLimit' => 'ExclusiveUnitNumLimit',
        'expireTime' => 'ExpireTime',
        'inTempCapacityStatus' => 'InTempCapacityStatus',
        'instanceClass' => 'InstanceClass',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'instanceRole' => 'InstanceRole',
        'isLatestObVersion' => 'IsLatestObVersion',
        'isTrustEcs' => 'IsTrustEcs',
        'isolationOptimization' => 'IsolationOptimization',
        'maintainTime' => 'MaintainTime',
        'nodeNum' => 'NodeNum',
        'obRpmVersion' => 'ObRpmVersion',
        'payType' => 'PayType',
        'primaryInstance' => 'PrimaryInstance',
        'primaryRegion' => 'PrimaryRegion',
        'proxyClusterId' => 'ProxyClusterId',
        'proxyServiceStatus' => 'ProxyServiceStatus',
        'readOnlyResource' => 'ReadOnlyResource',
        'replicaMode' => 'ReplicaMode',
        'resource' => 'Resource',
        'series' => 'Series',
        'sharedUnitNumLimit' => 'SharedUnitNumLimit',
        'specType' => 'SpecType',
        'status' => 'Status',
        'tenantCreatable' => 'TenantCreatable',
        'unitSpec' => 'UnitSpec',
        'version' => 'Version',
        'zones' => 'Zones',
    ];

    public function validate()
    {
        if (\is_array($this->availableZones)) {
            Model::validateArray($this->availableZones);
        }
        if (null !== $this->dataDiskAutoScaleConfig) {
            $this->dataDiskAutoScaleConfig->validate();
        }
        if (null !== $this->readOnlyResource) {
            $this->readOnlyResource->validate();
        }
        if (null !== $this->resource) {
            $this->resource->validate();
        }
        if (null !== $this->tenantCreatable) {
            $this->tenantCreatable->validate();
        }
        if (\is_array($this->zones)) {
            Model::validateArray($this->zones);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->availableZones)) {
                $res['AvailableZones'] = [];
                $n1 = 0;
                foreach ($this->availableZones as $item1) {
                    $res['AvailableZones'][$n1++] = $item1;
                }
            }
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
            $res['DataDiskAutoScaleConfig'] = null !== $this->dataDiskAutoScaleConfig ? $this->dataDiskAutoScaleConfig->toArray($noStream) : $this->dataDiskAutoScaleConfig;
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
            $res['ReadOnlyResource'] = null !== $this->readOnlyResource ? $this->readOnlyResource->toArray($noStream) : $this->readOnlyResource;
        }

        if (null !== $this->replicaMode) {
            $res['ReplicaMode'] = $this->replicaMode;
        }

        if (null !== $this->resource) {
            $res['Resource'] = null !== $this->resource ? $this->resource->toArray($noStream) : $this->resource;
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
            $res['TenantCreatable'] = null !== $this->tenantCreatable ? $this->tenantCreatable->toArray($noStream) : $this->tenantCreatable;
        }

        if (null !== $this->unitSpec) {
            $res['UnitSpec'] = $this->unitSpec;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        if (null !== $this->zones) {
            if (\is_array($this->zones)) {
                $res['Zones'] = [];
                $n1 = 0;
                foreach ($this->zones as $item1) {
                    $res['Zones'][$n1++] = $item1;
                }
            }
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
                $model->availableZones = [];
                $n1 = 0;
                foreach ($map['AvailableZones'] as $item1) {
                    $model->availableZones[$n1++] = $item1;
                }
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
                $model->zones = [];
                $n1 = 0;
                foreach ($map['Zones'] as $item1) {
                    $model->zones[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
