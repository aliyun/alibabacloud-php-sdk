<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Tea\Model;

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
     * @description The page number. Pages start from page 1.
     *
     * Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Maximum value: 50.
     *
     * Default value: 10.
     * @example 50
     *
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
     * @description The region ID of the scaling group to which the scheduled task belongs.
     *
     * This parameter is required.
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
     * @description The ID of the scaling group to which the scheduled task belongs.
     *
     * @example asg-bp1bo5tca4m56nap****
     *
     * @var string
     */
    public $scalingGroupId;

    /**
     * @description The scaling rules of the scheduled tasks. Once the scheduled tasks are triggered, the scaling rules are executed.
     *
     * @var string[]
     */
    public $scheduledActions;

    /**
     * @description The IDs of the scheduled tasks that you want to query.
     *
     * @var string[]
     */
    public $scheduledTaskIds;

    /**
     * @description The names of the scheduled tasks that you want to query.
     *
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
            $res['ScheduledActions'] = $this->scheduledActions;
        }
        if (null !== $this->scheduledTaskIds) {
            $res['ScheduledTaskIds'] = $this->scheduledTaskIds;
        }
        if (null !== $this->scheduledTaskNames) {
            $res['ScheduledTaskNames'] = $this->scheduledTaskNames;
        }
        if (null !== $this->taskEnabled) {
            $res['TaskEnabled'] = $this->taskEnabled;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeScheduledTasksRequest
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
                $model->scheduledActions = $map['ScheduledActions'];
            }
        }
        if (isset($map['ScheduledTaskIds'])) {
            if (!empty($map['ScheduledTaskIds'])) {
                $model->scheduledTaskIds = $map['ScheduledTaskIds'];
            }
        }
        if (isset($map['ScheduledTaskNames'])) {
            if (!empty($map['ScheduledTaskNames'])) {
                $model->scheduledTaskNames = $map['ScheduledTaskNames'];
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
