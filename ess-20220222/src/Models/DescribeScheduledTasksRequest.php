<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Dara\Model;

class DescribeScheduledTasksRequest extends Model
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
    public $recurrenceType;
    /**
     * @var string
     */
    public $recurrenceValue;
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
    public $scheduledActions;
    /**
     * @var string[]
     */
    public $scheduledTaskIds;
    /**
     * @var string[]
     */
    public $scheduledTaskNames;
    /**
     * @var bool
     */
    public $taskEnabled;
    /**
     * @var string
     */
    public $taskName;
    protected $_name = [
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'recurrenceType'       => 'RecurrenceType',
        'recurrenceValue'      => 'RecurrenceValue',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'scalingGroupId'       => 'ScalingGroupId',
        'scheduledActions'     => 'ScheduledActions',
        'scheduledTaskIds'     => 'ScheduledTaskIds',
        'scheduledTaskNames'   => 'ScheduledTaskNames',
        'taskEnabled'          => 'TaskEnabled',
        'taskName'             => 'TaskName',
    ];

    public function validate()
    {
        if (\is_array($this->scheduledActions)) {
            Model::validateArray($this->scheduledActions);
        }
        if (\is_array($this->scheduledTaskIds)) {
            Model::validateArray($this->scheduledTaskIds);
        }
        if (\is_array($this->scheduledTaskNames)) {
            Model::validateArray($this->scheduledTaskNames);
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

        if (null !== $this->recurrenceType) {
            $res['RecurrenceType'] = $this->recurrenceType;
        }

        if (null !== $this->recurrenceValue) {
            $res['RecurrenceValue'] = $this->recurrenceValue;
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

        if (null !== $this->scheduledActions) {
            if (\is_array($this->scheduledActions)) {
                $res['ScheduledActions'] = [];
                $n1                      = 0;
                foreach ($this->scheduledActions as $item1) {
                    $res['ScheduledActions'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->scheduledTaskIds) {
            if (\is_array($this->scheduledTaskIds)) {
                $res['ScheduledTaskIds'] = [];
                $n1                      = 0;
                foreach ($this->scheduledTaskIds as $item1) {
                    $res['ScheduledTaskIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->scheduledTaskNames) {
            if (\is_array($this->scheduledTaskNames)) {
                $res['ScheduledTaskNames'] = [];
                $n1                        = 0;
                foreach ($this->scheduledTaskNames as $item1) {
                    $res['ScheduledTaskNames'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->taskEnabled) {
            $res['TaskEnabled'] = $this->taskEnabled;
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
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

        if (isset($map['RecurrenceType'])) {
            $model->recurrenceType = $map['RecurrenceType'];
        }

        if (isset($map['RecurrenceValue'])) {
            $model->recurrenceValue = $map['RecurrenceValue'];
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

        if (isset($map['ScheduledActions'])) {
            if (!empty($map['ScheduledActions'])) {
                $model->scheduledActions = [];
                $n1                      = 0;
                foreach ($map['ScheduledActions'] as $item1) {
                    $model->scheduledActions[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ScheduledTaskIds'])) {
            if (!empty($map['ScheduledTaskIds'])) {
                $model->scheduledTaskIds = [];
                $n1                      = 0;
                foreach ($map['ScheduledTaskIds'] as $item1) {
                    $model->scheduledTaskIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ScheduledTaskNames'])) {
            if (!empty($map['ScheduledTaskNames'])) {
                $model->scheduledTaskNames = [];
                $n1                        = 0;
                foreach ($map['ScheduledTaskNames'] as $item1) {
                    $model->scheduledTaskNames[$n1++] = $item1;
                }
            }
        }

        if (isset($map['TaskEnabled'])) {
            $model->taskEnabled = $map['TaskEnabled'];
        }

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
