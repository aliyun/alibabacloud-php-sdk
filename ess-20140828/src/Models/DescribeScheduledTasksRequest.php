<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models;

use AlibabaCloud\Tea\Model;

class DescribeScheduledTasksRequest extends Model
{
    /**
     * @var string[]
     */
    public $scheduledAction;

    /**
     * @var string[]
     */
    public $scheduledTaskId;

    /**
     * @var string[]
     */
    public $scheduledTaskName;

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
    public $ownerAccount;

    /**
     * @var string
     */
    public $scalingGroupId;
    protected $_name = [
        'scheduledAction'      => 'ScheduledAction',
        'scheduledTaskId'      => 'ScheduledTaskId',
        'scheduledTaskName'    => 'ScheduledTaskName',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'regionId'             => 'RegionId',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'ownerAccount'         => 'OwnerAccount',
        'scalingGroupId'       => 'ScalingGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scheduledAction) {
            $res['ScheduledAction'] = $this->scheduledAction;
        }
        if (null !== $this->scheduledTaskId) {
            $res['ScheduledTaskId'] = $this->scheduledTaskId;
        }
        if (null !== $this->scheduledTaskName) {
            $res['ScheduledTaskName'] = $this->scheduledTaskName;
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
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
        if (isset($map['ScheduledAction'])) {
            if (!empty($map['ScheduledAction'])) {
                $model->scheduledAction = $map['ScheduledAction'];
            }
        }
        if (isset($map['ScheduledTaskId'])) {
            if (!empty($map['ScheduledTaskId'])) {
                $model->scheduledTaskId = $map['ScheduledTaskId'];
            }
        }
        if (isset($map['ScheduledTaskName'])) {
            if (!empty($map['ScheduledTaskName'])) {
                $model->scheduledTaskName = $map['ScheduledTaskName'];
            }
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }

        return $model;
    }
}
