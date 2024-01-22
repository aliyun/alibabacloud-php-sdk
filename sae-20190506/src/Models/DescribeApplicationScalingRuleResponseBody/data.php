<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationScalingRuleResponseBody;

use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationScalingRuleResponseBody\data\metric;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationScalingRuleResponseBody\data\timer;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example a0d2e04c-159d-40a8-b240-d2f2c263****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The time when the auto scaling policy was created. Unit: milliseconds.
     *
     * @example 1624329843790
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The time when the auto scaling policy was last disabled.
     *
     * @example 1641882854484
     *
     * @var int
     */
    public $lastDisableTime;

    /**
     * @description The details of the metric-based auto scaling policy.
     *
     * @var metric
     */
    public $metric;

    /**
     * @var int
     */
    public $minReadyInstanceRatio;

    /**
     * @var int
     */
    public $minReadyInstances;

    /**
     * @description Indicates whether the auto scaling policy is enabled. Valid values:
     *
     *   **true**: enabled
     *   **false**: disabled
     *
     * @example true
     *
     * @var bool
     */
    public $scaleRuleEnabled;

    /**
     * @description The name of the auto scaling policy.
     *
     * @example test
     *
     * @var string
     */
    public $scaleRuleName;

    /**
     * @description The type of the auto scaling policy. Valid values:
     *
     *   **timing**: the scheduled auto scaling policy.
     *   **metric**: the metric-based auto scaling policy.
     *   **mix**: the hybrid auto scaling policy.
     *
     * @example timing
     *
     * @var string
     */
    public $scaleRuleType;

    /**
     * @description The details of the scheduled auto scaling policy.
     *
     * @var timer
     */
    public $timer;

    /**
     * @description The time when the auto scaling policy was updated. Unit: milliseconds.
     *
     * @example 1624330075827
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'appId'                 => 'AppId',
        'createTime'            => 'CreateTime',
        'lastDisableTime'       => 'LastDisableTime',
        'metric'                => 'Metric',
        'minReadyInstanceRatio' => 'MinReadyInstanceRatio',
        'minReadyInstances'     => 'MinReadyInstances',
        'scaleRuleEnabled'      => 'ScaleRuleEnabled',
        'scaleRuleName'         => 'ScaleRuleName',
        'scaleRuleType'         => 'ScaleRuleType',
        'timer'                 => 'Timer',
        'updateTime'            => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->lastDisableTime) {
            $res['LastDisableTime'] = $this->lastDisableTime;
        }
        if (null !== $this->metric) {
            $res['Metric'] = null !== $this->metric ? $this->metric->toMap() : null;
        }
        if (null !== $this->minReadyInstanceRatio) {
            $res['MinReadyInstanceRatio'] = $this->minReadyInstanceRatio;
        }
        if (null !== $this->minReadyInstances) {
            $res['MinReadyInstances'] = $this->minReadyInstances;
        }
        if (null !== $this->scaleRuleEnabled) {
            $res['ScaleRuleEnabled'] = $this->scaleRuleEnabled;
        }
        if (null !== $this->scaleRuleName) {
            $res['ScaleRuleName'] = $this->scaleRuleName;
        }
        if (null !== $this->scaleRuleType) {
            $res['ScaleRuleType'] = $this->scaleRuleType;
        }
        if (null !== $this->timer) {
            $res['Timer'] = null !== $this->timer ? $this->timer->toMap() : null;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['LastDisableTime'])) {
            $model->lastDisableTime = $map['LastDisableTime'];
        }
        if (isset($map['Metric'])) {
            $model->metric = metric::fromMap($map['Metric']);
        }
        if (isset($map['MinReadyInstanceRatio'])) {
            $model->minReadyInstanceRatio = $map['MinReadyInstanceRatio'];
        }
        if (isset($map['MinReadyInstances'])) {
            $model->minReadyInstances = $map['MinReadyInstances'];
        }
        if (isset($map['ScaleRuleEnabled'])) {
            $model->scaleRuleEnabled = $map['ScaleRuleEnabled'];
        }
        if (isset($map['ScaleRuleName'])) {
            $model->scaleRuleName = $map['ScaleRuleName'];
        }
        if (isset($map['ScaleRuleType'])) {
            $model->scaleRuleType = $map['ScaleRuleType'];
        }
        if (isset($map['Timer'])) {
            $model->timer = timer::fromMap($map['Timer']);
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
