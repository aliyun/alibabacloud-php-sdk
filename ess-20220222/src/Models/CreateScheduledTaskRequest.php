<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Tea\Model;

class CreateScheduledTaskRequest extends Model
{
    /**
     * @description The description of the scheduled task. The description must be 2 to 200 characters in length.
     *
     * @example Test scheduled task.
     *
     * @var string
     */
    public $description;

    /**
     * @description The expected number of instances in the scaling group if you specify the ScalingGroupId parameter.
     *
     * > You must specify the `DesiredCapacity` parameter when you create a scaling group.
     * @example 10
     *
     * @var int
     */
    public $desiredCapacity;

    /**
     * @description The time period during which the failed scheduled task can be retried. Unit: seconds. Valid values: 0 to 1800.
     *
     * Default value: 600.
     * @example 600
     *
     * @var int
     */
    public $launchExpirationTime;

    /**
     * @description The point in time at which the scheduled task is triggered. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mmZ format. The time must be in UTC. You cannot enter a point in time that is later than 90 days from the point in time at which the scheduled task is created.
     *
     *   If you specify the `RecurrenceType` parameter, the scheduled task is repeatedly executed at the point in time that is specified by the LaunchTime parameter.
     *   If you do not specify the `RecurrenceType` parameter, the task is executed only once at the point in time that is specified by the LaunchTime parameter.
     *
     * @example 2014-08-17T16:52Z
     *
     * @var string
     */
    public $launchTime;

    /**
     * @description The maximum number of instances in the scaling group if you specify the ScalingGroupId parameter.
     *
     * @example 10
     *
     * @var int
     */
    public $maxValue;

    /**
     * @description The minimum number of instances in the scaling group if you specify the ScalingGroupId parameter.
     *
     * @example 0
     *
     * @var int
     */
    public $minValue;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The end time of the scheduled task. Specify the time in the ISO 8601 standard in the YYYY-MM-DDThh:mmZ format.
     *
     * The time must be in UTC. You cannot enter a point in time that is later than 365 days from the point in time at which the scheduled task is created.
     * @example 2014-08-17T16:55Z
     *
     * @var string
     */
    public $recurrenceEndTime;

    /**
     * @description The interval at which the scheduled task is repeated. Valid values:
     *
     *   Daily: The scheduled task is executed once every specified number of days.
     *   Weekly: The scheduled task is executed on each specified day of the week.
     *   Monthly: The scheduled task is executed on each specified day of the month.
     *   Cron: The scheduled task is executed based on the specified cron expression.
     *
     * You must specify the `RecurrenceType` and `RecurrenceValue` parameters at the same time.
     * @example Daily
     *
     * @var string
     */
    public $recurrenceType;

    /**
     * @description The number of recurrences of the scheduled task.
     *
     *   If you set the `RecurrenceType` parameter to `Daily`, you can specify only one value for this parameter. Valid values: 1 to 31.
     *   If you set the `RecurrenceType` parameter to `Weekly`, you can specify multiple values for this parameter. Separate the values with commas (,). The values that correspond to Sunday, Monday, Tuesday, Wednesday, Thursday, Friday, and Saturday are 0, 1, 2, 3, 4, 5, and 6.``
     *   If you set the `RecurrenceType` parameter to `Monthly`, you can specify two values in the `A-B` format for this parameter. Valid values of A and B: 1 to 31. B must be greater than or equal to A.
     *   If you set the `RecurrenceType` parameter to `Cron`, you can specify a cron expression. A cron expression is written in UTC time and consists of the following fields: minute, hour, day, month, and week. The expression can contain the letters L and W and the following wildcard characters: commas (,), question marks (?), hyphens (-), asterisks (\\*), number signs (#), and forward slashes (/).
     *
     * You must specify both the `RecurrenceType` parameter and the `RecurrenceValue` parameter.
     * @example 1
     *
     * @var string
     */
    public $recurrenceValue;

    /**
     * @description The region ID of the scheduled task.
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
     * @description The ID of the scaling group. If you specify this parameter, the number of instances in the scaling group will be changed when the scheduled task is triggered.
     *
     * If you specify `ScalingGroupId`, you must also specify at least one of the following parameters: `MinValue`, `MaxValue`, and `DesiredCapacity`. You cannot specify `ScheduledAction` and `ScalingGroupId` at the same time.
     * @example asg-bp18p2yfxow2dloq****
     *
     * @var string
     */
    public $scalingGroupId;

