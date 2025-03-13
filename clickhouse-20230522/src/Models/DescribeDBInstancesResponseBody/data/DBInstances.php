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

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeDBInstancesResponseBody\data;

use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeDBInstancesResponseBody\data\DBInstances\tags;
use AlibabaCloud\Tea\Model;

class DBInstances extends Model
{
    /**
     * @description The user ID.
     *
     * @example 1294****
     *
     * @var string
     */
    public $aliUid;

    /**
     * @description The channel ID.
     *
     * @example 186681****
     *
     * @var string
     */
    public $bid;

    /**
     * @description The billing method. Valid values:
     *
     *   PrePaid: subscription
     *   PostPaid: pay-as-you-go
     *
     * @example PostPaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The time when the cluster was created.
     *
     * @example 2022-12-04 21:16:15
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The cluster ID.
     *
     * @example cc-xxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description Indicates whether the release protection feature is enabled for the cluster.
     *
     * @example False
     *
     * @var string
     */
    public $deletionProtection;

    /**
     * @description The cluster description.
     *
     * @example test_desc
     *
     * @var string
     */
    public $description;

    /**
     * @description The engine type.
     *
     * @example clickhouse
     *
     * @var string
     */
    public $engine;

    /**
     * @description The engine version.
     *
     * @example 22.8
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description The time when the cluster expires.
     *
     * @example 2024-02-16 11:51:06
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description The lock mode.
     *
     * @example 0
     *
     * @var string
     */
    public $lockMode;

    /**
     * @description The reason why the cluster was locked.
     *
     * @example null
     *
     * @var string
     */
    public $lockReason;

    /**
     * @description The end time of the maintenance window.
     *
     * @example 04:00:00Z
     *
     * @var string
     */
    public $maintainEndTime;

    /**
     * @description The start time of the maintenance window.
     *
     * @example 00:00Z
     *
     * @var string
     */
    public $maintainStartTime;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resource group ID.
     *
     * @example rg-acfmzy****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The maximum capacity for elastic scaling.
     *
     * @example 13
     *
     * @var int
     */
    public $scaleMax;

    /**
     * @description The minimum capacity for elastic scaling.
     *
     * @example 1
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
     * @description The tags.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The vSwitch ID.
     *
     * @example vsw-8vb5mw****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The virtual private cloud (VPC) ID.
     *
     * @example vpc-uf6kg****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The zone ID.
     *
     * @example cn-hangzhou-i
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
        'description' => 'Description',
        'engine' => 'Engine',
        'engineVersion' => 'EngineVersion',
        'expireTime' => 'ExpireTime',
        'lockMode' => 'LockMode',
        'lockReason' => 'LockReason',
        'maintainEndTime' => 'MaintainEndTime',
        'maintainStartTime' => 'MaintainStartTime',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'scaleMax' => 'ScaleMax',
        'scaleMin' => 'ScaleMin',
        'status' => 'Status',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
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
     * @return DBInstances
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
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
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
