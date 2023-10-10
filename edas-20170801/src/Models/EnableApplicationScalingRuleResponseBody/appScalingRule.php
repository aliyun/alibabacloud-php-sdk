<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\EnableApplicationScalingRuleResponseBody;

use AlibabaCloud\SDK\Edas\V20170801\Models\EnableApplicationScalingRuleResponseBody\appScalingRule\metric;
use AlibabaCloud\SDK\Edas\V20170801\Models\EnableApplicationScalingRuleResponseBody\appScalingRule\trigger;
use AlibabaCloud\Tea\Model;

class appScalingRule extends Model
{
    /**
     * @description The ID of the application to which the auto scaling policy belongs.
     *
     * @example 78194c76-3dca-418e-a263-cccd1ab4****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The time when the auto scaling policy was created.
     *
     * @example 23212323123
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The time when the auto scaling policy was last disabled.
     *
     * @example 23212323123
     *
     * @var int
     */
    public $lastDisableTime;

    /**
     * @description This parameter is deprecated.
     *
     * @example 1
     *
     * @var int
     */
    public $maxReplicas;

    /**
     * @description This parameter is deprecated.
     *
     * @var metric
     */
    public $metric;

    /**
     * @description This parameter is deprecated.
     *
     * @example 1
     *
     * @var int
     */
    public $minReplicas;

    /**
     * @description Indicates whether the auto scaling policy is enabled. Valid values:
     *
     *   **true**: The auto scaling policy is enabled.
     *   **false**: The auto scaling policy is disabled.
     *
     * @example true
     *
     * @var bool
     */
    public $scaleRuleEnabled;

    /**
     * @description The name of the auto scaling policy.
     *
     * @example cpu-trigger
     *
     * @var string
     */
    public $scaleRuleName;

    /**
     * @description The type of the auto scaling policy. The value is fixed to trigger.
     *
     * @example trigger
     *
     * @var string
     */
    public $scaleRuleType;

    /**
     * @description The configurations of the trigger.
     *
     * @var trigger
     */
    public $trigger;

    /**
     * @description The time when the auto scaling policy was last modified.
     *
     * @example 23212323123
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'appId'            => 'AppId',
        'createTime'       => 'CreateTime',
        'lastDisableTime'  => 'LastDisableTime',
        'maxReplicas'      => 'MaxReplicas',
        'metric'           => 'Metric',
        'minReplicas'      => 'MinReplicas',
        'scaleRuleEnabled' => 'ScaleRuleEnabled',
        'scaleRuleName'    => 'ScaleRuleName',
        'scaleRuleType'    => 'ScaleRuleType',
        'trigger'          => 'Trigger',
        'updateTime'       => 'UpdateTime',
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
        if (null !== $this->maxReplicas) {
            $res['MaxReplicas'] = $this->maxReplicas;
        }
        if (null !== $this->metric) {
            $res['Metric'] = null !== $this->metric ? $this->metric->toMap() : null;
        }
        if (null !== $this->minReplicas) {
            $res['MinReplicas'] = $this->minReplicas;
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
        if (null !== $this->trigger) {
            $res['Trigger'] = null !== $this->trigger ? $this->trigger->toMap() : null;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appScalingRule
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
        if (isset($map['MaxReplicas'])) {
            $model->maxReplicas = $map['MaxReplicas'];
        }
        if (isset($map['Metric'])) {
            $model->metric = metric::fromMap($map['Metric']);
        }
        if (isset($map['MinReplicas'])) {
            $model->minReplicas = $map['MinReplicas'];
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
        if (isset($map['Trigger'])) {
            $model->trigger = trigger::fromMap($map['Trigger']);
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
