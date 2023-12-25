<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingRulesResponseBody;

use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingRulesResponseBody\scalingRules\alarmDimensions;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingRulesResponseBody\scalingRules\alarms;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingRulesResponseBody\scalingRules\stepAdjustments;
use AlibabaCloud\Tea\Model;

class scalingRules extends Model
{
    /**
     * @description The scaling mode of the scaling rule. Valid values:
     *
     *   QuantityChangeInCapacity: adds the specified number of ECS instances to or removes the specified number of ECS instances from the scaling group.
     *   PercentChangeInCapacity: adds the specified percentage of ECS instances to or removes the specified percentage of ECS instances from the scaling group.
     *   TotalCapacity: adjusts the number of ECS instances in the scaling group to the specified number.
     *
     * @example QuantityChangeInCapacity
     *
     * @var string
     */
    public $adjustmentType;

    /**
     * @description The adjustment value that is specified in the scaling rule.
     *
     * @example 1
     *
     * @var int
     */
    public $adjustmentValue;

    /**
     * @description 监控项维度信息值，适用于目标追踪规则，当监控项需额外维度信息时设置，例如LoadBalancerRealServerAverageQps监控项需指定rulePool维度信息。
     *
     * @var alarmDimensions[]
     */
    public $alarmDimensions;

    /**
     * @description The event-triggered tasks that are associated with the scaling rule. Event-triggered tasks that are associated with the scaling rule are returned only if you set the ShowAlarmRules parameter to true. Otherwise, an empty list is returned.
     *
     * @var alarms[]
     */
    public $alarms;

    /**
     * @description The cooldown time of the scaling rule. This parameter is available only if you set the ScalingRuleType parameter to SimpleScalingRule. Valid values: 0 to 86400. Unit: seconds.
     *
     * @example 20
     *
     * @var int
     */
    public $cooldown;

    /**
     * @description Specifies whether to disable scale-in. This parameter is available only if you set the ScalingRuleType parameter to TargetTrackingScalingRule. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $disableScaleIn;

    /**
     * @description The warmup period of the ECS instance.
     *
     * @example 300
     *
     * @var int
     */
    public $estimatedInstanceWarmup;

    /**
     * @description The maximum number of ECS instances in the scaling group. You must specify the InitialMaxSize and PredictiveValueBehavior parameters.
     *
     * @example 100
     *
     * @var int
     */
    public $initialMaxSize;

    /**
     * @description The maximum number of ECS instances in the scaling group.
     *
     * @example 2
     *
     * @var int
     */
    public $maxSize;

    /**
     * @description The name of the metric of the event-triggered task that is associated with the scaling rule.
     *
     * @example CpuUtilization
     *
     * @var string
     */
    public $metricName;

    /**
     * @description The minimum number of instances that must be scaled when the AdjustmentType parameter is set to PercentChangeInCapacity. This parameter takes effect only if you set the ScalingRuleType parameter to SimpleScalingRule or StepScalingRule.
     *
     * @example 1
     *
     * @var int
     */
    public $minAdjustmentMagnitude;

    /**
     * @description The minimum number of ECS instances in the scaling group.
     *
     * @example 1
     *
     * @var int
     */
    public $minSize;

    /**
     * @description The mode of the predictive scaling rule. Valid values:
     *
     *   PredictAndScale: produces predictions and creates prediction tasks.
     *   PredictOnly: produces predictions but does not create prediction tasks.
     *
     * @example PredictAndScale
     *
     * @var string
     */
    public $predictiveScalingMode;

    /**
     * @description The amount of buffer time before the prediction task is executed. By default, all scheduled tasks that are automatically created for a predictive scaling rule are executed on the hour. You can specify a buffer time for resource preparation before prediction tasks are executed. Valid values: 0 to 60. Unit: minutes.
     *
     * @example 30
     *
     * @var int
     */
    public $predictiveTaskBufferTime;

