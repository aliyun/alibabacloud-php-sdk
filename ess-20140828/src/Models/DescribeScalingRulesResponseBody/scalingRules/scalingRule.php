<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models\DescribeScalingRulesResponseBody\scalingRules;

use AlibabaCloud\SDK\Ess\V20140828\Models\DescribeScalingRulesResponseBody\scalingRules\scalingRule\alarms;
use AlibabaCloud\SDK\Ess\V20140828\Models\DescribeScalingRulesResponseBody\scalingRules\scalingRule\stepAdjustments;
use AlibabaCloud\Tea\Model;

class scalingRule extends Model
{
    /**
     * @var string
     */
    public $metricName;

    /**
     * @var string
     */
    public $adjustmentType;

    /**
     * @var int
     */
    public $initialMaxSize;

    /**
     * @var int
     */
    public $estimatedInstanceWarmup;

    /**
     * @var int
     */
    public $scaleOutEvaluationCount;

    /**
     * @var string
     */
    public $predictiveScalingMode;

    /**
     * @var int
     */
    public $minAdjustmentMagnitude;

    /**
     * @var string
     */
    public $scalingRuleAri;

    /**
     * @var int
     */
    public $predictiveTaskBufferTime;

    /**
     * @var int
     */
    public $minSize;

    /**
     * @var string
     */
    public $scalingGroupId;

    /**
     * @var string
     */
    public $predictiveValueBehavior;

    /**
     * @var float
     */
    public $targetValue;

    /**
     * @var int
     */
    public $cooldown;

    /**
     * @var int
     */
    public $maxSize;

    /**
     * @var int
     */
    public $predictiveValueBuffer;

    /**
     * @var string
     */
    public $scalingRuleType;

    /**
     * @var int
     */
    public $adjustmentValue;

    /**
     * @var int
     */
    public $scaleInEvaluationCount;

    /**
     * @var bool
     */
    public $disableScaleIn;

    /**
     * @var string
     */
    public $scalingRuleName;

    /**
     * @var string
     */
    public $scalingRuleId;

    /**
     * @var alarms
     */
    public $alarms;

