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
     * @var int
     */
    public $initialMaxSize;

    /**
     * @var alarms
     */
    public $alarms;

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
    public $minSize;

    /**
     * @var int
     */
    public $predictiveTaskBufferTime;

    /**
     * @var string
     */
    public $scalingGroupId;

    /**
     * @var string
     */
    public $predictiveValueBehavior;

    /**
     * @var int
     */
    public $cooldown;

    /**
     * @var string
     */
    public $scalingRuleType;

    /**
     * @var int
     */
    public $predictiveValueBuffer;

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
    public $adjustmentType;

    /**
     * @var int
     */
    public $estimatedInstanceWarmup;

    /**
     * @var int
     */
    public $minAdjustmentMagnitude;

    /**
     * @var string
     */
    public $scalingRuleAri;

    /**
     * @var stepAdjustments
     */
    public $stepAdjustments;

    /**
     * @var float
     */
    public $targetValue;

    /**
     * @var int
     */
    public $maxSize;

    /**
     * @var int
     */
    public $adjustmentValue;

    /**
     * @var string
     */
    public $scalingRuleId;
    protected $_name = [
        'metricName'               => 'MetricName',
        'initialMaxSize'           => 'InitialMaxSize',
        'alarms'                   => 'Alarms',
        'scaleOutEvaluationCount'  => 'ScaleOutEvaluationCount',
        'predictiveScalingMode'    => 'PredictiveScalingMode',
        'minSize'                  => 'MinSize',
        'predictiveTaskBufferTime' => 'PredictiveTaskBufferTime',
        'scalingGroupId'           => 'ScalingGroupId',
        'predictiveValueBehavior'  => 'PredictiveValueBehavior',
        'cooldown'                 => 'Cooldown',
        'scalingRuleType'          => 'ScalingRuleType',
        'predictiveValueBuffer'    => 'PredictiveValueBuffer',
        'scaleInEvaluationCount'   => 'ScaleInEvaluationCount',
        'disableScaleIn'           => 'DisableScaleIn',
        'scalingRuleName'          => 'ScalingRuleName',
        'adjustmentType'           => 'AdjustmentType',
        'estimatedInstanceWarmup'  => 'EstimatedInstanceWarmup',
        'minAdjustmentMagnitude'   => 'MinAdjustmentMagnitude',
        'scalingRuleAri'           => 'ScalingRuleAri',
        'stepAdjustments'          => 'StepAdjustments',
        'targetValue'              => 'TargetValue',
        'maxSize'                  => 'MaxSize',
        'adjustmentValue'          => 'AdjustmentValue',
        'scalingRuleId'            => 'ScalingRuleId',
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
        if (null !== $this->initialMaxSize) {
            $res['InitialMaxSize'] = $this->initialMaxSize;
        }
        if (null !== $this->alarms) {
            $res['Alarms'] = null !== $this->alarms ? $this->alarms->toMap() : null;
        }
        if (null !== $this->scaleOutEvaluationCount) {
            $res['ScaleOutEvaluationCount'] = $this->scaleOutEvaluationCount;
        }
        if (null !== $this->predictiveScalingMode) {
            $res['PredictiveScalingMode'] = $this->predictiveScalingMode;
        }
        if (null !== $this->minSize) {
            $res['MinSize'] = $this->minSize;
        }
        if (null !== $this->predictiveTaskBufferTime) {
            $res['PredictiveTaskBufferTime'] = $this->predictiveTaskBufferTime;
        }
        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
        }
        if (null !== $this->predictiveValueBehavior) {
            $res['PredictiveValueBehavior'] = $this->predictiveValueBehavior;
        }
        if (null !== $this->cooldown) {
            $res['Cooldown'] = $this->cooldown;
        }
        if (null !== $this->scalingRuleType) {
            $res['ScalingRuleType'] = $this->scalingRuleType;
        }
        if (null !== $this->predictiveValueBuffer) {
            $res['PredictiveValueBuffer'] = $this->predictiveValueBuffer;
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
        if (null !== $this->adjustmentType) {
            $res['AdjustmentType'] = $this->adjustmentType;
        }
        if (null !== $this->estimatedInstanceWarmup) {
            $res['EstimatedInstanceWarmup'] = $this->estimatedInstanceWarmup;
        }
        if (null !== $this->minAdjustmentMagnitude) {
            $res['MinAdjustmentMagnitude'] = $this->minAdjustmentMagnitude;
        }
        if (null !== $this->scalingRuleAri) {
            $res['ScalingRuleAri'] = $this->scalingRuleAri;
        }
        if (null !== $this->stepAdjustments) {
            $res['StepAdjustments'] = null !== $this->stepAdjustments ? $this->stepAdjustments->toMap() : null;
        }
        if (null !== $this->targetValue) {
            $res['TargetValue'] = $this->targetValue;
        }
        if (null !== $this->maxSize) {
            $res['MaxSize'] = $this->maxSize;
        }
        if (null !== $this->adjustmentValue) {
            $res['AdjustmentValue'] = $this->adjustmentValue;
        }
        if (null !== $this->scalingRuleId) {
            $res['ScalingRuleId'] = $this->scalingRuleId;
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
        if (isset($map['InitialMaxSize'])) {
            $model->initialMaxSize = $map['InitialMaxSize'];
        }
        if (isset($map['Alarms'])) {
            $model->alarms = alarms::fromMap($map['Alarms']);
        }
        if (isset($map['ScaleOutEvaluationCount'])) {
            $model->scaleOutEvaluationCount = $map['ScaleOutEvaluationCount'];
        }
        if (isset($map['PredictiveScalingMode'])) {
            $model->predictiveScalingMode = $map['PredictiveScalingMode'];
        }
        if (isset($map['MinSize'])) {
            $model->minSize = $map['MinSize'];
        }
        if (isset($map['PredictiveTaskBufferTime'])) {
            $model->predictiveTaskBufferTime = $map['PredictiveTaskBufferTime'];
        }
        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }
        if (isset($map['PredictiveValueBehavior'])) {
            $model->predictiveValueBehavior = $map['PredictiveValueBehavior'];
        }
        if (isset($map['Cooldown'])) {
            $model->cooldown = $map['Cooldown'];
        }
        if (isset($map['ScalingRuleType'])) {
            $model->scalingRuleType = $map['ScalingRuleType'];
        }
        if (isset($map['PredictiveValueBuffer'])) {
            $model->predictiveValueBuffer = $map['PredictiveValueBuffer'];
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
        if (isset($map['AdjustmentType'])) {
            $model->adjustmentType = $map['AdjustmentType'];
        }
        if (isset($map['EstimatedInstanceWarmup'])) {
            $model->estimatedInstanceWarmup = $map['EstimatedInstanceWarmup'];
        }
        if (isset($map['MinAdjustmentMagnitude'])) {
            $model->minAdjustmentMagnitude = $map['MinAdjustmentMagnitude'];
        }
        if (isset($map['ScalingRuleAri'])) {
            $model->scalingRuleAri = $map['ScalingRuleAri'];
        }
        if (isset($map['StepAdjustments'])) {
            $model->stepAdjustments = stepAdjustments::fromMap($map['StepAdjustments']);
        }
        if (isset($map['TargetValue'])) {
            $model->targetValue = $map['TargetValue'];
        }
        if (isset($map['MaxSize'])) {
            $model->maxSize = $map['MaxSize'];
        }
        if (isset($map['AdjustmentValue'])) {
            $model->adjustmentValue = $map['AdjustmentValue'];
        }
        if (isset($map['ScalingRuleId'])) {
            $model->scalingRuleId = $map['ScalingRuleId'];
        }

        return $model;
    }
}