    /**
     * @description Specifies which one of the initial maximum capacity and the predicted value can be used as the maximum value for prediction tasks. Valid values:
     *
     *   MaxOverridePredictiveValue: uses the initial maximum capacity as the maximum value for prediction tasks if the predicted value is greater than the initial maximum capacity.
     *   PredictiveValueOverrideMax: uses the predicted value as the maximum value for prediction tasks when the predicted value is greater than the initial maximum capacity.
     *   PredictiveValueOverrideMaxWithBuffer: increases the predicted value by a percentage that is specified by the PredictiveValueBuffer parameter. If the predicted value that is increased by the percentage is greater than the initial maximum capacity, the increased value is used as the maximum value for prediction tasks.
     *
     * @example MaxOverridePredictiveValue
     *
     * @var string
     */
    public $predictiveValueBehavior;

    /**
     * @description The percentage of the increment to the predicted value when the PredictiveValueBehavior parameter is set to PredictiveValueOverrideMaxWithBuffer. If the predicted value increased by this percentage is greater than the initial maximum capacity, the increased value is used as the maximum value for prediction tasks. Valid values: 0 to 100.
     *
     * @example 50
     *
     * @var int
     */
    public $predictiveValueBuffer;

    /**
     * @description The number of consecutive times that the event-triggered task created for scale-out activities must meet the threshold conditions before an alert is triggered. After a target tracking scaling rule is created, an event-triggered task is automatically created and then associated with the target tracking scaling rule.
     *
     * @example 15
     *
     * @var int
     */
    public $scaleInEvaluationCount;

    /**
     * @description The number of consecutive times that the event-triggered task created for scale-in activities must meet the threshold conditions before an alert is triggered. After a target tracking scaling rule is created, an event-triggered task is automatically created and then associated with the target tracking scaling rule.
     *
     * @example 3
     *
     * @var int
     */
    public $scaleOutEvaluationCount;

    /**
     * @description The ID of the scaling group.
     *
     * @example asg-bp1ffogfdauy0jw0****
     *
     * @var string
     */
    public $scalingGroupId;

    /**
     * @description The unique identifier of the scaling rule.
     *
     * @example ari:acs:ess:cn-hangzhou:140692647406****:scalingrule/asr-bp1dvirgwkoowxk7****
     *
     * @var string
     */
    public $scalingRuleAri;

    /**
     * @description The ID of the scaling rule.
     *
     * @example asr-bp1dvirgwkoowxk7****
     *
     * @var string
     */
    public $scalingRuleId;

    /**
     * @description The name of the scaling rule.
     *
     * @example scalingrule****
     *
     * @var string
     */
    public $scalingRuleName;

    /**
     * @description The type of the scaling rule. Valid values:
     *
     *   SimpleScalingRule: adjusts the number of ECS instances based on the values of the AdjustmentType and AdjustmentValue parameters.
     *   TargetTrackingScalingRule: calculates the number of ECS instances that need to be scaled in a dynamic manner and maintains the value of a predefined metric close to the value of the TargetValue parameter.
     *   StepScalingRule: scales ECS instances in steps based on specified thresholds and metric values.
     *   PredictiveScalingRule: uses machine learning to analyze historical monitoring data of the scaling group and predicts the future values of metrics. In addition, Auto Scaling automatically creates scheduled tasks to adjust the boundary values for the scaling group.
     *
     * @example SimpleScalingRule
     *
     * @var string
     */
    public $scalingRuleType;

    /**
     * @description The step adjustments of the step scaling rule.
     *
     * @var stepAdjustments[]
     */
    public $stepAdjustments;

