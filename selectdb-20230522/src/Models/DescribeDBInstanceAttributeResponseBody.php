<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models;

use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeDBInstanceAttributeResponseBody\DBClusterList;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeDBInstanceAttributeResponseBody\tags;
use AlibabaCloud\Tea\Model;

class DescribeDBInstanceAttributeResponseBody extends Model
{
    /**
     * @description The information returned.
     *
     * @var string[]
     */
    public $canUpgradeVersions;

    /**
     * @description The billing method of the instance. Valid values:
     *
     *   **Postpaid**: pay-as-you-go.
     *   **Prepaid**: subscription.
     *
     * @example Prepaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The time when the instance was created.
     *
     * @example 2023-08-14T03:00:42Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The information about each cluster returned.
     *
     * @var DBClusterList[]
     */
    public $DBClusterList;

    /**
     * @description The instance ID.
     *
     * @example selectdb-cn-7213cjv****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The description of the instance.
     *
     * @example test
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
     * @description The minor kernel version number of the instance.
     *
     * @example 3.0.1
     *
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
     * @description The time when the instance expires.
     *
     * @example 2023-09-17T00:00Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description The time when the instance was last modified, such as when you restarted the instance or applied for a public endpoint for the instance. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mmZ format. The time must be in UTC.
     *
     * @example 2023-08-17T09:58Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The lock mode of the instance. Set the value to **lock**, which specifies that the instance is locked when it automatically expires or has an overdue payment.
     *
     * @example lock
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
     * @description The end time of the instance maintenance window.
     *
     * @var string
     */
    public $maintainEndtime;

    /**
     * @description The start time of the instance maintenance window.
     *
     * @var string
     */
    public $maintainStarttime;

    /**
     * @description The storage capacity of the instance.
     *
     * @example 0
     *
     * @var int
     */
    public $objectStoreSize;

    /**
     * @description 地域ID。
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The request ID.
     *
     * @example 06758CAB-1204-5852-A471-29C87D5C1D0F
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of CPU cores of the instance.
     *
     * @example 8
     *
     * @var int
     */
    public $resourceCpu;

    /**
     * @description The ID of the resource group to which the instance belongs.
     *
     * @example rg-aekzbck4asz3dsa
     *
     * @var string
     */
    public $resourceGroupId;

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
     * @example 400
     *
     * @var int
     */
    public $storageSize;

    /**
     * @description The zone ID.
     *
     * @example cn-beijing-h-aliyun
     *
     * @var string
     */
    public $subDomain;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @description VPC ID。
     *
     * @example vpc-bp175iuvg8nxqraf2****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description 实例可用区ID
     *
     * @example cn-beijing-h
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'canUpgradeVersions' => 'CanUpgradeVersions',
        'chargeType'         => 'ChargeType',
        'createTime'         => 'CreateTime',
        'DBClusterList'      => 'DBClusterList',
        'DBInstanceId'       => 'DBInstanceId',
        'description'        => 'Description',
        'engine'             => 'Engine',
        'engineMinorVersion' => 'EngineMinorVersion',
        'engineVersion'      => 'EngineVersion',
        'expireTime'         => 'ExpireTime',
        'gmtModified'        => 'GmtModified',
        'lockMode'           => 'LockMode',
        'lockReason'         => 'LockReason',
        'maintainEndtime'    => 'MaintainEndtime',
        'maintainStarttime'  => 'MaintainStarttime',
        'objectStoreSize'    => 'ObjectStoreSize',
        'regionId'           => 'RegionId',
        'requestId'          => 'RequestId',
        'resourceCpu'        => 'ResourceCpu',
        'resourceGroupId'    => 'ResourceGroupId',
        'status'             => 'Status',
        'storageSize'        => 'StorageSize',
        'subDomain'          => 'SubDomain',
        'tags'               => 'Tags',
        'vpcId'              => 'VpcId',
        'zoneId'             => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->canUpgradeVersions) {
            $res['CanUpgradeVersions'] = $this->canUpgradeVersions;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->DBClusterList) {
            $res['DBClusterList'] = [];
            if (null !== $this->DBClusterList && \is_array($this->DBClusterList)) {
                $n = 0;
                foreach ($this->DBClusterList as $item) {
                    $res['DBClusterList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
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
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }
        if (null !== $this->lockReason) {
            $res['LockReason'] = $this->lockReason;
        }
        if (null !== $this->maintainEndtime) {
            $res['MaintainEndtime'] = $this->maintainEndtime;
        }
        if (null !== $this->maintainStarttime) {
            $res['MaintainStarttime'] = $this->maintainStarttime;
        }
        if (null !== $this->objectStoreSize) {
            $res['ObjectStoreSize'] = $this->objectStoreSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceCpu) {
            $res['ResourceCpu'] = $this->resourceCpu;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->storageSize) {
            $res['StorageSize'] = $this->storageSize;
        }
        if (null !== $this->subDomain) {
            $res['SubDomain'] = $this->subDomain;
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
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBInstanceAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CanUpgradeVersions'])) {
            if (!empty($map['CanUpgradeVersions'])) {
                $model->canUpgradeVersions = $map['CanUpgradeVersions'];
            }
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DBClusterList'])) {
            if (!empty($map['DBClusterList'])) {
                $model->DBClusterList = [];
                $n                    = 0;
                foreach ($map['DBClusterList'] as $item) {
                    $model->DBClusterList[$n++] = null !== $item ? DBClusterList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
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
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }
        if (isset($map['LockReason'])) {
            $model->lockReason = $map['LockReason'];
        }
        if (isset($map['MaintainEndtime'])) {
            $model->maintainEndtime = $map['MaintainEndtime'];
        }
        if (isset($map['MaintainStarttime'])) {
            $model->maintainStarttime = $map['MaintainStarttime'];
        }
        if (isset($map['ObjectStoreSize'])) {
            $model->objectStoreSize = $map['ObjectStoreSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceCpu'])) {
            $model->resourceCpu = $map['ResourceCpu'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StorageSize'])) {
            $model->storageSize = $map['StorageSize'];
        }
        if (isset($map['SubDomain'])) {
            $model->subDomain = $map['SubDomain'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
