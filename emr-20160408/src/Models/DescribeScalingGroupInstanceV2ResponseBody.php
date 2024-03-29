<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeScalingGroupInstanceV2ResponseBody\scalingConfig;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeScalingGroupInstanceV2ResponseBody\scalingRuleList;
use AlibabaCloud\Tea\Model;

class DescribeScalingGroupInstanceV2ResponseBody extends Model
{
    /**
     * @example ByLoad
     *
     * @var string
     */
    public $activeRuleCategory;

    /**
     * @example 300
     *
     * @var int
     */
    public $defaultCooldown;

    /**
     * @example G-5011FB3E4928****
     *
     * @var string
     */
    public $hostGroupId;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxSize;

    /**
     * @example 0
     *
     * @var int
     */
    public $minSize;

    /**
     * @example PRIORITY
     *
     * @var string
     */
    public $multiAvailablePolicy;

    /**
     * @example {"onDemandBaseCapacity": 1, "onDemandPercentageAboveBaseCapacity": 10, "spotInstanceRemedy": false, "spotInstancePools": 2}
     *
     * @var string
     */
    public $multiAvailablePolicyParam;

    /**
     * @example 6C96FD2C-95A0-4C03-8A19-7D84A4BAAA1E
     *
     * @var string
     */
    public $requestId;

    /**
     * @var scalingConfig
     */
    public $scalingConfig;

    /**
     * @example SGB-12324546568****
     *
     * @var string
     */
    public $scalingGroupId;

    /**
     * @var scalingRuleList
     */
    public $scalingRuleList;

    /**
     * @example 1000
     *
     * @var int
     */
    public $timeoutWithGrace;

    /**
     * @example true
     *
     * @var bool
     */
    public $withGrace;
    protected $_name = [
        'activeRuleCategory'        => 'ActiveRuleCategory',
        'defaultCooldown'           => 'DefaultCooldown',
        'hostGroupId'               => 'HostGroupId',
        'maxSize'                   => 'MaxSize',
        'minSize'                   => 'MinSize',
        'multiAvailablePolicy'      => 'MultiAvailablePolicy',
        'multiAvailablePolicyParam' => 'MultiAvailablePolicyParam',
        'requestId'                 => 'RequestId',
        'scalingConfig'             => 'ScalingConfig',
        'scalingGroupId'            => 'ScalingGroupId',
        'scalingRuleList'           => 'ScalingRuleList',
        'timeoutWithGrace'          => 'TimeoutWithGrace',
        'withGrace'                 => 'WithGrace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activeRuleCategory) {
            $res['ActiveRuleCategory'] = $this->activeRuleCategory;
        }
        if (null !== $this->defaultCooldown) {
            $res['DefaultCooldown'] = $this->defaultCooldown;
        }
        if (null !== $this->hostGroupId) {
            $res['HostGroupId'] = $this->hostGroupId;
        }
        if (null !== $this->maxSize) {
            $res['MaxSize'] = $this->maxSize;
        }
        if (null !== $this->minSize) {
            $res['MinSize'] = $this->minSize;
        }
        if (null !== $this->multiAvailablePolicy) {
            $res['MultiAvailablePolicy'] = $this->multiAvailablePolicy;
        }
        if (null !== $this->multiAvailablePolicyParam) {
            $res['MultiAvailablePolicyParam'] = $this->multiAvailablePolicyParam;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->scalingConfig) {
            $res['ScalingConfig'] = null !== $this->scalingConfig ? $this->scalingConfig->toMap() : null;
        }
        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
        }
        if (null !== $this->scalingRuleList) {
            $res['ScalingRuleList'] = null !== $this->scalingRuleList ? $this->scalingRuleList->toMap() : null;
        }
        if (null !== $this->timeoutWithGrace) {
            $res['TimeoutWithGrace'] = $this->timeoutWithGrace;
        }
        if (null !== $this->withGrace) {
            $res['WithGrace'] = $this->withGrace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeScalingGroupInstanceV2ResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActiveRuleCategory'])) {
            $model->activeRuleCategory = $map['ActiveRuleCategory'];
        }
        if (isset($map['DefaultCooldown'])) {
            $model->defaultCooldown = $map['DefaultCooldown'];
        }
        if (isset($map['HostGroupId'])) {
            $model->hostGroupId = $map['HostGroupId'];
        }
        if (isset($map['MaxSize'])) {
            $model->maxSize = $map['MaxSize'];
        }
        if (isset($map['MinSize'])) {
            $model->minSize = $map['MinSize'];
        }
        if (isset($map['MultiAvailablePolicy'])) {
            $model->multiAvailablePolicy = $map['MultiAvailablePolicy'];
        }
        if (isset($map['MultiAvailablePolicyParam'])) {
            $model->multiAvailablePolicyParam = $map['MultiAvailablePolicyParam'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ScalingConfig'])) {
            $model->scalingConfig = scalingConfig::fromMap($map['ScalingConfig']);
        }
        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }
        if (isset($map['ScalingRuleList'])) {
            $model->scalingRuleList = scalingRuleList::fromMap($map['ScalingRuleList']);
        }
        if (isset($map['TimeoutWithGrace'])) {
            $model->timeoutWithGrace = $map['TimeoutWithGrace'];
        }
        if (isset($map['WithGrace'])) {
            $model->withGrace = $map['WithGrace'];
        }

        return $model;
    }
}
