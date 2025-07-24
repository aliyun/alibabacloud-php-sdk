<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetClusterCloneMetaResponseBody\clusterCloneMeta\scalingPolicies;

use AlibabaCloud\SDK\Emr\V20210320\Models\MetricsTrigger;
use AlibabaCloud\SDK\Emr\V20210320\Models\TimeTrigger;
use AlibabaCloud\Tea\Model;

class scalingRules extends Model
{
    /**
     * @description The scaling type. This parameter is required. Valid values:
     *
     *   SCALE_OUT
     *   SCALE_IN
     *
     * @example SCALE_OUT
     *
     * @var string
     */
    public $activityType;

    /**
     * @description The adjustment value of the auto scaling rule. This parameter is required. The parameter value must be a positive integer, which indicates the number of instances to be added or removed.
     *
     * @example 100
     *
     * @var int
     */
    public $adjustmentValue;

    /**
     * @description The description of load-based scaling.
     *
     * @var MetricsTrigger
     */
    public $metricsTrigger;

    /**
     * @description The name of the auto scaling rule.
     *
     * @example scaling-out-memory
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The description of time-based scaling.
     *
     * @var TimeTrigger
     */
    public $timeTrigger;

    /**
     * @description The trigger mode of the auto scaling rule. This parameter is required. Valid values:
     *
     *   TIME_TRIGGER: time-based scaling.
     *   METRICS_TRIGGER: load-based scaling.
     *
     * @example TIME_TRIGGER
     *
     * @var string
     */
    public $triggerType;
    protected $_name = [
        'activityType' => 'ActivityType',
        'adjustmentValue' => 'AdjustmentValue',
        'metricsTrigger' => 'MetricsTrigger',
        'ruleName' => 'RuleName',
        'timeTrigger' => 'TimeTrigger',
        'triggerType' => 'TriggerType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->activityType) {
            $res['ActivityType'] = $this->activityType;
        }
        if (null !== $this->adjustmentValue) {
            $res['AdjustmentValue'] = $this->adjustmentValue;
        }
        if (null !== $this->metricsTrigger) {
            $res['MetricsTrigger'] = null !== $this->metricsTrigger ? $this->metricsTrigger->toMap() : null;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->timeTrigger) {
            $res['TimeTrigger'] = null !== $this->timeTrigger ? $this->timeTrigger->toMap() : null;
        }
        if (null !== $this->triggerType) {
            $res['TriggerType'] = $this->triggerType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scalingRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActivityType'])) {
            $model->activityType = $map['ActivityType'];
        }
        if (isset($map['AdjustmentValue'])) {
            $model->adjustmentValue = $map['AdjustmentValue'];
        }
        if (isset($map['MetricsTrigger'])) {
            $model->metricsTrigger = MetricsTrigger::fromMap($map['MetricsTrigger']);
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['TimeTrigger'])) {
            $model->timeTrigger = TimeTrigger::fromMap($map['TimeTrigger']);
        }
        if (isset($map['TriggerType'])) {
            $model->triggerType = $map['TriggerType'];
        }

        return $model;
    }
}