    /**
     * @description The scaling rule that you want to execute when the scheduled task is triggered. Specify the unique identifier of the scaling rule.
     *
     * If you specify `ScheduledAction`, the scheduled task uses an existing scaling rule. You cannot specify `ScheduledAction` and `ScalingGroupId` at the same time.
     * @example ari:acs:ess:cn-hangzhou:140692647****:scalingrule/asr-bp12tcnol686y1ik****
     *
     * @var string
     */
    public $scheduledAction;

    /**
     * @description The name of the scheduled task. The name must be 2 to 64 characters in length, and can contain letters, digits, underscores (_), hyphens (-), and periods (.). The name must start with a letter or a digit. The name of the scheduled task must be unique in the region and within the Alibaba Cloud account.
     *
     * If you do not specify this parameter, the value of the `ScheduledTaskId` parameter is used.
     * @example scheduled****
     *
     * @var string
     */
    public $scheduledTaskName;

    /**
     * @description Specifies whether to enable the scheduled task.
     *
     *   true
     *   false
     *
     * Default value: true.
     * @example true
     *
     * @var bool
     */
    public $taskEnabled;
    protected $_name = [
        'description'          => 'Description',
        'desiredCapacity'      => 'DesiredCapacity',
        'launchExpirationTime' => 'LaunchExpirationTime',
        'launchTime'           => 'LaunchTime',
        'maxValue'             => 'MaxValue',
        'minValue'             => 'MinValue',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'recurrenceEndTime'    => 'RecurrenceEndTime',
        'recurrenceType'       => 'RecurrenceType',
        'recurrenceValue'      => 'RecurrenceValue',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'scalingGroupId'       => 'ScalingGroupId',
        'scheduledAction'      => 'ScheduledAction',
        'scheduledTaskName'    => 'ScheduledTaskName',
        'taskEnabled'          => 'TaskEnabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->desiredCapacity) {
            $res['DesiredCapacity'] = $this->desiredCapacity;
        }
        if (null !== $this->launchExpirationTime) {
            $res['LaunchExpirationTime'] = $this->launchExpirationTime;
        }
        if (null !== $this->launchTime) {
            $res['LaunchTime'] = $this->launchTime;
        }
        if (null !== $this->maxValue) {
            $res['MaxValue'] = $this->maxValue;
        }
        if (null !== $this->minValue) {
            $res['MinValue'] = $this->minValue;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->recurrenceEndTime) {
            $res['RecurrenceEndTime'] = $this->recurrenceEndTime;
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
        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
        }
        if (null !== $this->scheduledAction) {
            $res['ScheduledAction'] = $this->scheduledAction;
        }
        if (null !== $this->scheduledTaskName) {
            $res['ScheduledTaskName'] = $this->scheduledTaskName;
        }
        if (null !== $this->taskEnabled) {
            $res['TaskEnabled'] = $this->taskEnabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateScheduledTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DesiredCapacity'])) {
            $model->desiredCapacity = $map['DesiredCapacity'];
        }
        if (isset($map['LaunchExpirationTime'])) {
            $model->launchExpirationTime = $map['LaunchExpirationTime'];
        }
        if (isset($map['LaunchTime'])) {
            $model->launchTime = $map['LaunchTime'];
        }
        if (isset($map['MaxValue'])) {
            $model->maxValue = $map['MaxValue'];
        }
        if (isset($map['MinValue'])) {
            $model->minValue = $map['MinValue'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RecurrenceEndTime'])) {
            $model->recurrenceEndTime = $map['RecurrenceEndTime'];
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
        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }
        if (isset($map['ScheduledAction'])) {
            $model->scheduledAction = $map['ScheduledAction'];
        }
        if (isset($map['ScheduledTaskName'])) {
            $model->scheduledTaskName = $map['ScheduledTaskName'];
        }
        if (isset($map['TaskEnabled'])) {
            $model->taskEnabled = $map['TaskEnabled'];
        }

        return $model;
    }
}
