<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Tea\Model;

class DescribeScalingRulesRequest extends Model
{
    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The number of the page to return. Pages start from page 1.
     *
     * Default value: 1
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Maximum value: 50.
     *
     * Default value: 10
     * @example 50
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The number of the page to return. Pages start from page 1.
     *
     * Default value: 1.
     * @example cn-qingdao
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The type of the scaling rule. Valid values:
     *
     *   SimpleScalingRule: adjusts the number of ECS instances based on the values of the AdjustmentType and AdjustmentValue parameters.
     *   TargetTrackingScalingRule: calculates the number of ECS instances that need to be scaled in a dynamic manner and maintains the value of a predefined metric close to the value of the TargetValue parameter.
     *   StepScalingRule: scales ECS instances in steps based on the specified thresholds and metric values.
     *   PredictiveScalingRule: uses machine learning to analyze historical monitoring data of the scaling group and predicts the future values of metrics. In addition, Auto Scaling automatically creates scheduled tasks to adjust the boundary values for the scaling group.
     *
     * @example asg-bp1ffogfdauy0jw0****
     *
     * @var string
     */
    public $scalingGroupId;

    /**
     * @description The unique identifiers of the scaling rules that you want to query.
     *
     * @var string[]
     */
    public $scalingRuleAris;

    /**
     * @description The IDs of the scaling rules that you want to query.
     *
     * @var string[]
     */
    public $scalingRuleIds;

    /**
     * @description The names of the scaling rules that you want to query.
     *
     * @var string[]
     */
    public $scalingRuleNames;

    /**
     * @description Specifies whether to return CloudMonitor event-triggered tasks associated with scaling rules. Valid values:
     *
     *   true
     *   false
     *
     * Default value: false.
     * @example SimpleScalingRule
     *
     * @var string
     */
    public $scalingRuleType;

    /**
     * @description Specifies whether to return the event-triggered tasks that are associated with the scaling rules. Valid values:
     *
     *   true
     *   false
     *
     * Default value: false
     * @example false
     *
     * @var bool
     */
    public $showAlarmRules;
    protected $_name = [
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'scalingGroupId'       => 'ScalingGroupId',
        'scalingRuleAris'      => 'ScalingRuleAris',
        'scalingRuleIds'       => 'ScalingRuleIds',
        'scalingRuleNames'     => 'ScalingRuleNames',
        'scalingRuleType'      => 'ScalingRuleType',
        'showAlarmRules'       => 'ShowAlarmRules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
        }
        if (null !== $this->scalingRuleAris) {
            $res['ScalingRuleAris'] = $this->scalingRuleAris;
        }
        if (null !== $this->scalingRuleIds) {
            $res['ScalingRuleIds'] = $this->scalingRuleIds;
        }
        if (null !== $this->scalingRuleNames) {
            $res['ScalingRuleNames'] = $this->scalingRuleNames;
        }
        if (null !== $this->scalingRuleType) {
            $res['ScalingRuleType'] = $this->scalingRuleType;
        }
        if (null !== $this->showAlarmRules) {
            $res['ShowAlarmRules'] = $this->showAlarmRules;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeScalingRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }
        if (isset($map['ScalingRuleAris'])) {
            if (!empty($map['ScalingRuleAris'])) {
                $model->scalingRuleAris = $map['ScalingRuleAris'];
            }
        }
        if (isset($map['ScalingRuleIds'])) {
            if (!empty($map['ScalingRuleIds'])) {
                $model->scalingRuleIds = $map['ScalingRuleIds'];
            }
        }
        if (isset($map['ScalingRuleNames'])) {
            if (!empty($map['ScalingRuleNames'])) {
                $model->scalingRuleNames = $map['ScalingRuleNames'];
            }
        }
        if (isset($map['ScalingRuleType'])) {
            $model->scalingRuleType = $map['ScalingRuleType'];
        }
        if (isset($map['ShowAlarmRules'])) {
            $model->showAlarmRules = $map['ShowAlarmRules'];
        }

        return $model;
    }
}
