<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\SetAutoScaleConfigRequest;

use AlibabaCloud\SDK\EHPC\V20180412\Models\SetAutoScaleConfigRequest\queues\dataDisks;
use AlibabaCloud\SDK\EHPC\V20180412\Models\SetAutoScaleConfigRequest\queues\instanceTypes;
use AlibabaCloud\Tea\Model;

class queues extends Model
{
    /**
     * @var dataDisks[]
     */
    public $dataDisks;

    /**
     * @example false
     *
     * @var bool
     */
    public $enableAutoGrow;

    /**
     * @example false
     *
     * @var bool
     */
    public $enableAutoShrink;

    /**
     * @example compute
     *
     * @var string
     */
    public $hostNamePrefix;

    /**
     * @example 000
     *
     * @var string
     */
    public $hostNameSuffix;

    /**
     * @example ecs.n1.medium
     *
     * @var string
     */
    public $instanceType;

    /**
     * @var instanceTypes[]
     */
    public $instanceTypes;

    /**
     * @example 30
     *
     * @var int
     */
    public $maxNodesInQueue;

    /**
     * @example 20
     *
     * @var int
     */
    public $maxNodesPerCycle;

    /**
     * @example 0
     *
     * @var int
     */
    public $minNodesInQueue;

    /**
     * @example 5
     *
     * @var int
     */
    public $minNodesPerCycle;

    /**
     * @example centos_7_03_64_20G_alibase_201708****
     *
     * @var string
     */
    public $queueImageId;

    /**
     * @example cluster1
     *
     * @var string
     */
    public $queueName;

    /**
     * @example 0.662
     *
     * @var float
     */
    public $spotPriceLimit;

    /**
     * @example NoSpot
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @example cloud_efficiency
     *
     * @var string
     */
    public $systemDiskCategory;

    /**
     * @example PL1
     *
     * @var string
     */
    public $systemDiskLevel;

    /**
     * @example 40
     *
     * @var int
     */
    public $systemDiskSize;
    protected $_name = [
        'dataDisks'          => 'DataDisks',
        'enableAutoGrow'     => 'EnableAutoGrow',
        'enableAutoShrink'   => 'EnableAutoShrink',
        'hostNamePrefix'     => 'HostNamePrefix',
        'hostNameSuffix'     => 'HostNameSuffix',
        'instanceType'       => 'InstanceType',
        'instanceTypes'      => 'InstanceTypes',
        'maxNodesInQueue'    => 'MaxNodesInQueue',
        'maxNodesPerCycle'   => 'MaxNodesPerCycle',
        'minNodesInQueue'    => 'MinNodesInQueue',
        'minNodesPerCycle'   => 'MinNodesPerCycle',
        'queueImageId'       => 'QueueImageId',
        'queueName'          => 'QueueName',
        'spotPriceLimit'     => 'SpotPriceLimit',
        'spotStrategy'       => 'SpotStrategy',
        'systemDiskCategory' => 'SystemDiskCategory',
        'systemDiskLevel'    => 'SystemDiskLevel',
        'systemDiskSize'     => 'SystemDiskSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
