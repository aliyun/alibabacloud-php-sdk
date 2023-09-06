<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\SetAutoScaleConfigRequest;

use AlibabaCloud\SDK\EHPC\V20180412\Models\SetAutoScaleConfigRequest\queues\dataDisks;
use AlibabaCloud\SDK\EHPC\V20180412\Models\SetAutoScaleConfigRequest\queues\instanceTypes;
use AlibabaCloud\Tea\Model;

class queues extends Model
{
    /**
     * @var bool
     */
    public $autoMinNodesPerCycle;

    /**
     * @description The list of data disks.
     *
     * @var dataDisks[]
     */
    public $dataDisks;

    /**
     * @description Specifies whether the queue enables auto scale-out. Valid value:
     *
     *   true: enables auto scale-out.
     *   false: disables auto scale-out.
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $enableAutoGrow;

    /**
     * @description Specifies whether the queue enables auto scale-in. Valid value:
     *
     *   true: enables auto scale-in.
     *   false: disables auto scale-in.
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $enableAutoShrink;

    /**
     * @description The hostname prefix of the host that is used to perform scale-out for the queue. You can manage compute nodes that have a specified hostname prefix.
     *
     * Valid values of N: 1 to 8.
     * @example compute
     *
     * @var string
     */
    public $hostNamePrefix;

    /**
     * @description The hostname suffix of the host that is used to perform scale-out for the queue. You can manage nodes that have a specified hostname suffix.
     *
     * Valid values of N: 1 to 8.
     * @example 000
     *
     * @var string
     */
    public $hostNameSuffix;

    /**
     * @description The instance type of the compute nodes that are automatically added in the queues. Valid values of N: 1 to 8.
     *
     * @example ecs.n1.medium
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The instance types of the nodes in the queue.
     *
     * @var instanceTypes[]
     */
    public $instanceTypes;

    /**
     * @description The maximum number of compute nodes that can be added to the queue. Valid values: 0 to 500.
     *
     * Default value: 100.
     * @example 30
     *
     * @var int
     */
    public $maxNodesInQueue;

    /**
     * @description The maximum number of compute nodes that can be added in each round of scale-out. Valid values: 0 to 99.
     *
     * Default value: 0.
     * @example 20
     *
     * @var int
     */
    public $maxNodesPerCycle;

    /**
     * @description The minimum number of compute nodes that can be removed in the queue. Valid values: 0 to 50.
     *
     * Default value: 0.
     * @example 0
     *
     * @var int
     */
    public $minNodesInQueue;

    /**
     * @description The minimum number of compute nodes that can be added in each round of scale-out. Valid values: 1 to 99.
     *
     * > The configuration takes effect only for the minimum compute nodes that can be added in the current round.
     * @example 5
     *
     * @var int
     */
    public $minNodesPerCycle;

    /**
     * @description The image ID of the queue where the scale-out is performed. Valid values of N: 1 to 8.
     *
     * >
     *
     *   If you set both `Queues.N.QueueImageId` and `ImageId`, `Queues.N.QueueImageId` prevails.
     *
     *   If you set `Queues.N.QueueImageId` or `ImageId`, the parameter that you set takes effect.
     *   If you leave both `Queues.N.QueueImageId` and `ImageId` empty, the image that was specified when you created the cluster or the last time when you scaled out the cluster is used by default.
     *
     * @example centos_7_03_64_20G_alibase_201708****
     *
     * @var string
     */
    public $queueImageId;

    /**
     * @description The name of the queue. The names of N queues can be set at the same time. Valid values of N: 1 to 8.
     *
     * @example cluster1
     *
     * @var string
     */
    public $queueName;

    /**
     * @description Whether the instances are unordered. Valid values:
     *
     *   true: yes
     *   false: no
     *
     * >  If you set this parameter to true, the system selects instance types in descending order of the number of instances in stock during auto scaling.
     * @example false
     *
     * @var bool
     */
    public $sortedByInventory;

    /**
     * @description The maximum hourly price of the compute nodes that are automatically added to the queue. The value can be accurate to three decimal places. The parameter takes effect only when `Queues.N.SpotStrategy` is set to `SpotWithPriceLimit`.
     *
     * Valid values of N: 1 to 8.
     * @example 0.662
     *
     * @var float
     */
    public $spotPriceLimit;

    /**
     * @description The preemption policy of the compute node that is automatically added to the queue. Valid values of N: 1 to 8.
     *
     * Valid values:
     *
     *   NoSpot: The compute nodes is created as a pay-as-you-go instance.
     *   SpotWithPriceLimit: The compute node is created as a preemptible instance that has a user-defined maximum hourly price.
     *   SpotAsPriceGo: The compute node is created as a preemptible instance for which the market price at the time of purchase is used as the bid price.
     *
     * Default value: NoSpot.
     * @example NoSpot
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @description The type of the system disk specified for the compute nodes that are added in the queue. Valid values:
     *
     *   cloud_efficiency: ultra disk
     *   cloud_ssd: standard SSD
     *   cloud_essd: enhanced SSD (ESSD)
     *   cloud: basic disk. Disks of this type are retired.
     *
     * Default value: cloud_efficiency.
     * @example cloud_efficiency
     *
     * @var string
     */
    public $systemDiskCategory;

    /**
     * @description The performance level of the system disk specified for the compute nodes that are added to the queue. Valid values:
     *
     *   PL0: A single ESSD can deliver up to 10,000 random read/write IOPS.
     *   PL1: A single ESSD can deliver up to 50,000 IOPS of random read/write.
     *   PL2: A single ESSD can deliver up to 100,000 random read/write IOPS.
     *   PL3: A single ESSD can deliver up to 1,000,000 random read/write IOPS.
     *
     * Default value: PL1.
     * @example PL1
     *
     * @var string
     */
    public $systemDiskLevel;

    /**
     * @description The size of the system disk specified for the compute nodes that are added in the queue. Unit: GB.
     *
     * Default value: 40.
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
            $res['DataDisks'] = [];
            if (null !== $this->dataDisks && \is_array($this->dataDisks)) {
                $n = 0;
                foreach ($this->dataDisks as $item) {
                    $res['DataDisks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
            $res['InstanceTypes'] = [];
            if (null !== $this->instanceTypes && \is_array($this->instanceTypes)) {
                $n = 0;
                foreach ($this->instanceTypes as $item) {
                    $res['InstanceTypes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return queues
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoMinNodesPerCycle'])) {
            $model->autoMinNodesPerCycle = $map['AutoMinNodesPerCycle'];
        }
        if (isset($map['DataDisks'])) {
            if (!empty($map['DataDisks'])) {
                $model->dataDisks = [];
                $n                = 0;
                foreach ($map['DataDisks'] as $item) {
                    $model->dataDisks[$n++] = null !== $item ? dataDisks::fromMap($item) : $item;
                }
            }
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
            if (!empty($map['InstanceTypes'])) {
                $model->instanceTypes = [];
                $n                    = 0;
                foreach ($map['InstanceTypes'] as $item) {
                    $model->instanceTypes[$n++] = null !== $item ? instanceTypes::fromMap($item) : $item;
                }
            }
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
