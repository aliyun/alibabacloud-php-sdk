<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class DescribeAutoScaleConfigResponseBody extends Model
{
    /**
     * @description The ID of the associated cluster.
     *
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The type of the scheduler. Valid values:
     *
     *   pbs
     *   slurm
     *   opengridscheduler
     *   deadline
     *
     * @example slurm
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description Specifies whether to enable auto scale-out.
     *
     * @example true
     *
     * @var bool
     */
    public $enableAutoGrow;

    /**
     * @description Specifies whether to enable auto scale-in.
     *
     * @example true
     *
     * @var bool
     */
    public $enableAutoShrink;

    /**
     * @description The list of nodes on which auto scaling is not enabled.
     *
     * @example i-bp19lgqwxb4206t5****,i-bp1g4hvzs9pywrhb****
     *
     * @var string
     */
    public $excludeNodes;

    /**
     * @description The percentage of extra compute nodes. Valid values: 0 to 100.
     *
     * @example 0
     *
     * @var int
     */
    public $extraNodesGrowRatio;

    /**
     * @description The interval between two consecutive rounds of scale-in. Valid values: 2 to 10.
     *
     * @example 10
     *
     * @var int
     */
    public $growIntervalInMinutes;

    /**
     * @description The percentage of each round of scale-out. Valid values: 1 to 100.
     *
     * @example 1
     *
     * @var int
     */
    public $growRatio;

    /**
     * @description The timeout period before the scale-out nodes were started. Valid values: 10 to 60.
     *
     * @example 20
     *
     * @var int
     */
    public $growTimeoutInMinutes;

    /**
     * @description The maximum number of compute nodes in the cluster. This parameter indicates the largest number of nodes that can be added to the cluster.
     *
     * @example 100
     *
     * @var int
     */
    public $maxNodesInCluster;

    /**
     * @description The request ID.
     *
     * @example 04F0F334-1335-436C-A1D7-6C044FE73
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of consecutive idle times of a node during the resource shrink check. Valid values: 2 to 5.
     *
     * @example 3
     *
     * @var int
     */
    public $shrinkIdleTimes;

    /**
     * @description The interval between two consecutive rounds of scale-out. Valid values: 2 to 10.
     *
     * @example 2
     *
     * @var int
     */
    public $shrinkIntervalInMinutes;

    /**
     * @description The maximum hourly price of the new ECS instance. The value is accurate to three decimal places. It takes effect only when SpotStrategy is set to SpotWithPriceLimit.
     *
     * @example 0.062
     *
     * @var string
     */
    public $spotPriceLimit;

    /**
     * @description The bidding method of the compute nodes. Valid values:
     *
     *   NoSpot: The instances of the compute node are pay-as-you-go instances.
     *   SpotWithPriceLimit: The instance is created as a preemptible instance with a user-defined maximum hourly price.
     *   SpotAsPriceGo: The instance is a preemptible instance for which the market price at the time of purchase is automatically used as the bidding price.
     *
     * @example NoSpot
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @description The user ID.
     *
     * @example testu****
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
        'maxNodesInCluster'       => 'MaxNodesInCluster',
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
        if (null !== $this->maxNodesInCluster) {
            $res['MaxNodesInCluster'] = $this->maxNodesInCluster;
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
     * @return DescribeAutoScaleConfigResponseBody
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
        if (isset($map['MaxNodesInCluster'])) {
            $model->maxNodesInCluster = $map['MaxNodesInCluster'];
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
