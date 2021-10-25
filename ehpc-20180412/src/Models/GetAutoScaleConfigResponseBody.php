<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\GetAutoScaleConfigResponseBody\queues;
use AlibabaCloud\Tea\Model;

class GetAutoScaleConfigResponseBody extends Model
{
    /**
     * @var int
     */
    public $maxNodesInCluster;

    /**
     * @var int
     */
    public $growTimeoutInMinutes;

    /**
     * @var string
     */
    public $spotStrategy;

    /**
     * @var bool
     */
    public $enableAutoShrink;

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
    public $clusterType;

    /**
     * @var string
     */
    public $excludeNodes;

    /**
     * @var int
     */
    public $shrinkIntervalInMinutes;

    /**
     * @var int
     */
    public $growIntervalInMinutes;

    /**
     * @var float
     */
    public $spotPriceLimit;

    /**
     * @var int
     */
    public $extraNodesGrowRatio;

    /**
     * @var int
     */
    public $shrinkIdleTimes;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var int
     */
    public $growRatio;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $uid;

    /**
     * @var queues
     */
    public $queues;
    protected $_name = [
        'maxNodesInCluster'       => 'MaxNodesInCluster',
        'growTimeoutInMinutes'    => 'GrowTimeoutInMinutes',
        'spotStrategy'            => 'SpotStrategy',
        'enableAutoShrink'        => 'EnableAutoShrink',
        'requestId'               => 'RequestId',
        'enableAutoGrow'          => 'EnableAutoGrow',
        'clusterType'             => 'ClusterType',
        'excludeNodes'            => 'ExcludeNodes',
        'shrinkIntervalInMinutes' => 'ShrinkIntervalInMinutes',
        'growIntervalInMinutes'   => 'GrowIntervalInMinutes',
        'spotPriceLimit'          => 'SpotPriceLimit',
        'extraNodesGrowRatio'     => 'ExtraNodesGrowRatio',
        'shrinkIdleTimes'         => 'ShrinkIdleTimes',
        'imageId'                 => 'ImageId',
        'growRatio'               => 'GrowRatio',
        'clusterId'               => 'ClusterId',
        'uid'                     => 'Uid',
        'queues'                  => 'Queues',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxNodesInCluster) {
            $res['MaxNodesInCluster'] = $this->maxNodesInCluster;
        }
        if (null !== $this->growTimeoutInMinutes) {
            $res['GrowTimeoutInMinutes'] = $this->growTimeoutInMinutes;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }
        if (null !== $this->enableAutoShrink) {
            $res['EnableAutoShrink'] = $this->enableAutoShrink;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->enableAutoGrow) {
            $res['EnableAutoGrow'] = $this->enableAutoGrow;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->excludeNodes) {
            $res['ExcludeNodes'] = $this->excludeNodes;
        }
        if (null !== $this->shrinkIntervalInMinutes) {
            $res['ShrinkIntervalInMinutes'] = $this->shrinkIntervalInMinutes;
        }
        if (null !== $this->growIntervalInMinutes) {
            $res['GrowIntervalInMinutes'] = $this->growIntervalInMinutes;
        }
        if (null !== $this->spotPriceLimit) {
            $res['SpotPriceLimit'] = $this->spotPriceLimit;
        }
        if (null !== $this->extraNodesGrowRatio) {
            $res['ExtraNodesGrowRatio'] = $this->extraNodesGrowRatio;
        }
        if (null !== $this->shrinkIdleTimes) {
            $res['ShrinkIdleTimes'] = $this->shrinkIdleTimes;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->growRatio) {
            $res['GrowRatio'] = $this->growRatio;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }
        if (null !== $this->queues) {
            $res['Queues'] = null !== $this->queues ? $this->queues->toMap() : null;
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
        if (isset($map['MaxNodesInCluster'])) {
            $model->maxNodesInCluster = $map['MaxNodesInCluster'];
        }
        if (isset($map['GrowTimeoutInMinutes'])) {
            $model->growTimeoutInMinutes = $map['GrowTimeoutInMinutes'];
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }
        if (isset($map['EnableAutoShrink'])) {
            $model->enableAutoShrink = $map['EnableAutoShrink'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['EnableAutoGrow'])) {
            $model->enableAutoGrow = $map['EnableAutoGrow'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['ExcludeNodes'])) {
            $model->excludeNodes = $map['ExcludeNodes'];
        }
        if (isset($map['ShrinkIntervalInMinutes'])) {
            $model->shrinkIntervalInMinutes = $map['ShrinkIntervalInMinutes'];
        }
        if (isset($map['GrowIntervalInMinutes'])) {
            $model->growIntervalInMinutes = $map['GrowIntervalInMinutes'];
        }
        if (isset($map['SpotPriceLimit'])) {
            $model->spotPriceLimit = $map['SpotPriceLimit'];
        }
        if (isset($map['ExtraNodesGrowRatio'])) {
            $model->extraNodesGrowRatio = $map['ExtraNodesGrowRatio'];
        }
        if (isset($map['ShrinkIdleTimes'])) {
            $model->shrinkIdleTimes = $map['ShrinkIdleTimes'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['GrowRatio'])) {
            $model->growRatio = $map['GrowRatio'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }
        if (isset($map['Queues'])) {
            $model->queues = queues::fromMap($map['Queues']);
        }

        return $model;
    }
}
