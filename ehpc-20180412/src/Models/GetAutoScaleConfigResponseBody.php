<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\GetAutoScaleConfigResponseBody\queues;
use AlibabaCloud\Tea\Model;

class GetAutoScaleConfigResponseBody extends Model
{
    /**
     * @description The prefix of the queue name. You can query queues that have a specified prefix.
     *
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The ID of the cluster.
     *
     * @example pbs
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description Specifies whether to enable hyper-threading for the ECS instance that is used as the compute node.
     *
     * >  You can only disable hyper-threading for some instance types. The hyper-threading is enabled for ECS instances by default. For more information, see [Specify and view CPU options](~~145895~~).
     * @example true
     *
     * @var bool
     */
    public $computeEnableHt;

    /**
     * @description The Domain Name System (DNS) settings.
     *
     * @example "{\"DnsType\":\"PrivateZone\",\"DnsName\":\"xxxxx\"}"
     *
     * @var string
     */
    public $dnsConfig;

    /**
     * @description The percentage of each round of scale-out. Valid values: 1 to 100.
     *
     * If you set GrowRatio to 50, the scale-out has two rounds. Each round completes half of the scale-out.
     * @example true
     *
     * @var bool
     */
    public $enableAutoGrow;

    /**
     * @description The number of consecutive times that a compute node is idle during the resource scale-in check. Valid values: 2 to 5.
     *
     * If the parameter is set to 3, a compute node is idle for more than three consecutive times. In this case, the node is released.
     * @example true
     *
     * @var bool
     */
    public $enableAutoShrink;

    /**
     * @description The ID of the Alibaba Cloud account.
     *
     * @example i-bp19lgqwxb4206t5****,i-bp1g4hvzs9pywrhb****
     *
     * @var string
     */
    public $excludeNodes;

    /**
     * @description The instance type of the compute nodes that were automatically added in the queue.
     *
     * @example 2
     *
     * @var int
     */
    public $extraNodesGrowRatio;

    /**
     * @description The image ID of the compute nodes in the queue.
     *
     * @example 2
     *
     * @var int
     */
    public $growIntervalInMinutes;

    /**
     * @description The minimum number of compute nodes that can be retained in a queue. Valid values: 0 to 50.
     *
     * @example 100
     *
     * @var int
     */
    public $growRatio;

    /**
     * @description The maximum hourly price of the compute nodes. The value can be accurate to three decimal places. The parameter takes effect only when SpotStrategy is set to SpotWithPriceLimit.
     *
     * @example 20
     *
     * @var int
     */
    public $growTimeoutInMinutes;

    /**
     * @description The preemption policy of the compute nodes. Valid values:
     *
     *   NoSpot: The compute nodes are pay-as-you-go instances.
     *   SpotWithPriceLimit: The compute nodes are preemptible instances that have a user-defined maximum hourly price.
     *   SpotAsPriceGo: The compute nodes are preemptible instances for which the market price at the time of purchase is used as the bid price.
     *
     * @example m-bp10txryr4mhrrt1****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The interval between two consecutive rounds of scale-in. Unit: minutes. Valid values: 2 to 10.
     *
     * >  An interval may exist during multiple rounds of a scale-out task or between two consecutive scale-out tasks.
     * @example 300
     *
     * @var int
     */
    public $maxNodesInCluster;

    /**
     * @description The maximum number of compute nodes that can be added in a queue. Valid values: 0 to 500.
     *
     * @var queues
     */
    public $queues;

    /**
     * @description The image ID of the compute nodes in the queue.
     *
     * @example 04F0F334-1335-436C-A1D7-6C044FE73368
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The suffix of the queue name. You can query queues that have a specified suffix.
     *
     * @example 3
     *
     * @var int
     */
    public $shrinkIdleTimes;

    /**
     * @description The auto scaling configuration of the queue.
     *
     * >  If auto scaling is enabled for the cluster and queue at the same time, the queue settings prevail.
     * @example 2
     *
     * @var int
     */
    public $shrinkIntervalInMinutes;

    /**
     * @description The type of the system disk. Valid values:
     *
     *   cloud_efficiency: ultra disk
     *   cloud_ssd: SSD
     *   cloud_essd: ESSD
     *   cloud: basic disk
     *
     * @example 0.062
     *
     * @var float
     */
    public $spotPriceLimit;

    /**
     * @description The percentage of extra compute nodes. Valid values: 0 to 100.
     *
     * If you need to add 100 compute nodes and the value of the ExtraNodesGrowRatio parameter is 2, 102 compute nodes are added.
     * @example SpotWithPriceLimit
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @description The size of the system disk. Unit: GB. Valid values: 40 to 500.
     *
     * @example 129845258050****
     *
     * @var string
     */
    public $uid;
    protected $_name = [
        'clusterId'               => 'ClusterId',
        'clusterType'             => 'ClusterType',
        'computeEnableHt'         => 'ComputeEnableHt',
        'dnsConfig'               => 'DnsConfig',
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
        if (null !== $this->computeEnableHt) {
            $res['ComputeEnableHt'] = $this->computeEnableHt;
        }
        if (null !== $this->dnsConfig) {
            $res['DnsConfig'] = $this->dnsConfig;
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
        if (isset($map['ComputeEnableHt'])) {
            $model->computeEnableHt = $map['ComputeEnableHt'];
        }
        if (isset($map['DnsConfig'])) {
            $model->dnsConfig = $map['DnsConfig'];
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
