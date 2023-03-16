<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\SetAutoScaleConfigRequest\queues;
use AlibabaCloud\Tea\Model;

class SetAutoScaleConfigRequest extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @var bool
     */
    public $computeEnableHt;

    /**
     * @description Specifies whether to enable auto scale-out. Valid values:
     *
     *   true: enables auto scale-out.
     *   false: disables auto scale-out
     *
     * Default value: false
     * @example false
     *
     * @var bool
     */
    public $enableAutoGrow;

    /**
     * @description Specifies whether to enable auto scale-in. Valid values:
     *
     *   true: enables auto scale-in.
     *   false: disables auto scale-in
     *
     * Default value: false
     * @example false
     *
     * @var bool
     */
    public $enableAutoShrink;

    /**
     * @description The compute nodes that are excluded from the list of auto scaling nodes. Separate multiple compute nodes with commas (,).
     *
     * If you want to retain a compute node, you can set the node as an exceptional node. Then, the node is not released if it is idle.
     * @example i-bp19lgqwxb4206t5****,i-bp1g4hvzs9pywrhb****
     *
     * @var string
     */
    public $excludeNodes;

    /**
     * @description The percentage of extra compute nodes. Valid values: 0 to 100
     *
     * If you need to add 100 compute nodes and the value of the ExtraNodesGrowRatio parameter is 2, 102 compute nodes are added.
     * @example 0
     *
     * @var int
     */
    public $extraNodesGrowRatio;

    /**
     * @description The interval between two consecutive rounds of scale-out. Unit: minutes.
     *
     * >  An interval may exist during multiple rounds of a scale-out task or between two consecutive scale-out tasks.
     * @example 2
     *
     * @var int
     */
    public $growIntervalInMinutes;

    /**
     * @description The percentage of each round of scale-out. Valid values: 1 to 100.
     *
     * If you set GrowRatio to 50, the scale-out has two rounds. Each round completes half of the scale-out.
     * @example 50
     *
     * @var int
     */
    public $growRatio;

    /**
     * @description The scale-out timeout period. Unit: minutes.
     *
     * If the scale-out timeout period has been reached but the scale-out nodes still do not reach the Running state, the system resets them.
     * @example 20
     *
     * @var int
     */
    public $growTimeoutInMinutes;

    /**
     * @description The ID of the image.
     *
     * >
     *   If you set both `Queues.N.QueueImageId` and `ImageId`, `Queues.N.QueueImageId` prevails.
     *   If you set `Queues.N.QueueImageId` or `ImageId`, the parameter that you set takes effect.
     *   If you leave both `Queues.N.QueueImageId` and `ImageId` empty, the image that was specified when you created the cluster or the last time when you scaled out the cluster is used by default.
     *
     * @example centos_7_03_64_20G_alibase_201708****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The maximum number of compute nodes that can be added in the cluster. Valid values: 0 to 500.
     *
     * Default value: 100
     * @example 100
     *
     * @var int
     */
    public $maxNodesInCluster;

    /**
     * @var queues[]
     */
    public $queues;

    /**
     * @description The number of consecutive times that a compute node is idle during the resource scale-in check.
     *
     * If the parameter is set to 3, a compute node is idle for more than three consecutive times. In this case, the node is released. If a compute node is idle for more than 6 minutes in a row, it is released by default. This is because the default value of the ShrinkIntervalInMinutes parameter is 2.
     * @example 3
     *
     * @var int
     */
    public $shrinkIdleTimes;

    /**
     * @description The interval between two consecutive rounds of scale-in. Unit: minutes.
     *
     * Default value: 2
     * @example 2
     *
     * @var int
     */
    public $shrinkIntervalInMinutes;

    /**
     * @description The maximum hourly price of the compute nodes. The value can be accurate to three decimal places. The parameter takes effect only when `SpotStrategy` is set to `SpotWithPriceLimit`.
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
     * Default value: NoSpot
     * @example SpotWithPriceLimit
     *
     * @var string
     */
    public $spotStrategy;
    protected $_name = [
        'clusterId'               => 'ClusterId',
        'computeEnableHt'         => 'ComputeEnableHt',
        'enableAutoGrow'          => 'EnableAutoGrow',
        'enableAutoShrink'        => 'EnableAutoShrink',
        'excludeNodes'            => 'ExcludeNodes',
        'extraNodesGrowRatio'     => 'ExtraNodesGrowRatio',
        'growIntervalInMinutes'   => 'GrowIntervalInMinutes',
        'growRatio'               => 'GrowRatio',
        'growTimeoutInMinutes'    => 'GrowTimeoutInMinutes',
        'imageId'                 => 'ImageId',
        'maxNodesInCluster'       => 'MaxNodesInCluster',
        'queues'                  => 'Queues',
        'shrinkIdleTimes'         => 'ShrinkIdleTimes',
        'shrinkIntervalInMinutes' => 'ShrinkIntervalInMinutes',
        'spotPriceLimit'          => 'SpotPriceLimit',
        'spotStrategy'            => 'SpotStrategy',
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
        if (null !== $this->computeEnableHt) {
            $res['ComputeEnableHt'] = $this->computeEnableHt;
        }
        if (null !== $this->enableAutoGrow) {
            $res['EnableAutoGrow'] = $this->enableAutoGrow;
        }
        if (null !== $this->enableAutoShrink) {
            $res['EnableAutoShrink'] = $this->enableAutoShrink;
        }
        if (null !== $this->excludeNodes) {
            $res['ExcludeNodes'] = $this->excludeNodes;
        }
        if (null !== $this->extraNodesGrowRatio) {
            $res['ExtraNodesGrowRatio'] = $this->extraNodesGrowRatio;
        }
        if (null !== $this->growIntervalInMinutes) {
            $res['GrowIntervalInMinutes'] = $this->growIntervalInMinutes;
        }
        if (null !== $this->growRatio) {
            $res['GrowRatio'] = $this->growRatio;
        }
        if (null !== $this->growTimeoutInMinutes) {
            $res['GrowTimeoutInMinutes'] = $this->growTimeoutInMinutes;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->maxNodesInCluster) {
            $res['MaxNodesInCluster'] = $this->maxNodesInCluster;
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
        if (null !== $this->shrinkIdleTimes) {
            $res['ShrinkIdleTimes'] = $this->shrinkIdleTimes;
        }
        if (null !== $this->shrinkIntervalInMinutes) {
            $res['ShrinkIntervalInMinutes'] = $this->shrinkIntervalInMinutes;
        }
        if (null !== $this->spotPriceLimit) {
            $res['SpotPriceLimit'] = $this->spotPriceLimit;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
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
        if (isset($map['ComputeEnableHt'])) {
            $model->computeEnableHt = $map['ComputeEnableHt'];
        }
        if (isset($map['EnableAutoGrow'])) {
            $model->enableAutoGrow = $map['EnableAutoGrow'];
        }
        if (isset($map['EnableAutoShrink'])) {
            $model->enableAutoShrink = $map['EnableAutoShrink'];
        }
        if (isset($map['ExcludeNodes'])) {
            $model->excludeNodes = $map['ExcludeNodes'];
        }
        if (isset($map['ExtraNodesGrowRatio'])) {
            $model->extraNodesGrowRatio = $map['ExtraNodesGrowRatio'];
        }
        if (isset($map['GrowIntervalInMinutes'])) {
            $model->growIntervalInMinutes = $map['GrowIntervalInMinutes'];
        }
        if (isset($map['GrowRatio'])) {
            $model->growRatio = $map['GrowRatio'];
        }
        if (isset($map['GrowTimeoutInMinutes'])) {
            $model->growTimeoutInMinutes = $map['GrowTimeoutInMinutes'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['MaxNodesInCluster'])) {
            $model->maxNodesInCluster = $map['MaxNodesInCluster'];
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
        if (isset($map['ShrinkIdleTimes'])) {
            $model->shrinkIdleTimes = $map['ShrinkIdleTimes'];
        }
        if (isset($map['ShrinkIntervalInMinutes'])) {
            $model->shrinkIntervalInMinutes = $map['ShrinkIntervalInMinutes'];
        }
        if (isset($map['SpotPriceLimit'])) {
            $model->spotPriceLimit = $map['SpotPriceLimit'];
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }

        return $model;
    }
}