    /**
     * @description The target value of the metric.
     *
     * @example 0.125
     *
     * @var float
     */
    public $targetValue;
    protected $_name = [
        'adjustmentType'           => 'AdjustmentType',
        'adjustmentValue'          => 'AdjustmentValue',
        'alarmDimensions'          => 'AlarmDimensions',
        'alarms'                   => 'Alarms',
        'cooldown'                 => 'Cooldown',
        'disableScaleIn'           => 'DisableScaleIn',
        'estimatedInstanceWarmup'  => 'EstimatedInstanceWarmup',
        'initialMaxSize'           => 'InitialMaxSize',
        'maxSize'                  => 'MaxSize',
        'metricName'               => 'MetricName',
        'minAdjustmentMagnitude'   => 'MinAdjustmentMagnitude',
        'minSize'                  => 'MinSize',
        'predictiveScalingMode'    => 'PredictiveScalingMode',
        'predictiveTaskBufferTime' => 'PredictiveTaskBufferTime',
        'predictiveValueBehavior'  => 'PredictiveValueBehavior',
        'predictiveValueBuffer'    => 'PredictiveValueBuffer',
        'scaleInEvaluationCount'   => 'ScaleInEvaluationCount',
        'scaleOutEvaluationCount'  => 'ScaleOutEvaluationCount',
        'scalingGroupId'           => 'ScalingGroupId',
        'scalingRuleAri'           => 'ScalingRuleAri',
        'scalingRuleId'            => 'ScalingRuleId',
        'scalingRuleName'          => 'ScalingRuleName',
        'scalingRuleType'          => 'ScalingRuleType',
        'stepAdjustments'          => 'StepAdjustments',
        'targetValue'              => 'TargetValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adjustmentType) {
            $res['AdjustmentType'] = $this->adjustmentType;
        }
        if (null !== $this->adjustmentValue) {
            $res['AdjustmentValue'] = $this->adjustmentValue;
        }
        if (null !== $this->alarmDimensions) {
            $res['AlarmDimensions'] = [];
            if (null !== $this->alarmDimensions && \is_array($this->alarmDimensions)) {
                $n = 0;
                foreach ($this->alarmDimensions as $item) {
                    $res['AlarmDimensions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->alarms) {
            $res['Alarms'] = [];
            if (null !== $this->alarms && \is_array($this->alarms)) {
                $n = 0;
                foreach ($this->alarms as $item) {
                    $res['Alarms'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->cooldown) {
            $res['Cooldown'] = $this->cooldown;
        }
        if (null !== $this->disableScaleIn) {
            $res['DisableScaleIn'] = $this->disableScaleIn;
        }
        if (null !== $this->estimatedInstanceWarmup) {
            $res['EstimatedInstanceWarmup'] = $this->estimatedInstanceWarmup;
        }
        if (null !== $this->initialMaxSize) {
            $res['InitialMaxSize'] = $this->initialMaxSize;
        }
        if (null !== $this->maxSize) {
            $res['MaxSize'] = $this->maxSize;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->minAdjustmentMagnitude) {
            $res['MinAdjustmentMagnitude'] = $this->minAdjustmentMagnitude;
        }
        if (null !== $this->minSize) {
            $res['MinSize'] = $this->minSize;
        }
        if (null !== $this->predictiveScalingMode) {
            $res['PredictiveScalingMode'] = $this->predictiveScalingMode;
        }
        if (null !== $this->predictiveTaskBufferTime) {
            $res['PredictiveTaskBufferTime'] = $this->predictiveTaskBufferTime;
        }
        if (null !== $this->predictiveValueBehavior) {
            $res['PredictiveValueBehavior'] = $this->predictiveValueBehavior;
        }
        if (null !== $this->predictiveValueBuffer) {
            $res['PredictiveValueBuffer'] = $this->predictiveValueBuffer;
        }
        if (null !== $this->scaleInEvaluationCount) {
            $res['ScaleInEvaluationCount'] = $this->scaleInEvaluationCount;
        }
        if (null !== $this->scaleOutEvaluationCount) {
            $res['ScaleOutEvaluationCount'] = $this->scaleOutEvaluationCount;
        }
        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
        }
        if (null !== $this->scalingRuleAri) {
            $res['ScalingRuleAri'] = $this->scalingRuleAri;
        }
        if (null !== $this->scalingRuleId) {
            $res['ScalingRuleId'] = $this->scalingRuleId;
        }
        if (null !== $this->scalingRuleName) {
            $res['ScalingRuleName'] = $this->scalingRuleName;
        }
        if (null !== $this->scalingRuleType) {
            $res['ScalingRuleType'] = $this->scalingRuleType;
        }
        if (null !== $this->stepAdjustments) {
            $res['StepAdjustments'] = [];
            if (null !== $this->stepAdjustments && \is_array($this->stepAdjustments)) {
                $n = 0;
                foreach ($this->stepAdjustments as $item) {
                    $res['StepAdjustments'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->targetValue) {
            $res['TargetValue'] = $this->targetValue;
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
        if (isset($map['AdjustmentType'])) {
            $model->adjustmentType = $map['AdjustmentType'];
        }
        if (isset($map['AdjustmentValue'])) {
            $model->adjustmentValue = $map['AdjustmentValue'];
        }
        if (isset($map['AlarmDimensions'])) {
            if (!empty($map['AlarmDimensions'])) {
                $model->alarmDimensions = [];
                $n                      = 0;
                foreach ($map['AlarmDimensions'] as $item) {
                    $model->alarmDimensions[$n++] = null !== $item ? alarmDimensions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Alarms'])) {
            if (!empty($map['Alarms'])) {
                $model->alarms = [];
                $n             = 0;
                foreach ($map['Alarms'] as $item) {
                    $model->alarms[$n++] = null !== $item ? alarms::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Cooldown'])) {
            $model->cooldown = $map['Cooldown'];
        }
        if (isset($map['DisableScaleIn'])) {
            $model->disableScaleIn = $map['DisableScaleIn'];
        }
        if (isset($map['EstimatedInstanceWarmup'])) {
            $model->estimatedInstanceWarmup = $map['EstimatedInstanceWarmup'];
        }
        if (isset($map['InitialMaxSize'])) {
            $model->initialMaxSize = $map['InitialMaxSize'];
        }
        if (isset($map['MaxSize'])) {
            $model->maxSize = $map['MaxSize'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['MinAdjustmentMagnitude'])) {
            $model->minAdjustmentMagnitude = $map['MinAdjustmentMagnitude'];
        }
        if (isset($map['MinSize'])) {
            $model->minSize = $map['MinSize'];
        }
        if (isset($map['PredictiveScalingMode'])) {
            $model->predictiveScalingMode = $map['PredictiveScalingMode'];
        }
        if (isset($map['PredictiveTaskBufferTime'])) {
            $model->predictiveTaskBufferTime = $map['PredictiveTaskBufferTime'];
        }
        if (isset($map['PredictiveValueBehavior'])) {
            $model->predictiveValueBehavior = $map['PredictiveValueBehavior'];
        }
        if (isset($map['PredictiveValueBuffer'])) {
            $model->predictiveValueBuffer = $map['PredictiveValueBuffer'];
        }
        if (isset($map['ScaleInEvaluationCount'])) {
            $model->scaleInEvaluationCount = $map['ScaleInEvaluationCount'];
        }
        if (isset($map['ScaleOutEvaluationCount'])) {
            $model->scaleOutEvaluationCount = $map['ScaleOutEvaluationCount'];
        }
        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }
        if (isset($map['ScalingRuleAri'])) {
            $model->scalingRuleAri = $map['ScalingRuleAri'];
        }
        if (isset($map['ScalingRuleId'])) {
            $model->scalingRuleId = $map['ScalingRuleId'];
        }
        if (isset($map['ScalingRuleName'])) {
            $model->scalingRuleName = $map['ScalingRuleName'];
        }
        if (isset($map['ScalingRuleType'])) {
            $model->scalingRuleType = $map['ScalingRuleType'];
        }
        if (isset($map['StepAdjustments'])) {
            if (!empty($map['StepAdjustments'])) {
                $model->stepAdjustments = [];
                $n                      = 0;
                foreach ($map['StepAdjustments'] as $item) {
                    $model->stepAdjustments[$n++] = null !== $item ? stepAdjustments::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TargetValue'])) {
            $model->targetValue = $map['TargetValue'];
        }

        return $model;
    }
}
