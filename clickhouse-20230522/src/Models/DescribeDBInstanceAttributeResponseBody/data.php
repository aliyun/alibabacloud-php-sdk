<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeDBInstanceAttributeResponseBody;

use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeDBInstanceAttributeResponseBody\data\multiZones;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeDBInstanceAttributeResponseBody\data\nodes;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeDBInstanceAttributeResponseBody\data\tags;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account.
     *
     * @example 140692647406****
     *
     * @var int
     */
    public $aliUid;

    /**
     * @description The channel ID.
     *
     * @example PD39050615820269****
     *
     * @var string
     */
    public $bid;

    /**
     * @description The billing method. Valid values:
     *
     *   Prepaid: subscription
     *   PostPaid: pay-as-you-go
     *
     * @example PrePaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The time when the cluster was created. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format.
     *
     * @example 2023-09-14T08:14:48Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The cluster ID.
     *
     * @example cc-bp100p4q1g9z3****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description Indicates whether the release protection feature is enabled for the cluster.
     *
     * @example 0/1
     *
     * @var bool
     */
    public $deletionProtection;

    /**
     * @description 集群可用区部署状态，支持single_az和multi_az两种类型。
     *
     * - single_az：server部署到主可用区ZoneId。
     * - multi_az：server部署到多可用区MultiZones。
     *
     * keeper始终部署到多可用区MultiZones。
     *
     * @example single_az
     *
     * @var string
     */
    public $deploySchema;

    /**
     * @description The cluster description.
     *
     * @example Used for test
     *
     * @var string
     */
    public $description;

    /**
     * @description The disabled database ports. Multiple database ports are separated by commas (,).
     *
     * @example 9001,8123
     *
     * @var string
     */
    public $disabledPorts;

    /**
     * @description The engine type.
     *
     * @example clickhouse
     *
     * @var string
     */
    public $engine;

    /**
     * @description The minor engine version of the cluster.
     *
     * @example 23.8.1.41495_6
     *
     * @var string
     */
    public $engineMinorVersion;

    /**
     * @description The engine version.
     *
     * @example 23.8
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description The time when the cluster expires. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format.
     *
     * >  Pay-as-you-go clusters never expire. If the cluster is a pay-as-you-go cluster, an empty string is returned for this parameter.
     *
     * @example 2024-04-17T08:14:48Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description The latest minor engine version.
     *
     * @example 23.8.1.41495_6
     *
     * @var string
     */
    public $latestEngineMinorVersion;

    /**
     * @description The lock mode of the cluster.
     *
     * @example 0
     *
     * @var string
     */
    public $lockMode;

    /**
     * @description The reason why the cluster was locked.
     *
     * @example nolock
     *
     * @var string
     */
    public $lockReason;

    /**
     * @description The end time of the maintenance window.
     *
     * @example 21:00
     *
     * @var string
     */
    public $maintainEndTime;

    /**
     * @description The start time of the maintenance window.
     *
     * @example 12:00
     *
     * @var string
     */
    public $maintainStartTime;

    /**
     * @description 多可用信息。
     *
     * @var multiZones[]
     */
    public $multiZones;

    /**
     * @description The nodes.
     *
     * @var nodes[]
     */
    public $nodes;

    /**
     * @description The size of the object storage space.
     *
     * @example 13
     *
     * @var string
     */
    public $objectStoreSize;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resource ID.
     *
     * @example rg-acfmzygvt54****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The maximum capacity for elastic scaling.
     *
     * @example 32
     *
     * @var int
     */
    public $scaleMax;

    /**
     * @description The minimum capacity for elastic scaling.
     *
     * @example 8
     *
     * @var int
     */
    public $scaleMin;

    /**
     * @description The cluster status.
     *
     * @example active
     *
     * @var string
     */
    public $status;

    /**
     * @description The size of the storage space. Unit: GB.
     *
     * @example 12
     *
     * @var int
     */
    public $storageSize;

    /**
     * @description The storage type.
     *
     * @example 100
     *
     * @var string
     */
    public $storageType;

    /**
     * @description The details of the tags.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The vSwitch ID.
     *
     * @example vsw-uf67ij56zm9x4uc6hmilg
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The virtual private cloud (VPC) ID.
     *
     * @example vpc-wz9duj8xd6r1gzhsg*****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The zone ID.
     *
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'aliUid' => 'AliUid',
        'bid' => 'Bid',
        'chargeType' => 'ChargeType',
        'createTime' => 'CreateTime',
        'DBInstanceId' => 'DBInstanceId',
        'deletionProtection' => 'DeletionProtection',
        'deploySchema' => 'DeploySchema',
        'description' => 'Description',
        'disabledPorts' => 'DisabledPorts',
        'engine' => 'Engine',
        'engineMinorVersion' => 'EngineMinorVersion',
        'engineVersion' => 'EngineVersion',
        'expireTime' => 'ExpireTime',
        'latestEngineMinorVersion' => 'LatestEngineMinorVersion',
        'lockMode' => 'LockMode',
        'lockReason' => 'LockReason',
        'maintainEndTime' => 'MaintainEndTime',
        'maintainStartTime' => 'MaintainStartTime',
        'multiZones' => 'MultiZones',
        'nodes' => 'Nodes',
        'objectStoreSize' => 'ObjectStoreSize',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'scaleMax' => 'ScaleMax',
        'scaleMin' => 'ScaleMin',
        'status' => 'Status',
        'storageSize' => 'StorageSize',
        'storageType' => 'StorageType',
        'tags' => 'Tags',
        'vSwitchId' => 'VSwitchId',
        'vpcId' => 'VpcId',
        'zoneId' => 'ZoneId',
    ];

    public function validate(): void {}

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
        if (null !== $this->deploySchema) {
            $res['DeploySchema'] = $this->deploySchema;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->disabledPorts) {
            $res['DisabledPorts'] = $this->disabledPorts;
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
        if (null !== $this->multiZones) {
            $res['MultiZones'] = [];
            if (null !== $this->multiZones && \is_array($this->multiZones)) {
                $n = 0;
                foreach ($this->multiZones as $item) {
                    $res['MultiZones'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['DeploySchema'])) {
            $model->deploySchema = $map['DeploySchema'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DisabledPorts'])) {
            $model->disabledPorts = $map['DisabledPorts'];
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
        if (isset($map['MultiZones'])) {
            if (!empty($map['MultiZones'])) {
                $model->multiZones = [];
                $n = 0;
                foreach ($map['MultiZones'] as $item) {
                    $model->multiZones[$n++] = null !== $item ? multiZones::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Nodes'])) {
            if (!empty($map['Nodes'])) {
                $model->nodes = [];
                $n = 0;
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
                $n = 0;
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
