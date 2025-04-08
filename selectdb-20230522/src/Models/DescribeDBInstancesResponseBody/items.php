<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeDBInstancesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeDBInstancesResponseBody\items\multiZone;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeDBInstancesResponseBody\items\tags;

class items extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var int
     */
    public $clusterCount;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $deployScheme;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $engineMinorVersion;

    /**
     * @var string
     */
    public $engineVersion;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $instanceUsedType;

    /**
     * @var bool
     */
    public $isDeleted;

    /**
     * @var int
     */
    public $lockMode;

    /**
     * @var string
     */
    public $lockReason;

    /**
     * @var string
     */
    public $maintainEndTimeStr;

    /**
     * @var string
     */
    public $maintainEndtime;

    /**
     * @var string
     */
    public $maintainStartTimeStr;

    /**
     * @var string
     */
    public $maintainStarttime;

    /**
     * @var multiZone[]
     */
    public $multiZone;

    /**
     * @var int
     */
    public $objectStoreSize;

    /**
     * @var string
     */
    public $parentInstance;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $resourceCpu;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var int
     */
    public $resourceMemory;

    /**
     * @var int
     */
    public $scaleMax;

    /**
     * @var int
     */
    public $scaleMin;

    /**
     * @var int
     */
    public $scaleReplica;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $storageSize;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $tenantClusterId;

    /**
     * @var string
     */
    public $tenantToken;

    /**
     * @var string
     */
    public $tenantUserId;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vswitchId;

    /**
     * @var string
     */
    public $zoneId;

    /**
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

    public function validate()
    {
        if (\is_array($this->multiZone)) {
            Model::validateArray($this->multiZone);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->multiZone)) {
                $res['MultiZone'] = [];
                $n1 = 0;
                foreach ($this->multiZone as $item1) {
                    $res['MultiZone'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['MultiZone'] as $item1) {
                    $model->multiZone[$n1++] = multiZone::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
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
