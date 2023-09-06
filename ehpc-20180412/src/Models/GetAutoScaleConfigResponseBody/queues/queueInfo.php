<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\GetAutoScaleConfigResponseBody\queues;

use AlibabaCloud\SDK\EHPC\V20180412\Models\GetAutoScaleConfigResponseBody\queues\queueInfo\dataDisks;
use AlibabaCloud\SDK\EHPC\V20180412\Models\GetAutoScaleConfigResponseBody\queues\queueInfo\instanceTypes;
use AlibabaCloud\Tea\Model;

class queueInfo extends Model
{
    /**
     * @var bool
     */
    public $autoMinNodesPerCycle;

    /**
     * @description The list of data disks.
     *
     * @var dataDisks
     */
    public $dataDisks;

    /**
     * @description Indicates whether the queue enabled auto scale-out. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $enableAutoGrow;

    /**
     * @description Indicates whether the queue enabled auto scale-in. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $enableAutoShrink;

    /**
     * @description The prefix of the queue name. You can query queues that have a specified prefix.
     *
     * @example compute
     *
     * @var string
     */
    public $hostNamePrefix;

    /**
     * @description The suffix of the queue name. You can query queues that have a specified suffix.
     *
     * @example 000
     *
     * @var string
     */
    public $hostNameSuffix;

    /**
     * @description The instance type of the compute nodes that were automatically added in the queue.
     *
     * @example ecs.sn1ne.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The specification information of the compute nodes.
     *
     * @var instanceTypes
     */
    public $instanceTypes;

    /**
     * @description The maximum number of compute nodes that can be added in a queue. Valid values: 0 to 500.
     *
     * @example 100
     *
     * @var int
     */
    public $maxNodesInQueue;

    /**
     * @description The maximum number of compute nodes that can be added in each round of an auto scale-out task. Valid values: 0 to 99.
     *
     * Default value: 0.
     * @example 20
     *
     * @var int
     */
    public $maxNodesPerCycle;

    /**
     * @description The minimum number of compute nodes that can be retained in a queue. Valid values: 0 to 50.
     *
     * @example 10
     *
     * @var int
     */
    public $minNodesInQueue;

    /**
     * @description The minimum number of compute nodes that can be added in each round of an auto scale-out task. Valid values: 1 to 99.
     *
     * > The configuration takes effect only for the minimum compute nodes that can be added in the current round.
     * @example 5
     *
     * @var int
     */
    public $minNodesPerCycle;

    /**
     * @description The image ID of the compute nodes in the queue.
     *
     * @example centos_7_06_64_20G_alibase_2019071****
     *
     * @var string
     */
    public $queueImageId;

    /**
     * @description The name of the queue.
     *
     * @example workq
     *
     * @var string
     */
    public $queueName;

    /**
     * @description The ID of the resource group to which the compute nodes belong.
     *
     * @example rg-acfmxp7uc24****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example false
     *
     * @var bool
     */
    public $sortedByInventory;

    /**
     * @description The maximum hourly price of the compute nodes. The value can be accurate to three decimal places. The parameter takes effect only when SpotStrategy is set to SpotWithPriceLimit.
     *
     * @example 0.062
     *
     * @var float
     */
    public $spotPriceLimit;

    /**
     * @description The preemption policy of the compute nodes. Valid values:
     *
     *   NoSpot: The compute nodes are pay-as-you-go instances.
     *   SpotWithPriceLimit: The compute nodes are preemptible instances that have a user-defined maximum hourly price.
     *   SpotAsPriceGo: The compute nodes are preemptible instances for which the market price at the time of purchase is used as the bid price.
     *
     * @example NoSpot
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @description The type of the system disk. Valid values:
     *
     *   cloud_efficiency: ultra disk
     *   cloud_ssd: SSD
     *   cloud_essd: ESSD
     *   cloud: basic disk
     *
     * @example cloud_efficiency
     *
     * @var string
     */
    public $systemDiskCategory;

    /**
     * @description The performance level of the system disk. Valid values:
     *
     *   PL0: A single ESSD can deliver up to 10,000 random read/write IOPS.
     *   PL1: A single ESSD can deliver up to 50,000 random read/write IOPS.
     *   PL2: A single ESSD can deliver up to 100,000 random read/write IOPS.
     *   PL3: A single ESSD can deliver up to 1,000,000 random read/write IOPS.
     *
     * @example PL1
     *
     * @var string
     */
    public $systemDiskLevel;

