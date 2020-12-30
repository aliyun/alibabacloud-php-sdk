<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeScalingGroupInstanceV2ResponseBody\scalingConfig;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeScalingGroupInstanceV2ResponseBody\scalingRuleList;
use AlibabaCloud\Tea\Model;

class DescribeScalingGroupInstanceV2ResponseBody extends Model
{
    /**
     * @var scalingConfig
     */
    public $scalingConfig;

    /**
     * @var string
     */
    public $activeRuleCategory;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $timeoutWithGrace;

    /**
     * @var string
     */
    public $scalingGroupId;

    /**
     * @var int
     */
    public $maxSize;

    /**
     * @var string
     */
    public $multiAvailablePolicyParam;

    /**
     * @var int
     */
    public $minSize;

    /**
     * @var int
     */
    public $defaultCooldown;

    /**
     * @var string
     */
    public $hostGroupId;

    /**
     * @var bool
     */
    public $withGrace;

    /**
     * @var string
     */
    public $multiAvailablePolicy;

    /**
     * @var scalingRuleList
     */
    public $scalingRuleList;
    protected $_name = [
        'scalingConfig'             => 'ScalingConfig',
        'activeRuleCategory'        => 'ActiveRuleCategory',
        'requestId'                 => 'RequestId',
        'timeoutWithGrace'          => 'TimeoutWithGrace',
        'scalingGroupId'            => 'ScalingGroupId',
        'maxSize'                   => 'MaxSize',
        'multiAvailablePolicyParam' => 'MultiAvailablePolicyParam',
        'minSize'                   => 'MinSize',
        'defaultCooldown'           => 'DefaultCooldown',
        'hostGroupId'               => 'HostGroupId',
        'withGrace'                 => 'WithGrace',
        'multiAvailablePolicy'      => 'MultiAvailablePolicy',
        'scalingRuleList'           => 'ScalingRuleList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scalingConfig) {
            $res['ScalingConfig'] = null !== $this->scalingConfig ? $this->scalingConfig->toMap() : null;
        }
        if (null !== $this->activeRuleCategory) {
            $res['ActiveRuleCategory'] = $this->activeRuleCategory;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->timeoutWithGrace) {
            $res['TimeoutWithGrace'] = $this->timeoutWithGrace;
        }
        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
        }
        if (null !== $this->maxSize) {
            $res['MaxSize'] = $this->maxSize;
        }
        if (null !== $this->multiAvailablePolicyParam) {
            $res['MultiAvailablePolicyParam'] = $this->multiAvailablePolicyParam;
        }
        if (null !== $this->minSize) {
            $res['MinSize'] = $this->minSize;
        }
        if (null !== $this->defaultCooldown) {
            $res['DefaultCooldown'] = $this->defaultCooldown;
        }
        if (null !== $this->hostGroupId) {
            $res['HostGroupId'] = $this->hostGroupId;
        }
        if (null !== $this->withGrace) {
            $res['WithGrace'] = $this->withGrace;
        }
        if (null !== $this->multiAvailablePolicy) {
            $res['MultiAvailablePolicy'] = $this->multiAvailablePolicy;
        }
        if (null !== $this->scalingRuleList) {
            $res['ScalingRuleList'] = null !== $this->scalingRuleList ? $this->scalingRuleList->toMap() : null;
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
        if (isset($map['ScalingConfig'])) {
            $model->scalingConfig = scalingConfig::fromMap($map['ScalingConfig']);
        }
        if (isset($map['ActiveRuleCategory'])) {
            $model->activeRuleCategory = $map['ActiveRuleCategory'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TimeoutWithGrace'])) {
            $model->timeoutWithGrace = $map['TimeoutWithGrace'];
        }
        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }
        if (isset($map['MaxSize'])) {
            $model->maxSize = $map['MaxSize'];
        }
        if (isset($map['MultiAvailablePolicyParam'])) {
            $model->multiAvailablePolicyParam = $map['MultiAvailablePolicyParam'];
        }
        if (isset($map['MinSize'])) {
            $model->minSize = $map['MinSize'];
        }
        if (isset($map['DefaultCooldown'])) {
            $model->defaultCooldown = $map['DefaultCooldown'];
        }
        if (isset($map['HostGroupId'])) {
            $model->hostGroupId = $map['HostGroupId'];
        }
        if (isset($map['WithGrace'])) {
            $model->withGrace = $map['WithGrace'];
        }
        if (isset($map['MultiAvailablePolicy'])) {
            $model->multiAvailablePolicy = $map['MultiAvailablePolicy'];
        }
        if (isset($map['ScalingRuleList'])) {
            $model->scalingRuleList = scalingRuleList::fromMap($map['ScalingRuleList']);
        }

        return $model;
    }
}
