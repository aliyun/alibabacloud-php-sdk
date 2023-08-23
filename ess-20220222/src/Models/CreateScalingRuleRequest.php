<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\SDK\Ess\V20220222\Models\CreateScalingRuleRequest\alarmDimensions;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateScalingRuleRequest\stepAdjustments;
use AlibabaCloud\Tea\Model;

class CreateScalingRuleRequest extends Model
{
    /**
     * @description The number of instances that must be scaled based on the scaling rule. This parameter is required only if you set the ScalingRuleType parameter to SimpleScalingRule or StepScalingRule. The number of ECS instances that are scaled in a single scaling activity cannot exceed 1,000.
     *
     *   Valid values if you set the AdjustmentType parameter to QuantityChangeInCapacity: -1000 to 1000.
     *   Valid values if you set the AdjustmentType parameter to PercentChangeInCapacity: -100 to 10000.
     *   Valid values if you set the AdjustmentType parameter to TotalCapacity: 0 to 2000.
     *
     * @example QuantityChangeInCapacity
     *
     * @var string
     */
    public $adjustmentType;

    /**
     * @description The type of the scaling rule. Valid values:
     *
     *   SimpleScalingRule: scales the number of ECS instances based on the values that are specified for the AdjustmentType and AdjustmentValue parameters.
     *   TargetTrackingScalingRule: calculates the number of ECS instances that must be scaled and maintains the value of a predefined metric close to the value that is specified for the TargetValue parameter.
     *   StepScalingRule: scales ECS instances in steps based on the specified thresholds and metric values.
     *   PredictiveScalingRule: uses machine learning to analyze historical monitoring data of the scaling group and predicts the future values of metrics. In addition, Auto Scaling automatically creates scheduled tasks to specify the boundary values for the scaling group.
     *
     * Default value: SimpleScalingRule.
     * @example 100
     *
     * @var int
     */
    public $adjustmentValue;

    /**
     * @description 监控项维度信息值，适用于目标追踪规则，当监控项需额外维度信息时设置，例如LoadBalancerRealServerAverageQps监控项需指定rulePool维度键值信息。
     *
     * @var alarmDimensions[]
     */
    public $alarmDimensions;

    /**
     * @description The minimum number of instances that must be scaled when the AdjustmentType parameter is set to PercentChangeInCapacity. This parameter takes effect only if you set the ScalingRuleType parameter to SimpleScalingRule or StepScalingRule.
     *
     * @example 60
     *
     * @var int
     */
    public $cooldown;

    /**
     * @description Specifies whether to disable scale-in. This parameter is available only if you set ScalingRuleType to TargetTrackingScalingRule.
     *
     * Default value: false
     * @example false
     *
     * @var bool
     */
    public $disableScaleIn;

    /**
     * @description The warmup period of an instance. This parameter is available only if you set ScalingRuleType to TargetTrackingScalingRule or PredictiveScalingRule. Auto Scaling adds ECS instances that are in the Warmup state to a scaling group but does not report the monitoring data of the ECS instances to CloudMonitor during the warmup period.
     *
     * Default value: 300
     * @example 300
     *
     * @var int
     */
    public $estimatedInstanceWarmup;

    /**
     * @description Details of the step adjustments.
     *
     * @example 100
     *
     * @var int
     */
    public $initialMaxSize;

    /**
     * @description The target value. This parameter is required only if you set the ScalingRuleType parameter to TargetTrackingScalingRule or PredictiveScalingRule. The value must be greater than 0 and can have up to three decimal places.
     *
     * @example CpuUtilization
     *
     * @var string
     */
    public $metricName;

    /**
     * @description The scaling method of the scaling rule. This parameter is required only if you set the ScalingRuleType parameter to SimpleScalingRule or StepScalingRule. Valid values:
     *
     *   QuantityChangeInCapacity: adds the specified number of ECS instances to or removes the specified number of ECS instances from the scaling group.
     *   PercentChangeInCapacity: adds the specified percentage of ECS instances to or removes the specified percentage of ECS instances from the scaling group.
     *   TotalCapacity: adjusts the number of ECS instances in the scaling group to a specified number.
     *
     * @example 1
     *
     * @var int
     */
    public $minAdjustmentMagnitude;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The maximum value for predication tasks. Valid values:
     *
     *   MaxOverridePredictiveValue: uses the initial maximum capacity as the maximum value for prediction tasks if the predicted value is greater than the initial maximum capacity.
     *   PredictiveValueOverrideMax: uses the predicted value as the maximum value for prediction tasks if the predicted value is greater than the initial maximum capacity.
     *   PredictiveValueOverrideMaxWithBuffer: increases the predicted value by a percentage that is specified by the PredictiveValueBuffer parameter. If the predicted value that is increased by the percentage is greater than the initial maximum capacity, the increased value is used as the maximum value for prediction tasks.
     *
     * Default value: MaxOverridePredictiveValue.
     * @example PredictAndScale
     *
     * @var string
     */
    public $predictiveScalingMode;

    /**
     * @description The maximum number of ECS instances in the scaling group. If you specify this parameter, you must also specify the PredictiveValueBehavior parameter.
     *
     * The default value of this parameter is the value of the MaxSize parameter.
     * @example 30
     *
     * @var int
     */
    public $predictiveTaskBufferTime;

