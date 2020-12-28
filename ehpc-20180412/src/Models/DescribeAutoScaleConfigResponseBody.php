<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class DescribeAutoScaleConfigResponseBody extends Model
{
    /**
     * @var int
     */
    public $extraNodesGrowRatio;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $enableAutoGrow;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var int
     */
    public $maxNodesInCluster;

    /**
     * @var int
     */
    public $shrinkIdleTimes;

    /**
     * @var bool
     */
    public $enableAutoShrink;

    /**
     * @var string
     */
    public $clusterType;

    /**
     * @var int
     */
    public $growRatio;

    /**
     * @var int
     */
    public $growIntervalInMinutes;

    /**
     * @var string
     */
    public $uid;

    /**
     * @var int
     */
    public $growTimeoutInMinutes;

    /**
     * @var int
     */
    public $shrinkIntervalInMinutes;

    /**
     * @var string
     */
    public $spotPriceLimit;

    /**
     * @var string
     */
    public $excludeNodes;

    /**
     * @var string
     */
    public $spotStrategy;
    protected $_name = [
        'extraNodesGrowRatio'     => 'ExtraNodesGrowRatio',
        'requestId'               => 'RequestId',
        'enableAutoGrow'          => 'EnableAutoGrow',
        'clusterId'               => 'ClusterId',
        'maxNodesInCluster'       => 'MaxNodesInCluster',
        'shrinkIdleTimes'         => 'ShrinkIdleTimes',
        'enableAutoShrink'        => 'EnableAutoShrink',
        'clusterType'             => 'ClusterType',
        'growRatio'               => 'GrowRatio',
        'growIntervalInMinutes'   => 'GrowIntervalInMinutes',
        'uid'                     => 'Uid',
        'growTimeoutInMinutes'    => 'GrowTimeoutInMinutes',
        'shrinkIntervalInMinutes' => 'ShrinkIntervalInMinutes',
        'spotPriceLimit'          => 'SpotPriceLimit',
        'excludeNodes'            => 'ExcludeNodes',
        'spotStrategy'            => 'SpotStrategy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extraNodesGrowRatio) {
            $res['ExtraNodesGrowRatio'] = $this->extraNodesGrowRatio;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->enableAutoGrow) {
            $res['EnableAutoGrow'] = $this->enableAutoGrow;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->maxNodesInCluster) {
            $res['MaxNodesInCluster'] = $this->maxNodesInCluster;
        }
        if (null !== $this->shrinkIdleTimes) {
            $res['ShrinkIdleTimes'] = $this->shrinkIdleTimes;
        }
        if (null !== $this->enableAutoShrink) {
            $res['EnableAutoShrink'] = $this->enableAutoShrink;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->growRatio) {
            $res['GrowRatio'] = $this->growRatio;
        }
        if (null !== $this->growIntervalInMinutes) {
            $res['GrowIntervalInMinutes'] = $this->growIntervalInMinutes;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }
        if (null !== $this->growTimeoutInMinutes) {
            $res['GrowTimeoutInMinutes'] = $this->growTimeoutInMinutes;
        }
        if (null !== $this->shrinkIntervalInMinutes) {
            $res['ShrinkIntervalInMinutes'] = $this->shrinkIntervalInMinutes;
        }
        if (null !== $this->spotPriceLimit) {
            $res['SpotPriceLimit'] = $this->spotPriceLimit;
        }
        if (null !== $this->excludeNodes) {
            $res['ExcludeNodes'] = $this->excludeNodes;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
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
        if (isset($map['ExtraNodesGrowRatio'])) {
            $model->extraNodesGrowRatio = $map['ExtraNodesGrowRatio'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['EnableAutoGrow'])) {
            $model->enableAutoGrow = $map['EnableAutoGrow'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['MaxNodesInCluster'])) {
            $model->maxNodesInCluster = $map['MaxNodesInCluster'];
        }
        if (isset($map['ShrinkIdleTimes'])) {
            $model->shrinkIdleTimes = $map['ShrinkIdleTimes'];
        }
        if (isset($map['EnableAutoShrink'])) {
            $model->enableAutoShrink = $map['EnableAutoShrink'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['GrowRatio'])) {
            $model->growRatio = $map['GrowRatio'];
        }
        if (isset($map['GrowIntervalInMinutes'])) {
            $model->growIntervalInMinutes = $map['GrowIntervalInMinutes'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }
        if (isset($map['GrowTimeoutInMinutes'])) {
            $model->growTimeoutInMinutes = $map['GrowTimeoutInMinutes'];
        }
        if (isset($map['ShrinkIntervalInMinutes'])) {
            $model->shrinkIntervalInMinutes = $map['ShrinkIntervalInMinutes'];
        }
        if (isset($map['SpotPriceLimit'])) {
            $model->spotPriceLimit = $map['SpotPriceLimit'];
        }
        if (isset($map['ExcludeNodes'])) {
            $model->excludeNodes = $map['ExcludeNodes'];
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }

        return $model;
    }
}
