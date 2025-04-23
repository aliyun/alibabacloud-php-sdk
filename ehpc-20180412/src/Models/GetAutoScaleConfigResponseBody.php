<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\GetAutoScaleConfigResponseBody\queues;

class GetAutoScaleConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $clusterType;

    /**
     * @var bool
     */
    public $computeEnableHt;

    /**
     * @var string
     */
    public $dnsConfig;

    /**
     * @var bool
     */
    public $enableAutoGrow;

    /**
     * @var bool
     */
    public $enableAutoShrink;

    /**
     * @var string
     */
    public $excludeNodes;

    /**
     * @var int
     */
    public $extraNodesGrowRatio;

    /**
     * @var int
     */
    public $growIntervalInMinutes;

    /**
     * @var int
     */
    public $growRatio;

    /**
     * @var int
     */
    public $growTimeoutInMinutes;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var int
     */
    public $maxNodesInCluster;

    /**
     * @var queues
     */
    public $queues;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $shrinkIdleTimes;

    /**
     * @var int
     */
    public $shrinkIntervalInMinutes;

    /**
     * @var float
     */
    public $spotPriceLimit;

    /**
     * @var string
     */
    public $spotStrategy;

    /**
     * @var string
     */
    public $uid;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'clusterType' => 'ClusterType',
        'computeEnableHt' => 'ComputeEnableHt',
        'dnsConfig' => 'DnsConfig',
        'enableAutoGrow' => 'EnableAutoGrow',
        'enableAutoShrink' => 'EnableAutoShrink',
        'excludeNodes' => 'ExcludeNodes',
        'extraNodesGrowRatio' => 'ExtraNodesGrowRatio',
        'growIntervalInMinutes' => 'GrowIntervalInMinutes',
        'growRatio' => 'GrowRatio',
        'growTimeoutInMinutes' => 'GrowTimeoutInMinutes',
        'imageId' => 'ImageId',
        'maxNodesInCluster' => 'MaxNodesInCluster',
        'queues' => 'Queues',
        'requestId' => 'RequestId',
        'shrinkIdleTimes' => 'ShrinkIdleTimes',
        'shrinkIntervalInMinutes' => 'ShrinkIntervalInMinutes',
        'spotPriceLimit' => 'SpotPriceLimit',
        'spotStrategy' => 'SpotStrategy',
        'uid' => 'Uid',
    ];

    public function validate()
    {
        if (null !== $this->queues) {
            $this->queues->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['Queues'] = null !== $this->queues ? $this->queues->toArray($noStream) : $this->queues;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