    /**
     * @description The size of the system disk. Unit: GB. Valid values: 40 to 500.
     *
     * @example 40
     *
     * @var int
     */
    public $systemDiskSize;
    protected $_name = [
        'autoMinNodesPerCycle' => 'AutoMinNodesPerCycle',
        'dataDisks'            => 'DataDisks',
        'enableAutoGrow'       => 'EnableAutoGrow',
        'enableAutoShrink'     => 'EnableAutoShrink',
        'hostNamePrefix'       => 'HostNamePrefix',
        'hostNameSuffix'       => 'HostNameSuffix',
        'instanceType'         => 'InstanceType',
        'instanceTypes'        => 'InstanceTypes',
        'maxNodesInQueue'      => 'MaxNodesInQueue',
        'maxNodesPerCycle'     => 'MaxNodesPerCycle',
        'minNodesInQueue'      => 'MinNodesInQueue',
        'minNodesPerCycle'     => 'MinNodesPerCycle',
        'queueImageId'         => 'QueueImageId',
        'queueName'            => 'QueueName',
        'resourceGroupId'      => 'ResourceGroupId',
        'sortedByInventory'    => 'SortedByInventory',
        'spotPriceLimit'       => 'SpotPriceLimit',
        'spotStrategy'         => 'SpotStrategy',
        'systemDiskCategory'   => 'SystemDiskCategory',
        'systemDiskLevel'      => 'SystemDiskLevel',
        'systemDiskSize'       => 'SystemDiskSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoMinNodesPerCycle) {
            $res['AutoMinNodesPerCycle'] = $this->autoMinNodesPerCycle;
        }
        if (null !== $this->dataDisks) {
            $res['DataDisks'] = null !== $this->dataDisks ? $this->dataDisks->toMap() : null;
        }
        if (null !== $this->enableAutoGrow) {
            $res['EnableAutoGrow'] = $this->enableAutoGrow;
        }
        if (null !== $this->enableAutoShrink) {
            $res['EnableAutoShrink'] = $this->enableAutoShrink;
        }
        if (null !== $this->hostNamePrefix) {
            $res['HostNamePrefix'] = $this->hostNamePrefix;
        }
        if (null !== $this->hostNameSuffix) {
            $res['HostNameSuffix'] = $this->hostNameSuffix;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->instanceTypes) {
            $res['InstanceTypes'] = null !== $this->instanceTypes ? $this->instanceTypes->toMap() : null;
        }
        if (null !== $this->maxNodesInQueue) {
            $res['MaxNodesInQueue'] = $this->maxNodesInQueue;
        }
        if (null !== $this->maxNodesPerCycle) {
            $res['MaxNodesPerCycle'] = $this->maxNodesPerCycle;
        }
        if (null !== $this->minNodesInQueue) {
            $res['MinNodesInQueue'] = $this->minNodesInQueue;
        }
        if (null !== $this->minNodesPerCycle) {
            $res['MinNodesPerCycle'] = $this->minNodesPerCycle;
        }
        if (null !== $this->queueImageId) {
            $res['QueueImageId'] = $this->queueImageId;
        }
        if (null !== $this->queueName) {
            $res['QueueName'] = $this->queueName;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->sortedByInventory) {
            $res['SortedByInventory'] = $this->sortedByInventory;
        }
        if (null !== $this->spotPriceLimit) {
            $res['SpotPriceLimit'] = $this->spotPriceLimit;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }
        if (null !== $this->systemDiskCategory) {
            $res['SystemDiskCategory'] = $this->systemDiskCategory;
        }
        if (null !== $this->systemDiskLevel) {
            $res['SystemDiskLevel'] = $this->systemDiskLevel;
        }
        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return queueInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoMinNodesPerCycle'])) {
            $model->autoMinNodesPerCycle = $map['AutoMinNodesPerCycle'];
        }
        if (isset($map['DataDisks'])) {
            $model->dataDisks = dataDisks::fromMap($map['DataDisks']);
        }
        if (isset($map['EnableAutoGrow'])) {
            $model->enableAutoGrow = $map['EnableAutoGrow'];
        }
        if (isset($map['EnableAutoShrink'])) {
            $model->enableAutoShrink = $map['EnableAutoShrink'];
        }
        if (isset($map['HostNamePrefix'])) {
            $model->hostNamePrefix = $map['HostNamePrefix'];
        }
        if (isset($map['HostNameSuffix'])) {
            $model->hostNameSuffix = $map['HostNameSuffix'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['InstanceTypes'])) {
            $model->instanceTypes = instanceTypes::fromMap($map['InstanceTypes']);
        }
        if (isset($map['MaxNodesInQueue'])) {
            $model->maxNodesInQueue = $map['MaxNodesInQueue'];
        }
        if (isset($map['MaxNodesPerCycle'])) {
            $model->maxNodesPerCycle = $map['MaxNodesPerCycle'];
        }
        if (isset($map['MinNodesInQueue'])) {
            $model->minNodesInQueue = $map['MinNodesInQueue'];
        }
        if (isset($map['MinNodesPerCycle'])) {
            $model->minNodesPerCycle = $map['MinNodesPerCycle'];
        }
        if (isset($map['QueueImageId'])) {
            $model->queueImageId = $map['QueueImageId'];
        }
        if (isset($map['QueueName'])) {
            $model->queueName = $map['QueueName'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SortedByInventory'])) {
            $model->sortedByInventory = $map['SortedByInventory'];
        }
        if (isset($map['SpotPriceLimit'])) {
            $model->spotPriceLimit = $map['SpotPriceLimit'];
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }
        if (isset($map['SystemDiskCategory'])) {
            $model->systemDiskCategory = $map['SystemDiskCategory'];
        }
        if (isset($map['SystemDiskLevel'])) {
            $model->systemDiskLevel = $map['SystemDiskLevel'];
        }
        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }

        return $model;
    }
}
