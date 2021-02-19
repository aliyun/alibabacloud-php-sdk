<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models;

use AlibabaCloud\Tea\Model;

class ModifyScheduledTaskRequest extends Model
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
    public $scheduledTaskId;

    /**
     * @var string
     */
    public $scheduledTaskName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $scheduledAction;

    /**
     * @var string
     */
    public $recurrenceEndTime;

    /**
     * @var string
     */
    public $launchTime;

    /**
     * @var string
     */
    public $recurrenceType;

    /**
     * @var string
     */
    public $recurrenceValue;

    /**
     * @var bool
     */
    public $taskEnabled;

    /**
     * @var int
     */
    public $launchExpirationTime;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $minValue;

    /**
     * @var int
     */
    public $maxValue;

    /**
     * @var int
     */
    public $desiredCapacity;

    /**
     * @var string
     */
    public $scalingGroupId;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'scheduledTaskId'      => 'ScheduledTaskId',
        'scheduledTaskName'    => 'ScheduledTaskName',
        'description'          => 'Description',
        'scheduledAction'      => 'ScheduledAction',
        'recurrenceEndTime'    => 'RecurrenceEndTime',
        'launchTime'           => 'LaunchTime',
        'recurrenceType'       => 'RecurrenceType',
        'recurrenceValue'      => 'RecurrenceValue',
        'taskEnabled'          => 'TaskEnabled',
        'launchExpirationTime' => 'LaunchExpirationTime',
        'ownerAccount'         => 'OwnerAccount',
        'minValue'             => 'MinValue',
        'maxValue'             => 'MaxValue',
        'desiredCapacity'      => 'DesiredCapacity',
        'scalingGroupId'       => 'ScalingGroupId',
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
        if (null !== $this->scheduledTaskId) {
            $res['ScheduledTaskId'] = $this->scheduledTaskId;
        }
        if (null !== $this->scheduledTaskName) {
            $res['ScheduledTaskName'] = $this->scheduledTaskName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->scheduledAction) {
            $res['ScheduledAction'] = $this->scheduledAction;
        }
        if (null !== $this->recurrenceEndTime) {
            $res['RecurrenceEndTime'] = $this->recurrenceEndTime;
        }
        if (null !== $this->launchTime) {
            $res['LaunchTime'] = $this->launchTime;
        }
        if (null !== $this->recurrenceType) {
            $res['RecurrenceType'] = $this->recurrenceType;
        }
        if (null !== $this->recurrenceValue) {
            $res['RecurrenceValue'] = $this->recurrenceValue;
        }
        if (null !== $this->taskEnabled) {
            $res['TaskEnabled'] = $this->taskEnabled;
        }
        if (null !== $this->launchExpirationTime) {
            $res['LaunchExpirationTime'] = $this->launchExpirationTime;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->minValue) {
            $res['MinValue'] = $this->minValue;
        }
        if (null !== $this->maxValue) {
            $res['MaxValue'] = $this->maxValue;
        }
        if (null !== $this->desiredCapacity) {
            $res['DesiredCapacity'] = $this->desiredCapacity;
        }
        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyScheduledTaskRequest
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
        if (isset($map['ScheduledTaskId'])) {
            $model->scheduledTaskId = $map['ScheduledTaskId'];
        }
        if (isset($map['ScheduledTaskName'])) {
            $model->scheduledTaskName = $map['ScheduledTaskName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ScheduledAction'])) {
            $model->scheduledAction = $map['ScheduledAction'];
        }
        if (isset($map['RecurrenceEndTime'])) {
            $model->recurrenceEndTime = $map['RecurrenceEndTime'];
        }
        if (isset($map['LaunchTime'])) {
            $model->launchTime = $map['LaunchTime'];
        }
        if (isset($map['RecurrenceType'])) {
            $model->recurrenceType = $map['RecurrenceType'];
        }
        if (isset($map['RecurrenceValue'])) {
            $model->recurrenceValue = $map['RecurrenceValue'];
        }
        if (isset($map['TaskEnabled'])) {
            $model->taskEnabled = $map['TaskEnabled'];
        }
        if (isset($map['LaunchExpirationTime'])) {
            $model->launchExpirationTime = $map['LaunchExpirationTime'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['MinValue'])) {
            $model->minValue = $map['MinValue'];
        }
        if (isset($map['MaxValue'])) {
            $model->maxValue = $map['MaxValue'];
        }
        if (isset($map['DesiredCapacity'])) {
            $model->desiredCapacity = $map['DesiredCapacity'];
        }
        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }

        return $model;
    }
}
