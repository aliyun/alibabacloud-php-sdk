<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models;

use AlibabaCloud\Dara\Model;

class CreateAutoScalingRuleRequest extends Model
{
    /**
     * @var string
     */
    public $configId;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $observationWindow;

    /**
     * @var string
     */
    public $operationType;

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
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string
     */
    public $ruleType;

    /**
     * @var int
     */
    public $scaleInStep;

    /**
     * @var int
     */
    public $scaleOutStep;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var int
     */
    public $silenceTime;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $targetMetric;

    /**
     * @var int
     */
    public $targetNodes;

    /**
     * @var int
     */
    public $thresholdLower;

    /**
     * @var int
     */
    public $thresholdUpper;

    /**
     * @var string
     */
    public $triggerCronExpr;
    protected $_name = [
        'configId' => 'ConfigId',
        'enabled' => 'Enabled',
        'endTime' => 'EndTime',
        'instanceId' => 'InstanceId',
        'observationWindow' => 'ObservationWindow',
        'operationType' => 'OperationType',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'ruleName' => 'RuleName',
        'ruleType' => 'RuleType',
        'scaleInStep' => 'ScaleInStep',
        'scaleOutStep' => 'ScaleOutStep',
        'securityToken' => 'SecurityToken',
        'silenceTime' => 'SilenceTime',
        'startTime' => 'StartTime',
        'targetMetric' => 'TargetMetric',
        'targetNodes' => 'TargetNodes',
        'thresholdLower' => 'ThresholdLower',
        'thresholdUpper' => 'ThresholdUpper',
        'triggerCronExpr' => 'TriggerCronExpr',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }

        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->observationWindow) {
            $res['ObservationWindow'] = $this->observationWindow;
        }

        if (null !== $this->operationType) {
            $res['OperationType'] = $this->operationType;
        }

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }

        if (null !== $this->scaleInStep) {
            $res['ScaleInStep'] = $this->scaleInStep;
        }

        if (null !== $this->scaleOutStep) {
            $res['ScaleOutStep'] = $this->scaleOutStep;
        }

        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        if (null !== $this->silenceTime) {
            $res['SilenceTime'] = $this->silenceTime;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->targetMetric) {
            $res['TargetMetric'] = $this->targetMetric;
        }

        if (null !== $this->targetNodes) {
            $res['TargetNodes'] = $this->targetNodes;
        }

        if (null !== $this->thresholdLower) {
            $res['ThresholdLower'] = $this->thresholdLower;
        }

        if (null !== $this->thresholdUpper) {
            $res['ThresholdUpper'] = $this->thresholdUpper;
        }

        if (null !== $this->triggerCronExpr) {
            $res['TriggerCronExpr'] = $this->triggerCronExpr;
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
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }

        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['ObservationWindow'])) {
            $model->observationWindow = $map['ObservationWindow'];
        }

        if (isset($map['OperationType'])) {
            $model->operationType = $map['OperationType'];
        }

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }

        if (isset($map['ScaleInStep'])) {
            $model->scaleInStep = $map['ScaleInStep'];
        }

        if (isset($map['ScaleOutStep'])) {
            $model->scaleOutStep = $map['ScaleOutStep'];
        }

        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        if (isset($map['SilenceTime'])) {
            $model->silenceTime = $map['SilenceTime'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['TargetMetric'])) {
            $model->targetMetric = $map['TargetMetric'];
        }

        if (isset($map['TargetNodes'])) {
            $model->targetNodes = $map['TargetNodes'];
        }

        if (isset($map['ThresholdLower'])) {
            $model->thresholdLower = $map['ThresholdLower'];
        }

        if (isset($map['ThresholdUpper'])) {
            $model->thresholdUpper = $map['ThresholdUpper'];
        }

        if (isset($map['TriggerCronExpr'])) {
            $model->triggerCronExpr = $map['TriggerCronExpr'];
        }

        return $model;
    }
}
