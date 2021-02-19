<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models;

use AlibabaCloud\SDK\Ess\V20140828\Models\ModifyScalingRuleRequest\stepAdjustment;
use AlibabaCloud\Tea\Model;

class ModifyScalingRuleRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $scalingRuleId;

    /**
     * @var string
     */
    public $scalingRuleName;

    /**
     * @var int
     */
    public $cooldown;

    /**
     * @var int
     */
    public $minAdjustmentMagnitude;

    /**
     * @var string
     */
    public $adjustmentType;

    /**
     * @var int
     */
    public $adjustmentValue;

    /**
     * @var int
     */
    public $estimatedInstanceWarmup;

    /**
     * @var string
     */
    public $metricName;

    /**
     * @var float
     */
    public $targetValue;

    /**
     * @var bool
     */
    public $disableScaleIn;

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
    public $ownerAccount;

    /**
     * @var string
     */
    public $predictiveScalingMode;

    /**
     * @var string
     */
    public $predictiveValueBehavior;

    /**
     * @var int
     */
    public $predictiveValueBuffer;

    /**
     * @var int
     */
    public $predictiveTaskBufferTime;

    /**
     * @var int
     */
    public $initialMaxSize;

    /**
     * @var stepAdjustment[]
     */
    public $stepAdjustment;
    protected $_name = [
        'ownerId'                  => 'OwnerId',
        'resourceOwnerAccount'     => 'ResourceOwnerAccount',
        'resourceOwnerId'          => 'ResourceOwnerId',
        'scalingRuleId'            => 'ScalingRuleId',
        'scalingRuleName'          => 'ScalingRuleName',
        'cooldown'                 => 'Cooldown',
        'minAdjustmentMagnitude'   => 'MinAdjustmentMagnitude',
        'adjustmentType'           => 'AdjustmentType',
        'adjustmentValue'          => 'AdjustmentValue',
        'estimatedInstanceWarmup'  => 'EstimatedInstanceWarmup',
        'metricName'               => 'MetricName',
        'targetValue'              => 'TargetValue',
        'disableScaleIn'           => 'DisableScaleIn',
        'scaleInEvaluationCount'   => 'ScaleInEvaluationCount',
        'scaleOutEvaluationCount'  => 'ScaleOutEvaluationCount',
        'ownerAccount'             => 'OwnerAccount',
        'predictiveScalingMode'    => 'PredictiveScalingMode',
        'predictiveValueBehavior'  => 'PredictiveValueBehavior',
        'predictiveValueBuffer'    => 'PredictiveValueBuffer',
        'predictiveTaskBufferTime' => 'PredictiveTaskBufferTime',
        'initialMaxSize'           => 'InitialMaxSize',
        'stepAdjustment'           => 'StepAdjustment',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->scalingRuleId) {
            $res['ScalingRuleId'] = $this->scalingRuleId;
        }
        if (null !== $this->scalingRuleName) {
            $res['ScalingRuleName'] = $this->scalingRuleName;
        }
        if (null !== $this->cooldown) {
            $res['Cooldown'] = $this->cooldown;
        }
        if (null !== $this->minAdjustmentMagnitude) {
            $res['MinAdjustmentMagnitude'] = $this->minAdjustmentMagnitude;
        }
        if (null !== $this->adjustmentType) {
            $res['AdjustmentType'] = $this->adjustmentType;
        }
        if (null !== $this->adjustmentValue) {
            $res['AdjustmentValue'] = $this->adjustmentValue;
        }
        if (null !== $this->estimatedInstanceWarmup) {
            $res['EstimatedInstanceWarmup'] = $this->estimatedInstanceWarmup;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->targetValue) {
            $res['TargetValue'] = $this->targetValue;
        }
        if (null !== $this->disableScaleIn) {
            $res['DisableScaleIn'] = $this->disableScaleIn;
        }
        if (null !== $this->scaleInEvaluationCount) {
            $res['ScaleInEvaluationCount'] = $this->scaleInEvaluationCount;
        }
        if (null !== $this->scaleOutEvaluationCount) {
            $res['ScaleOutEvaluationCount'] = $this->scaleOutEvaluationCount;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->predictiveScalingMode) {
            $res['PredictiveScalingMode'] = $this->predictiveScalingMode;
        }
        if (null !== $this->predictiveValueBehavior) {
            $res['PredictiveValueBehavior'] = $this->predictiveValueBehavior;
        }
        if (null !== $this->predictiveValueBuffer) {
            $res['PredictiveValueBuffer'] = $this->predictiveValueBuffer;
        }
        if (null !== $this->predictiveTaskBufferTime) {
            $res['PredictiveTaskBufferTime'] = $this->predictiveTaskBufferTime;
        }
        if (null !== $this->initialMaxSize) {
            $res['InitialMaxSize'] = $this->initialMaxSize;
        }
        if (null !== $this->stepAdjustment) {
            $res['StepAdjustment'] = [];
            if (null !== $this->stepAdjustment && \is_array($this->stepAdjustment)) {
                $n = 0;
                foreach ($this->stepAdjustment as $item) {
                    $res['StepAdjustment'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyScalingRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ScalingRuleId'])) {
            $model->scalingRuleId = $map['ScalingRuleId'];
        }
        if (isset($map['ScalingRuleName'])) {
            $model->scalingRuleName = $map['ScalingRuleName'];
        }
        if (isset($map['Cooldown'])) {
            $model->cooldown = $map['Cooldown'];
        }
        if (isset($map['MinAdjustmentMagnitude'])) {
            $model->minAdjustmentMagnitude = $map['MinAdjustmentMagnitude'];
        }
        if (isset($map['AdjustmentType'])) {
            $model->adjustmentType = $map['AdjustmentType'];
        }
        if (isset($map['AdjustmentValue'])) {
            $model->adjustmentValue = $map['AdjustmentValue'];
        }
        if (isset($map['EstimatedInstanceWarmup'])) {
            $model->estimatedInstanceWarmup = $map['EstimatedInstanceWarmup'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['TargetValue'])) {
            $model->targetValue = $map['TargetValue'];
        }
        if (isset($map['DisableScaleIn'])) {
            $model->disableScaleIn = $map['DisableScaleIn'];
        }
        if (isset($map['ScaleInEvaluationCount'])) {
            $model->scaleInEvaluationCount = $map['ScaleInEvaluationCount'];
        }
        if (isset($map['ScaleOutEvaluationCount'])) {
            $model->scaleOutEvaluationCount = $map['ScaleOutEvaluationCount'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['PredictiveScalingMode'])) {
            $model->predictiveScalingMode = $map['PredictiveScalingMode'];
        }
        if (isset($map['PredictiveValueBehavior'])) {
            $model->predictiveValueBehavior = $map['PredictiveValueBehavior'];
        }
        if (isset($map['PredictiveValueBuffer'])) {
            $model->predictiveValueBuffer = $map['PredictiveValueBuffer'];
        }
        if (isset($map['PredictiveTaskBufferTime'])) {
            $model->predictiveTaskBufferTime = $map['PredictiveTaskBufferTime'];
        }
        if (isset($map['InitialMaxSize'])) {
            $model->initialMaxSize = $map['InitialMaxSize'];
        }
        if (isset($map['StepAdjustment'])) {
            if (!empty($map['StepAdjustment'])) {
                $model->stepAdjustment = [];
                $n                     = 0;
                foreach ($map['StepAdjustment'] as $item) {
                    $model->stepAdjustment[$n++] = null !== $item ? stepAdjustment::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
