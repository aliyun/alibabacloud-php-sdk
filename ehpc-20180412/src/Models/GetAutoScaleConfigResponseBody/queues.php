<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\GetAutoScaleConfigResponseBody;

use AlibabaCloud\SDK\EHPC\V20180412\Models\GetAutoScaleConfigResponseBody\queues\instanceTypes;
use AlibabaCloud\Tea\Model;

class queues extends Model
{
    /**
     * @var int
     */
    public $minNodesInQueue;

    /**
     * @var int
     */
    public $maxNodesInQueue;

    /**
     * @var bool
     */
    public $enableAutoShrink;

    /**
     * @var string
     */
    public $queueName;

    /**
     * @var string
     */
    public $queueImageId;

    /**
     * @var bool
     */
    public $enableAutoGrow;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var float
     */
    public $spotPriceLimit;

    /**
     * @var instanceTypes[]
     */
    public $instanceTypes;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $spotStrategy;
    protected $_name = [
        'minNodesInQueue'  => 'MinNodesInQueue',
        'maxNodesInQueue'  => 'MaxNodesInQueue',
        'enableAutoShrink' => 'EnableAutoShrink',
        'queueName'        => 'QueueName',
        'queueImageId'     => 'QueueImageId',
        'enableAutoGrow'   => 'EnableAutoGrow',
        'resourceGroupId'  => 'ResourceGroupId',
        'spotPriceLimit'   => 'SpotPriceLimit',
        'instanceTypes'    => 'InstanceTypes',
        'instanceType'     => 'InstanceType',
        'spotStrategy'     => 'SpotStrategy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->minNodesInQueue) {
            $res['MinNodesInQueue'] = $this->minNodesInQueue;
        }
        if (null !== $this->maxNodesInQueue) {
            $res['MaxNodesInQueue'] = $this->maxNodesInQueue;
        }
        if (null !== $this->enableAutoShrink) {
            $res['EnableAutoShrink'] = $this->enableAutoShrink;
        }
        if (null !== $this->queueName) {
            $res['QueueName'] = $this->queueName;
        }
        if (null !== $this->queueImageId) {
            $res['QueueImageId'] = $this->queueImageId;
        }
        if (null !== $this->enableAutoGrow) {
            $res['EnableAutoGrow'] = $this->enableAutoGrow;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->spotPriceLimit) {
            $res['SpotPriceLimit'] = $this->spotPriceLimit;
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
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
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
        if (isset($map['MinNodesInQueue'])) {
            $model->minNodesInQueue = $map['MinNodesInQueue'];
        }
        if (isset($map['MaxNodesInQueue'])) {
            $model->maxNodesInQueue = $map['MaxNodesInQueue'];
        }
        if (isset($map['EnableAutoShrink'])) {
            $model->enableAutoShrink = $map['EnableAutoShrink'];
        }
        if (isset($map['QueueName'])) {
            $model->queueName = $map['QueueName'];
        }
        if (isset($map['QueueImageId'])) {
            $model->queueImageId = $map['QueueImageId'];
        }
        if (isset($map['EnableAutoGrow'])) {
            $model->enableAutoGrow = $map['EnableAutoGrow'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SpotPriceLimit'])) {
            $model->spotPriceLimit = $map['SpotPriceLimit'];
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
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }

        return $model;
    }
}
