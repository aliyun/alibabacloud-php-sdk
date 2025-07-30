<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeDBInstancesResponseBody;

use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeDBInstancesResponseBody\items\multiZone;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeDBInstancesResponseBody\items\tags;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description The edition of the instance. Default value: basic.
     *
     * @example basic
     *
     * @var string
     */
    public $category;

    /**
     * @description The billing method of the instance. Valid values:
     *
     *   **Postpaid**: pay-as-you-go.
     *   **Prepaid**: subscription.
     *
     * @example PrePaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The total number of clusters.
     *
     * @example 1
     *
     * @var int
     */
    public $clusterCount;

    /**
     * @description The instance ID.
     *
     * @example selectdb-cn-7213cjv****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $deployScheme;

    /**
     * @description The description of the instance.
     *
     * @var string
     */
    public $description;

    /**
     * @description The database engine of the instance.
     *
     * @example selectdb
     *
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $engineMinorVersion;

    /**
     * @description The database engine version of the instance.
     *
     * @example 2.4
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description The time when the cluster expires.
     *
     * >  A specific value is returned only for subscription clusters whose billing method is **Prepaid**. For pay-as-you-go clusters whose billing method is **Postpaid**, no value is returned.
     *
     * @example 2024-03-29T03:47:05Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description The time when the task was created. The time is displayed in UTC.
     *
     * @example 2023-08-12T04:14Z
     *
     * @var string
     */
    public $gmtCreated;

    /**
     * @description The time when the task was last modified. The time is displayed in UTC.
     *
     * @example 2023-08-12T19:05Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The type of the instance.
     *
     * @example Instance
     *
     * @var string
     */
    public $instanceUsedType;

    /**
     * @description Indicates whether the instance is deleted. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $isDeleted;

    /**
     * @description The lock mode of the instance.
     *
     * @example 0
     *
     * @var int
     */
    public $lockMode;

    /**
     * @description The reason why the instance is locked.
     *
     * @example nolock
     *
     * @var string
     */
    public $lockReason;

    /**
     * @description The end timestamp of the maintenance window.
     *
     * @var string
     */
    public $maintainEndTimeStr;

    /**
     * @description The end time of the instance maintenance window.
     *
     * @var string
     */
    public $maintainEndtime;

    /**
     * @description The start timestamp of the maintenance window.
     *
     * @var string
     */
    public $maintainStartTimeStr;

    /**
     * @description The start time of the instance maintenance window.
     *
     * @var string
     */
    public $maintainStarttime;

    /**
     * @var multiZone[]
     */
    public $multiZone;

    /**
     * @description The storage capacity of the instance. Unit: GB.
     *
     * @example 200
     *
     * @var int
     */
    public $objectStoreSize;

    /**
     * @description The time when the instance was created.
     *
     * @var string
     */
    public $parentInstance;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The number of CPU cores of the instance.
     *
     * @example 8
     *
     * @var int
     */
    public $resourceCpu;

    /**
     * @description The ID of the resource group.
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The memory capacity of the instance.
     *
     * @example 64
     *
     * @var int
     */
    public $resourceMemory;

    /**
     * @description The maximum number of RCUs.
     *
     * @example 0
     *
     * @var int
     */
    public $scaleMax;

    /**
     * @description The minimum number of RDS capacity units (RCUs).
     *
     * @example 0
     *
     * @var int
     */
    public $scaleMin;

    /**
     * @description This parameter is not returned.
     *
     * @var int
     */
    public $scaleReplica;

    /**
     * @var bool
     */
    public $serverless;

    /**
     * @description The state of the instance. Valid values:
     *
     *   **CREATING**: The instance is being created.
     *   **ACTIVATION**: The instance is running.
     *   **RESOURCE_CHANGING**: The resource configuration of the instance is being changed.
     *   **ORDER_PREPARING**: The order is being confirmed.
     *   **READONLY_RESOURCE_CHANGING**: The resource configuration of the instance is being changed and the instance is write-locked.
     *   **DELETING**: The instance is being deleted.
     *
     * @example ACTIVATION
     *
     * @var string
     */
    public $status;

    /**
     * @description The cache size.
     *
     * @example 100
     *
     * @var int
     */
    public $storageSize;

    /**
     * @description The storage type of the instance.
     *
     * @example cloud_essd
     *
     * @var string
     */
    public $storageType;

    /**
     * @description The details about each tag returned.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The ID of the cluster that is monitored by Managed Service for Prometheus.
     *
     * @var string
     */
    public $tenantClusterId;

    /**
     * @description The token that is used to access Managed Service for Prometheus.
     *
     * @var string
     */
    public $tenantToken;

    /**
     * @description The ID of the account that uses Managed Service for Prometheus.
     *
     * @var string
     */
    public $tenantUserId;

    /**
     * @description The virtual private cloud (VPC) ID.
     *
     * @example vpc-bp175iuvg8nxqraf2****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The vSwitch ID.
     *
     * @example vsw-bp1gzt31twhlo0sa5****
     *
     * @var string
     */
    public $vswitchId;

    /**
     * @description The zone ID.
     *
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description The connection string of the instance.
     *
     * @var string
     */
    public $connectionString;
    protected $_name = [
        'category' => 'Category',
        'chargeType' => 'ChargeType',
        'clusterCount' => 'ClusterCount',
        'DBInstanceId' => 'DBInstanceId',
        'deployScheme' => 'DeployScheme',
        'description' => 'Description',
        'engine' => 'Engine',
        'engineMinorVersion' => 'EngineMinorVersion',
        'engineVersion' => 'EngineVersion',
        'expireTime' => 'ExpireTime',
        'gmtCreated' => 'GmtCreated',
        'gmtModified' => 'GmtModified',
        'instanceUsedType' => 'InstanceUsedType',
        'isDeleted' => 'IsDeleted',
        'lockMode' => 'LockMode',
        'lockReason' => 'LockReason',
        'maintainEndTimeStr' => 'MaintainEndTimeStr',
        'maintainEndtime' => 'MaintainEndtime',
        'maintainStartTimeStr' => 'MaintainStartTimeStr',
        'maintainStarttime' => 'MaintainStarttime',
        'multiZone' => 'MultiZone',
        'objectStoreSize' => 'ObjectStoreSize',
        'parentInstance' => 'ParentInstance',
        'regionId' => 'RegionId',
        'resourceCpu' => 'ResourceCpu',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceMemory' => 'ResourceMemory',
        'scaleMax' => 'ScaleMax',
        'scaleMin' => 'ScaleMin',
        'scaleReplica' => 'ScaleReplica',
        'serverless' => 'Serverless',
        'status' => 'Status',
        'storageSize' => 'StorageSize',
        'storageType' => 'StorageType',
        'tags' => 'Tags',
        'tenantClusterId' => 'TenantClusterId',
        'tenantToken' => 'TenantToken',
        'tenantUserId' => 'TenantUserId',
        'vpcId' => 'VpcId',
        'vswitchId' => 'VswitchId',
        'zoneId' => 'ZoneId',
        'connectionString' => 'connectionString',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->clusterCount) {
            $res['ClusterCount'] = $this->clusterCount;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->deployScheme) {
            $res['DeployScheme'] = $this->deployScheme;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineMinorVersion) {
            $res['EngineMinorVersion'] = $this->engineMinorVersion;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->instanceUsedType) {
            $res['InstanceUsedType'] = $this->instanceUsedType;
        }
        if (null !== $this->isDeleted) {
            $res['IsDeleted'] = $this->isDeleted;
        }
        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }
        if (null !== $this->lockReason) {
            $res['LockReason'] = $this->lockReason;
        }
        if (null !== $this->maintainEndTimeStr) {
            $res['MaintainEndTimeStr'] = $this->maintainEndTimeStr;
        }
        if (null !== $this->maintainEndtime) {
            $res['MaintainEndtime'] = $this->maintainEndtime;
        }
        if (null !== $this->maintainStartTimeStr) {
            $res['MaintainStartTimeStr'] = $this->maintainStartTimeStr;
        }
        if (null !== $this->maintainStarttime) {
            $res['MaintainStarttime'] = $this->maintainStarttime;
        }
        if (null !== $this->multiZone) {
            $res['MultiZone'] = [];
            if (null !== $this->multiZone && \is_array($this->multiZone)) {
                $n = 0;
                foreach ($this->multiZone as $item) {
                    $res['MultiZone'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->objectStoreSize) {
            $res['ObjectStoreSize'] = $this->objectStoreSize;
        }
        if (null !== $this->parentInstance) {
            $res['ParentInstance'] = $this->parentInstance;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceCpu) {
            $res['ResourceCpu'] = $this->resourceCpu;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceMemory) {
            $res['ResourceMemory'] = $this->resourceMemory;
        }
        if (null !== $this->scaleMax) {
            $res['ScaleMax'] = $this->scaleMax;
        }
        if (null !== $this->scaleMin) {
            $res['ScaleMin'] = $this->scaleMin;
        }
        if (null !== $this->scaleReplica) {
            $res['ScaleReplica'] = $this->scaleReplica;
        }
        if (null !== $this->serverless) {
            $res['Serverless'] = $this->serverless;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->storageSize) {
            $res['StorageSize'] = $this->storageSize;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tenantClusterId) {
            $res['TenantClusterId'] = $this->tenantClusterId;
        }
        if (null !== $this->tenantToken) {
            $res['TenantToken'] = $this->tenantToken;
        }
        if (null !== $this->tenantUserId) {
            $res['TenantUserId'] = $this->tenantUserId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->connectionString) {
            $res['connectionString'] = $this->connectionString;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['ClusterCount'])) {
            $model->clusterCount = $map['ClusterCount'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DeployScheme'])) {
            $model->deployScheme = $map['DeployScheme'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineMinorVersion'])) {
            $model->engineMinorVersion = $map['EngineMinorVersion'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['InstanceUsedType'])) {
            $model->instanceUsedType = $map['InstanceUsedType'];
        }
        if (isset($map['IsDeleted'])) {
            $model->isDeleted = $map['IsDeleted'];
        }
        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }
        if (isset($map['LockReason'])) {
            $model->lockReason = $map['LockReason'];
        }
        if (isset($map['MaintainEndTimeStr'])) {
            $model->maintainEndTimeStr = $map['MaintainEndTimeStr'];
        }
        if (isset($map['MaintainEndtime'])) {
            $model->maintainEndtime = $map['MaintainEndtime'];
        }
        if (isset($map['MaintainStartTimeStr'])) {
            $model->maintainStartTimeStr = $map['MaintainStartTimeStr'];
        }
        if (isset($map['MaintainStarttime'])) {
            $model->maintainStarttime = $map['MaintainStarttime'];
        }
        if (isset($map['MultiZone'])) {
            if (!empty($map['MultiZone'])) {
                $model->multiZone = [];
                $n = 0;
                foreach ($map['MultiZone'] as $item) {
                    $model->multiZone[$n++] = null !== $item ? multiZone::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ObjectStoreSize'])) {
            $model->objectStoreSize = $map['ObjectStoreSize'];
        }
        if (isset($map['ParentInstance'])) {
            $model->parentInstance = $map['ParentInstance'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceCpu'])) {
            $model->resourceCpu = $map['ResourceCpu'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceMemory'])) {
            $model->resourceMemory = $map['ResourceMemory'];
        }
        if (isset($map['ScaleMax'])) {
            $model->scaleMax = $map['ScaleMax'];
        }
        if (isset($map['ScaleMin'])) {
            $model->scaleMin = $map['ScaleMin'];
        }
        if (isset($map['ScaleReplica'])) {
            $model->scaleReplica = $map['ScaleReplica'];
        }
        if (isset($map['Serverless'])) {
            $model->serverless = $map['Serverless'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StorageSize'])) {
            $model->storageSize = $map['StorageSize'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TenantClusterId'])) {
            $model->tenantClusterId = $map['TenantClusterId'];
        }
        if (isset($map['TenantToken'])) {
            $model->tenantToken = $map['TenantToken'];
        }
        if (isset($map['TenantUserId'])) {
            $model->tenantUserId = $map['TenantUserId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['connectionString'])) {
            $model->connectionString = $map['connectionString'];
        }

        return $model;
    }
}