    /**
     * @var stepAdjustments
     */
    public $stepAdjustments;
    protected $_name = [
        'metricName'               => 'MetricName',
        'adjustmentType'           => 'AdjustmentType',
        'initialMaxSize'           => 'InitialMaxSize',
        'estimatedInstanceWarmup'  => 'EstimatedInstanceWarmup',
        'scaleOutEvaluationCount'  => 'ScaleOutEvaluationCount',
        'predictiveScalingMode'    => 'PredictiveScalingMode',
        'minAdjustmentMagnitude'   => 'MinAdjustmentMagnitude',
        'scalingRuleAri'           => 'ScalingRuleAri',
        'predictiveTaskBufferTime' => 'PredictiveTaskBufferTime',
        'minSize'                  => 'MinSize',
        'scalingGroupId'           => 'ScalingGroupId',
        'predictiveValueBehavior'  => 'PredictiveValueBehavior',
        'targetValue'              => 'TargetValue',
        'cooldown'                 => 'Cooldown',
        'maxSize'                  => 'MaxSize',
        'predictiveValueBuffer'    => 'PredictiveValueBuffer',
        'scalingRuleType'          => 'ScalingRuleType',
        'adjustmentValue'          => 'AdjustmentValue',
        'scaleInEvaluationCount'   => 'ScaleInEvaluationCount',
        'disableScaleIn'           => 'DisableScaleIn',
        'scalingRuleName'          => 'ScalingRuleName',
        'scalingRuleId'            => 'ScalingRuleId',
        'alarms'                   => 'Alarms',
        'stepAdjustments'          => 'StepAdjustments',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->adjustmentType) {
            $res['AdjustmentType'] = $this->adjustmentType;
        }
        if (null !== $this->initialMaxSize) {
            $res['InitialMaxSize'] = $this->initialMaxSize;
        }
        if (null !== $this->estimatedInstanceWarmup) {
            $res['EstimatedInstanceWarmup'] = $this->estimatedInstanceWarmup;
        }
        if (null !== $this->scaleOutEvaluationCount) {
            $res['ScaleOutEvaluationCount'] = $this->scaleOutEvaluationCount;
        }
        if (null !== $this->predictiveScalingMode) {
            $res['PredictiveScalingMode'] = $this->predictiveScalingMode;
        }
        if (null !== $this->minAdjustmentMagnitude) {
            $res['MinAdjustmentMagnitude'] = $this->minAdjustmentMagnitude;
        }
        if (null !== $this->scalingRuleAri) {
            $res['ScalingRuleAri'] = $this->scalingRuleAri;
        }
        if (null !== $this->predictiveTaskBufferTime) {
            $res['PredictiveTaskBufferTime'] = $this->predictiveTaskBufferTime;
        }
        if (null !== $this->minSize) {
            $res['MinSize'] = $this->minSize;
        }
        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
        }
        if (null !== $this->predictiveValueBehavior) {
            $res['PredictiveValueBehavior'] = $this->predictiveValueBehavior;
        }
        if (null !== $this->targetValue) {
            $res['TargetValue'] = $this->targetValue;
        }
        if (null !== $this->cooldown) {
            $res['Cooldown'] = $this->cooldown;
        }
        if (null !== $this->maxSize) {
            $res['MaxSize'] = $this->maxSize;
        }
        if (null !== $this->predictiveValueBuffer) {
            $res['PredictiveValueBuffer'] = $this->predictiveValueBuffer;
        }
        if (null !== $this->scalingRuleType) {
            $res['ScalingRuleType'] = $this->scalingRuleType;
        }
        if (null !== $this->adjustmentValue) {
            $res['AdjustmentValue'] = $this->adjustmentValue;
        }
        if (null !== $this->scaleInEvaluationCount) {
            $res['ScaleInEvaluationCount'] = $this->scaleInEvaluationCount;
        }
        if (null !== $this->disableScaleIn) {
            $res['DisableScaleIn'] = $this->disableScaleIn;
        }
        if (null !== $this->scalingRuleName) {
            $res['ScalingRuleName'] = $this->scalingRuleName;
        }
        if (null !== $this->scalingRuleId) {
            $res['ScalingRuleId'] = $this->scalingRuleId;
        }
        if (null !== $this->alarms) {
            $res['Alarms'] = null !== $this->alarms ? $this->alarms->toMap() : null;
        }
        if (null !== $this->stepAdjustments) {
            $res['StepAdjustments'] = null !== $this->stepAdjustments ? $this->stepAdjustments->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scalingRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['AdjustmentType'])) {
            $model->adjustmentType = $map['AdjustmentType'];
        }
        if (isset($map['InitialMaxSize'])) {
            $model->initialMaxSize = $map['InitialMaxSize'];
        }
        if (isset($map['EstimatedInstanceWarmup'])) {
            $model->estimatedInstanceWarmup = $map['EstimatedInstanceWarmup'];
        }
        if (isset($map['ScaleOutEvaluationCount'])) {
            $model->scaleOutEvaluationCount = $map['ScaleOutEvaluationCount'];
        }
        if (isset($map['PredictiveScalingMode'])) {
            $model->predictiveScalingMode = $map['PredictiveScalingMode'];
        }
        if (isset($map['MinAdjustmentMagnitude'])) {
            $model->minAdjustmentMagnitude = $map['MinAdjustmentMagnitude'];
        }
        if (isset($map['ScalingRuleAri'])) {
            $model->scalingRuleAri = $map['ScalingRuleAri'];
        }
        if (isset($map['PredictiveTaskBufferTime'])) {
            $model->predictiveTaskBufferTime = $map['PredictiveTaskBufferTime'];
        }
        if (isset($map['MinSize'])) {
            $model->minSize = $map['MinSize'];
        }
        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }
        if (isset($map['PredictiveValueBehavior'])) {
            $model->predictiveValueBehavior = $map['PredictiveValueBehavior'];
        }
        if (isset($map['TargetValue'])) {
            $model->targetValue = $map['TargetValue'];
        }
        if (isset($map['Cooldown'])) {
            $model->cooldown = $map['Cooldown'];
        }
        if (isset($map['MaxSize'])) {
            $model->maxSize = $map['MaxSize'];
        }
        if (isset($map['PredictiveValueBuffer'])) {
            $model->predictiveValueBuffer = $map['PredictiveValueBuffer'];
        }
        if (isset($map['ScalingRuleType'])) {
            $model->scalingRuleType = $map['ScalingRuleType'];
        }
        if (isset($map['AdjustmentValue'])) {
            $model->adjustmentValue = $map['AdjustmentValue'];
        }
        if (isset($map['ScaleInEvaluationCount'])) {
            $model->scaleInEvaluationCount = $map['ScaleInEvaluationCount'];
        }
        if (isset($map['DisableScaleIn'])) {
            $model->disableScaleIn = $map['DisableScaleIn'];
        }
        if (isset($map['ScalingRuleName'])) {
            $model->scalingRuleName = $map['ScalingRuleName'];
        }
        if (isset($map['ScalingRuleId'])) {
            $model->scalingRuleId = $map['ScalingRuleId'];
        }
        if (isset($map['Alarms'])) {
            $model->alarms = alarms::fromMap($map['Alarms']);
        }
        if (isset($map['StepAdjustments'])) {
            $model->stepAdjustments = stepAdjustments::fromMap($map['StepAdjustments']);
        }

        return $model;
    }
}
