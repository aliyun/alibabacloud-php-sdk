<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScheduledTasksResponseBody;

use AlibabaCloud\Tea\Model;

class scheduledTasks extends Model
{
    /**
     * @description The description of the scheduled task.
     *
     * @example Test scheduled task.
     *
     * @var string
     */
    public $description;

    /**
     * @description The expected number of instances in the scaling group. If you set `Scaling Method` to `Configure Number of Instances in Scaling Group`, you can specify this parameter.
     *
     * @example 10
     *
     * @var int
     */
    public $desiredCapacity;

    /**
     * @description The time window during which the scheduled task can be retried. Unit: seconds. Valid values: 0 to 21600.
     *
     * @example 600
     *
     * @var int
     */
    public $launchExpirationTime;

    /**
     * @description The point in time at which the scheduled task is triggered.
     *
     * @example 2014-08-18T10:52Z
     *
     * @var string
     */
    public $launchTime;

    /**
     * @description The maximum number of instances that must be contained in the scaling group. If you set `Scaling Method` to `Configure Number of Instances in Scaling Group`, you can specify this parameter.
     *
     * @example 10
     *
     * @var int
     */
    public $maxValue;

    /**
     * @description The minimum number of instances that must be contained in the scaling group. If you set `Scaling Method` to `Configure Number of Instances in Scaling Group`, you can specify this parameter.
     *
     * @example 0
     *
     * @var int
     */
    public $minValue;

    /**
     * @description The end time of the recurrence of the scheduled task.
     *
     * @example 2014-08-20T16:55Z
     *
     * @var string
     */
    public $recurrenceEndTime;

    /**
     * @description The recurring interval of the scheduled task.
     *
     * @example Daily
     *
     * @var string
     */
    public $recurrenceType;

    /**
     * @description The frequency of recurrence of the scheduled task.
     *
     * @example 1
     *
     * @var string
     */
    public $recurrenceValue;

    /**
     * @description The ID of the scaling group to which the scheduled task belongs.
     *
     * @example asg-bp1bo5tca4m56nap****
     *
     * @var string
     */
    public $scalingGroupId;

    /**
     * @description The scaling rule of the scheduled task. A value is returned for this parameter only after you specify ScheduledActions.
     *
     * @example ari:acs:ess:cn-hangzhou:1406926474****:scalingrule/asr-bp1id5rhu8edp7kd****
     *
     * @var string
     */
    public $scheduledAction;

    /**
     * @description The ID of the scheduled task.
     *
     * @example edRtShc57WGXdt8TlPbr****
     *
     * @var string
     */
    public $scheduledTaskId;

    /**
     * @description The name of the scheduled task.
     *
     * @example scheduled****
     *
     * @var string
     */
    public $scheduledTaskName;

    /**
     * @description Indicates whether the scheduled task is enabled.
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
        'recurrenceEndTime'    => 'RecurrenceEndTime',
        'recurrenceType'       => 'RecurrenceType',
        'recurrenceValue'      => 'RecurrenceValue',
        'scalingGroupId'       => 'ScalingGroupId',
        'scheduledAction'      => 'ScheduledAction',
        'scheduledTaskId'      => 'ScheduledTaskId',
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
        if (null !== $this->recurrenceEndTime) {
            $res['RecurrenceEndTime'] = $this->recurrenceEndTime;
        }
        if (null !== $this->recurrenceType) {
            $res['RecurrenceType'] = $this->recurrenceType;
        }
        if (null !== $this->recurrenceValue) {
            $res['RecurrenceValue'] = $this->recurrenceValue;
        }
        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
        }
        if (null !== $this->scheduledAction) {
            $res['ScheduledAction'] = $this->scheduledAction;
        }
        if (null !== $this->scheduledTaskId) {
            $res['ScheduledTaskId'] = $this->scheduledTaskId;
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
     * @return scheduledTasks
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
        if (isset($map['RecurrenceEndTime'])) {
            $model->recurrenceEndTime = $map['RecurrenceEndTime'];
        }
        if (isset($map['RecurrenceType'])) {
            $model->recurrenceType = $map['RecurrenceType'];
        }
        if (isset($map['RecurrenceValue'])) {
            $model->recurrenceValue = $map['RecurrenceValue'];
        }
        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }
        if (isset($map['ScheduledAction'])) {
            $model->scheduledAction = $map['ScheduledAction'];
        }
        if (isset($map['ScheduledTaskId'])) {
            $model->scheduledTaskId = $map['ScheduledTaskId'];
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
