<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\GetAutoScaleConfigResponseBody\queues;
use AlibabaCloud\Tea\Model;

class GetAutoScaleConfigResponseBody extends Model
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
     * @description The type of the scheduler. Valid values:
     *
     *   slurm
     *   pbs
     *   opengridscheduler
     *   deadline
     *
     * @example pbs
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description Indicates whether the cluster enabled auto scale-out. Valid values:
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
     * @description Indicates whether the cluster enabled auto scale-in. Valid values:
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
     * @description The compute nodes that were excluded from the list of auto scaling nodes. Multiple compute nodes were separated with commas (,).
     *
     * @example i-bp19lgqwxb4206t5****,i-bp1g4hvzs9pywrhb****
     *
     * @var string
     */
    public $excludeNodes;

    /**
     * @description The percentage of extra compute nodes. Valid values: 0 to 100.
     *
     * If you need to add 100 compute nodes and the value of the ExtraNodesGrowRatio parameter is 2, 102 compute nodes are added.
     * @example 2
     *
     * @var int
     */
    public $extraNodesGrowRatio;

    /**
     * @description The interval between two consecutive rounds of scale-in. Unit: minutes. Valid values: 2 to 10.
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
     * @example 100
     *
     * @var int
     */
    public $growRatio;

    /**
     * @description The timeout period before the scale-out nodes were started. Unit: minutes. Valid values: 10 to 60.
     *
     * If the scale-out timeout period has been reached but the scale-out nodes still do not reach the Running state, the system resets them.
     * @example 20
     *
     * @var int
     */
    public $growTimeoutInMinutes;

    /**
     * @description The image ID of the compute nodes in the queue.
     *
     * @example m-bp10txryr4mhrrt1****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The maximum number of compute nodes that can be added in the cluster. Valid values: 0 to 500.
     *
     * @example 300
     *
     * @var int
     */
    public $maxNodesInCluster;

    /**
     * @description The auto scaling configuration of the queue.
     *
     * >  If auto scaling is enabled for the cluster and queue at the same time, the queue settings prevail.
     * @var queues
     */
    public $queues;

    /**
     * @description The ID of the request.
     *
     * @example 04F0F334-1335-436C-A1D7-6C044FE73368
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of consecutive times that a compute node is idle during the resource scale-in check. Valid values: 2 to 5.
     *
     * If the parameter is set to 3, a compute node is idle for more than three consecutive times. In this case, the node is released.
     * @example 3
     *
     * @var int
     */
    public $shrinkIdleTimes;

    /**
     * @description The interval between two consecutive rounds of scale-out. Unit: minutes. Valid values: 2 to 10.
     *
     * @example 2
     *
     * @var int
     */
    public $shrinkIntervalInMinutes;

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
     * @example SpotWithPriceLimit
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @description The ID of the Alibaba Cloud account.
     *
     * @example 129845258050****
     *
     * @var string
     */
    public $uid;
    protected $_name = [
        'clusterId'               => 'ClusterId',
        'clusterType'             => 'ClusterType',
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
        'requestId'               => 'RequestId',
        'shrinkIdleTimes'         => 'ShrinkIdleTimes',
        'shrinkIntervalInMinutes' => 'ShrinkIntervalInMinutes',
        'spotPriceLimit'          => 'SpotPriceLimit',
        'spotStrategy'            => 'SpotStrategy',
        'uid'                     => 'Uid',
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
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
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
            $res['Queues'] = null !== $this->queues ? $this->queues->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAutoScaleConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
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
            $model->queues = queues::fromMap($map['Queues']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
