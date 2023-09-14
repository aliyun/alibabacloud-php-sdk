<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetAutoScalingPolicyResponseBody\scalingPolicy;

use AlibabaCloud\SDK\Emr\V20210320\Models\MetricsTrigger;
use AlibabaCloud\SDK\Emr\V20210320\Models\TimeTrigger;
use AlibabaCloud\Tea\Model;

class scalingRules extends Model
{
    /**
     * @description 伸缩类型。取值范围：
     * - SCALE_IN：缩容
     * @example SCALE_OUT
     *
     * @var string
     */
    public $activityType;

    /**
     * @description 调整类型。CHANGE_IN_CAPACITY/EXACT_CAPACITY。
     *
     * @example CHANGE_IN_CAPACITY
     *
     * @var string
     */
    public $adjustmentType;

    /**
     * @description 调整值。需要为正数，代表需要扩容或者缩容的实例数量。
     *
     * @example 100
     *
     * @var int
     */
    public $adjustmentValue;

    /**
     * @description 按照负载伸缩描述。
     *
     * @var MetricsTrigger
     */
    public $metricsTrigger;

    /**
     * @description 弹性伸缩规则名称。
     *
     * @example scaling-out-memory
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description 按照时间伸缩描述。
     *
     * @var TimeTrigger
     */
    public $timeTrigger;

    /**
     * @description 伸缩规则类型。取值范围：
     * - METRICS_TRIGGER: 按负载伸缩。
     * @example TIME_TRIGGER
     *
     * @var string
     */
    public $triggerType;
    protected $_name = [
        'activityType'    => 'ActivityType',
        'adjustmentType'  => 'AdjustmentType',
        'adjustmentValue' => 'AdjustmentValue',
        'metricsTrigger'  => 'MetricsTrigger',
        'ruleName'        => 'RuleName',
        'timeTrigger'     => 'TimeTrigger',
        'triggerType'     => 'TriggerType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activityType) {
            $res['ActivityType'] = $this->activityType;
        }
        if (null !== $this->adjustmentType) {
            $res['AdjustmentType'] = $this->adjustmentType;
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
        if (isset($map['AdjustmentType'])) {
            $model->adjustmentType = $map['AdjustmentType'];
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
