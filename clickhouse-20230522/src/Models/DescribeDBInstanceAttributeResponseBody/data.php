<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeDBInstanceAttributeResponseBody;

use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeDBInstanceAttributeResponseBody\data\nodes;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeDBInstanceAttributeResponseBody\data\tags;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 140692647406****
     *
     * @var int
     */
    public $aliUid;

    /**
     * @example PD39050615820269****
     *
     * @var string
     */
    public $bid;

    /**
     * @example PrePaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @example 2023-09-14T08:14:48Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example cc-bp100p4q1g9z3****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @example 0/1
     *
     * @var bool
     */
    public $deletionProtection;

    /**
     * @var string
     */
    public $description;

    /**
     * @example clickhouse
     *
     * @var string
     */
    public $engine;

    /**
     * @example 23.8.1.41495_6
     *
     * @var string
     */
    public $engineMinorVersion;

    /**
     * @example 23.8
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @example 2024-04-17T08:14:48Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $latestEngineMinorVersion;

    /**
     * @example 0
     *
     * @var string
     */
    public $lockMode;

    /**
     * @example nolock
     *
     * @var string
     */
    public $lockReason;

    /**
     * @example 21:00
     *
     * @var string
     */
    public $maintainEndTime;

    /**
     * @example 12:00
     *
     * @var string
     */
    public $maintainStartTime;

    /**
     * @var nodes[]
     */
    public $nodes;

    /**
     * @example 13
     *
     * @var string
     */
    public $objectStoreSize;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example rg-acfmzygvt54****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example 32
     *
     * @var int
     */
    public $scaleMax;

    /**
     * @example 8
     *
     * @var int
     */
    public $scaleMin;

    /**
     * @example active
     *
     * @var string
     */
    public $status;

    /**
     * @example 12
     *
     * @var int
     */
    public $storageSize;

    /**
     * @example 100
     *
     * @var string
     */
    public $storageType;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @example vsw-uf67ij56zm9x4uc6hmilg
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description VPC ID。
     *
     * @example vpc-wz9duj8xd6r1gzhsg*****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'aliUid'                   => 'AliUid',
        'bid'                      => 'Bid',
        'chargeType'               => 'ChargeType',
        'createTime'               => 'CreateTime',
        'DBInstanceId'             => 'DBInstanceId',
        'deletionProtection'       => 'DeletionProtection',
        'description'              => 'Description',
        'engine'                   => 'Engine',
        'engineMinorVersion'       => 'EngineMinorVersion',
        'engineVersion'            => 'EngineVersion',
        'expireTime'               => 'ExpireTime',
        'latestEngineMinorVersion' => 'LatestEngineMinorVersion',
        'lockMode'                 => 'LockMode',
        'lockReason'               => 'LockReason',
        'maintainEndTime'          => 'MaintainEndTime',
        'maintainStartTime'        => 'MaintainStartTime',
        'nodes'                    => 'Nodes',
        'objectStoreSize'          => 'ObjectStoreSize',
        'regionId'                 => 'RegionId',
        'resourceGroupId'          => 'ResourceGroupId',
        'scaleMax'                 => 'ScaleMax',
        'scaleMin'                 => 'ScaleMin',
        'status'                   => 'Status',
        'storageSize'              => 'StorageSize',
        'storageType'              => 'StorageType',
        'tags'                     => 'Tags',
        'vSwitchId'                => 'VSwitchId',
        'vpcId'                    => 'VpcId',
        'zoneId'                   => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->bid) {
            $res['Bid'] = $this->bid;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->deletionProtection) {
            $res['DeletionProtection'] = $this->deletionProtection;
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
        if (null !== $this->latestEngineMinorVersion) {
            $res['LatestEngineMinorVersion'] = $this->latestEngineMinorVersion;
        }
        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }
        if (null !== $this->lockReason) {
            $res['LockReason'] = $this->lockReason;
        }
        if (null !== $this->maintainEndTime) {
            $res['MaintainEndTime'] = $this->maintainEndTime;
        }
        if (null !== $this->maintainStartTime) {
            $res['MaintainStartTime'] = $this->maintainStartTime;
        }
        if (null !== $this->nodes) {
            $res['Nodes'] = [];
            if (null !== $this->nodes && \is_array($this->nodes)) {
                $n = 0;
                foreach ($this->nodes as $item) {
                    $res['Nodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->objectStoreSize) {
            $res['ObjectStoreSize'] = $this->objectStoreSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->scaleMax) {
            $res['ScaleMax'] = $this->scaleMax;
        }
        if (null !== $this->scaleMin) {
            $res['ScaleMin'] = $this->scaleMin;
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
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
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
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['Bid'])) {
            $model->bid = $map['Bid'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DeletionProtection'])) {
            $model->deletionProtection = $map['DeletionProtection'];
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
        if (isset($map['LatestEngineMinorVersion'])) {
            $model->latestEngineMinorVersion = $map['LatestEngineMinorVersion'];
        }
        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }
        if (isset($map['LockReason'])) {
            $model->lockReason = $map['LockReason'];
        }
        if (isset($map['MaintainEndTime'])) {
            $model->maintainEndTime = $map['MaintainEndTime'];
        }
        if (isset($map['MaintainStartTime'])) {
            $model->maintainStartTime = $map['MaintainStartTime'];
        }
        if (isset($map['Nodes'])) {
            if (!empty($map['Nodes'])) {
                $model->nodes = [];
                $n            = 0;
                foreach ($map['Nodes'] as $item) {
                    $model->nodes[$n++] = null !== $item ? nodes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ObjectStoreSize'])) {
            $model->objectStoreSize = $map['ObjectStoreSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ScaleMax'])) {
            $model->scaleMax = $map['ScaleMax'];
        }
        if (isset($map['ScaleMin'])) {
            $model->scaleMin = $map['ScaleMin'];
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
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
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
