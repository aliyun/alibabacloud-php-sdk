<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Dara\Model;

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
     * @var string
     */
    public $scalingGroupId;

    /**
     * @var string[]
     */
    public $scalingRuleAris;

    /**
     * @var string[]
     */
    public $scalingRuleIds;

    /**
     * @var string[]
     */
    public $scalingRuleNames;

    /**
     * @var string
     */
    public $scalingRuleType;

    /**
     * @var bool
     */
    public $showAlarmRules;
    protected $_name = [
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'scalingGroupId' => 'ScalingGroupId',
        'scalingRuleAris' => 'ScalingRuleAris',
        'scalingRuleIds' => 'ScalingRuleIds',
        'scalingRuleNames' => 'ScalingRuleNames',
        'scalingRuleType' => 'ScalingRuleType',
        'showAlarmRules' => 'ShowAlarmRules',
    ];

    public function validate()
    {
        if (\is_array($this->scalingRuleAris)) {
            Model::validateArray($this->scalingRuleAris);
        }
        if (\is_array($this->scalingRuleIds)) {
            Model::validateArray($this->scalingRuleIds);
        }
        if (\is_array($this->scalingRuleNames)) {
            Model::validateArray($this->scalingRuleNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->scalingRuleAris)) {
                $res['ScalingRuleAris'] = [];
                $n1 = 0;
                foreach ($this->scalingRuleAris as $item1) {
                    $res['ScalingRuleAris'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->scalingRuleIds) {
            if (\is_array($this->scalingRuleIds)) {
                $res['ScalingRuleIds'] = [];
                $n1 = 0;
                foreach ($this->scalingRuleIds as $item1) {
                    $res['ScalingRuleIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->scalingRuleNames) {
            if (\is_array($this->scalingRuleNames)) {
                $res['ScalingRuleNames'] = [];
                $n1 = 0;
                foreach ($this->scalingRuleNames as $item1) {
                    $res['ScalingRuleNames'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->scalingRuleType) {
            $res['ScalingRuleType'] = $this->scalingRuleType;
        }

        if (null !== $this->showAlarmRules) {
            $res['ShowAlarmRules'] = $this->showAlarmRules;
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
                $model->scalingRuleAris = [];
                $n1 = 0;
                foreach ($map['ScalingRuleAris'] as $item1) {
                    $model->scalingRuleAris[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ScalingRuleIds'])) {
            if (!empty($map['ScalingRuleIds'])) {
                $model->scalingRuleIds = [];
                $n1 = 0;
                foreach ($map['ScalingRuleIds'] as $item1) {
                    $model->scalingRuleIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ScalingRuleNames'])) {
            if (!empty($map['ScalingRuleNames'])) {
                $model->scalingRuleNames = [];
                $n1 = 0;
                foreach ($map['ScalingRuleNames'] as $item1) {
                    $model->scalingRuleNames[$n1++] = $item1;
                }
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
