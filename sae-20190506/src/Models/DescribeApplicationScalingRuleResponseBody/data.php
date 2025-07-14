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
     * @description The ratio of the minimum number of available instances to the current number of instances. Valid values:
     *
     *   **-1** (default value): The minimum number of available instances is not determined based on this parameter.
     *   **0 to 100**: The minimum number of available instances is calculated by using the following formula: Number of existing instances × Value of MinReadyInstanceRatio × 100%. The calculation result is rounded up to the nearest integer. For example, if the number of existing instances is 5 and MinReadyInstanceRatio is set to 50, the minimum number of available instances is 3.
     *
     * >  If the **MinReadyInstanceRatio** and **MinReadyInstanceRatio** parameters are configured and the **MinReadyInstanceRatio** parameter is set to a number from 0 to 100, the value of the MinReadyInstanceRatio parameter takes precedence. For example, if the **MinReadyInstances** parameter is set to **5**, and the **MinReadyInstanceRatio** parameter is set to **50**, the minimum number of available instances is set to the nearest integer rounded up from the calculated result of the following formula: Nmber of existing instances × **50**.
     *
     * @example -1
     *
     * @var int
     */
    public $minReadyInstanceRatio;

    /**
     * @description The minimum number of available instances. Valid values:
     *
     *   If you set the value to **0**, business is interrupted when the application is updated.
     *   If you set this property to -1, the system calculates a recommended value as the minimum number of available instances by using the following formula: Recommended value = Number of existing instances × 25%. The calculation result is rounded up to the nearest integer. For example, if the number of existing instances is 5, the recommended value is calculated by using the following formula: 5 × 25% = 1.25. In this case, the minimum number of available instances is 2.
     *
     * >  To ensure business continuity, make sure that at least one instance is available during application deployment and rollback.
     *
     * @example 1
     *
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
        'appId' => 'AppId',
        'createTime' => 'CreateTime',
        'lastDisableTime' => 'LastDisableTime',
        'metric' => 'Metric',
        'minReadyInstanceRatio' => 'MinReadyInstanceRatio',
        'minReadyInstances' => 'MinReadyInstances',
        'scaleRuleEnabled' => 'ScaleRuleEnabled',
        'scaleRuleName' => 'ScaleRuleName',
        'scaleRuleType' => 'ScaleRuleType',
        'timer' => 'Timer',
        'updateTime' => 'UpdateTime',
    ];

    public function validate() {}

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