    /**
     * @description The percentage of the increment to the predicted value when the PredictiveValueBehavior parameter is set to PredictiveValueOverrideMaxWithBuffer. If the predicted value increased by this percentage is greater than the initial maximum capacity, the increased value is used as the maximum value for prediction tasks. Valid values: 0 to 100.
     *
     * Default value: 0.
     * @example MaxOverridePredictiveValue
     *
     * @var string
     */
    public $predictiveValueBehavior;

    /**
     * @description The amount of buffer time before the prediction task is executed. By default, all prediction tasks that are automatically created for a predictive scaling rule are executed on the hour. You can specify an amount of buffer time for resource preparation before the prediction tasks are executed. Valid values: 0 to 60. Unit: minutes.
     *
     * Default value: 0.
     * @example 50
     *
     * @var int
     */
    public $predictiveValueBuffer;

    /**
     * @description The unique identifier of the scaling rule.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description The number of consecutive times that the event-triggered task created for scale-out activities must meet the threshold conditions before an alert is triggered. After a target tracking scaling rule is created, an event-triggered task is automatically created and then associated with the target tracking scaling rule.
     *
     * Default value: 3.
     * @example 15
     *
     * @var int
     */
    public $scaleInEvaluationCount;

    /**
     * @description The mode of the predictive scaling rule. Valid values:
     *
     *   PredictAndScale: produces predictions and creates prediction tasks.
     *   PredictOnly: produces predictions but does not create prediction tasks.
     *
     * Default value: PredictAndScale.
     * @example 3
     *
     * @var int
     */
    public $scaleOutEvaluationCount;

    /**
     * @description The name of the scaling rule. It must be 2 to 64 characters in length, and can contain letters, digits, underscores (\_), hyphens (-), and periods (.). It must start with a letter or a digit. The name of a scaling rule must be unique in the scaling group to which the scaling rule belongs and within an Alibaba Cloud account.
     *
     * If you do not specify this parameter, the value of the ScalingRuleId parameter is used.
     * @example asg-bp1ffogfdauy0jw0****
     *
     * @var string
     */
    public $scalingGroupId;

    /**
     * @description The cooldown time of the scaling rule. This parameter is available only if you set the ScalingRuleType parameter to SimpleScalingRule. Valid values: 0 to 86400. Unit: seconds.
     *
     * By default, this parameter is left empty.
     * @example scalingrule****
     *
     * @var string
     */
    public $scalingRuleName;

    /**
     * @description The type of the scaling rule. Valid values:
     *
     *   SimpleScalingRule: adjusts the number of ECS instances based on the values of AdjustmentType and AdjustmentValue.
     *   TargetTrackingScalingRule: calculates the number of ECS instances that need to be scaled in a dynamic manner and maintains the value of a predefined metric close to the value of TargetValue.
     *   StepScalingRule: scales ECS instances in steps based on the specified thresholds and metric values.
     *   PredictiveScalingRule: uses machine learning to analyze historical monitoring data of the scaling group and predicts the future values of the predefined metrics. In addition, Auto Scaling automatically creates scheduled tasks to specify the boundary values for the scaling group.
     *
     * Default value: SimpleScalingRule
     * @example SimpleScalingRule
     *
     * @var string
     */
    public $scalingRuleType;

    /**
     * @description Details of the step adjustments.
     *
     * @var stepAdjustments[]
     */
    public $stepAdjustments;

    /**
     * @description Specifies whether to disable scale-in. This parameter is available only if you set the ScalingRuleType parameter to TargetTrackingScalingRule.
     *
     * Default value: false.
     * @example 0.125
     *
     * @var float
     */
    public $targetValue;
    protected $_name = [
        'adjustmentType'           => 'AdjustmentType',
        'adjustmentValue'          => 'AdjustmentValue',
        'alarmDimensions'          => 'AlarmDimensions',
        'cooldown'                 => 'Cooldown',
        'disableScaleIn'           => 'DisableScaleIn',
        'estimatedInstanceWarmup'  => 'EstimatedInstanceWarmup',
        'initialMaxSize'           => 'InitialMaxSize',
        'metricName'               => 'MetricName',
        'minAdjustmentMagnitude'   => 'MinAdjustmentMagnitude',
        'ownerAccount'             => 'OwnerAccount',
        'ownerId'                  => 'OwnerId',
        'predictiveScalingMode'    => 'PredictiveScalingMode',
        'predictiveTaskBufferTime' => 'PredictiveTaskBufferTime',
        'predictiveValueBehavior'  => 'PredictiveValueBehavior',
        'predictiveValueBuffer'    => 'PredictiveValueBuffer',
        'regionId'                 => 'RegionId',
        'resourceOwnerAccount'     => 'ResourceOwnerAccount',
        'scaleInEvaluationCount'   => 'ScaleInEvaluationCount',
        'scaleOutEvaluationCount'  => 'ScaleOutEvaluationCount',
        'scalingGroupId'           => 'ScalingGroupId',
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
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->minAdjustmentMagnitude) {
            $res['MinAdjustmentMagnitude'] = $this->minAdjustmentMagnitude;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
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
     * @return CreateScalingRuleRequest
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
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['MinAdjustmentMagnitude'])) {
            $model->minAdjustmentMagnitude = $map['MinAdjustmentMagnitude'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
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
