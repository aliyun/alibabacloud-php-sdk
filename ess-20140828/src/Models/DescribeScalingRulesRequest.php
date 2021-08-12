<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models;

use AlibabaCloud\Tea\Model;

class DescribeScalingRulesRequest extends Model
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
    public $regionId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $scalingGroupId;

    /**
     * @var string
     */
    public $scalingRuleType;

    /**
     * @var bool
     */
    public $showAlarmRules;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var string[]
     */
    public $scalingRuleId;

    /**
     * @var string[]
     */
    public $scalingRuleName;

    /**
     * @var string[]
     */
    public $scalingRuleAri;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'regionId'             => 'RegionId',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'scalingGroupId'       => 'ScalingGroupId',
        'scalingRuleType'      => 'ScalingRuleType',
        'showAlarmRules'       => 'ShowAlarmRules',
        'ownerAccount'         => 'OwnerAccount',
        'scalingRuleId'        => 'ScalingRuleId',
        'scalingRuleName'      => 'ScalingRuleName',
        'scalingRuleAri'       => 'ScalingRuleAri',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
        }
        if (null !== $this->scalingRuleType) {
            $res['ScalingRuleType'] = $this->scalingRuleType;
        }
        if (null !== $this->showAlarmRules) {
            $res['ShowAlarmRules'] = $this->showAlarmRules;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->scalingRuleId) {
            $res['ScalingRuleId'] = $this->scalingRuleId;
        }
        if (null !== $this->scalingRuleName) {
            $res['ScalingRuleName'] = $this->scalingRuleName;
        }
        if (null !== $this->scalingRuleAri) {
            $res['ScalingRuleAri'] = $this->scalingRuleAri;
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
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }
        if (isset($map['ScalingRuleType'])) {
            $model->scalingRuleType = $map['ScalingRuleType'];
        }
        if (isset($map['ShowAlarmRules'])) {
            $model->showAlarmRules = $map['ShowAlarmRules'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['ScalingRuleId'])) {
            if (!empty($map['ScalingRuleId'])) {
                $model->scalingRuleId = $map['ScalingRuleId'];
            }
        }
        if (isset($map['ScalingRuleName'])) {
            if (!empty($map['ScalingRuleName'])) {
                $model->scalingRuleName = $map['ScalingRuleName'];
            }
        }
        if (isset($map['ScalingRuleAri'])) {
            if (!empty($map['ScalingRuleAri'])) {
                $model->scalingRuleAri = $map['ScalingRuleAri'];
            }
        }

        return $model;
    }
}
