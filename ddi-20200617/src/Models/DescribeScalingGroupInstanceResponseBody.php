<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models;

use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeScalingGroupInstanceResponseBody\scalingConfig;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeScalingGroupInstanceResponseBody\scalingRuleList;
use AlibabaCloud\Tea\Model;

class DescribeScalingGroupInstanceResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $hostGroupId;

    /**
     * @var string
     */
    public $scalingGroupId;

    /**
     * @var int
     */
    public $minSize;

    /**
     * @var int
     */
    public $maxSize;

    /**
     * @var int
     */
    public $defaultCooldown;

    /**
     * @var string
     */
    public $activeRuleCategory;

    /**
     * @var bool
     */
    public $withGrace;

    /**
     * @var int
     */
    public $timeoutWithGrace;

    /**
     * @var string
     */
    public $multiAvailablePolicy;

    /**
     * @var string
     */
    public $multiAvailablePolicyParam;

    /**
     * @var scalingConfig
     */
    public $scalingConfig;

    /**
     * @var scalingRuleList
     */
    public $scalingRuleList;
    protected $_name = [
        'requestId'                 => 'RequestId',
        'hostGroupId'               => 'HostGroupId',
        'scalingGroupId'            => 'ScalingGroupId',
        'minSize'                   => 'MinSize',
        'maxSize'                   => 'MaxSize',
        'defaultCooldown'           => 'DefaultCooldown',
        'activeRuleCategory'        => 'ActiveRuleCategory',
        'withGrace'                 => 'WithGrace',
        'timeoutWithGrace'          => 'TimeoutWithGrace',
        'multiAvailablePolicy'      => 'MultiAvailablePolicy',
        'multiAvailablePolicyParam' => 'MultiAvailablePolicyParam',
        'scalingConfig'             => 'ScalingConfig',
        'scalingRuleList'           => 'ScalingRuleList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->hostGroupId) {
            $res['HostGroupId'] = $this->hostGroupId;
        }
        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
        }
        if (null !== $this->minSize) {
            $res['MinSize'] = $this->minSize;
        }
        if (null !== $this->maxSize) {
            $res['MaxSize'] = $this->maxSize;
        }
        if (null !== $this->defaultCooldown) {
            $res['DefaultCooldown'] = $this->defaultCooldown;
        }
        if (null !== $this->activeRuleCategory) {
            $res['ActiveRuleCategory'] = $this->activeRuleCategory;
        }
        if (null !== $this->withGrace) {
            $res['WithGrace'] = $this->withGrace;
        }
        if (null !== $this->timeoutWithGrace) {
            $res['TimeoutWithGrace'] = $this->timeoutWithGrace;
        }
        if (null !== $this->multiAvailablePolicy) {
            $res['MultiAvailablePolicy'] = $this->multiAvailablePolicy;
        }
        if (null !== $this->multiAvailablePolicyParam) {
            $res['MultiAvailablePolicyParam'] = $this->multiAvailablePolicyParam;
        }
        if (null !== $this->scalingConfig) {
            $res['ScalingConfig'] = null !== $this->scalingConfig ? $this->scalingConfig->toMap() : null;
        }
        if (null !== $this->scalingRuleList) {
            $res['ScalingRuleList'] = null !== $this->scalingRuleList ? $this->scalingRuleList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeScalingGroupInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['HostGroupId'])) {
            $model->hostGroupId = $map['HostGroupId'];
        }
        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }
        if (isset($map['MinSize'])) {
            $model->minSize = $map['MinSize'];
        }
        if (isset($map['MaxSize'])) {
            $model->maxSize = $map['MaxSize'];
        }
        if (isset($map['DefaultCooldown'])) {
            $model->defaultCooldown = $map['DefaultCooldown'];
        }
        if (isset($map['ActiveRuleCategory'])) {
            $model->activeRuleCategory = $map['ActiveRuleCategory'];
        }
        if (isset($map['WithGrace'])) {
            $model->withGrace = $map['WithGrace'];
        }
        if (isset($map['TimeoutWithGrace'])) {
            $model->timeoutWithGrace = $map['TimeoutWithGrace'];
        }
        if (isset($map['MultiAvailablePolicy'])) {
            $model->multiAvailablePolicy = $map['MultiAvailablePolicy'];
        }
        if (isset($map['MultiAvailablePolicyParam'])) {
            $model->multiAvailablePolicyParam = $map['MultiAvailablePolicyParam'];
        }
        if (isset($map['ScalingConfig'])) {
            $model->scalingConfig = scalingConfig::fromMap($map['ScalingConfig']);
        }
        if (isset($map['ScalingRuleList'])) {
            $model->scalingRuleList = scalingRuleList::fromMap($map['ScalingRuleList']);
        }

        return $model;
    }
}
