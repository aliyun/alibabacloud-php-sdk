<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingRulesResponseBody;

use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingRulesResponseBody\scalingRules\alarmDimensions;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingRulesResponseBody\scalingRules\alarms;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingRulesResponseBody\scalingRules\hybridMetrics;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingRulesResponseBody\scalingRules\stepAdjustments;
use AlibabaCloud\Tea\Model;

class scalingRules extends Model
{
    /**
     * @description The adjustment method of the scaling rule. Valid values:
     *
     *   QuantityChangeInCapacity: adds or removes the specified number of Elastic Compute Service (ECS) instances to or from the scaling group.
     *   PercentChangeInCapacity: adds or removes the specified percentage of ECS instances to or from the scaling group.
     *   TotalCapacity: adjusts the number of ECS instances in the scaling group to the specified number.
     *
     * @example QuantityChangeInCapacity
     *
     * @var string
     */
    public $adjustmentType;

    /**
     * @description The number of instances that must be scaled based on the scaling rule.
     *
     * @example 1
     *
     * @var int
     */
    public $adjustmentValue;

    /**
     * @description The dimensions. This parameter is applicable to target tracking scaling rules. You can specify this parameter if your predefined metric requires extra dimensions. For example, if you predefine the LoadBalancerRealServerAverageQps metric, you must use this parameter to specify the rulePool dimension.
     *
     * @var alarmDimensions[]
     */
    public $alarmDimensions;

    /**
     * @description The event-triggered tasks that are associated with the scaling rule. The value of this parameter is returned only if you set ShowAlarmRules to true. Otherwise, null is returned.
     *
     * @var alarms[]
     */
    public $alarms;

    /**
     * @description The cooldown period of the scaling rule. This parameter is available only if you set ScalingRuleType to SimpleScalingRule. Valid values: 0 to 86400. Unit: seconds.
     *
     * @example 20
     *
     * @var int
     */
    public $cooldown;

    /**
     * @description Indicates whether scale-in is disabled. This parameter takes effect only if you set ScalingRuleType to TargetTrackingScalingRule. Valid values:
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
     * @description The warm-up period of instances. During the warm-up period, a series of preparation measures are taken for the new instances. Performance metrics of instances being warmed up are not counted towards the monitoring range.
     *
     * @example 300
     *
     * @var int
     */
    public $estimatedInstanceWarmup;

    /**
     * @description The Hybrid Cloud Monitoring metrics.
     *
     * @var hybridMetrics[]
     */
    public $hybridMetrics;

    /**
     * @description The ID of the Hybrid Cloud Monitoring namespace.
     *
     * For information about how to manage Hybrid Cloud Monitoring namespaces, see [Manage namespaces](https://help.aliyun.com/document_detail/217606.html).
     *
     * @example aliyun-test
     *
     * @var string
     */
    public $hybridMonitorNamespace;

    /**
     * @description The maximum number of ECS instances that can be contained in the scaling group. If you specify this parameter, you must also specify PredictiveValueBehavior.
     *
     * @example 100
     *
     * @var int
     */
    public $initialMaxSize;

    /**
     * @description The maximum number of ECS instances that can be contained in the scaling group.
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
     * @description The metric type. Valid values:
     *
     *   system: system metrics of CloudMonitor.
     *   custom: custom metrics that are reported to CloudMonitor.
     *   hybrid: metrics of Hybrid Cloud Monitoring.
     *
     * @example system
     *
     * @var string
     */
    public $metricType;

    /**
     * @description The minimum number of instances that must be scaled. This parameter takes effect only if you set ScalingRuleType to SimpleScalingRule or StepScalingRule and set AdjustmentType to PercentChangeInCapacity.
     *
     * @example 1
     *
     * @var int
     */
    public $minAdjustmentMagnitude;

    /**
     * @description The minimum number of ECS instances that must be contained in the scaling group.
     *
     * @example 1
     *
     * @var int
     */
    public $minSize;

    /**
     * @description The mode of the predictive scaling rule. Valid values:
     *
     *   PredictAndScale: provides predictions and creates prediction tasks.
     *   PredictOnly: provides predictions but does not create prediction tasks.
     *
     * @example PredictAndScale
     *
     * @var string
     */
    public $predictiveScalingMode;

    /**
     * @description The amount of buffer time before prediction tasks are executed. By default, all prediction tasks that are automatically created based on a predictive scaling rule are executed on the hour. You can specify a buffer time for resource preparation before prediction tasks are executed. Valid values: 0 to 60. Unit: minutes.
     *
     * @example 30
     *
     * @var int
     */
    public $predictiveTaskBufferTime;

    /**
     * @description The action on the predicted maximum value. Valid values:
     *
     *   MaxOverridePredictiveValue: uses the initial maximum capacity as the maximum value for prediction tasks if the predicted value is greater than the initial maximum capacity.
     *   PredictiveValueOverrideMax: uses the predicted value as the maximum value for prediction tasks when the predicted value is greater than the initial maximum capacity.
     *   PredictiveValueOverrideMaxWithBuffer: increases the predicted value by a ratio that is specified by PredictiveValueBuffer, and uses the increased value as the maximum value for prediction tasks if the predicted value increased by this ratio is greater than the initial maximum capacity.
     *
     * @example MaxOverridePredictiveValue
     *
     * @var string
     */
    public $predictiveValueBehavior;

