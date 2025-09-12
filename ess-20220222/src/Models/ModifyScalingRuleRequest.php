<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyScalingRuleRequest\alarmDimensions;
use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyScalingRuleRequest\alarmOptions;
use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyScalingRuleRequest\hybridMetrics;
use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyScalingRuleRequest\stepAdjustments;

class ModifyScalingRuleRequest extends Model
{
    /**
     * @var string
     */
    public $adjustmentType;

    /**
     * @var int
     */
    public $adjustmentValue;

    /**
     * @var alarmDimensions[]
     */
    public $alarmDimensions;

    /**
     * @var alarmOptions
     */
    public $alarmOptions;

    /**
     * @var int
     */
    public $cooldown;

    /**
     * @var bool
     */
    public $disableScaleIn;

    /**
     * @var int
     */
    public $estimatedInstanceWarmup;

    /**
     * @var hybridMetrics[]
     */
    public $hybridMetrics;

    /**
     * @var string
     */
    public $hybridMonitorNamespace;

    /**
     * @var int
     */
    public $initialMaxSize;

    /**
     * @var string
     */
    public $metricName;

    /**
     * @var string
     */
    public $metricType;

    /**
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
     * @var string
     */
    public $predictiveScalingMode;

    /**
     * @var int
     */
    public $predictiveTaskBufferTime;

    /**
     * @var string
     */
    public $predictiveValueBehavior;

    /**
     * @var int
     */
    public $predictiveValueBuffer;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var int
     */
    public $scaleInEvaluationCount;

    /**
     * @var int
     */
    public $scaleOutEvaluationCount;

    /**
     * @var string
     */
    public $scalingRuleId;

    /**
     * @var string
     */
    public $scalingRuleName;

    /**
     * @var stepAdjustments[]
     */
    public $stepAdjustments;

    /**
     * @var float
     */
    public $targetValue;
    protected $_name = [
        'adjustmentType' => 'AdjustmentType',
        'adjustmentValue' => 'AdjustmentValue',
        'alarmDimensions' => 'AlarmDimensions',
        'alarmOptions' => 'AlarmOptions',
        'cooldown' => 'Cooldown',
        'disableScaleIn' => 'DisableScaleIn',
        'estimatedInstanceWarmup' => 'EstimatedInstanceWarmup',
        'hybridMetrics' => 'HybridMetrics',
        'hybridMonitorNamespace' => 'HybridMonitorNamespace',
        'initialMaxSize' => 'InitialMaxSize',
        'metricName' => 'MetricName',
        'metricType' => 'MetricType',
        'minAdjustmentMagnitude' => 'MinAdjustmentMagnitude',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'predictiveScalingMode' => 'PredictiveScalingMode',
        'predictiveTaskBufferTime' => 'PredictiveTaskBufferTime',
        'predictiveValueBehavior' => 'PredictiveValueBehavior',
        'predictiveValueBuffer' => 'PredictiveValueBuffer',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'scaleInEvaluationCount' => 'ScaleInEvaluationCount',
        'scaleOutEvaluationCount' => 'ScaleOutEvaluationCount',
        'scalingRuleId' => 'ScalingRuleId',
        'scalingRuleName' => 'ScalingRuleName',
        'stepAdjustments' => 'StepAdjustments',
        'targetValue' => 'TargetValue',
    ];

    public function validate()
    {
        if (\is_array($this->alarmDimensions)) {
            Model::validateArray($this->alarmDimensions);
        }
        if (null !== $this->alarmOptions) {
            $this->alarmOptions->validate();
        }
        if (\is_array($this->hybridMetrics)) {
            Model::validateArray($this->hybridMetrics);
        }
        if (\is_array($this->stepAdjustments)) {
            Model::validateArray($this->stepAdjustments);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adjustmentType) {
            $res['AdjustmentType'] = $this->adjustmentType;
        }

        if (null !== $this->adjustmentValue) {
            $res['AdjustmentValue'] = $this->adjustmentValue;
        }

        if (null !== $this->alarmDimensions) {
            if (\is_array($this->alarmDimensions)) {
                $res['AlarmDimensions'] = [];
                $n1 = 0;
                foreach ($this->alarmDimensions as $item1) {
                    $res['AlarmDimensions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->alarmOptions) {
            $res['AlarmOptions'] = null !== $this->alarmOptions ? $this->alarmOptions->toArray($noStream) : $this->alarmOptions;
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
            if (\is_array($this->hybridMetrics)) {
                $res['HybridMetrics'] = [];
                $n1 = 0;
                foreach ($this->hybridMetrics as $item1) {
                    $res['HybridMetrics'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->hybridMonitorNamespace) {
            $res['HybridMonitorNamespace'] = $this->hybridMonitorNamespace;
        }

        if (null !== $this->initialMaxSize) {
            $res['InitialMaxSize'] = $this->initialMaxSize;
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

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->scaleInEvaluationCount) {
            $res['ScaleInEvaluationCount'] = $this->scaleInEvaluationCount;
        }

        if (null !== $this->scaleOutEvaluationCount) {
            $res['ScaleOutEvaluationCount'] = $this->scaleOutEvaluationCount;
        }

        if (null !== $this->scalingRuleId) {
            $res['ScalingRuleId'] = $this->scalingRuleId;
        }

        if (null !== $this->scalingRuleName) {
            $res['ScalingRuleName'] = $this->scalingRuleName;
        }

        if (null !== $this->stepAdjustments) {
            if (\is_array($this->stepAdjustments)) {
                $res['StepAdjustments'] = [];
                $n1 = 0;
                foreach ($this->stepAdjustments as $item1) {
                    $res['StepAdjustments'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->targetValue) {
            $res['TargetValue'] = $this->targetValue;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['AlarmDimensions'] as $item1) {
                    $model->alarmDimensions[$n1] = alarmDimensions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['AlarmOptions'])) {
            $model->alarmOptions = alarmOptions::fromMap($map['AlarmOptions']);
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
                $n1 = 0;
                foreach ($map['HybridMetrics'] as $item1) {
                    $model->hybridMetrics[$n1] = hybridMetrics::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['HybridMonitorNamespace'])) {
            $model->hybridMonitorNamespace = $map['HybridMonitorNamespace'];
        }

        if (isset($map['InitialMaxSize'])) {
            $model->initialMaxSize = $map['InitialMaxSize'];
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

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['ScaleInEvaluationCount'])) {
            $model->scaleInEvaluationCount = $map['ScaleInEvaluationCount'];
        }

        if (isset($map['ScaleOutEvaluationCount'])) {
            $model->scaleOutEvaluationCount = $map['ScaleOutEvaluationCount'];
        }

        if (isset($map['ScalingRuleId'])) {
            $model->scalingRuleId = $map['ScalingRuleId'];
        }

        if (isset($map['ScalingRuleName'])) {
            $model->scalingRuleName = $map['ScalingRuleName'];
        }

        if (isset($map['StepAdjustments'])) {
            if (!empty($map['StepAdjustments'])) {
                $model->stepAdjustments = [];
                $n1 = 0;
                foreach ($map['StepAdjustments'] as $item1) {
                    $model->stepAdjustments[$n1] = stepAdjustments::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TargetValue'])) {
            $model->targetValue = $map['TargetValue'];
        }

        return $model;
    }
}
