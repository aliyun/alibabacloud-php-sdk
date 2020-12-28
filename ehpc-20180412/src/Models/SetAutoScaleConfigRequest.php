<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\SetAutoScaleConfigRequest\queues;
use AlibabaCloud\Tea\Model;

class SetAutoScaleConfigRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var bool
     */
    public $enableAutoGrow;

    /**
     * @var bool
     */
    public $enableAutoShrink;

    /**
     * @var int
     */
    public $growIntervalInMinutes;

    /**
     * @var int
     */
    public $shrinkIntervalInMinutes;

    /**
     * @var int
     */
    public $shrinkIdleTimes;

    /**
     * @var int
     */
    public $growTimeoutInMinutes;

    /**
     * @var int
     */
    public $extraNodesGrowRatio;

    /**
     * @var int
     */
    public $growRatio;

    /**
     * @var int
     */
    public $maxNodesInCluster;

    /**
     * @var string
     */
    public $excludeNodes;

    /**
     * @var string
     */
    public $spotStrategy;

    /**
     * @var float
     */
    public $spotPriceLimit;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var queues[]
     */
    public $queues;
    protected $_name = [
        'clusterId'               => 'ClusterId',
        'enableAutoGrow'          => 'EnableAutoGrow',
        'enableAutoShrink'        => 'EnableAutoShrink',
        'growIntervalInMinutes'   => 'GrowIntervalInMinutes',
        'shrinkIntervalInMinutes' => 'ShrinkIntervalInMinutes',
        'shrinkIdleTimes'         => 'ShrinkIdleTimes',
        'growTimeoutInMinutes'    => 'GrowTimeoutInMinutes',
        'extraNodesGrowRatio'     => 'ExtraNodesGrowRatio',
        'growRatio'               => 'GrowRatio',
        'maxNodesInCluster'       => 'MaxNodesInCluster',
        'excludeNodes'            => 'ExcludeNodes',
        'spotStrategy'            => 'SpotStrategy',
        'spotPriceLimit'          => 'SpotPriceLimit',
        'imageId'                 => 'ImageId',
        'queues'                  => 'Queues',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->enableAutoGrow) {
            $res['EnableAutoGrow'] = $this->enableAutoGrow;
        }
        if (null !== $this->enableAutoShrink) {
            $res['EnableAutoShrink'] = $this->enableAutoShrink;
        }
        if (null !== $this->growIntervalInMinutes) {
            $res['GrowIntervalInMinutes'] = $this->growIntervalInMinutes;
        }
        if (null !== $this->shrinkIntervalInMinutes) {
            $res['ShrinkIntervalInMinutes'] = $this->shrinkIntervalInMinutes;
        }
        if (null !== $this->shrinkIdleTimes) {
            $res['ShrinkIdleTimes'] = $this->shrinkIdleTimes;
        }
        if (null !== $this->growTimeoutInMinutes) {
            $res['GrowTimeoutInMinutes'] = $this->growTimeoutInMinutes;
        }
        if (null !== $this->extraNodesGrowRatio) {
            $res['ExtraNodesGrowRatio'] = $this->extraNodesGrowRatio;
        }
        if (null !== $this->growRatio) {
            $res['GrowRatio'] = $this->growRatio;
        }
        if (null !== $this->maxNodesInCluster) {
            $res['MaxNodesInCluster'] = $this->maxNodesInCluster;
        }
        if (null !== $this->excludeNodes) {
            $res['ExcludeNodes'] = $this->excludeNodes;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }
        if (null !== $this->spotPriceLimit) {
            $res['SpotPriceLimit'] = $this->spotPriceLimit;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->queues) {
            $res['Queues'] = [];
            if (null !== $this->queues && \is_array($this->queues)) {
                $n = 0;
                foreach ($this->queues as $item) {
                    $res['Queues'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetAutoScaleConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['EnableAutoGrow'])) {
            $model->enableAutoGrow = $map['EnableAutoGrow'];
        }
        if (isset($map['EnableAutoShrink'])) {
            $model->enableAutoShrink = $map['EnableAutoShrink'];
        }
        if (isset($map['GrowIntervalInMinutes'])) {
            $model->growIntervalInMinutes = $map['GrowIntervalInMinutes'];
        }
        if (isset($map['ShrinkIntervalInMinutes'])) {
            $model->shrinkIntervalInMinutes = $map['ShrinkIntervalInMinutes'];
        }
        if (isset($map['ShrinkIdleTimes'])) {
            $model->shrinkIdleTimes = $map['ShrinkIdleTimes'];
        }
        if (isset($map['GrowTimeoutInMinutes'])) {
            $model->growTimeoutInMinutes = $map['GrowTimeoutInMinutes'];
        }
        if (isset($map['ExtraNodesGrowRatio'])) {
            $model->extraNodesGrowRatio = $map['ExtraNodesGrowRatio'];
        }
        if (isset($map['GrowRatio'])) {
            $model->growRatio = $map['GrowRatio'];
        }
        if (isset($map['MaxNodesInCluster'])) {
            $model->maxNodesInCluster = $map['MaxNodesInCluster'];
        }
        if (isset($map['ExcludeNodes'])) {
            $model->excludeNodes = $map['ExcludeNodes'];
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }
        if (isset($map['SpotPriceLimit'])) {
            $model->spotPriceLimit = $map['SpotPriceLimit'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['Queues'])) {
            if (!empty($map['Queues'])) {
                $model->queues = [];
                $n             = 0;
                foreach ($map['Queues'] as $item) {
                    $model->queues[$n++] = null !== $item ? queues::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