    /**
     * @description The ratio based on which the predicted value is increased when PredictiveValueBehavior is set to PredictiveValueOverrideMaxWithBuffer. If the predicted value increased by this ratio is greater than the initial maximum capacity, the increased value is used as the maximum value for prediction tasks. Valid values: 0 to 100.
     *
     * @example 50
     *
     * @var int
     */
    public $predictiveValueBuffer;

    /**
     * @description The number of consecutive times that the event-triggered task for scale-in purposes must meet the threshold conditions before an alert is triggered. After a target tracking scaling rule is created, an event-triggered task is automatically created and associated with the target tracking scaling rule.
     *
     * @example 15
     *
     * @var int
     */
    public $scaleInEvaluationCount;

    /**
     * @description The number of consecutive times that the event-triggered task created for scale-out purposes must meet the threshold conditions before an alert is triggered. After a target tracking scaling rule is created, an event-triggered task is automatically created and associated with the target tracking scaling rule.
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
     *   SimpleScalingRule: a simple scaling rule. Once a simple scaling rule is executed, Auto Scaling adjusts the number of ECS instances in the scaling group based on the values of AdjustmentType and AdjustmentValue.
     *   TargetTrackingScalingRule: a target tracking scaling rule. Once a target tracking scaling rule is executed, Auto Scaling dynamically calculates the number of ECS instances or elastic container instances to scale based on the predefined metric (MetricName) and attempts to maintain the metric value close to the specified target value (TargetValue).
     *   StepScalingRule: a step scaling rule. Once a step scaling rule is executed, Auto Scaling scales instances step by step based on the predefined thresholds and metric values.
     *   PredictiveScalingRule: a predictive scaling rule. Once a predictive scaling rule is executed, Auto Scaling analyzes the historical monitoring data based on the machine learning technology and predicts the trends of metric data. Auto Scaling also creates scheduled tasks to enable dynamic adjustment of the boundary values for the scaling group.
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
     * @description The target value of the metric. If you set ScalingRuleType to TargetTrackingScalingRule or PredictiveScalingRule, Auto Scaling keeps the metric value close to the target value by adding instances to or removing instances from the scaling group.
     *
     * @example 0.125
     *
     * @var float
     */
    public $targetValue;
    protected $_name = [
        'adjustmentType' => 'AdjustmentType',
        'adjustmentValue' => 'AdjustmentValue',
        'alarmDimensions' => 'AlarmDimensions',
        'alarms' => 'Alarms',
        'cooldown' => 'Cooldown',
        'disableScaleIn' => 'DisableScaleIn',
        'estimatedInstanceWarmup' => 'EstimatedInstanceWarmup',
        'hybridMetrics' => 'HybridMetrics',
        'hybridMonitorNamespace' => 'HybridMonitorNamespace',
        'initialMaxSize' => 'InitialMaxSize',
        'maxSize' => 'MaxSize',
        'metricName' => 'MetricName',
        'metricType' => 'MetricType',
        'minAdjustmentMagnitude' => 'MinAdjustmentMagnitude',
        'minSize' => 'MinSize',
        'predictiveScalingMode' => 'PredictiveScalingMode',
        'predictiveTaskBufferTime' => 'PredictiveTaskBufferTime',
        'predictiveValueBehavior' => 'PredictiveValueBehavior',
        'predictiveValueBuffer' => 'PredictiveValueBuffer',
        'scaleInEvaluationCount' => 'ScaleInEvaluationCount',
        'scaleOutEvaluationCount' => 'ScaleOutEvaluationCount',
        'scalingGroupId' => 'ScalingGroupId',
        'scalingRuleAri' => 'ScalingRuleAri',
        'scalingRuleId' => 'ScalingRuleId',
        'scalingRuleName' => 'ScalingRuleName',
        'scalingRuleType' => 'ScalingRuleType',
        'stepAdjustments' => 'StepAdjustments',
        'targetValue' => 'TargetValue',
    ];

    public function validate() {}

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
        if (null !== $this->hybridMetrics) {
            $res['HybridMetrics'] = [];
            if (null !== $this->hybridMetrics && \is_array($this->hybridMetrics)) {
                $n = 0;
                foreach ($this->hybridMetrics as $item) {
                    $res['HybridMetrics'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->hybridMonitorNamespace) {
            $res['HybridMonitorNamespace'] = $this->hybridMonitorNamespace;
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
        if (null !== $this->metricType) {
            $res['MetricType'] = $this->metricType;
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
                $n = 0;
                foreach ($map['AlarmDimensions'] as $item) {
                    $model->alarmDimensions[$n++] = null !== $item ? alarmDimensions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Alarms'])) {
            if (!empty($map['Alarms'])) {
                $model->alarms = [];
                $n = 0;
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
        if (isset($map['HybridMetrics'])) {
            if (!empty($map['HybridMetrics'])) {
                $model->hybridMetrics = [];
                $n = 0;
                foreach ($map['HybridMetrics'] as $item) {
                    $model->hybridMetrics[$n++] = null !== $item ? hybridMetrics::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HybridMonitorNamespace'])) {
            $model->hybridMonitorNamespace = $map['HybridMonitorNamespace'];
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
        if (isset($map['MetricType'])) {
            $model->metricType = $map['MetricType'];
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
                $n = 0;
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
